<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Seat;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Str;

use App\Mail\TicketBooked;
use App\Mail\TicketPaid;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // $validated = $request->validate([
        //     'seat_id' => ['required'],

        // ]);
        // dd($request->seat_ids->count);
        // dd($request->seat_ids);
        // dd($request);
        $user = Auth::guard('user')->user(); // Access the authenticated user
        $unconfirmedBookings = Booking::where('user_id', $user->id)
            ->where('status', "0")
            ->count();

        if ($unconfirmedBookings >= 5) {
            return view('user.profilen', [
                'seats' => Seat::all(),
                'error' => 'لا يمكنك حجز أكثر من 5 تذاكر حتى تقوم بدفع ثمن التذاكر السابقة'
            ]);
        }
        $new_seats_array=explode(",",$request->seat_ids[0]);
        $ref_no="uid".$request->user_id.Str::random(10);
        $pre_bookings=Booking::where('level','0')->pluck('seat_id');
        foreach($pre_bookings as $book){
            if(in_array($book,$new_seats_array)){
                session()->flash('Fail', 'Booking Failed, Seat is Reserved');

                return view('seat.index');
            }
        }
        // dd($pre_bookings);
    //    dd(count($new_seats_array));
       for($i=0;$i<count($new_seats_array);$i++){
        Booking::create([
            'seat_id' => $new_seats_array[$i],
            'user_id' => $request->user_id,
            'status' => "0",
            'level' => "0",
            'cost' => "100",
            'ref_no' => $ref_no,
        ]);
        $seat = Seat::findOrFail($new_seats_array[$i]);
        $seat->update(['status_g'=>"1"]);



       }
       session()->flash('Add', 'Booking Successfully');
       $bookings=Booking::where('ref_no',$ref_no)->get();
       Mail::to(Auth::guard('user')->user()->email)->queue(new TicketBooked($ref_no));
       return view('booking.details',compact('bookings'));
        // return redirect()->route('booking_details',compact('bookings'));

        // $seats[]=$request->seat_ids[0];
        // dd(Str::length($request->seat_ids[0]));
        // dd(Arr::last($request->seat_ids[0]));





    }
    public function store_balcony(Request $request)
    {
        //
        // $validated = $request->validate([
        //     'seat_id' => ['required'],

        // ]);
        // dd($request->seat_ids->count);
        // dd($request->seat_ids);
        // dd($request);
        $user = Auth::guard('user')->user(); // Access the authenticated user
        $unconfirmedBookings = Booking::where('user_id', $user->id)
            ->where('status', "0")
            ->count();

        if ($unconfirmedBookings >= 5) {
            return view('user.profilen', [
                'seats' => Seat::all(),
                'error' => 'لا يمكنك حجز أكثر من 5 تذاكر حتى تقوم بدفع ثمن التذاكر السابقة'
            ]);
        }
        $new_seats_array=explode(",",$request->seat_ids[0]);
        $ref_no="uid".$request->user_id.Str::random(10);
        $pre_bookings=Booking::where('level','1')->pluck('seat_id');
        foreach($pre_bookings as $book){
            if(in_array($book,$new_seats_array)){
                session()->flash('Fail', 'Booking Failed, Seat is Reserved');

                return view('seat.bal_index');
            }
        }
        // dd($pre_bookings);
    //    dd(count($new_seats_array));
       for($i=0;$i<count($new_seats_array);$i++){
        Booking::create([
            'seat_id' => $new_seats_array[$i],
            'user_id' => $request->user_id,
            'status' => "0",
            'level' => "1",
            'cost' => "75",
            'ref_no' => $ref_no,



        ]);
        $seat = Seat::findOrFail($new_seats_array[$i]);
        $seat->update(['status_f'=>"1"]);



       }
       session()->flash('Add', 'Booking Successfully');
       $bookings=Booking::where('ref_no',$ref_no)->get();
       Mail::to(Auth::guard('user')->user()->email)->queue(new TicketBooked($ref_no));
       return view('booking.details',compact('bookings'));
        // return redirect()->route('booking_details',compact('bookings'));

        // $seats[]=$request->seat_ids[0];
        // dd(Str::length($request->seat_ids[0]));
        // dd(Arr::last($request->seat_ids[0]));





    }
    public function booking_details(){
    //     $qrCodes = [];
    // $qrCodes['simple'] =
    // QrCode::size(150)->generate('https://minhazulmin.github.io/');

         $bookings=Booking::where('ref_no',"uid1qQMw3C2KCT")->get();

        return view('booking.details',compact('bookings'));
    }

    public function booking_detail($ref_no){
        //     $qrCodes = [];
        // $qrCodes['simple'] =
        // QrCode::size(150)->generate('https://minhazulmin.github.io/');

             $bookings=Booking::where('ref_no',$ref_no)->get();

            return view('booking.details',compact('bookings'));
    }
    public function admin_booking_detail($ref_no){
        //     $qrCodes = [];
        // $qrCodes['simple'] =
        // QrCode::size(150)->generate('https://minhazulmin.github.io/');

             $bookings=Booking::where('ref_no',$ref_no)->get();

            return view('admin.bookings.details',compact('bookings'));
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function booking_destroy(Request $request)
    {
        //
        $ref_no = $request->booking_ref_no;
        $level=Booking::where('ref_no', $ref_no)->value('level');
        $seats=Booking::where('ref_no', $ref_no)->pluck('seat_id');
        foreach($seats as $seat){
            if($level==1){
                Seat::where('id',$seat)->update(['status_f'=>"0"]);
            }else{
                Seat::where('id',$seat)->update(['status_g'=>"0"]);
            }
        }

        // dd($seats);
        Booking::where('ref_no', $ref_no)->delete();
        session()->flash('delete', 'Booking Deleted Successfully');
        return view('admin.bookings.index');
        // dd($ref_no);
    }

    public function booking_confirm(Request $request)
    {
        //
        $ref_no = $request->booking_ref_no;
        $user_id= Booking::where('ref_no', $ref_no)->value('user_id');
        $email=User::where('id',$user_id)->value('email');
       Booking::where('ref_no', $ref_no)->update(['status'=>"1",'activated_at'=>now()]);
       Mail::to($email)->queue(new TicketPaid($ref_no));
    //    dd($bookings);
    //    $bookings->update(['status'=>"1"]);
        session()->flash('confirm', 'Booking Confirmed Successfully');
        return view('admin.bookings.index');
        // dd($ref_no);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Bseat;
use App\Models\Seat;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Monolog\Level;

class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
        $seats = Seat::all();
        return view('seat.index', compact('seats'));
    }

    public function index_balcony()
    {
        //
        $seats = Seat::all();
        return view('seat.bal_index', compact('seats'));
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

    public function seat_detail($ref_no)
    {
        //     $qrCodes = [];
        // $qrCodes['simple'] =
        // QrCode::size(150)->generate('https://minhazulmin.github.io/');

        $bookings = Booking::where('ref_no', $ref_no)->pluck('seat_id')->toArray();
        // dd($bookings);
        $level = Booking::where('ref_no', $ref_no)->value('level');
        // dd($level);
        if ($level == 0) {

            return view('seat.show', compact('bookings'));
        } else {
            return view('seat.bal_show', compact('bookings'));
        }
    }
    public function seat_layout($booikng_id)
    {
        //     $qrCodes = [];
        // $qrCodes['simple'] =
        // QrCode::size(150)->generate('https://minhazulmin.github.io/');

        $bookings = Booking::where('id', $booikng_id)->pluck('seat_id')->toArray();
        // dd($bookings);
        $level = Booking::where('id', $booikng_id)->value('level');
        // dd($level);
        if ($level == 0) {

            return view('seat.show', compact('bookings'));
        } else {
            return view('seat.bal_show', compact('bookings'));
        }
    }
}

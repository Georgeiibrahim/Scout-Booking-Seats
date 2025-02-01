<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;




class UserController extends Controller
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
    public function checklogin(Request $request)
    {
        $validated = $request->validate([
            
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'min:8'],
         
        ]);
   
        $check  =   $request->all();
        if (Auth::guard('user')->attempt(['email'=>$check['email'],'password'=>$check['password']])) {
            // return redirect()->route('dashboard');
            session()->flash('Login', 'User Login Successfully');
            return redirect()->intended();
        }else{
            return redirect('/user/login')->with('error', 'Your Credintal is invalid');
        }
    }
    public function checklogin_admin(Request $request)
    {
        $validated = $request->validate([
            
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'min:8'],
         
        ]);
   
        $check  =   $request->all();
        
        // $roles = $user->getRoleNames();
        
        // dd($user);
        // $user=User::where('email', $check['email'])->first();
        // dd($user->hasRole('admin'));
        $user=User::where('email', $check['email'])->first();
        if($user->hasRole('admin')){
        if (Auth::guard('admin')->attempt(['email'=>$check['email'],'password'=>$check['password']])) {
           
            // return redirect()->route('dashboard');
                session()->flash('Login', 'Admin Login Successfully');
                return redirect('/admin');
            }
           
        }else{
            return redirect('/admin/login')->with('error', 'Your Credintal is invalid');
        }
        
    }
    public function logout()
    {
        //
        Auth::guard('user')->logout();
        // session()->flash('Logout', 'Logout Successfully, Bye!');
        return redirect('/')->with('Logout', 'Logout Successfully, Bye!');
    }

    public function admin_logout()
    {
        //
        Auth::guard('admin')->logout();
        // session()->flash('Logout', 'Logout Successfully, Bye!');
        return redirect('/admin/login')->with('Logout', 'Logout Successfully, Bye!');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'mobile' => ['required', 'unique:users'],
        ]);
        // dd($request);
        if($request->hasFile('image')){

            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            User::create([
                'name' => $request->name,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'image' => $image_name,
                'password' => Hash::make($request->password),
            
            ]);
            $userId=User::latest()->first()->id;
            // $mageName = $request->lesson_image->getClientOriginalName();
            $request->image->move(public_path('user_img/' . $userId), $image_name);
            // Auth::login($userId);
            Auth::guard('user')->attempt($request->only('email', 'password'));
            session()->flash('Login', 'User Login Successfully');
            return redirect('/');
        }

        
        
        User::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'image' => null,
            'password' => Hash::make($request->password),
        ]);
    // $mageName = $request->lesson_image->getClientOriginalName();
    // $request->image->move(public_path('Attachments/parents/' . $request->first_name.'/'.$request->last_name), $image_name);
    Auth::guard('user')->attempt($request->only('email', 'password'));
            session()->flash('Login', 'User Login Successfully');
            return redirect('/');
    }

    public function store_admin(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'mobile' => ['required', 'unique:users'],
        ]);
        // dd($request);
        if($request->hasFile('image')){

            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            User::create([
                'name' => $request->name,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'image' => $image_name,
                'password' => Hash::make($request->password),
            
            ]);
            $userId=User::latest()->first()->id;
            // $mageName = $request->lesson_image->getClientOriginalName();
            $request->image->move(public_path('user_img/' . $userId), $image_name);
            // Auth::login($userId);
            Auth::guard('admin')->attempt($request->only('email', 'password'));
            session()->flash('Login', 'User Login Successfully');
            //admin role
            $role = Role::create(['guard_name' => 'admin', 'name' => 'admin']);
            $permission = Permission::create(['guard_name' => 'admin','name' => 'edit content']);
            $permission->assignRole($role);

            $user=User::latest()->first();
            $user->assignRole('admin');
            //
            return redirect('/');
        }

        
        
        User::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'image' => null,
            'password' => Hash::make($request->password),
        ]);
    // $mageName = $request->lesson_image->getClientOriginalName();
    // $request->image->move(public_path('Attachments/parents/' . $request->first_name.'/'.$request->last_name), $image_name);
    Auth::guard('admin')->attempt($request->only('email', 'password'));
    $role = Role::create(['guard_name' => 'admin', 'name' => 'admin']);
    $permission = Permission::create(['guard_name' => 'admin','name' => 'edit content']);
    $permission->assignRole($role);

    $user=User::latest()->first();
    $user->assignRole('admin');
            session()->flash('Login', 'User Login Successfully');
            return redirect('/admin');
    }
    /**
     * Display the specified resource.
     */
    public function show( $user_id)
    {
        //
        return view('admin.show');

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

    public function seat_layout($user_id,$level){
        //     $qrCodes = [];
        // $qrCodes['simple'] = 
        // QrCode::size(150)->generate('https://minhazulmin.github.io/');
        
             $bookings=Booking::where('user_id',$user_id)->where('level',$level)->pluck('seat_id')->toArray();
            // dd($bookings);
            // $level=Booking::where('user_id',$user_id)->value('level');
            // dd($level);
            if($level==0){

                return view('admin.show_seat',compact('bookings'));
            }else{
                return view('admin.bal_show',compact('bookings'));
            }
}

public function booking_detail($user_id,$status){
    //     $qrCodes = [];
    // $qrCodes['simple'] = 
    // QrCode::size(150)->generate('https://minhazulmin.github.io/');
    
         $bookings=Booking::where('user_id',$user_id)->where('status',$status)->get();
        
        return view('admin.ticket_details',compact('bookings'));
}
}

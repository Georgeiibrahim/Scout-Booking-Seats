<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Scout Party</title>
    <link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
        <!-- Customized Bootstrap Stylesheet -->
        {{-- <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{URL::asset('seat/style.css')}}" />
  </head>
  <body>
    <main id="main">
      {{-- <h1>Seat Booking</h1> --}}
      @if (session()->has('Login'))
      <script>
        window.onload = function() {
          notif({
            msg: "Login Successfully",
            type: "success"
          })
        }
      </script>
      @endif
      @if ($errors->any())
<div class="alert alert-danger">
	<ul class="list-group">
		@foreach ($errors->all() as $error)
    {{-- <h3></h3> --}}
			<h3 class="list-group-item list-group-item-danger">{{ $error }}</h3>
		@endforeach
	</ul>
</div>
@endif

     
      <section id="seat-selection">
        <h2><strong>{{DB::table('users')->where('id',request('user_id'))->value('name')}}</strong> Seats Layout</h2>
        <div class="container">
          <div id="seating">
            
            {{-- {{$id=DB::table('seats')->where('x_factor','1')->where('y_factor','1')->value('id')}} --}}
         
          <form id="seat_form" method="POST" action="{{route('store_booking')}}" enctype="multipart/form-data">
            {{-- <input type="hidden" value="{{Auth::guard('user')->user()->id}}" name="user_id"/> --}}
          @csrf
          

          
          {{-- {{$status= DB::table('bookings')->where('ref_no',request()->ref_no)->value('status') }} --}}
          {{-- {{DB::table('bookings')->where('ref_no',$x)->pluck('status')->to_Array()}} --}}
          @for($x=1;$x<=18;$x++) 
          <div class="row">
          
              @for($y=1;$y<=39;$y++)
{{--                 
                {{
                $seat = DB::table('seats')->where('x_factor',$x)->where('y_factor',$y)->all();
               echo $seat['x_factor'];
               // $seat=$seats->where('x_factor',$x)->where('y_factor',$y)->get();
               // $seat= \App\Models\Seat::all()->where('x_factor',$x)->where('y_factor',$y)->all();
                }} --}}
            
                {{-- @if(DB::table('seats')->where('x_factor',$x)->where('y_factor',$y)->value('id')<=558) --}}
                @if($y<=31)
                <div class="seat  @if(in_array(DB::table('seats')->where('x_factor',$x)->where('y_factor',$y)->value('id'),$bookings))
                                    @if(DB::table('bookings')->where('level','0')->where('seat_id',DB::table('seats')->where('x_factor',$x)->where('y_factor',$y)->value('id'))->value('status'))
                                    {{"selected"}}
                                    @else
                                    {{"occupied"}}
                                    @endif
                                    @endif 
                                    @if(DB::table('seats')->where('x_factor',$x)->where('y_factor',$y)->value('status_g')==2)
                  {{"hidden"}}@endif 
                                    "> 
                
                 
                  
                  {{-- {{$status=$occupied_1['status']}} --}}
                    <input type="hidden"    name="id"  value="{{DB::table('seats')->where('x_factor',$x)->where('y_factor',$y)->value('id');}}"/>
                    {{-- <input type="checkbox" class="hidden" name="id" value="{{DB::table('seats')->where('x_factor',$x)->where('y_factor',$y)->value('id');}}" style="display:none;"> --}}
                   <div></div></div>
                    
                   @endif
                @endfor
            </div>
        
            @endfor
            {{-- <label id="seats_id"></label> --}}
            <input type="hidden" id="seat_ids"  name="seat_ids[]"/>
            
          </form>
        
       
                    {{-- <input type="hidden"  name="y_factor" value="{{ $seat.('y_factor')}}"/>
                    
            {{-- <div class="row">
                
              <div class="seat"><div></div></div>
              <div class="seat occupied"><div></div></div>
              <div class="seat occupied"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat occupied"><div></div></div>
              <div class="seat occupied"><div></div></div>
            </div>
            <div class="row">
              <div class="seat"><div></div></div>
              <div class="seat occupied"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat occupied"><div></div></div>
              <div class="seat occupied"><div></div></div>
              <div class="seat occupied"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
            </div>
            <div class="row">
              <div class="seat"><div></div></div>
              <div class="seat occupied"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat occupied"><div></div></div>
              <div class="seat occupied"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
            </div>
            <div class="row">
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat occupied"><div></div></div>
              <div class="seat occupied"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
            </div>
            <div class="row">
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat occupied"><div></div></div>
              <div class="seat occupied"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat occupied"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat occupied"><div></div></div>
            </div>
            <div class="row">
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat occupied"><div></div></div>
              <div class="seat occupied"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat occupied"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat"><div></div></div>
              <div class="seat occupied"><div></div></div>
            </div> --}}
          </div>
          <div id="seating-key">
            {{-- <div class="seat"><div></div></div>
            Vacant --}}
            <div class="seat selected"><div></div></div>
            Paid
            <div class="seat occupied"><div></div></div>
            Occupied
          </div>
         
          {{-- <div id="screen"></div> --}}
        </div>
      </section>
    </main>
      <!--Internal  Notify js -->
<script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>
<script src="{{URL::asset('assets/plugins/notify/js/notifit-custom.js')}}"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="{{URL::asset('seat/script.js')}}"></script>
    
  </body>
</html>

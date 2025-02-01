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
      <h1>Seat Booking</h1>

      @if (session()->has('Login'))
      <script>
        window.onload = function() {
          notif({
            msg: "Booking Failed, Seat is Reserved",
            type: "success"
          })
        }
      </script>
      @endif
      @if (session()->has('Fail'))
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


<h3 id="error"  class="list-group-item list-group-item-danger">You Should Select Available Seats!</h3>
      <section id="movie-selection">
        <!-- <h2>Choose your movie</h2> -->
        
        <select id="movie-select">
          <option id="gone-with-the-wind" value="19"  selected
            >Scout Party 2024</option
          >
          {{-- <option id="avatar" value="18">Avatar (2009) - £18.00</option>
          <option id="titanic" value="17">Titanic (1997) - £17.00</option>
          <option id="star-wars" value="16">Star Wars (1977) - £16.00</option>
          <option id="endgame" value="15"
            >Avengers: Endgame (2019) - £15.00</option
          >
          <option id="the-sound-of-music" value="14"
            >The Sound of Music (1965) - £14.00</option
          >
          <option id="et" value="13"
            >E.T. the Extra-Terrestrial (1982) - £13.00</option
          >
          <option id="the-ten-commandments" value="12"
            >The Ten Commandments (1956) - £12.00</option
          >
          <option id="doctor-zhivago" value="11" disabled
            >Doctor Zhivago (1965) - £11.00 (SOLD OUT)</option
          >
          <option id="the-force-awakens" value="10"
            >Star Wars: The Force Awakens (2015) - £10.00</option
          > --}}
        </select>
      </section>
      <section id="seat-selection">
        <h2>Choose your seats</h2>
        <div class="container">
          <div id="seating">
            
            {{-- {{$id=DB::table('seats')->where('x_factor','1')->where('y_factor','1')->value('id')}} --}}
         
          <form id="seat_form" method="POST" action="{{route('store_booking')}}" enctype="multipart/form-data">
            <input type="hidden" value="{{Auth::guard('user')->user()->id}}" name="user_id"/>
          @csrf
          
            @for($x=0;$x<=10;$x++) 
            <div class="row">
            
                @for($y=0;$y<=20;$y++)
{{--                 
                {{
                $seat = DB::table('seats')->where('x_factor',$x)->where('y_factor',$y)->all();
               echo $seat['x_factor'];
               // $seat=$seats->where('x_factor',$x)->where('y_factor',$y)->get();
               // $seat= \App\Models\Seat::all()->where('x_factor',$x)->where('y_factor',$y)->all();
                }} --}}
            
                
           
                <div class="seat  @if(DB::table('seats')->where('x_factor',$x)->where('y_factor',$y)->value('status'))
                  {{"occupied"}}@endif "> 
                
                 
                  
                  {{-- {{$status=$occupied_1['status']}} --}}
                    <input type="hidden"    name="id"  value="{{DB::table('seats')->where('x_factor',$x)->where('y_factor',$y)->value('id');}}"/>
                    {{-- <input type="checkbox" class="hidden" name="id" value="{{DB::table('seats')->where('x_factor',$x)->where('y_factor',$y)->value('id');}}" style="display:none;"> --}}
                   <div></div></div>
                    
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
            <div class="seat"><div></div></div>
            Vacant
            <div class="seat selected"><div></div></div>
            Selected
            <div class="seat occupied"><div></div></div>
            Occupied
          </div>
          <section id="total">
            <p class="text">
              Number of seats selected: <span id="seat-count">0</span
              ><br />Total: £<span id="movie-total">0</span>.00
            </p>
            {{-- <button onclick="updateCount()">Click me</button> --}}
            
            <button form="seat_form"   id="btn" class="btn" type="submit">Confirm Booking</button>
          </section>
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>حفلة حياة كشاف</title>
    <link href="{{ URL::asset('assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::asset('seat/style.css') }}" />



</head>

<body>
    <main id="main">
        <br>
        <div class="logout-container">
            <form method="POST" action="{{ route('user_logout') }}">
                @csrf
                <button type="submit" class="btn btn-danger btn-icon"><i class="fas fa-power-off"></i> تسجيل
                    الخروج</button>
            </form>
        </div>
        {{-- <div class="pr-1 mb-3 mb-xl-0">

            <a href="{{route('dashboard')}}" class="dropdown-item">Dashboard</a>
        </div> --}}
        <h1>المسرح</h1>

        <div class="screen"></div>
        <h1>احجز تذكرتك</h1>

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



        <section id="movie-selection">
            <!-- <h2>Choose your movie</h2> -->
            <div class="balcony_container">

                <a class="balcony_btn "href="{{ route('book_balcony') }}"> حجز الشرفة</a>
            </div>
            <h2>اختر مقاعدك</h2>
        </section>
        <section id="seat-selection">

            <div class="container">
                <div id="seating">

                    {{-- {{$id=DB::table('seats')->where('x_factor','1')->where('y_factor','1')->value('id')}} --}}

                    <form id="seat_form" method="POST" action="{{ route('store_booking') }}"
                        enctype="multipart/form-data">
                        <input type="hidden" value="{{ Auth::guard('user')->user()->id }}" name="user_id" />
                        @csrf

                        @for ($x = 1; $x <= 18; $x++)
                            <div class="row">

                                @for ($y = 1; $y <= 39; $y++)
                                    {{--
                {{
                $seat = DB::table('seats')->where('x_factor',$x)->where('y_factor',$y)->all();
               echo $seat['x_factor'];
               // $seat=$seats->where('x_factor',$x)->where('y_factor',$y)->get();
               // $seat= \App\Models\Seat::all()->where('x_factor',$x)->where('y_factor',$y)->all();
                }} --}}
                                    @if ($y <= 31)
                                        {{-- @if (DB::table('seats')->where('x_factor', $x)->where('y_factor', $y)->value('id') <= 558) --}}
                                        {{-- @if (DB::table('seats')->where('x_factor', $x)->value('y_factor') <= 30) --}}
                                        <div
    class="seat  @if (DB::table('seats')->where('x_factor', $x)->where('y_factor', $y)->value('status_g')) {{ 'occupied' }} @endif
                  @if (DB::table('seats')->where('x_factor', $x)->where('y_factor', $y)->value('status_g') == 2) {{ 'hidden' }} @endif">
                  {{-- @if (DB::table('seats')->where('x_factor', $x)->where('y_factor', $y)->value('status_g') == 3) paid @endif"> --}}



                                            {{-- {{$status=$occupied_1['status']}} --}}
                                            <input type="hidden" name="id"
                                                value="{{ DB::table('seats')->where('x_factor', $x)->where('y_factor', $y)->value('id') }}" />
                                            {{-- <input type="checkbox" class="hidden" name="id" value="{{DB::table('seats')->where('x_factor',$x)->where('y_factor',$y)->value('id');}}" style="display:none;"> --}}
                                            <div></div>
                                        </div>
                                        {{-- @endif --}}
                                        {{-- @endif --}}
                                    @endif
                                @endfor
                            </div>
                        @endfor
                        <input type="hidden" id="seat_ids" name="seat_ids[]" />

                    </form>

                </div>
                <div id="seating-key">
                    <div class="seat">
                        <div></div>
                    </div>
                    فارغ
                    <div class="seat selected">
                        <div></div>
                    </div>
                    اختير
                    <div class="seat occupied">
                        <div></div>
                    </div>
                    حجز
                </div>
                <section id="total">
                    <p class="text">
                        عدد المقاعد المختارة: <span id="seat-count">0</span><br />المجموع: <span
                            id="movie-total">0</span>.00
                    </p>
                    {{-- <button onclick="updateCount()">Click me</button> --}}
                    <h3 id="error" class="list-group-item list-group-item-danger">ينبغي عليك اختيار المقاعد المتاحة
                    </h3>
                    <button form="seat_form" id="btn" class="btn" type="submit">تأكيد الحجز</button>

                </section>
                {{-- <div id="screen"></div> --}}
            </div>
        </section>
    </main>
    <!--Internal  Notify js -->
    <script src="{{ URL::asset('assets/plugins/notify/js/notifIt.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/notify/js/notifit-custom.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="{{ URL::asset('seat/script.js') }}"></script>

</body>

</html>

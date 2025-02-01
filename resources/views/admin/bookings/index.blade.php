@extends('layouts.master')
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Bookings</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ All Bookings</span>
						</div>
					</div>
					{{-- <div class="d-flex my-xl-auto right-content">
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
						</div>
						<div class="mb-3 mb-xl-0">
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-primary">14 Aug 2019</button>
								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
									<a class="dropdown-item" href="#">2015</a>
									<a class="dropdown-item" href="#">2016</a>
									<a class="dropdown-item" href="#">2017</a>
									<a class="dropdown-item" href="#">2018</a>
								</div>
							</div>
						</div>
					</div> --}}
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
@if (session()->has('delete'))
        <script>
            window.onload = function() {
                notif({
                    msg: "Booking Deleted Successfully",
                    type: "error"
                })
            }
        </script>
        @endif
		@if (session()->has('confirm'))
        <script>
            window.onload = function() {
                notif({
                    msg: "Booking Confirmed Successfully",
                    type: "success"
                })
            }
        </script>
        @endif
				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">All Bookings Table</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								{{-- <p class="tx-12 tx-gray-500 mb-2">Example of Valex Simple Table. <a href="">Learn more</a></p> --}}
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table  table-hover table-striped  text-md-nowrap" id="example1">
										<thead >
											<tr>
												{{-- <th class="wd-15p border-bottom-0">#</th> --}}
												<th class="wd-15p border-bottom-0">Booking ID</th>
												<th class="wd-15p border-bottom-0">Ref No.</th>
												<th class="wd-15p border-bottom-0">Level</th>
												<th class="wd-25p border-bottom-0">User</th>
												<th class="wd-15p border-bottom-0">Status</th>
												<th class="wd-15p border-bottom-0">Booked At</th>
												<th class="wd-15p border-bottom-0">Paid At</th>
												<th class="wd-15p border-bottom-0">No. of Ticket</th>
												<th class="wd-15p border-bottom-0">Cost</th>
												<th class="wd-15p border-bottom-0">Action</th>
												{{-- <th class="wd-10p border-bottom-0">Action</th> --}}
											</tr>
										</thead>
										<tbody>
											{{!$count=1}}
											
												{{!$bookings=DB::table('bookings')->get()->unique('ref_no')}}
												
												
											@foreach ($bookings as $booking)
											<tr>
												
												{{-- <td>{{$count}}</td> --}}
												<td>{{$booking->id}}</td>
												<td><a target="_blank" href="/admin/book/details/{{$booking->ref_no}}">{{$booking->ref_no}}</a></td>
												@if($booking->level)
												<td>Balcony</td>
												@else
												<td>Main Hall</td>	
												@endif
												<td>{{DB::table('users')->where('id',$booking->user_id)->value('name')}}</td>
												@if($booking->status)
												<td>Paid</td>
												@elseif($booking->status==='0')
												<td>Pending</td>
												@else
												<td>Available</td>
												@endif
												<td>{{$booking->created_at}}</td>
												<td>{{$booking->activated_at}}</td>
												

												<td>{{count(DB::table('bookings')->where('ref_no',$booking->ref_no)->get())}}</td>
												@if($booking->level)
												<td>{{count(DB::table('bookings')->where('ref_no',$booking->ref_no)->get())*50}}EGP</td>
												@else
												<td>{{count(DB::table('bookings')->where('ref_no',$booking->ref_no)->get())*100}}EGP</td>
												@endif
												
												@if($booking->status)
												<td>
												<a href="#" data-booking_ref_no="{{ $booking->ref_no }}"
													data-toggle="modal" data-target="#delete_booking" class="btn btn-danger "><i class="fas fa-trash"></i></a>
												</td>
												@elseif($booking->status==='0')

												<td>
													<a href="#" data-booking_ref_no="{{ $booking->ref_no }}"
														data-toggle="modal" data-target="#confirm_booking" class="btn btn-success "><i class="fas fa-check-square"></i></a>
												</td>
												@endif
											</tr>
											{{!$count=$count+1}}
											
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					


				</div>
				<!-- /row -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->

		<div class="modal fade" id="delete_booking" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		 aria-hidden="true">
		 <div class="modal-dialog" role="document">
			 <div class="modal-content">
				 <div class="modal-header">
					 <h5 class="modal-title" id="exampleModalLabel">Delete Booking</h5>
					 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						 <span aria-hidden="true">&times;</span>
					 </button>
					 <form action="{{ route('booking_destroy') }}" method="post">
						 {{ method_field('delete') }}
						 {{ csrf_field() }}
				 </div>
				 <div class="modal-body">
					 Are You Sure to Delete?
					 <input type="hidden" name="booking_ref_no" id="booking_ref_no" value="">
				 </div>
				 <div class="modal-footer">
					 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					 <button type="submit" class="btn btn-danger">Confirm</button>
				 </div>
				 </form>
			 </div>
		 </div>
	 </div>


	 <div class="modal fade" id="confirm_booking" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		 aria-hidden="true">
		 <div class="modal-dialog" role="document">
			 <div class="modal-content">
				 <div class="modal-header">
					 <h5 class="modal-title" id="exampleModalLabel">Confirm Booking</h5>
					 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						 <span aria-hidden="true">&times;</span>
					 </button>
					 <form action="{{ route('booking_confirm') }}" method="post">
						 {{ method_field('post') }}
						 {{ csrf_field() }}
				 </div>
				 <div class="modal-body">
					 Are You Sure to Confirm?
					 <input type="hidden" name="booking_ref_no" id="booking_ref_no" value="">
				 </div>
				 <div class="modal-footer">
					 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					 <button type="submit" class="btn btn-success">Confirm</button>
				 </div>
				 </form>
			 </div>
		 </div>
	 </div>
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>

     <!--Internal  Notify js -->
	 <script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>
	 <script src="{{URL::asset('assets/plugins/notify/js/notifit-custom.js')}}"></script>

<script>
	$('#delete_booking').on('show.bs.modal', function(event) {
		var button = $(event.relatedTarget)
		var carwash_id = button.data('booking_ref_no')
		var modal = $(this)
		modal.find('.modal-body #booking_ref_no').val(carwash_id);
	})
</script>
<script>
	$('#confirm_booking').on('show.bs.modal', function(event) {
		var button = $(event.relatedTarget)
		var carwash_id = button.data('booking_ref_no')
		var modal = $(this)
		modal.find('.modal-body #booking_ref_no').val(carwash_id);
	})
</script>
@endsection
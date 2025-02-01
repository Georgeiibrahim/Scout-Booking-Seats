@extends('layouts.master')
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<a href="/admin/users" ><h4 class="content-title mb-0 my-auto">Users</h4></a><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Show User</span>
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
				<!-- row opened -->
				<div class="my-5 row row-sm">
					<div class="col-xl-12">
						<div class="card">
							
							<div class="card-body">
								<div class="table-responsive">
									<table class="table  text-md-nowrap" id="example1">
									
										<tbody>
											
												{{!$user=DB::table('users')->where('id',request()->user_id)->get()}}
											
											
											<tr>
												<td>Username</td>
												<td>{{$user[0]->name}}</td>
												
												
											</tr>
											<tr>
												<td>Email</td>
												
												<td>{{$user[0]->email}}</td>
												
												
											</tr>
											<tr>
												<td>Mobile</td>
												<td>{{$user[0]->mobile}}</td>
												
												
											</tr>
											<tr>
												<td>User Image</td>
												
													@if ($user[0]->image==null)
													<td><img src="{{URL::asset('assets/img/faces/user.png')}}" style="width: 80px">
													</td>
													@else
													<td><img src="../../user_img/{{$user[0]->id}}/{{$user[0]->image}}" style="width: 80px">
														</td>
													@endif
												
												
												
											</tr>
											<tr>
												
												<td>{{count(DB::table('bookings')->where('user_id',$user[0]->id)->where('level','0')->get())}} Main Hall Seats</td>
												<td>
													<a  target="_blank" href=" {{ url('admin/show/seat') }}/{{ $user[0]->id }}/0" >Show Seats Layout</a>
													
												</td>
												
											</tr>
											<tr>
												
												<td>{{count(DB::table('bookings')->where('user_id',$user[0]->id)->where('level','1')->get())}} Balcony Hall Seats</td>
												<td>
													<a  target="_blank" href=" {{ url('admin/show/seat') }}/{{ $user[0]->id }}/1" >Show Seats Layout</a>
													
												</td>
												
											</tr>
											<tr>
												
												<td>{{count(DB::table('bookings')->where('user_id',$user[0]->id)->where('status','0')->get())}} Pending Tickets</td>
												<td>
													<a target="_blank" href=" {{ url('admin/show/ticket') }}/{{ $user[0]->id }}/0" >Show Pending Tickets</a>
													
												</td>
												
											</tr>
											<tr>
												
												
												<td>{{count(DB::table('bookings')->where('user_id',$user[0]->id)->where('status','1')->get())}} Paid Tickets</td>
												<td>
													<a target="_blank" href=" {{ url('admin/show/ticket') }}/{{ $user[0]->id }}/1" >Show Paid Tickets</a>
													
												</td>
											</tr>
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
@endsection
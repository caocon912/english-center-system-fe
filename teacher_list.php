@extends('layouts.app')
@section ('content')
<!-- BEGIN PAGE HEADER-->
<h3 class="page-title">
	Teacher management <small></small>
</h3>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="index.html">Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">class management</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">List</a>
		</li>
	</ul>
	<div class="page-toolbar">
		<div class="btn-group pull-right">
			<button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
				Actions <i class="fa fa-angle-down"></i>
			</button>
			<ul class="dropdown-menu pull-right" role="menu">
				<li>
					<a href="#">Action</a>
				</li>
				<li>
					<a href="#">Another action</a>
				</li>
				<li>
					<a href="#">Something else here</a>
				</li>
				<li class="divider">
				</li>
				<li>
					<a href="#">Separated link</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-edit"></i>Teacher list
				</div>
				<div class="tools">
					<a href="javascript:;" class="collapse">
					</a>
					<!-- <a href="#portlet-config" data-toggle="modal" class="config">
								</a> -->
					<a href="javascript:;" class="reload">
					</a>
					<!-- <a href="javascript:;" class="remove">
								</a> -->
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-reponsive">
					<div class="table-toolbar">
						<div class="row">
							<div class="col-md-6">
								<div class="btn-group">
									<button id="teacher_add_new" class="btn green teacher_add_new" data-toggle="modal" data-target="#addTeacherModal">
										Add New <i class="fa fa-plus"></i>
									</button>
								</div>
								<div class="btn-group">
									<button id="" class="btn red" data-toggle="modal" data-target="#deleteConfirmationModal">
										Delete Ticked <i class="fa fa-times"></i>
									</button>
								</div>
							</div>

							<div class="col-md-6">
								<div class="btn-group pull-right">
									<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
									</button>
									<ul class="dropdown-menu pull-right">
										<li>
											<a href="javascript:;">
												Print </a>
										</li>
										<li>
											<a href="javascript:;">
												Save as PDF </a>
										</li>
										<li>
											<a href="javascript:;">
												Export to Excel </a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<table class="table table-striped table-hover table-bordered" id="teacher-list-table">
						<thead>
							<tr>
								<th data-editable="true">
									<input type="checkbox">
								</th>
								<th data-editable="true">
									Full name
								</th>
								<th data-editable="true">
									DOB
								</th>
								<th>
									Contact Info
								</th>
								<th>
									User
								</th>
								<th data-editable="true">
									Pwd
								</th>
								<th data-editable="true">
									Assign class
								</th>
								<th>
									Tính lương
								</th>
								<th style="text-align: center;width: 10%;">
									Action
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><input type="checkbox"></td>
								<td>
									Nguyễn Thị Lan
								</td>
								<td>
									23/10/1993
								</td>
								<td>
									<ul>
										<li>0338490112</li>
										<li>lannt099@gmail.com</li>
										<li><a href="https:://facebook.com">lan nguyen thi </a></li>
									</ul>	
								</td>
								
								<td>
									lannt
								</td>
								<td>
									********
								</td>

								<td>
									<ul>
										<li>
											TOIEC 500+
											<br>
											Wednesday . 7AM - 9AM
											<br>
											Thursday . 11AM - 13PM20

										</li>
									</ul>
								</td>
								<td>
									Thanh toán gần nhất: 29/06/2021
									<br>
									<a href="#SalaryOfTeacherModal" data-toggle="modal">Bảng thông tin lương</a>
								</td>
								<td>
									<ul class="list-group">
										<li class="list-group-item list-group-item-success">
											<a class="btn btn-icon-only green" data-toggle="modal" data-target="#assignClassForTeacherModal">
												<i class="fa fa-group"></i>
											</a>
										</li>
										<li class="list-group-item list-group-item-warning">
											<a href="#" class="btn btn-icon-only blue edit">
												<i class="fa fa-edit"></i>
											</a>
										</li>
										<li class="list-group-item list-group-item-danger">
											<a href="#" class="btn btn-icon-only red delete" data-toggle="modal">
												<i class="fa fa-times"></i>
											</a>
										</li>
									</ul>



								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- END EXAMPLE TABLE PORTLET-->
	</div>
</div>
<!-- END PAGE CONTENT -->
</div>
</div>
<!-- END CONTENT -->
@endsection
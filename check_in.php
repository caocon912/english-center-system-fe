@extends('layouts.app')
@section ('content')
<h3 class="page-title">
			Class Assignment <small></small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Class Assignment</a>
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
								<i class="fa fa-edit"></i>LOP HOC DANG DIEN RA
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
							<div class="table-toolbar">
								<div class="row">
									<div class="col-md-6">
										<!-- <div class="btn-group">
											<button id="sample_editable_1_new" class="btn green" data-toggle="modal" data-target="#addClassModal" type="button">
											Add New <i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="btn-group">
											<button id="" class="btn red" data-toggle="modal" data-target="#deleteConfirmationModal">
											Delete Ticked <i class="fa fa-times"></i>
											</button>
										</div> -->
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
							<table class="table table-striped table-hover table-bordered" id="class-list-table">
							<thead>
							<tr>
								<th data-editable="true">
									<input type="checkbox" id="check_all_class" onclick="checkAll(this);">
                                </th>
                                <th data-editable="true">
                                    Date
                               </th>
								<th data-editable="true">
									 Class name
								</th>
								<th data-editable="true">
									Time
							   </th>
								<th>
									 Student List
								</th>
								<th style="width: 25%;" data-editable="true">
									Notes
                               </th>
                               
							</tr>
							</thead>
							<tbody>
								<tr>
									<td data-editable="true">
                                        <input type="checkbox" id="check_all_class" onclick="checkAll(this);">
                                    </td>
                                    <td data-editable="true">
                                        20/03/2021
                                   </td>
                                    <td data-editable="true">
                                         TOEIC 500+
                                    </td>
                                    <td data-editable="true">
                                        14PM-17PM
                                   </td>
                                    <td>
                                         <a href="#" data-target="#studentListCheckInModal" data-toggle="modal">Student list</a>
                                    </td>
                                    <td style="width: 25%;" data-editable="true">
                                        TA: Võ Thị Hoàng Linh
                                   </td> 									
                                </tr>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>CLASS LIST
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
							<div class="table-toolbar">
								<div class="row">
									<div class="col-md-6">
										<!-- <div class="btn-group">
											<button id="sample_editable_1_new" class="btn green" data-toggle="modal" data-target="#addClassModal" type="button">
											Add New <i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="btn-group">
											<button id="" class="btn red" data-toggle="modal" data-target="#deleteConfirmationModal">
											Delete Ticked <i class="fa fa-times"></i>
											</button>
										</div> -->
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
							<table class="table table-striped table-hover table-bordered" id="class-list-table">
							<thead>
							<tr>
								<th data-editable="true">
									<input type="checkbox" id="check_all_class" onclick="checkAll(this);">
                                </th>
                                <th data-editable="true">
                                    Date
                               </th>
								<th data-editable="true">
									 Class name
								</th>
								<th data-editable="true">
									Time
							   </th>
								<th>
									 Student List
								</th>
								<th style="width: 25%;" data-editable="true">
									Notes
                               </th>
                               
							</tr>
							</thead>
							<tbody>
								<tr>
									<td data-editable="true">
                                        <input type="checkbox" id="check_all_class" onclick="checkAll(this);">
                                    </td>
                                    <td data-editable="true">
                                        20/03/2021
                                   </td>
                                    <td data-editable="true">
                                         TOEIC 500+
                                    </td>
                                    <td data-editable="true">
                                        14PM-17PM
                                   </td>
                                    <td>
                                         <a href="#" data-target="#studentListModal" data-toggle="modal">Student list</a>
                                    </td>
                                    <td style="width: 25%;" data-editable="true">
                                        TA: Võ Thị Hoàng Linh
                                   </td>
                                      									
                                </tr>
                                <tr>
									<td data-editable="true">
                                        <input type="checkbox" id="check_all_class" onclick="checkAll(this);">
                                    </td>
                                    <td data-editable="true">
                                        20/03/2021
                                   </td>
                                    <td data-editable="true">
                                         TOEIC 500+
                                    </td>
                                    <td data-editable="true">
                                        20PM-22PM
                                   </td>
                                    <td>
                                        <a href="#" data-target="#studentListModal" data-toggle="modal">Student list</a>
                                    </td>
                                    <td style="width: 25%;" data-editable="true">
                                        TA: Võ  Linh Dan
                                   </td>
                                      									
                                </tr>
                                <tr>
									<td data-editable="true">
                                        <input type="checkbox" id="check_all_class" onclick="checkAll(this);">
                                    </td>
                                    <td data-editable="true">
                                        20/03/2021
                                   </td>
                                    <td data-editable="true">
                                         TOEIC 500+
                                    </td>
                                    <td data-editable="true">
                                        14PM-17PM
                                   </td>
                                    <td>
                                         <a href="#" data-target="#studentListModal" data-toggle="modal">Student list</a>
                                    </td>
                                    <td style="width: 25%;" data-editable="true">
                                        TA: Võ Thị Hoàng Linh
                                   </td>   									
								</tr>
							</tbody>
							</table>
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
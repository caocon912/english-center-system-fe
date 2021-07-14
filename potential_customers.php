@extends('layouts.app')
@section ('content')
<!-- BEGIN PAGE HEADER-->
<h3 class="page-title">
    Student management <small></small>
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="index.html">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">potential Customers management</a>
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
                    <i class="fa fa-edit"></i>POTENTIAL STUDENT LIST
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
                            <div class="btn-group">
                                <button id="sample_editable_1_new" class="btn green" data-toggle="modal" data-target="#addPotentialStudentModal">
                                    Add New <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <div class="btn-group">
                                <button id="" class="btn red" data-toggle="modal" data-target="#deleteConfirmationModal">
                                    Delete Ticked <i class="fa fa-times"></i>
                                </button>
                            </div>
                            <div class="btn-group">
                                <button id="" class="btn yellow" data-toggle="modal" data-target="#UpgradeOfficalClassModal">
                                    Upgrade
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
                <table class="table table-striped table-hover table-bordered" id="class-list-table">
                    <thead>
                        <tr>
                            <th data-editable="true">
                                <input type="checkbox">
                            </th>

                            <th data-editable="true">
                                Contact page day
                            </th>

                            <th data-editable="true">
                                Full name
                            </th>
                            <th data-editable="true">
                                DOB
                            </th>
                            <th>
                                Info Contact
                            </th>

                            <th>
                                Test day
                            </th>

                            <th>
                                Contacted
                            </th>

                            <th>
                                Time expected
                            </th>

                            <th>
                                Class level enrolled
                            </th>

                            <th>
                                Notes
                            </th>

                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>

                            <td data-editable="true">
                                21/02/2021
                            </td>

                            <td data-editable="true">
                                Ho Thi Lan Huong
                            </td>
                            <td data-editable="true">
                                17/10/1998
                            </td>

                            <td>
                                <ul>
                                    <li>Student </li>
                                    <li>233 hoang hoa tham , p10,q3</li>
                                    <li>0338490118</li>
                                    <li><a href="#" data-target="#infoContactModal" data-toggle="modal">Detail Contact</a></li>
                                </ul>
                            </td>

                            <td>
                                20/02/2021
                                <ul>
                                    <li>speaking: 6</li>
                                    <li>writing: 6</li>
                                    <li>listening: 7</li>
                                </ul>
                            </td>

                            <td>
                                x
                            </td>

                            <td>
                                Monday
                                Thursday
                            </td>

                            <td>
                                None
                            </td>

                            <td>
                                Da lien he voi phu huynh
                                co the hoc tu thang 6/2021
                            </td>

                            <td>
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-success">
                                        <a class="btn btn-icon-only green" data-toggle="modal" data-target="#assignClassModal">
                                            <i class="fa fa-group"></i>
                                        </a>
                                    </li>
                                    <li class="list-group-item list-group-item-warning">
                                        <a href="#" class="btn btn-icon-only yellow" data-target="#addPotentialStudentModal" data-toggle="modal">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </li>
                                    <li class="list-group-item list-group-item-danger">
                                        <a href="#" class="btn btn-icon-only red" data-toggle="modal" data-target="#deleteConfirmationModal">
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
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
<!-- END PAGE CONTENT -->
</div>
</div>
<!-- END CONTENT -->
@endsection
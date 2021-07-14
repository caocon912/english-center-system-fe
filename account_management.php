@extends('layouts.app')
@section ('content')
<!-- BEGIN PAGE HEADER-->
<h3 class="page-title">
    Account management <small></small>
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
                    <i class="fa fa-edit"></i>ACCOUNT LIST
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
                                <button id="account_add_new" class="btn green">
                                    Add New <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <div class="btn-group">
                                <button id="account_delete_checked" class="btn red" data-toggle="modal" data-target="#deleteConfirmationModal">
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
                <table class="table table-striped table-hover table-bordered" id="class_list_table">
                    <thead>
                        <tr>
                            <th data-editable="true">
                                <input type="checkbox">
                            </th>
                            <th data-editable="true">
                                Username
                            </th>
                            <th data-editable="true">
                                Password
                            </th>
                            <th data-editable="true">
                                Role
                            </th>
                            <th data-editable="true">
                                Assign to
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>
                                lannt
                            </td>
                            <td>
                                abc123
                            </td>
                            <td>
                                Teacher
                            </td>
                            <td>
                                Nguyen Thi Lan
                            </td>
                            <td>
                                <a href="#" class="edit btn btn-icon-only blue">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="#" class="delete btn btn-icon-only red">
                                    <i class="fa fa-times"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>
                                khaintm
                            </td>
                            <td>
                                abc123
                            </td>
                            <td>
                                Teacher
                            </td>
                            <td>
                                Nguyen Thi Minh Khai
                            </td>
                            <td>
                                <a href="#" class="edit btn btn-icon-only blue">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="#" class="delete btn btn-icon-only red">
                                    <i class="fa fa-times"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>
                                huehtd
                            </td>
                            <td>
                                abc123
                            </td>
                            <td>
                                Teacher assistant
                            </td>
                            <td>
                                Ho Thi Dieu Hue
                            </td>
                            <td>
                                <a href="#" class="edit btn btn-icon-only blue">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="#" class="delete btn btn-icon-only red">
                                    <i class="fa fa-times"></i>
                                </a>
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

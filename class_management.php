<?php
    include('header.php');
?>
<!-- BEGIN PAGE HEADER-->
<h3 class="page-title">
    Class management <small></small>
</h3>
<img id="scLoading" style="position:absolute; right:42%; top:250px; z-index:9999; display:none; background-color:#333; padding:2%;" src="assets/admin/images/icon_loading.gif" />
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
                            <div class="btn-group">
                                <button id="sample_editable_1_new" class="btn green" data-toggle="modal" data-target="#addClassModal" type="button">
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
                <table class="table table-striped table-hover table-bordered" id="class-list-table">
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
<div class="row">
</div>
<div class="row">
    <!-- BEGIN LABEL TABLE -->
    <div class="col-md-6">
        <!-- BEGIN BORDERED TABLE PORTLET-->
        <div class="portlet box yellow">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-coffee"></i>LABEL
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="javascript:;" class="reload">
                    </a>
                    <a href="javascript:;" class="remove">
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="btn-group">
                                <button id="add_new_label" class="btn green" type="button" data-toggle="modal" data-target="#addRangeModal">
                                    Add New <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <div class="btn-group">
                                <button id="" class="btn red" data-toggle="modal" data-target="#deleteConfirmationModal">
                                    Delete Ticked <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table">
                    <table class="table table-bordered table-hover" id="label_list_table">
                    </table>
                </div>
            </div>
        </div>
        <!-- END BORDERED TABLE PORTLET-->
    </div>
    <!-- END LABEL TABLE -->
    <!-- BEGIN RANGE TABLE -->
    <div class="col-md-6">
        <!-- BEGIN BORDERED TABLE PORTLET-->
        <div class="portlet box yellow">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-coffee"></i>LEVEL
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <!-- <a href="#portlet-config" data-toggle="modal" class="config">
                  </a> -->
                    <a href="javascript:;" class="reload">
                    </a>
                    <a href="javascript:;" class="remove">
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="btn-group">
                                <button id="range_add_new" class="btn green" type="button">
                                    Add New <i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <div class="btn-group">
                                <button id="" class="btn red" data-toggle="modal" data-target="#deleteConfirmationModal">
                                    Delete Ticked <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table">
                    <table class="table table-bordered table-hover" id="range_list_table">
                        <thead>
                            <tr>
                                <th>
                                    <input type="checkbox">
                                </th>
                                <th>
                                    Level desc
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    4.5-5.5
                                </td>
                                <td>
                                    <!-- <a class="edit" href="javascript:;">
                              Edit </a> -->
                                    <a href="#" class="edit btn btn-icon-only blue">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="delete btn btn-icon-only red">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    5.5-6.5
                                </td>
                                <td>
                                    <!-- <a class="edit" href="javascript:;">
                              Edit </a> -->
                                    <a href="#" class="edit btn btn-icon-only blue">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="delete btn btn-icon-only red">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    pre-ielts(3.0-4.0)
                                </td>
                                <td>
                                    <!-- <a class="edit" href="javascript:;">
                              Edit </a> -->
                                    <a href="#" class="edit btn btn-icon-only blue" >
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
        </div>
        <!-- END BORDERED TABLE PORTLET-->
    </div>
    <!-- END RANGE TABLE -->
</div>
<!-- END PAGE CONTENT -->
</div>
</div>
<!-- END CONTENT -->
<script src="assets/admin/javascript/class.js" type="text/javascript"></script>
<?php include('footer.php');?>
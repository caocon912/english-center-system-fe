<!-- BEGIN ADD CLASS MODAL -->
<div class="modal fade bs-modal-lg" id="addClassModal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Class Info</h4>
            </div>
            <div class="modal-body form">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-edit"></i>Class :
                        </div>
                        <div class="tools">
                            <!-- <a href="javascript:;" class="collapse">
                            </a> -->
                            <a href="javascript:;" class="reload">
                            </a>
                            <!-- <a href="javascript:;" class="remove">
                            </a> -->
                        </div>
                    </div>
                    <div class="portlet-body">
                        <!-- BEGIN FORM-->
                        <form action="#" id="form_sample_2" class="form-horizontal">
                            <div class="form-body">
                                <div class="alert alert-danger display-hide">
                                    <button class="close" data-close="alert"></button>
                                    You have some form errors. Please check below.
                                </div>
                                <div class="alert alert-success display-hide">
                                    <button class="close" data-close="alert"></button>
                                    Your form validation is successful!
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Class Name <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-7">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="class_name" value="" id="class_name"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Class Code <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-7">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="class_code" value="" disabled id="class_name"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Label <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-7">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <select class="form-control" name="label_of_class" id="label_of_class">
                                                <option value="">Label</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Level <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-7">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <select class="form-control" name="levels_of_class" id="levels_of_class">
                                                <option value="">Level</option>
                                                <option value="Category 1">4.5-5.5</option>
                                                <option value="Category 2">5.5-6.5</option>
                                                <option value="Category 3">Toiec 700+</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Slots <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-7">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="number" min="0" class="form-control" name="slots" id="slots" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Number of sessions <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-2">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="number" min="0" class="form-control" name="number_of_session" id="number_of_session" value="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
                                            <input type="text" class="form-control" name="date_start_class" id="date_start_class" placeholder="Day course start ">
                                            <span class="input-group-addon">
                                                to </span>
                                            <input type="text" class="form-control" name="date_end_class" id="date_end_class" placeholder="Day course end ">
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3"></label>
                                    <div class="col-md-2">
                                     <a data-toggle="modal" href="#studiesDatesModal">Lịch các buổi học</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Session <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <select class="form-control" name="select">
                                                <option value="">Day...</option>
                                                <option value="Category 1">Monday (7:00-9:00)</option>
                                                <option value="Category 3">Wednesday(16:00-18:00)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Teacher <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-4">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <select class="form-control" name="select">
                                                <option value="">Nguyễn Thị Lan</option>
                                                <option value="Category 1">Hồ Thị Quyền</option>
                                                <option value="Category 2">Đặng Quốc Tuấn</option>
                                                <option value="Category 3">Nguyễn Văn Cường</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-icon right">
                                            <a href="#" class="btn green">
                                                Assign
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Assign list <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-7">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <!-- <input type="text" class="form-control" name="digits"/> -->
                                            <table class="table table-striped table-hover table-bordered" id="student-list-table">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Day
                                                        </th>
                                                        <th>
                                                            Time
                                                        </th>
                                                        <th>
                                                            Teacher
                                                        </th>
                                                        <th colspan="2">
                                                            Action
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="5">
                                                            There is no data.
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-md-3">Tuition fee <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-7">
                                        <input type="number" min="0" class="form-control" id="tuition_fee_of_class" name="tuition_fee_of_class" value="" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">Notes <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-7">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <textarea class="form-control" name="notes_of_class" id="note_of_class"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                        <div class="portlet box blue">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-edit"></i>Student list in class :
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
                                                <div class="table-responsive">
                                                    <div class="table-toolbar">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="btn-group">
                                                                    <button id="add_new_students" type="button" class="btn green" data-toggle="modal" data-target="#listPotentialStudentModal">
                                                                        Add New <i class="fa fa-plus"></i>
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
                                                    <table class="table table-bordered" id="students_in_class_list">
                                                        <thead>
                                                            <tr>
                                                                {{-- <th data-editable="true">
                                                                    <input type="checkbox">
                                                                </th> --}}

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
                                                                    Discount code
                                                                </th>

                                                                <th>
                                                                    Tuition fee
                                                                </th>

                                                                <th>
                                                                    Tuition paid
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
                                                                {{-- <td><input type="checkbox"></td> --}}

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
                                                                        <li>S: 6</li>
                                                                        <li>W: 6</li>
                                                                        <li>L: 7</li>
                                                                    </ul>
                                                                </td>

                                                                <td>
                                                                    MS01
                                                                </td>

                                                                <td>
                                                                    2,090,000
                                                                </td>

                                                                <td>
                                                                    200,000
                                                                </td>

                                                                <td>
                                                                    abc xyz
                                                                </td>

                                                                <td>
                                                                    <ul class="list-group">
                                                                        <li class="list-group-item list-group-item-success">
                                                                            <a class="btn btn-icon-only green" data-toggle="modal" data-target="#historyPaidOfStudentModal" title="Tuition fee">
                                                                                <i class="fa fa-group"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-group-item list-group-item-warning">
                                                                            <a href="#" class="btn btn-icon-only yellow" data-target="#addActiveStudentModal" data-toggle="modal" title="Edit info">
                                                                                <i class="fa fa-edit"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li class="list-group-item list-group-item-danger">
                                                                            <a href="#" class="btn btn-icon-only red" data-toggle="modal" data-target="#deleteConfirmationModal" title="Remove out class">
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
                                
                                <div class="form-group">
                                    <label class="control-label col-md-3">Status <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-7">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <select class="form-control">
                                                <option>Active</option>
                                                <option>Deactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">Submit</button>
                                    <button type="button" class="btn default">Cancel</button>
                                </div>
                            </div>
                            </div> -->
                        </form>
                        <!-- END FORM-->
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"><i class="fa fa-check"></i> Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- END ADD CLASS MODAL -->
<!-- BEGIN STUDENT LIST IN CLASS MODAL -->
<div class="modal fade" id="studentListModal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-full">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Student List in Class</h4>
            </div>
            <div class="modal-body form">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-edit"></i>Student list in class :
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
                        <div class="table-responsive">
                            <div class="table-toolbar">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="btn-group">
                                            <button id="add_student_to_class_btn" class="btn green" data-toggle="modal" data-target="#listPotentialStudentModal" type="button">
                                                Add New <i class="fa fa-plus"></i>
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
                            <table class="table table-striped table-hover table-bordered" id="students_in_class_list">
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
                                            Info Contact
                                        </th>

                                        <th>
                                            Test day
                                        </th>

                                        <th>
                                            Class level enrolled
                                        </th>

                                        <th>
                                            Discount code
                                        </th>

                                        <th>
                                            Tuition paid
                                        </th>

                                        <th>
                                            Grade
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
                                                <li>S: 6</li>
                                                <li>W: 6</li>
                                                <li>L: 7</li>
                                            </ul>
                                        </td>

                                        <td>
                                            None
                                        </td>

                                        <td>
                                            MS01
                                        </td>

                                        <td>
                                            2,090,000
                                        </td>

                                        <td>
                                            <a href="#" data-target="#historyAttendanceOfStudentModal" data-toggle="modal">attendance</a>
                                        </td>

                                        <td>
                                            Da lien he voi phu huynh
                                        </td>

                                        <td>
                                            <ul class="list-group">
                                                <li class="list-group-item list-group-item-success">
                                                    <a class="btn btn-icon-only green" data-toggle="modal" data-target="#historyPaidOfStudentModal" title="Tuition fee">
                                                        <i class="fa fa-group"></i>
                                                    </a>
                                                </li>
                                                <li class="list-group-item list-group-item-warning">
                                                    <a href="#" class="btn btn-icon-only yellow" data-target="#addActiveStudentModal" data-toggle="modal" title="Edit info">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                </li>
                                                <li class="list-group-item list-group-item-danger">
                                                    <a href="#" class="btn btn-icon-only red" data-toggle="modal" data-target="#deleteConfirmationModal" title="Remove out class">
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
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"><i class="fa fa-check"></i> Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- END STUDENT LIST IN CLASS MODAL -->
<!-- BEGIN INFO CONTACT STUDENT MODAL -->
<div id="infoContactModal" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Info student contact:</h4>
            </div>
            <div class="modal-body form">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-edit"></i> Infomation student contact: Đỗ Thị Huệ
                        </div>
                    </div>
                    <div class="portlet-body">
                        <!-- BEGIN FORM-->
                        <form action="#" id="form_sample_5" class="form-horizontal">
                            <div class="form-body">
                                <div class="alert alert-danger display-hide">
                                    <button class="close" data-close="alert"></button>
                                    You have some form errors. Please check below.
                                </div>
                                <div class="alert alert-success display-hide">
                                    <button class="close" data-close="alert"></button>
                                    Your form validation is successful!
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Phone number <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="phone_number" value="0338764563" disabled />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Email
                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="email" value="dothihue099@gmail.com" disabled />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Facebook
                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="facebook_url" disabled />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <a href="google.com" class="btn blue">Truy cập</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Parent name
                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="parent-name" value="Nguyễn Thị Lan" disabled />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Parent's Role
                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="parent_role" value="Mẹ" disabled />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Parent phone number
                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="parent_phone_number" value="0907315160" disabled />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Parent email
                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="email" class="form-control" name="parent_email" value="" disabled />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Parent FB
                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="parent_facebook" disabled />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <a href="google.com" class="btn blue">Truy cập</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3"> Address
                                </label>
                                <div class="col-md-6">
                                    <div class="input-icon right">
                                        <i class="fa"></i>
                                        <textarea type="text" class="form-control" name="student_address" disabled></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">Submit</button>
                                    <button type="button" class="btn default">Cancel</button>
                                </div>
                            </div>
                            </div> -->
                        </form>
                        <!-- END FORM-->
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn green"><i class="fa fa-edit"></i> Save changes</button> -->
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- END INFO CONTACT STUDENT MODAL -->


<!-- BEGIN LIST POTENTIAL STUDENT MODAL  -->
<div id="listPotentialStudentModal" class="modal fade bs-modal-lg" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Add Student to class</h4>
            </div>
            <div class="modal-body form">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-edit"></i>STUDENT LIST
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
                                        <button id="add_student_to_class" class="btn green">
                                            Add to list <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered" id="potential_customers_table">
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
                                            <li>S: 6</li>
                                            <li>W: 6</li>
                                            <li>L: 7</li>
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

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- END LIST POTENTIAL STUDENT MODAL -->
<!-- BEGIN ADD RANGE -->
<div class="modal fade bs-modal-lg" id="addRangeModal" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Class Info</h4>
            </div>
            <div class="modal-body form">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-edit"></i>Range :
                        </div>
                        <div class="tools">
                            <!-- <a href="javascript:;" class="collapse">
                            </a> -->
                            <a href="javascript:;" class="reload">
                            </a>
                            <!-- <a href="javascript:;" class="remove">
                            </a> -->
                        </div>
                    </div>
                    <div class="portlet-body">
                        <!-- BEGIN FORM-->
                        <form action="#" id="form_sample_2" class="form-horizontal">
                            <div class="form-body">
                                <div class="alert alert-danger display-hide">
                                    <button class="close" data-close="alert"></button>
                                    You have some form errors. Please check below.
                                </div>
                                <div class="alert alert-success display-hide">
                                    <button class="close" data-close="alert"></button>
                                    Your form validation is successful!
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Label name <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-7">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="class_name" value="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">Day <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-3">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <select class="form-control" name="select">
                                                <option value="">Day...</option>
                                                <option value="Category 1">Monday</option>
                                                <option value="Category 3">Tuesday</option>
                                                <option value="Category 3">Wednesday</option>
                                                <option value="Category 3">Thursday</option>
                                                <option value="Category 3">Friday</option>
                                                <option value="Category 3">Saturday</option>
                                                <option value="Category 3">Sunday</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="from" placeholder="Time start">
                                            <span class="input-group-addon">
                                                to </span>
                                            <input type="text" class="form-control" name="to" placeholder="Time end">
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3"> <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-7">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <button id="add_student_to_class" class="btn green">
                                                Add to list <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">Session list <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-7">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <!-- <input type="text" class="form-control" name="digits"/> -->
                                            <table class="table table-striped table-hover table-bordered" id="student-list-table">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Day
                                                        </th>
                                                        <th>
                                                            Time
                                                        </th>
                                                        <th colspan="2">
                                                            Action
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="4">
                                                            There is no data.
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">Submit</button>
                                    <button type="button" class="btn default">Cancel</button>
                                </div>
                            </div>
                            </div> -->
                        </form>
                        <!-- END FORM-->
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"><i class="fa fa-check"></i> Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- END ADD RANGE -->
<!-- BEGIN STUDENT LIST IN CLASS MODAL -->
<div class="modal fade" id="studentListCheckInModal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-full">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Student List in Class</h4>
            </div>
            <div class="modal-body form">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-edit"></i>Student list in class :
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
                                        <button id="add_student_to_class_btn" class="btn green" data-toggle="modal" data-target="#listPotentialStudentModal" type="button">
                                            Add New <i class="fa fa-plus"></i>
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
                        <table class="table table-striped table-hover table-bordered" id="students_in_class_list">
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
                                        Info Contact
                                    </th>

                                    <th>
                                        Tuition paid
                                    </th>

                                    <th>
                                        Discount code
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
                                        MS01
                                    </td>

                                    <td>
                                        2,090,000
                                    </td>

                                    <td>
                                        <a href="#" data-target="#historyAttendaceOfStudentModal" data-toggle="modal">attendance</a>
                                    </td>

                                    <td>
                                        Da lien he voi phu huynh
                                    </td>

                                    <td>
                                        <ul class="list-group">
                                            <li class="list-group-item list-group-item-success">
                                                <a class="btn btn-icon-only green" data-toggle="modal" data-target="#historyPaidOfStudentModal" title="Tuition fee">
                                                    <i class="fa fa-group"></i>
                                                </a>
                                            </li>
                                            <li class="list-group-item list-group-item-warning">
                                                <a href="#" class="btn btn-icon-only yellow" data-target="#addActiveStudentModal" data-toggle="modal" title="Edit info">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </li>
                                            <li class="list-group-item list-group-item-danger">
                                                <a href="#" class="btn btn-icon-only red" data-toggle="modal" data-target="#deleteConfirmationModal" title="Remove out class">
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
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"><i class="fa fa-check"></i> Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- END STUDENT LIST IN CLASS MODAL -->
<!-- BEGIN ADD STUDENT MODAL -->
<div id="addActiveStudentModal" class="modal fade" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Student Info</h4>
            </div>
            <div class="modal-body form">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-edit"></i>Student
                        </div>
                        <div class="tools">
                            <!-- <a href="javascript:;" class="collapse">
								</a> -->
                            <a href="javascript:;" class="reload">
                            </a>
                            <!-- <a href="javascript:;" class="remove">
								</a> -->
                        </div>
                    </div>
                    <div class="portlet-body">
                        <!-- BEGIN FORM-->
                        <form action="#" id="form_sample_6" class="form-horizontal">
                            <div class="form-body">
                                <div class="alert alert-danger display-hide">
                                    <button class="close" data-close="alert"></button>
                                    You have some form errors. Please check below.
                                </div>
                                <div class="alert alert-success display-hide">
                                    <button class="close" data-close="alert"></button>
                                    Your form validation is successful!
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Contact page day
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="date" class="form-control" name="contact_date" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Full name <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="fullname" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">DOB <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="date" class="form-control" name="dob" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Occupation <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="occupation" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Phone number <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="phone_number" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Address <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="student_address" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Friend
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="friend_code" value="Do Nam Trung" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Young children <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            {{-- <input type="checkbox" class="form-control" name="is_young_children" /> --}}
                                            <select name="is_young_children" class="form-control">
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="portlet box green" id="parentContactInfo">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-edit"></i>Parent contact info
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Parent name
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="text" class="form-control" name="parent-name" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Parent's Role
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="text" class="form-control" name="parent_role" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Parent phone number
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="text" class="form-control" name="parent_phone_number" value="" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Parent email
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="email" class="form-control" name="parent_email" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Parent FB
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="text" class="form-control" name="parent_facebook" />
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <a href="google.com" class="btn blue">Truy cập</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">Expected class<span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-7">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <select class="form-control">
                                                <option>TOIEC 500+</option>
                                                <option>TOIEC 700+</option>
                                                <option>TOIEC 900+</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">Is tested? <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-7">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            {{-- <input type="checkbox" class="form-control" name="is_tested" /> --}}
                                            <select class="form-control" name="is_tested">
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                        <div class="portlet box blue">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-edit"></i>Class session :
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
                                                <!-- BEGIN FORM-->
                                                <form action="#" id="form_sample_7" class="form-horizontal">
                                                    <div class="form-body">
                                                        <div class="alert alert-danger display-hide">
                                                            <button class="close" data-close="alert"></button>
                                                            You have some form errors. Please check below.
                                                        </div>
                                                        <div class="alert alert-success display-hide">
                                                            <button class="close" data-close="alert"></button>
                                                            Your form validation is successful!
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Class Name <span class="required">
                                                                    * </span>
                                                            </label>
                                                            <div class="col-md-8">
                                                                <div class="input-icon right">
                                                                    <i class="fa"></i>
                                                                    <select class="form-control">
                                                                        <option>TOIEC 500+</option>
                                                                        <option>TOIEC 700+</option>
                                                                        <option>Advance Listening</option>
                                                                        <option>TOIEC 900+</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"> Tuition fee <span class="required">
                                                                    * </span>
                                                            </label>
                                                            <div class="col-md-8">
                                                                <div class="input-icon right">
                                                                    <i class="fa"></i>
                                                                    <input type="text" class="form-control" name="discount_code" value="" disabled />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Discount code <span class="required">
                                                                    * </span>
                                                            </label>
                                                            <div class="col-md-8">
                                                                <div class="input-icon right">
                                                                    <i class="fa"></i>
                                                                    <input type="text" class="form-control" name="discount_code" value="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"> Remain fees<span class="required">
                                                                    * </span>
                                                            </label>
                                                            <div class="col-md-8">
                                                                <div class="input-icon right">
                                                                    <i class="fa"></i>
                                                                    <input type="text" class="form-control" name="remain_fee" value="" />
                                                                </div>
                                                                <a href="#" data-toggle="modal" data-target="#historyPaidOfStudentModal">History paid</a>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="form-group">
																	<label class="control-label col-md-3">Session <span class="required">
																		* </span></label>
																	<div class="col-md-8">
																		<select multiple class="form-control">
																			<option>Wednesday . 7AM - 9AM</option>
																			<option>Thursday . 11AM - 12AM</option>
																			<option>Monday . 7PM - 9PM</option>
																			<option>Saturday . 4PM - 6PM</option>
																		</select>
																	</div>
																</div> -->
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"> </label>
                                                            <div class="col-md-8">
                                                                <div class="btn-group">
                                                                    <button id="sample_editable_1_new" class="btn green" data-toggle="modal" data-target="#addTeacherModal" type="button">
                                                                        Add New <i class="fa fa-plus"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <!-- <label class="control-label col-md-3">Session list <span class="required">
                                                                    * </span>
                                                            </label> -->
                                                            <div class="col-md-8">
                                                                <div class="input-icon right">
                                                                    <i class="fa"></i>
                                                                    <!-- <input type="text" class="form-control" name="digits"/> -->
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped table-hover table-bordered" id="student-list-table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>
                                                                                        Class
                                                                                    </th>
                                                                                    <th>
                                                                                        Day
                                                                                    </th>
                                                                                    <th>
                                                                                        Time
                                                                                    </th>

                                                                                    <th>
                                                                                        Tuition fee
                                                                                    </th>

                                                                                    <th>
                                                                                        Discount code
                                                                                    </th>

                                                                                    <th>
                                                                                        Remain fee
                                                                                    </th>

                                                                                    <th>
                                                                                        Action
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        TOIEC 500+
                                                                                    </td>
                                                                                    <td>
                                                                                        Wednesday
                                                                                    </td>
                                                                                    <td>
                                                                                        7AM-9AM
                                                                                    </td>
                                                                                    <td>
                                                                                        7,000,000
                                                                                    </td>
                                                                                    <td>
                                                                                        MS01
                                                                                    </td>
                                                                                    <td>
                                                                                        6,800,000
                                                                                        <a href="#" data-toggle="modal" data-target="#historyPaidOfStudentModal">History paid</a>
                                                                                    </td>
                                                                                    <td>
                                                                                        <a href="#" class="btn btn-icon-only red">
                                                                                            <i class="fa fa-times"></i>
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        TOIEC 500+
                                                                                    </td>
                                                                                    <td>
                                                                                        Saturday
                                                                                    </td>
                                                                                    <td>
                                                                                        10AM-11AM20
                                                                                    </td>
                                                                                    <td>
                                                                                        7,000,000
                                                                                    </td>
                                                                                    <td>

                                                                                    </td>
                                                                                    <td>
                                                                                        7,000,000
                                                                                        <a href="#" data-toggle="modal" data-target="#historyPaidOfStudentModal">History paid</a>

                                                                                    </td>
                                                                                    <td>
                                                                                        <a href="#" class="btn btn-icon-only red">
                                                                                            <i class="fa fa-times"></i>
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>
                                        <!-- END EXAMPLE TABLE PORTLET-->
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">Notes <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <textarea type="text" class="form-control" name="creditcard"></textarea>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <!-- <div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">Submit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div> -->
                        </form>
                        <!-- END FORM-->
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"><i class="fa fa-check"></i> Save changes</button>
            </div>
        </div>
    </div>
</div>
</div>
<!-- END ADD STUDENT MODAL -->

<!-- BEGIN ADD POTENTIAL STUDENT MODAL -->
<div id="addPotentialStudentModal" class="modal fade" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Student Info</h4>
            </div>
            <div class="modal-body form">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-edit"></i>Student
                        </div>
                        <div class="tools">
                            <!-- <a href="javascript:;" class="collapse">
								</a> -->
                            <a href="javascript:;" class="reload">
                            </a>
                            <!-- <a href="javascript:;" class="remove">
								</a> -->
                        </div>
                    </div>
                    <div class="portlet-body">
                        <!-- BEGIN FORM-->
                        <form action="#" id="form_sample_6" class="form-horizontal">
                            <div class="form-body">
                                <div class="alert alert-danger display-hide">
                                    <button class="close" data-close="alert"></button>
                                    You have some form errors. Please check below.
                                </div>
                                <div class="alert alert-success display-hide">
                                    <button class="close" data-close="alert"></button>
                                    Your form validation is successful!
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Contact page day
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="name" value="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">Test day
                                    </label>
                                    <div class="col-md-5">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="name" value="" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="name" value="" placeholder="Time" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">Is tested? <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="checkbox" class="form-control" name="is_tested" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">Result
                                    </label>
                                    <div class="col-md-8">
                                        <table class="table table-striped table-hover table-bordered" id="test-result-table">
                                            <tr>
                                                <th>W</th>
                                                <th>S</th>
                                                <th>L</th>
                                                <th>Overall</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" name="fullname" value="" />
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="fullname" value="" />
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="fullname" value="" />
                                                </td>
                                                <td>
                                                    6.8
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">Full name <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="fullname" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">DOB <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="dob" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Occupation <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="occupation" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Phone number <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="phone_number" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Young children <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            {{-- <input type="checkbox" class="form-control" name="is_young_children" /> --}}
                                            <select name="is_young_children" class="form-control">
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Friend
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="phone_number" value="Do Nam Trung" />
                                        </div>
                                    </div>
                                </div>

                                <div class="portlet box green" id="parentContactInfo">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-edit"></i>Parent contact info
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Parent name
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="text" class="form-control" name="parent-name" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Parent's Role
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="text" class="form-control" name="parent_role" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Parent phone number
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="text" class="form-control" name="parent_phone_number" value="" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Parent email
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="email" class="form-control" name="parent_email" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Parent FB
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="text" class="form-control" name="parent_facebook" />
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <a href="google.com" class="btn blue">Truy cập</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                        <div class="portlet box blue">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-edit"></i>Time free session :
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
                                                <!-- BEGIN FORM-->
                                                <form action="#" id="form_sample_7" class="form-horizontal">
                                                    <div class="form-body">
                                                        <div class="alert alert-danger display-hide">
                                                            <button class="close" data-close="alert"></button>
                                                            You have some form errors. Please check below.
                                                        </div>
                                                        <div class="alert alert-success display-hide">
                                                            <button class="close" data-close="alert"></button>
                                                            Your form validation is successful!
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Day <span class="required">
                                                                    * </span>
                                                            </label>
                                                            <div class="col-md-8">
                                                                <div class="input-icon right">
                                                                    <i class="fa"></i>
                                                                    <select class="form-control">
                                                                        <option>Monday</option>
                                                                        <option>Tuesday</option>
                                                                        <option>Wednesday</option>
                                                                        <option>Thursday</option>
                                                                        <option>Friday</option>
                                                                        <option>Saturday</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Time <span class="required">
                                                                    * </span></label>
                                                            <div class="col-md-8">
                                                                <div class="input-icon right">
                                                                    <i class="fa"></i>
                                                                    <input type="text" class="form-control" name="parent_email" value="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"> </label>
                                                            <div class="col-md-8">
                                                                <div class="btn-group">
                                                                    <button id="sample_editable_1_new" class="btn green" data-toggle="modal" data-target="#addTeacherModal">
                                                                        Add New <i class="fa fa-plus"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Free day list <span class="required">
                                                                    * </span>
                                                            </label>
                                                            <div class="col-md-8">
                                                                <div class="input-icon right">
                                                                    <i class="fa"></i>
                                                                    <!-- <input type="text" class="form-control" name="digits"/> -->
                                                                    <table class="table table-striped table-hover table-bordered" id="student-list-table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>
                                                                                    Day
                                                                                </th>
                                                                                <th>
                                                                                    Time
                                                                                </th>
                                                                                <th>
                                                                                    Action
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    Monday
                                                                                </td>
                                                                                <td>
                                                                                    7AM-9AM
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="btn btn-icon-only red">
                                                                                        <i class="fa fa-times"></i>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    Tuesday
                                                                                </td>
                                                                                <td>
                                                                                    7AM-9AM
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="btn btn-icon-only red">
                                                                                        <i class="fa fa-times"></i>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>
                                        <!-- END EXAMPLE TABLE PORTLET-->
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">Class level enrolled <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <select class="form-control">
                                                <option>TOIEC 450+</option>
                                                <option>TOIEC 500+</option>
                                                <option>IELTS 6.5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Da lien he? <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Notes <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <textarea type="text" class="form-control" name="creditcard"></textarea>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <!-- <div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">Submit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div> -->
                        </form>
                        <!-- END FORM-->
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"><i class="fa fa-check"></i> Save changes</button>
            </div>
        </div>
    </div>
</div>
</div>
<!-- END ADD POTENTIAL STUDENT MODAL -->
<!-- BEGIN ASSGIN CLASS MODAL -->
<div class="modal fade in" id="assignClassModal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Assign class </h4>
            </div>
            <div class="modal-body">
                <div class="modal-body form">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-edit"></i>Class :
                            </div>
                            <div class="tools">
                                <!-- <a href="javascript:;" class="collapse">
									</a> -->
                                <a href="javascript:;" class="reload">
                                </a>
                                <!-- <a href="javascript:;" class="remove">
									</a> -->
                            </div>
                        </div>
                        <div class="portlet-body">
                            <!-- BEGIN FORM-->
                            <form action="#" id="form_sample_2" class="form-horizontal">
                                <div class="form-body">
                                    <div class="alert alert-danger display-hide">
                                        <button class="close" data-close="alert"></button>
                                        You have some form errors. Please check below.
                                    </div>
                                    <div class="alert alert-success display-hide">
                                        <button class="close" data-close="alert"></button>
                                        Your form validation is successful!
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3">Class Code <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="email" value="" placeholder="nhap ma lop" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3"> Ngay dong hoc phi <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-8">
                                            <input type="date" class="form-control" name="email" value="" placeholder="nhap ngay dong hoc phi" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3"> discount code <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="email" value="" placeholder="nhap ma giam gia" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3"> </label>
                                        <div class="col-md-8">
                                            <div class="btn-group">
                                                <button id="sample_editable_1_new" type="button" class="btn green" data-toggle="modal" data-target="#addTeacherModal">
                                                    Add New <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <!-- <input type="text" class="form-control" name="digits"/> -->
                                                <table class="table table-striped table-hover table-bordered" id="student-list-table">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                Class code
                                                            </th>
                                                            <th>
                                                                Ngay dong hoc phi
                                                            </th>

                                                            <th>
                                                                Tien hoc phi bat buoc
                                                            </th>
                                                            <th>
                                                                Ma giam gia
                                                            </th>
                                                            <th>
                                                                Tien phai dong
                                                            </th>
                                                            <th>
                                                                Action
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                TOIEC 500+
                                                            </td>

                                                            <td>
                                                                23/04/2021
                                                            </td>

                                                            <td>
                                                                4,000,000
                                                            </td>

                                                            <td>
                                                                MS1
                                                            </td>

                                                            <td>
                                                                3,800,000
                                                            </td>

                                                            <td>
                                                                <a href="#" class="btn btn-icon-only red">
                                                                    <i class="fa fa-times"></i>
                                                                </a>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="form-actions">
										<div class="row">
											<div class="col-md-offset-3 col-md-9">
												<button type="submit" class="btn green">Submit</button>
												<button type="button" class="btn default">Cancel</button>
											</div>
										</div>
									</div> -->
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn default" data-dismiss="modal">Close</button>
                <button type="button" class="btn blue">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
</div>
<!-- END ASSIGN CLASS MODAL -->
<!-- BEGIN ADD LEVEL 0 STUDENT MODAL -->
<div id="addLevel0StudentModal" class="modal fade" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Student Info</h4>
            </div>
            <div class="modal-body form">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-edit"></i>Student
                        </div>
                        <div class="tools">
                            <!-- <a href="javascript:;" class="collapse">
								</a> -->
                            <a href="javascript:;" class="reload">
                            </a>
                            <!-- <a href="javascript:;" class="remove">
								</a> -->
                        </div>
                    </div>
                    <div class="portlet-body">
                        <!-- BEGIN FORM-->
                        <form action="#" id="form_sample_6" class="form-horizontal">
                            <div class="form-body">
                                <div class="alert alert-danger display-hide">
                                    <button class="close" data-close="alert"></button>
                                    You have some form errors. Please check below.
                                </div>
                                <div class="alert alert-success display-hide">
                                    <button class="close" data-close="alert"></button>
                                    Your form validation is successful!
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Contact page date
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="date" class="form-control" name="name" value="" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">Test date
                                    </label>
                                    <div class="col-md-5">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="date" class="form-control" name="name" value="" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="time" class="form-control" name="name" value="" placeholder="Time" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">Full name <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="fullname" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">DOB <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="dob" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Occupation <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="occupation" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Phone number <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="phone_number" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Young children <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            {{-- <input type="checkbox" class="form-control" name="is_young_children" /> --}}
                                            <select name="is_young_children" class="form-control">
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Friend
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="phone_number" value="Do Nam Trung" />
                                        </div>
                                    </div>
                                </div>

                                <div class="portlet box green" id="parentContactInfo">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-edit"></i>Parent contact info
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Parent name
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="text" class="form-control" name="parent-name" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Parent's Role
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="text" class="form-control" name="parent_role" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Parent phone number
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="text" class="form-control" name="parent_phone_number" value="" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Parent email
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="email" class="form-control" name="parent_email" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Parent FB
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="text" class="form-control" name="parent_facebook" />
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <a href="google.com" class="btn blue">Truy cập</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                        <div class="portlet box blue">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-edit"></i>Time free session :
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
                                                <!-- BEGIN FORM-->
                                                <form action="#" id="form_sample_7" class="form-horizontal">
                                                    <div class="form-body">
                                                        <div class="alert alert-danger display-hide">
                                                            <button class="close" data-close="alert"></button>
                                                            You have some form errors. Please check below.
                                                        </div>
                                                        <div class="alert alert-success display-hide">
                                                            <button class="close" data-close="alert"></button>
                                                            Your form validation is successful!
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Day <span class="required">
                                                                    * </span>
                                                            </label>
                                                            <div class="col-md-8">
                                                                <div class="input-icon right">
                                                                    <i class="fa"></i>
                                                                    <select class="form-control">
                                                                        <option>Monday</option>
                                                                        <option>Tuesday</option>
                                                                        <option>Wednesday</option>
                                                                        <option>Thursday</option>
                                                                        <option>Friday</option>
                                                                        <option>Saturday</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Time <span class="required">
                                                                    * </span></label>
                                                            <div class="col-md-8">
                                                                <div class="input-icon right">
                                                                    <i class="fa"></i>
                                                                    <input type="text" class="form-control" name="parent_email" value="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3"> </label>
                                                            <div class="col-md-8">
                                                                <div class="btn-group">
                                                                    <button id="sample_editable_1_new" class="btn green" data-toggle="modal" data-target="#addTeacherModal">
                                                                        Add New <i class="fa fa-plus"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-3">Free day list <span class="required">
                                                                    * </span>
                                                            </label>
                                                            <div class="col-md-8">
                                                                <div class="input-icon right">
                                                                    <i class="fa"></i>
                                                                    <!-- <input type="text" class="form-control" name="digits"/> -->
                                                                    <table class="table table-striped table-hover table-bordered" id="student-list-table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>
                                                                                    Day
                                                                                </th>
                                                                                <th>
                                                                                    Time
                                                                                </th>
                                                                                <th>
                                                                                    Action
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    Monday
                                                                                </td>
                                                                                <td>
                                                                                    7AM-9AM
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="btn btn-icon-only red">
                                                                                        <i class="fa fa-times"></i>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    Tuesday
                                                                                </td>
                                                                                <td>
                                                                                    7AM-9AM
                                                                                </td>
                                                                                <td>
                                                                                    <a href="#" class="btn btn-icon-only red">
                                                                                        <i class="fa fa-times"></i>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>
                                        <!-- END EXAMPLE TABLE PORTLET-->
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">đã học ở trung tâm trc đây? <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <input type="checkbox">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Da lien he? <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Notes <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <textarea type="text" class="form-control" name="creditcard"></textarea>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <!-- <div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">Submit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div> -->
                        </form>
                        <!-- END FORM-->
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"><i class="fa fa-check"></i> Save changes</button>
            </div>
        </div>
    </div>
</div>
</div>
<!-- END ADD LEVEL 0 STUDENT MODAL -->

<!-- BEGIN UPDATE TEST RESULT MODAL -->
<div class="modal fade in" id="updateTestResultModal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Update test result</h4>
            </div>
            <div class="modal-body">
                <div class="modal-body form">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-edit"></i>Class :
                            </div>
                            <div class="tools">
                                <!-- <a href="javascript:;" class="collapse">
									</a> -->
                                <a href="javascript:;" class="reload">
                                </a>
                                <!-- <a href="javascript:;" class="remove">
									</a> -->
                            </div>
                        </div>
                        <div class="portlet-body">
                            <!-- BEGIN FORM-->
                            <form action="#" id="form_sample_2" class="form-horizontal">
                                <div class="form-body">
                                    <div class="alert alert-danger display-hide">
                                        <button class="close" data-close="alert"></button>
                                        You have some form errors. Please check below.
                                    </div>
                                    <div class="alert alert-success display-hide">
                                        <button class="close" data-close="alert"></button>
                                        Your form validation is successful!
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-md-3"> Ngày thi thử <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-8">
                                            <input type="date" class="form-control" name="date" value="" placeholder="nhap ngay thi thử" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3">Result
                                        </label>
                                        <div class="col-md-8">
                                            <table class="table table-striped table-hover table-bordered" id="test-result-table">
                                                <tr>
                                                    <th>W</th>
                                                    <th>S</th>
                                                    <th>L</th>
                                                    <th>Overall</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control" name="fullname" value="" />
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="fullname" value="" />
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="fullname" value="" />
                                                    </td>
                                                    <td>
                                                        6.8
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Notes
                                        </label>
                                        <div class="col-md-8">
                                        <textarea type="text" class="form-control" name="student_address"></textarea>
                                        </div>
                                    </div>
                                    <!-- <div class="form-actions">
										<div class="row">
											<div class="col-md-offset-3 col-md-9">
												<button type="submit" class="btn green">Submit</button>
												<button type="button" class="btn default">Cancel</button>
											</div>
										</div>
									</div> -->
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn default" data-dismiss="modal">Close</button>
                <button type="button" class="btn blue">Upgrade to potential</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
</div>
<!-- END UPDATE TEST RESULT MODAL -->

<!-- BEGIN ASSGIN CLASS FOR TEACHER MODAL -->
<div class="modal fade" id="assignClassForTeacherModal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Assign class </h4>
            </div>
            <div class="modal-body">
                <div class="modal-body form">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-edit"></i>Class :
                            </div>
                            <div class="tools">
                                <!-- <a href="javascript:;" class="collapse">
									</a> -->
                                <a href="javascript:;" class="reload">
                                </a>
                                <!-- <a href="javascript:;" class="remove">
									</a> -->
                            </div>
                        </div>
                        <div class="portlet-body">
                            <!-- BEGIN FORM-->
                            <form action="#" id="form_sample_2" class="form-horizontal">
                                <div class="form-body">
                                    <div class="alert alert-danger display-hide">
                                        <button class="close" data-close="alert"></button>
                                        You have some form errors. Please check below.
                                    </div>
                                    <div class="alert alert-success display-hide">
                                        <button class="close" data-close="alert"></button>
                                        Your form validation is successful!
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3">Class Code <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-8">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <select class="form-control">
                                                    <option>2134MARB-TOIEC 500+</option>
                                                    <option>2145MARC-TOIEC 700+</option>
                                                    <option>2145FEBA- Advance Listening</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Session <span class="required">
                                                * </span></label>
                                        <div class="col-md-8">
                                            <select multiple class="form-control">
                                                <option>Wednesday . 7AM - 9AM</option>
                                                <option>Thursday . 11AM - 12AM</option>
                                                <option>Monday . 7PM - 9PM</option>
                                                <option>Saturday . 4PM - 6PM</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3"> </label>
                                        <div class="col-md-8">
                                            <div class="btn-group">
                                                <button id="sample_editable_1_new" type="button" class="btn green" data-toggle="modal" data-target="#addTeacherModal">
                                                    Add New <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Session list <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-8">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <!-- <input type="text" class="form-control" name="digits"/> -->
                                                <table class="table table-striped table-hover table-bordered" id="student-list-table">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                Class
                                                            </th>
                                                            <th>
                                                                Day
                                                            </th>
                                                            <th>
                                                                Time
                                                            </th>
                                                            <th>
                                                                Teacher
                                                            </th>
                                                            <th>
                                                                Action
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                2134MARB-TOIEC 500+
                                                            </td>
                                                            <td>
                                                                Wednesday
                                                            </td>
                                                            <td>
                                                                7AM-9AM
                                                            </td>
                                                            <td>
                                                                Nguyễn Thị Lan
                                                            </td>
                                                            <td>
                                                                <a href="#" class="btn btn-icon-only red">
                                                                    <i class="fa fa-times"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                2134MARC-TOIEC 700+
                                                            </td>
                                                            <td>
                                                                Saturday
                                                            </td>
                                                            <td>
                                                                10AM-11AM20
                                                            </td>
                                                            <td>
                                                                Nguyễn Thị Lan
                                                            </td>
                                                            <td>
                                                                <a href="#" class="btn btn-icon-only red">
                                                                    <i class="fa fa-times"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="form-actions">
										<div class="row">
											<div class="col-md-offset-3 col-md-9">
												<button type="submit" class="btn green">Submit</button>
												<button type="button" class="btn default">Cancel</button>
											</div>
										</div>
									</div> -->
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn default" data-dismiss="modal">Close</button>
                <button type="button" class="btn blue">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
</div>
<!-- END ASSIGN CLASS FOR TEACHER MODAL -->

<!-- BEGIN GRADE AND FEE OF STUDENT MODAL -->
<div class="modal fade" id="GradeAndFeeOfActiveStudentModal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Assign class </h4>
            </div>
            <div class="modal-body">
                <div class="modal-body form">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-edit"></i>Class :
                            </div>
                            <div class="tools">
                                <!-- <a href="javascript:;" class="collapse">
									</a> -->
                                <a href="javascript:;" class="reload">
                                </a>
                                <!-- <a href="javascript:;" class="remove">
									</a> -->
                            </div>
                        </div>
                        <div class="portlet-body">
                            <!-- BEGIN FORM-->
                            <form action="#" id="form_sample_2" class="form-horizontal">
                                <div class="form-body">
                                    <div class="alert alert-danger display-hide">
                                        <button class="close" data-close="alert"></button>
                                        You have some form errors. Please check below.
                                    </div>
                                    <div class="alert alert-success display-hide">
                                        <button class="close" data-close="alert"></button>
                                        Your form validation is successful!
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3">Class Code <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-8">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <select class="form-control" disabled>
                                                    <option>2134MARB-TOIEC 500+</option>
                                                    <option>2145MARC-TOIEC 700+</option>
                                                    <option>2145FEBA- Advance Listening</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3"> Ngay dong hoc phi <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-8">
                                            <input type="date" class="form-control" name="email" value="" placeholder="nhap ngay dong hoc phi" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3"> discount code <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="email" value="" placeholder="nhap ma giam gia" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3"> Remain fees<span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-8">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="text" class="form-control" name="remain_fee" value="" />
                                            </div>
                                            <a href="#" data-toggle="modal" data-target="#historyPaidOfStudentModal">History paid</a>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <div class="col-md-8">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <button id="add_attendance_btn" class="btn green" data-toggle="modal" data-target="#listPotentialStudentModal" type="button">
                                                    Add New <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <!-- <input type="text" class="form-control" name="digits"/> -->
                                                <table class="table table-striped table-hover table-bordered" id="attendance_student_table">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                Day
                                                            </th>
                                                            <th>
                                                                Time
                                                            </th>
                                                            <th>
                                                                Teacher
                                                            </th>
                                                            <th>
                                                                Absent
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
                                                            <td>
                                                                19/10/2021
                                                            </td>
                                                            <td>
                                                                7AM-9AM
                                                            </td>
                                                            <td>
                                                                Nguyễn Thị Lan
                                                            </td>
                                                            <td>
                                                                x
                                                            </td>
                                                            <td>
                                                                Dau bung
                                                            </td>
                                                            <td>
                                                                <a href="#" class="btn edit-attendance btn-icon-only blue ">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                                <a href="#" class="btn delete-attendance btn-icon-only red ">
                                                                    <i class="fa fa-times"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                29/10/2021
                                                            </td>
                                                            <td>
                                                                7AM-9AM
                                                            </td>
                                                            <td>
                                                                Nguyễn Thị Lan
                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                <a href="#" class="btn btn-icon-only blue edit-attendance">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                                <a href="#" class="btn btn-icon-only red delete-attendance">
                                                                    <i class="fa fa-times"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="form-actions">
										<div class="row">
											<div class="col-md-offset-3 col-md-9">
												<button type="submit" class="btn green">Submit</button>
												<button type="button" class="btn default">Cancel</button>
											</div>
										</div>
									</div> -->
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn default" data-dismiss="modal">Close</button>
                <button type="button" class="btn blue">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
</div>
<!-- END GRADE AND FEE OF STUDENT MODAL -->


<!-- BEGIN attendance IN MODAL -->
<div class="modal fade" id="historyAttendanceOfStudentModal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">History attendance of student</h4>
            </div>
            <div class="modal-body form">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-edit"></i>History attendance of student :
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
                                        <button id="add_paid_transaction" class="btn green add_paid_transaction" type="button">
                                            Add New <i class="fa fa-plus"></i>
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
                        <table class="table table-striped table-hover table-bordered" id="attendance_student_table">
                            <thead>
                                <tr>
                                    <th>
                                        Day
                                    </th>
                                    <th>
                                        Time
                                    </th>
                                    <th>
                                        Teacher
                                    </th>
                                    <th>
                                        Absent
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
                                    <td>
                                        19/10/2021
                                    </td>
                                    <td>
                                        7AM-9AM
                                    </td>
                                    <td>
                                        Nguyễn Thị Lan
                                    </td>
                                    <td>
                                        x
                                    </td>
                                    <td>
                                        Dau bung
                                    </td>
                                    <td>
                                        <a href="#" class="btn edit-attendance btn-icon-only blue ">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn delete-attendance btn-icon-only red ">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        29/10/2021
                                    </td>
                                    <td>
                                        7AM-9AM
                                    </td>
                                    <td>
                                        Nguyễn Thị Lan
                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-icon-only blue edit-attendance">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon-only red delete-attendance">
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
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"><i class="fa fa-check"></i> Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- END attendance IN MODAL -->
<!-- BEGIN HISTORY PAID ACTIVE STUDENT MODAL -->
<div class="modal fade" id="historyPaidOfStudentModal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">History paid of student</h4>
            </div>
            <div class="modal-body form">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-edit"></i>History paid of student :
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
                                        <button id="add_paid_transaction" class="btn green add_paid_transaction" type="button">
                                            Add New <i class="fa fa-plus"></i>
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
                        <table class="table table-striped table-hover table-bordered" id="history_paid_transaction_list">
                            <thead>
                                <tr>
                                    <th data-editable="true">
                                        Date
                                    </th>

                                    <th data-editable="true">
                                        Money paid
                                    </th>

                                    <th>
                                        Remain paid
                                    </th>
                                    
                                    <th>
                                        Collected by    
                                    </th>
                                    
                                    <th>
                                        Note
                                    </th>
                                    <th style="width:18%">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td data-editable="true">
                                        19/10/2019
                                    </td>
                                    <td data-editable="true">
                                        200,000
                                    </td>

                                    <td>
                                        1,900,000
                                    </td>

                                    <td>
                                        admin
                                    </td>

                                    <td>
                                        Đóng đúng hạn
                                    </td>

                                    <td>
                                        <a href="#" class="btn edit-paid btn-icon-only yellow" title="Edit">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn delete-paid btn-icon-only red" title="Delete">
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
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"><i class="fa fa-check"></i> Save</button>
            </div>
        </div>
    </div>
</div>

<!-- END HISTORY PAID ACTIVE STUDENT MODAL -->

<!-- BEGIN UPGRADE POTENTIAL CLAS -->
<div class="modal fade in" id="UpgradePotentialClassModal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Update test result</h4>
            </div>
            <div class="modal-body">
                <div class="modal-body form">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-edit"></i>Upgrade potential :
                            </div>
                            <div class="tools">
                                <!-- <a href="javascript:;" class="collapse">
									</a> -->
                                <a href="javascript:;" class="reload">
                                </a>
                                <!-- <a href="javascript:;" class="remove">
									</a> -->
                            </div>
                        </div>
                        <div class="portlet-body">
                            <!-- BEGIN FORM-->
                            <form action="#" id="form_sample_2" class="form-horizontal">
                                <div class="form-body">
                                    <div class="alert alert-danger display-hide">
                                        <button class="close" data-close="alert"></button>
                                        You have some form errors. Please check below.
                                    </div>
                                    <div class="alert alert-success display-hide">
                                        <button class="close" data-close="alert"></button>
                                        Your form validation is successful!
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3"> Họ tên <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="date" value="" placeholder="Trần Thị Huệ" disabled />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3"> Ngày thi thử <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-8">
                                            <input type="date" class="form-control" name="date" value="" placeholder="nhap ngay thi thử" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3">Result
                                        </label>
                                        <div class="col-md-8">
                                            <table class="table table-striped table-hover table-bordered" id="test-result-table">
                                                <tr>
                                                    <th>W</th>
                                                    <th>S</th>
                                                    <th>L</th>
                                                    <th>Overall</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control" name="fullname" value="" />
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="fullname" value="" />
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="fullname" value="" />
                                                    </td>
                                                    <td>
                                                        6.8
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Notes
                                        </label>
                                        <div class="col-md-8">
                                        <textarea type="text" class="form-control" name="student_address"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       
                                        <div class="col-md-8">
                                            <button type="button" class="btn red">Dismiss</button>
                                            <button type="button" class="btn blue">Upgrade</button>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3"> Họ tên <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="date" value="" placeholder="Trần Thị Huệ" disabled />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3"> Ngày thi thử <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-8">
                                            <input type="date" class="form-control" name="date" value="" placeholder="nhap ngay thi thử" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3">Result
                                        </label>
                                        <div class="col-md-8">
                                            <table class="table table-striped table-hover table-bordered" id="test-result-table">
                                                <tr>
                                                    <th>W</th>
                                                    <th>S</th>
                                                    <th>L</th>
                                                    <th>Overall</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control" name="fullname" value="" />
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="fullname" value="" />
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="fullname" value="" />
                                                    </td>
                                                    <td>
                                                        6.8
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Notes
                                        </label>
                                        <div class="col-md-8">
                                        <textarea type="text" class="form-control" name="student_address"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       
                                       <div class="col-md-8">
                                           <button type="button" class="btn red" >Dismiss</button>
                                           <button type="button" class="btn blue">Upgrade</button>
                                       </div>
                                   </div>
                                    <!-- <div class="form-actions">
										<div class="row">
											<div class="col-md-offset-3 col-md-9">
												<button type="submit" class="btn green">Submit</button>
												<button type="button" class="btn default">Cancel</button>
											</div>
										</div>
									</div> -->
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn default" data-dismiss="modal">Close</button>
                <button type="button" class="btn blue">Upgrade to potential</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
</div>
<!-- END UPGRADE POTENTIAL CLASS -->

<!-- BEGIN DELETE CONFIRMATION MODAL -->
<div class="modal fade-in bs-modal-lg" id="deleteConfirmationModal" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Confirm delete data:</h4>
            </div>
            <div class="modal-body form">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-edit"></i> Are you sure delete these data?
                        </div>
                        <!-- <div class="tools">
                        <a href="javascript:;" class="collapse">
                        </a>
                        <a href="#portlet-config" data-toggle="modal" class="config">
                        </a>
                        <a href="javascript:;" class="reload">
                        </a>
                        <a href="javascript:;" class="remove">
                        </a>
                        </div> -->
                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar">
                        </div>
                        <!-- <table class="table table-striped table-hover table-bordered" id="class-list-table">
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
                            <th data-editable="true">
                                    Occupation
                            </th>
                            <th>
                                    Phone Number
                            </th>
                            <th>
                                    Infor Contact
                            </th>
                            <th>
                                    Address
                            </th>
                            <th>
                                    Tested
                            </th>
                            <th>
                                    Class level enrolled
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
                                    Đỗ Thị Huệ
                            </td>
                            <th data-editable="true">
                                    09/10/2002
                            </td>
                            <td data-editable="true">
                                    Sinh viên
                            </td>
                            <td>
                                    0338764563
                            </td>
                            <td>
                                <a href="#">Infor Contact</a>
                            </td>
                            <td>
                                356 tỉnh lộ 10, Bình Chánh, tp.HCM
                            </td>
                            
                            <td>
                                x
                            </td>
                            <td>
                                IELTS 4.5 
                            </td>
                                <td>
                                    <a href="#" class="btn btn-icon-only red" data-toggle="modal" data-target="#deleteConfirmationModal">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>									
                            </tr>
                        </tbody>
                        </table> -->
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger"><i class="fa fa-times"></i> Delete</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- END DELETE CONFIRMATION MODAL -->

<!-- BEGIN SCHEDULE OF CLASS MODAL -->
<div class="modal fade" id="studiesDatesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Schedule of class</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-edit"></i> Schedule of class
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-hover table-bordered" id="schedule_of_class">
                        <thead>
                            <tr>
                                
                                <th data-editable="true">
                                        Date
                                </th>
                                <!-- <th data-editable="true">
                                        Teacher
                                </th>
                                <th data-editable="true">
                                        Note
                                </th> -->
                                <th>
                                       Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <!-- {{-- <td><input type="checkbox"></td> --}} -->
                                    <td data-editable="true">
                                            09/07/2021
                                    </td>
                                    <!-- {{-- <th data-editable="true">
                                            Nguyễn Thị Lan
                                    </td>
                                    <td data-editable="true">
                                            
                                    </td> --}} -->
                                    <td>
                                        <a href="#" class="btn btn-icon-only red">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>									
                                </tr>
                                <tr>
                                    {{-- <td><input type="checkbox"></td> --}}
                                    <td data-editable="true">
                                            09/07/2021
                                    </td>
                                    {{-- <th data-editable="true">
                                            Nguyễn Thị Lan
                                    </td>
                                    <td data-editable="true">
                                            
                                    </td> --}}
                                    <td>
                                        <a href="#" class="btn btn-icon-only red">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>									
                                </tr>
                                <tr>
                                    {{-- <td><input type="checkbox"></td> --}}
                                    <td data-editable="true">
                                            09/07/2021
                                    </td>
                                    {{-- <th data-editable="true">
                                            Nguyễn Thị Lan
                                    </td>
                                    <td data-editable="true">
                                            
                                    </td> --}}
                                    <td>
                                        <a href="#" class="btn btn-icon-only red">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>									
                                </tr>
                                <tr>
                                    {{-- <td><input type="checkbox"></td> --}}
                                    <td data-editable="true">
                                            09/07/2021
                                    </td>
                                    {{-- <th data-editable="true">
                                            Nguyễn Thị Lan
                                    </td>
                                    <td data-editable="true">
                                            
                                    </td> --}}
                                    <td>
                                        <a href="#" class="btn btn-icon-only red">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>									
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
            
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
<!-- END SCHEDULE OF CLASS MODAL -->

<!-- BEGIN ADD TEACHER MODAL -->
<div id="addTeacherModal" class="modal fade" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Teacher Info</h4>
            </div>
            <div class="modal-body form">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-edit"></i>Teacher
                        </div>
                        <div class="tools">
                            <!-- <a href="javascript:;" class="collapse">
								</a> -->
                            <a href="javascript:;" class="reload">
                            </a>
                            <!-- <a href="javascript:;" class="remove">
								</a> -->
                        </div>
                    </div>
                    <div class="portlet-body">
                        <!-- BEGIN FORM-->
                        <form action="#" id="form_sample_6" class="form-horizontal">
                            <div class="form-body">
                                <div class="alert alert-danger display-hide">
                                    <button class="close" data-close="alert"></button>
                                    You have some form errors. Please check below.
                                </div>
                                <div class="alert alert-success display-hide">
                                    <button class="close" data-close="alert"></button>
                                    Your form validation is successful!
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">Full name <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="fullname_teacher" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">DOB <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="date" class="form-control" name="dob_teacher" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Phone number <span class="required">
                                            * </span>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="phone_number_teacher" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Email
                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="email" class="form-control" name="email_teacher" value="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">FB
                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <input type="text" class="form-control" name="facebook_teacher" />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-icon right">
                                            <i class="fa"></i>
                                            <a href="google.com" class="btn blue">Truy cập</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">
                                    </label>
                                    <a href="#accountListModal" data-toggle="modal">Chọn từ danh sách tài khoản</a> hoặc <a href="#">Tạo mới</a>
                                </div>

                                <div class="portlet box green" id="createNewAccount">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-edit"></i>Create new account
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <form id="create_new_account_teacher">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">User
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="text" class="form-control" name="new_username" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Password
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="text" class="form-control" name="new_password" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Role
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <select class="form-control" name="new_role">
                                                        <option>teacher</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <button type="submit">Tạo mới</button>
                                                    <button type="button">Hủy bỏ</button>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="portlet box green" id="parentContactInfo">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-edit"></i>Thông tin ngân hàng
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Chủ tài khoản
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="text" class="form-control" name="owner_name_bank" value="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Chọn ngân hàng
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <select id="bank_list"class="form-control" name="bank">
                                                        <option>Agribank</option>
                                                        <option>Sacombank</option>
                                                        <option>....</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Số tài khoản
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="text" class="form-control" name="bank_number" value="" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Chi nhánh
                                            </label>
                                            <div class="col-md-6">
                                                <div class="input-icon right">
                                                    <i class="fa"></i>
                                                    <input type="text" class="form-control" name="bank_branch" value="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                            <div class="portlet box green">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        <i class="fa fa-edit"></i>Class :
                                                    </div>
                                                    <div class="tools">
                                                        <!-- <a href="javascript:;" class="collapse">
                                                            </a> -->
                                                        <a href="javascript:;" class="reload">
                                                        </a>
                                                        <!-- <a href="javascript:;" class="remove">
                                                            </a> -->
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <!-- BEGIN FORM-->
                                                    <form action="#" id="form_sample_2" class="form-horizontal">
                                                        <div class="form-body">
                                                            <div class="alert alert-danger display-hide">
                                                                <button class="close" data-close="alert"></button>
                                                                You have some form errors. Please check below.
                                                            </div>
                                                            <div class="alert alert-success display-hide">
                                                                <button class="close" data-close="alert"></button>
                                                                Your form validation is successful!
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Class Code <span class="required">
                                                                        * </span>
                                                                </label>
                                                                <div class="col-md-8">
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <select class="form-control">
                                                                            <option>2134MARB-TOIEC 500+</option>
                                                                            <option>2145MARC-TOIEC 700+</option>
                                                                            <option>2145FEBA- Advance Listening</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Session <span class="required">
                                                                        * </span></label>
                                                                <div class="col-md-8">
                                                                    <select multiple class="form-control">
                                                                        <option>Wednesday . 7AM - 9AM</option>
                                                                        <option>Thursday . 11AM - 12AM</option>
                                                                        <option>Monday . 7PM - 9PM</option>
                                                                        <option>Saturday . 4PM - 6PM</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3"> </label>
                                                                <div class="col-md-8">
                                                                    <div class="btn-group">
                                                                        <button id="sample_editable_1_new" type="button" class="btn green" data-toggle="modal" data-target="#addTeacherModal">
                                                                            Add New <i class="fa fa-plus"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Session list <span class="required">
                                                                        * </span>
                                                                </label>
                                                                <div class="col-md-8">
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <!-- <input type="text" class="form-control" name="digits"/> -->
                                                                        <table class="table table-striped table-hover table-bordered" id="student-list-table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>
                                                                                        Class
                                                                                    </th>
                                                                                    <th>
                                                                                        Day
                                                                                    </th>
                                                                                    <th>
                                                                                        Time
                                                                                    </th>
                                                                                    <th>
                                                                                        Teacher
                                                                                    </th>
                                                                                    <th>
                                                                                        Action
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        2134MARB-TOIEC 500+
                                                                                    </td>
                                                                                    <td>
                                                                                        Wednesday
                                                                                    </td>
                                                                                    <td>
                                                                                        7AM-9AM
                                                                                    </td>
                                                                                    <td>
                                                                                        Nguyễn Thị Lan
                                                                                    </td>
                                                                                    <td>
                                                                                        <a href="#" class="btn btn-icon-only red">
                                                                                            <i class="fa fa-times"></i>
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        2134MARC-TOIEC 700+
                                                                                    </td>
                                                                                    <td>
                                                                                        Saturday
                                                                                    </td>
                                                                                    <td>
                                                                                        10AM-11AM20
                                                                                    </td>
                                                                                    <td>
                                                                                        Nguyễn Thị Lan
                                                                                    </td>
                                                                                    <td>
                                                                                        <a href="#" class="btn btn-icon-only red">
                                                                                            <i class="fa fa-times"></i>
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="form-actions">
                                                                <div class="row">
                                                                    <div class="col-md-offset-3 col-md-9">
                                                                        <button type="submit" class="btn green">Submit</button>
                                                                        <button type="button" class="btn default">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                    </form>
                                                    <!-- END FORM-->
                                                </div>
                                            </div>
                                        <!-- END EXAMPLE TABLE PORTLET-->
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- END FORM-->
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"><i class="fa fa-check"></i> Save changes</button>
            </div>
        </div>
    </div>
</div>
</div>
<!-- END ADD TEACHER MODAL -->

<!-- BEGIN ACCOUNT SALARY TEACHER MODAL -->
<div class="modal fade" id="SalaryOfTeacherModal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Salary History </h4>
            </div>
            <div class="modal-body">
                <div class="modal-body form">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-edit"></i>Teacher : Nguyễn Thị Hương Lan
                            </div>
                            <div class="tools">
                                <!-- <a href="javascript:;" class="collapse">
									</a> -->
                                <a href="javascript:;" class="reload">
                                </a>
                                <!-- <a href="javascript:;" class="remove">
									</a> -->
                            </div>
                        </div>
                        <div class="portlet-body">
                            <!-- BEGIN FORM-->
                            <form action="#" id="form_sample_2" class="form-horizontal">
                                <div class="form-body">
                                    <div class="alert alert-danger display-hide">
                                        <button class="close" data-close="alert"></button>
                                        You have some form errors. Please check below.
                                    </div>
                                    <div class="alert alert-success display-hide">
                                        <button class="close" data-close="alert"></button>
                                        Your form validation is successful!
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Chọn thời gian <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-6">
                                            <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
                                                <input type="text" class="form-control" name="from" id="date_start_accounting_hours" placeholder="ngày bắt đầu ">
                                                <span class="input-group-addon">
                                                    to </span>
                                                <input type="text" class="form-control" name="to" id="date_start_accounting_hours" placeholder="ngày kết thúc ">
                                            </div>
                                            <!-- /input-group -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Tổng giờ dạy<span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-8">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="number" class="form-control" name="number_of_hours_teach" value="20" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Lương mỗi giờ<span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-8">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="number" class="form-control" name="money_each_hour" value="120000" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Ngày trả <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-8">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <input type="date" class="form-control" name="paydate_salary_teacher" value="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Phương thức<span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-8">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <select class="form-control">
                                                    <option>
                                                        Tiền mặt
                                                    </option>
                                                    <option>
                                                        Chuyển khoản
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3"> </label>
                                        <div class="col-md-8">
                                            <div class="btn-group">
                                                <button id="sample_editable_1_new" type="button" class="btn green" data-toggle="modal" data-target="#addTeacherModal">
                                                    Add New <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-icon right">
                                                <i class="fa"></i>
                                                <!-- <input type="text" class="form-control" name="digits"/> -->
                                                <table class="table table-striped table-hover table-bordered" id="student-list-table">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                Thời gian
                                                            </th>
                                                            <th>
                                                                Số giờ dạy
                                                            </th>
                                                            <th>
                                                                Ngày thanh toán
                                                            </th>
                                                            <th>
                                                                Phương thức thanh toán
                                                            </th>
                                                            <th>
                                                                Số tiền
                                                            </th>
                                                            <th>
                                                                Action
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                29/06/2021-29/07/2021
                                                            </td>
                                                            <td>
                                                                20
                                                            </td>
                                                            <td>
                                                                30/07/2021
                                                            </td>
                                                            <td>
                                                                Tiền mặt
                                                            </td>
                                                            <td>
                                                                2,400,000
                                                            </td>
                                                            <td>
                                                                <a href="#" class="btn btn-icon-only red">
                                                                    <i class="fa fa-times"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="form-actions">
										<div class="row">
											<div class="col-md-offset-3 col-md-9">
												<button type="submit" class="btn green">Submit</button>
												<button type="button" class="btn default">Cancel</button>
											</div>
										</div>
									</div> -->
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn default" data-dismiss="modal">Close</button>
                <button type="button" class="btn blue">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
</div>
<!-- END ACCOUNT SALARY TEACHER MODAL -->


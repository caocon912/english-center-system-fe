<?php
class V_Class
{
    public function loadList(array $classes, array $labels = array())
    {
        if(array_key_exists('error', $classes)){
            $result ['class_error'] = $classes['error'];
        }
        else {
            $showdata = ' <thead>
                        <tr>
                            <th data-editable="true">
                                <input type="checkbox" id="check_all_class" onclick="checkAll(this);">
                            </th>
                            <th data-editable="true">
                                Class code
                            </th>
                            <th data-editable="true">
                                Time
                            </th>
                            <th data-editable="true">
                                Slots
                            </th>
                            <th data-editable="true">
                                Level
                            </th>
                            <th data-editable="true">
                                Session
                            </th>
                            <th style="width: 25%;" data-editable="true">
                                Notes
                            </th>
                            <th data-editable="true">
                                Status
                            </th>
                            <th style="text-align: center;">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>';
                    if (count($classes['class'])> 0){
                        foreach ($classes['class'] as $class) 
                        {
                            $status = ($class['is_active'] === false)? "Active" : "Deactive";
                            $showdata .= "<tr>
                                <td><input type='checkbox' id={$class['class_code']}></td>
                                <td>{$class['class_code']}</td>
                                <td>{$class['date_start']} - {$class['date_end']}</td>
                                <td>{$class['remaining_slots']}/{$class['slots']}</td>
                                <td>{$class['class_level']}</td>
                                <td>
                                    <ul>
                                        <li>Wednesday (7AM -9PM) - Nguyễn Thị Lan</li>
                                        <li>Saturday (10AM-11AM20) - Nguyễn Thị Lan</li>
                                    </ul>
                                </td>
                                <td>{$class['class_notes']}</td>
                                <td>{$status}</td>
                                <td>
                                    <ul class='list-group'>
                                        <li class='list-group-item list-group-item-success'>
                                            <a href='#' class='btn btn-icon-only green' data-toggle='modal' data-target='#studentListModal' title='Student List' onclick='getStudentList(\"$class[_id]\");'>
                                                <i class='icon-user-following'></i>
                                            </a>
                                        </li>
                                        <li class='list-group-item list-group-item-warning'>
                                        <a href='#' class='btn btn-icon-only yellow' data-toggle='modal' data-target='#addClassModal' title='edit' onclick='getClassById(\"$class[_id]\")'>
                                                <i class='fa fa-edit'></i>
                                            </a>
                                        </li>
                                        <li class='list-group-item list-group-item-danger'>
                                            <a href='#' class='btn btn-icon-only red' data-toggle='modal' data-target='#deleteConfirmationModal' title='delete' onclick='deleteClass(\"$class[_id]\");'data-id=''>
                                                <i class='fa fa-times'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>";
                        }
                    }    
                    else {
                        $showdata .= "<tr><td colspan='8'>There is no class</td></tr>";
                    }        
        
            $showdata .= '</tbody>';
            $result["class_table"] = $showdata;
        }
        
        if (array_key_exists('error', $labels)){
            $result['label_error'] = $labels['error'];
        }
        else {
            $label_data = '<thead>
                                <tr>
                                    <th>
                                        <input type="checkbox">
                                    </th>
                                    <th>
                                        Label
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>';      
            if (array_key_exists('labels',$labels) && count($labels['labels']) > 0){
                foreach($labels['labels'] as $label){
                    $label_data .= "<tr>
                        <td>
                            <input type='checkbox'>
                        </td>
                        <td>
                            {$label['name']}
                        </td>
                        <td>
                            <ul>";
                                if (array_key_exists('description',$label) && count($label['description']) > 0){
                                    foreach ($label['description'] as $day_session){
                                        $label_data .= "<li>{$day_session['day']}</li>";
                                    }
                                }
                                else {
                                    $label_data .= "<li>There are no data</li>";
                                }
                        $label_data .= "</ul>
                        </td>
                        <td>
                            <li class='list-group-item list-group-item-warning'>
                            <a href='#' class='btn btn-icon-only yellow' data-toggle='modal' data-target='#addClassModal' title='edit' onclick='getClassById(\"$label[_id]\")'>
                                    <i class='fa fa-edit'></i>
                                </a>
                            </li>
                            <li class='list-group-item list-group-item-danger'>
                                <a href='#' class='btn btn-icon-only red' data-toggle='modal' data-target='#deleteConfirmationModal' title='delete' onclick='deleteClass(\"$label[_id]\");'data-id=''>
                                    <i class='fa fa-times'></i>
                                </a>
                            </li>
                        </td>
                    </tr>";                   
                }                
            }
            else {
                $label_data .= "<tr><td colspan='8'>There is no labels</td></tr>";
            }

            $label_data .= '</tbody>';
            $result["label_table"] = $label_data;
        }
        return $result;
    }
}
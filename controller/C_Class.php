<?php

require_once __DIR__ . '/../model/M_Class.php';
require_once __DIR__ . '/../view/V_Class.php';
require_once __DIR__ . '/../lib/common_file.php';
require_once __DIR__ . '/../lib/variable.php';
// require_once './C_Labels.php';


// $model = new M_Class;
$view  = new V_Class;

$api_of_class = $GLOBALS['api_url'].'class/';

switch ($_POST['action']) {
    case 'loadList':
        
        $classes = getData($GLOBALS['api_of_class']);
        
        if ($classes['message'] !== "Class fetched successfully!"){
            $classes['error'] = 'There are some errors to fetch class';
        }
        
        $labels = loadLabelList();

        http_response_code(200);
        echo json_encode($view->loadList($classes, $labels));
    break;

    case 'getById':
        $id = $_POST['id'];

        $result = getData($GLOBALS['api_of_class'] . $id);
        
        http_response_code(200);

        echo json_encode($result);
        
    break;

    case 'add':
    
    break;

    case 'edit':
        
    break;

    case 'delete':
        
    break;

    case 'deleteChecked':
        
    break;

}
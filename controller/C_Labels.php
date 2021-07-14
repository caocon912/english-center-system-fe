<?php
require_once __DIR__ . '/../view/V_Labels.php';
require_once __DIR__ . '/../lib/common_file.php';
require_once __DIR__ . '/../lib/variable.php';

$api_of_label = $GLOBALS['api_url'].'label/';

function loadLabelList(){
    $labels = array();
    $labels = getData($GLOBALS['api_of_label']);
    
    if ($labels['message'] !== "Labels fetched successfully!"){
        $labels['error'] = 'There are some errors to fetch labels';
    }    
    return $labels;
}

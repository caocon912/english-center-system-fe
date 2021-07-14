<?php
function getData($api_url){
    $curl = curl_init();

    curl_setopt($curl, CURLOPT_HTTPGET, 1);

    curl_setopt($curl, CURLOPT_URL, $api_url);        
    
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
    $result = json_decode(curl_exec($curl), true);
    
    
    curl_close($curl);

    return $result;
}
function postData($api_url, $data_json=""){
    $curl = curl_init();

    curl_setopt($curl,CURLOPT_URL,$api_url);
        
    curl_setopt($curl, CURLOPT_POST, 1);
        
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_json);
        
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
    ));
        
    $result = curl_exec($curl);

    if (!$result){
        return -1; //return false       
    }
    $response = json_decode($result, true); // return associative array
        
    curl_close($curl);

    return $response;
}
function deleteData(){

}

?>
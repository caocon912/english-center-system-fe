function checkAll(source){
    $('input:checkbox').not(source).prop('checked', source.checked);
}
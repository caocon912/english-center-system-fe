$('#is_young_children').change(function() {
    // this will contain a reference to the checkbox   
    if (this.checked) {
        // the checkbox is now checked 
        $('#parentContactInfo').show();
    } else {
        // the checkbox is now no longer checked
        $('#parentContactInfo').hide();
    }
});
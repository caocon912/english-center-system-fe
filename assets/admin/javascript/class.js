const _url_init = 'redirect.php';
const _controller = 'Class';

$(document).ready(function(){
    loadList();
    $("#addClassModal").on('shown',resetInput());
});
function resetInput(){
    $('#class_name').val('');
    $('#class_code').val('');
    $('#slots').val('');
    $('#number_of_session').val('');
    $('#date_start_class').val('');
    $('#date_end_class').val('');
    $('#tuition_fee_of_class').val(0);
    $('#note_of_class').val('');
    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: _url_init,
        data: {
            controller: _controller,
            action: 'loadSelectInput',          
        }, 
        beforeSend: function () {
			$('#scLoading').show();
		},
        success: function (data) {
        },
		error: function (xhr, textStatus, errorThrown) {
        },
        complete: function () {
			$('#scLoading').hide();
		}
    });
}
function loadList(){
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: _url_init,
        data: {
            controller: _controller,
            action: 'loadList'  
        }, 
        beforeSend: function () {
			$('#scLoading').show();
		},
        success: function (data) {
            console.log(data);
            $('#class-list-table').html(data.class_table);
            $('#label_list_table').html(data.label_table);
        },
		error: function (xhr, textStatus, errorThrown) {
        },
        complete: function () {
			$('#scLoading').hide();
		}
    });
}
function getClassById(class_id){
    console.log(class_id);
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: _url_init,
        data: {
            controller: _controller,
            action: 'getById',
            id : class_id            
        },
        beforeSend: function () {
			$('#scLoading').show();
		},
        success: function (data) {
            console.log(data);
            $('#class_name').val(data.class_name);
            $('#class_code').val(data.class_code);
            $('#label_of_class').val('A');
            $('#levels_of_class').val(data.class_level);
            $('#slots').val(data.slots);
            $('#number_of_session').val(data.total_sessions);
            $('#date_start_class').val(new Date(data.date_start));
            $('#date_end_class').val(new Date(data.date_end));
            $('#tuition_fee_of_class').val(data.tuition_fee);
            $('#note_of_class').val(data.class_notes);

        },
		error: function (xhr, textStatus, errorThrown) {
        },
        complete: function () {
			$('#scLoading').hide();
		}
    });
}

function getStudentList(class_id){

}
function deleteClass(class_id){

}
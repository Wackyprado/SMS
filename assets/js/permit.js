var base_url  = $('#base_url').val();

$("#form_permit").on('submit',function(e){
	e.preventDefault();

	var formData = $(this);

	$.ajax({
		type:'post',
		url: base_url + 'request-permit',
		data: {
			id:formData.find("#student_id").val(),
			fullname:formData.find("#fullname").val()
		},
		dataType: "json",
		success:function(data){
			console.log(data);

			alert(data);
		}

	})
})
var base_url = $('#base_url').val();

$(document).ready(function(e){

	// var a = 2000;
	// var b = 2001;

	// var data = a + '-' + b;
	// console.log(data);
	// $("#form_view_grades").find("#school_year").append(`<option value="${data}">${data}</option>`);\
	var tdate = new Date(); //set date function
	var yyyy = tdate.getFullYear(); //get year
	var n = 2000;

	var a = yyyy + 1;
	var b = yyyy + 2;
	for(var i = n; i < yyyy; i++){

		var a = a - 1;
		var b = b - 1;

		var data = a + '-' + b;

		// console.log(data);

		$("#form_cor").find("#school_year").append(`<option value="${data}">${data}</option>`);
	}
})

$("#form_cor").on('submit', function(e) {
	e.preventDefault();
	var formData = $(this);

	formData.find('#btn-cor').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...');
	formData.find('#btn-cor').prop("disabled",true);

	$.ajax({
		type: 'post',
		url: base_url + 'certificate-of-registration/request',
		data:{
			school_year: formData.find('#school_year').val(),
			school_term: formData.find('#school_term').val()
		},
		dataType: 'json',
		success: function(data){
			console.log(data);

			formData.find('#btn-cor').empty();

			formData.find('#btn-cor').html('Send Request');
			formData.find('#btn-cor').prop("disabled",false);

			alert(data);


		}
	})
})
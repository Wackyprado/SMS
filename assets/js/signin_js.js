
var base_url = $('#base_url').val();

//for signing
	$("#form_signin").on('submit', function(e){
		e.preventDefault();
		var formData = $(this);

		$.ajax({
			type: "POST",
			url:  base_url + "validateUser",
			dataType: "json",
			data: {
				username: formData.find('#username').val(),
				password: formData.find('#password').val()
			},
			success: function(data){


			window.location.href = base_url + 'home';
 			console.log(data);

			
			},
			error: function(data){
				Swal.fire({
								  title: 'Login Failed',
								  text: data.message,
								  icon: 'error',
								  confirmButtonColor: '#3085d6',
								  confirmButtonText: 'Okay'
								})
			}

		})
	})
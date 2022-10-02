var base_url  = $('#base_url').val();

function myFunction() {

	  var x = document.getElementById("current_password");
	  if (x.type === "password") {
	    x.type = "text";
	    document.getElementById("new_password").type = "text";
	    document.getElementById("confirm_password").type = "text";
	  } else {
	    x.type = "password";
	    document.getElementById("new_password").type = "password";
	    document.getElementById("confirm_password").type = "password";
	  }
	}


$("#form_change").on('submit',function(e){
	e.preventDefault();
	var formData = $(this);


	$.ajax({

		type:"post",
		url : base_url + "change_password",
		data : {
			current_password:formData.find("#current_password").val(),
			new_password:formData.find("#new_password").val(),
			confirm_password:formData.find("#confirm_password").val()
		},
		dataType:'json',

		success:function(data){
			console.log(data);
			alert(data);
		}

	})
})

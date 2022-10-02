var base_url  = $('#base_url').val();

$(document).ready(function(e){
	// var a = 2000;
	// var b = 2001;

	// var data = a + '-' + b;
	// console.log(data);
	// $("#form_view_grades").find("#school_year").append(`<option value="${data}">${data}</option>`);\
	var tdate = new Date(); //set date function
	var yyyy = tdate.getFullYear(); //get year
	var n = 2000;

	var a = yyyy ;
	var b = yyyy + 1;

	// for(var i = n; i < yyyy; i++){

	// 	var a = a - 1;
	// 	var b = b - 1;

		var data = a + '-' + b;
		$("#form_register").find("#school_year").append(`<option value="${data}">${data}</option>`);

})


$("#btnsubmit").on('click',function(e){
	e.preventDefault();
	$.ajax({
		type:'post',
		url : base_url + 'registration/subject',
		data : {
			school_year : $('#form_register').find('#school_year').val(),
			school_term : $('#form_register').find('#school_term').val(),
			year_level : $('#form_register').find('#year_lvl').val()
		},
		dataType: 'json',
		success:function(data){
			console.log(data);


			if (data == "error") {
				alert('selected year level and term is invalid');
			}
			else{

				var total_units = 0;

				$('#tbl_reg').find('tbody').empty();
				$('#tbl_reg').find('tfoot').empty();

				for (var i = 0; i < data.length; i++) {
					var row = data[i];

					var code = row['code'];
					var description = row['description'];
					var units = row['unit'];

					total_units = parseInt(total_units) + parseInt(units);

					$('#tbl_reg').find('tbody')
					.append(`<tr>
						<td class="text-center">${code}</td>
						<td class="text-center">${description}</td>
						<td class="text-center">${units}</td>
						</tr>`);
					
				}

				$('#tbl_reg').find('tfoot')
				.append(`<tr>
						<td  class="text-center">
							<strong>Total units</strong>
						</td>
						<td></td>
						<td class="text-center">
							<strong>${total_units}</strong>
						</td>
						</tr>`)

				$("#btn_reg").prop("disabled",false);

				var school_year = $('#form_register').find('#school_year').val();
				var school_term = $('#form_register').find('#school_term').val();
				var year_level = $('#form_register').find('#year_lvl').val();

				$("#form_hidden").find('#school_year').val(school_year);
				$("#form_hidden").find('#school_term').val(school_term);
				$("#form_hidden").find('#year_level').val(year_level);

			}
		}
	})
})

$("#form_hidden").on('submit', function(e){
	e.preventDefault();
	
	var formData = $(this);
	
	$.ajax({
		type: 'post',
		url: base_url + 'registration/request',
		data: {
			formData
		},
		dataType: 'json',
		success: function(data){
			console.log(data);
		}
	})

})
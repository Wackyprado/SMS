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

		$("#form_view_grades").find("#school_year").append(`<option value="${data}">${data}</option>`);
	}
})


$("#form_view_grades").on('submit',function(e){
	e.preventDefault();

	var formData = $(this);

	$.ajax({
		type: 'post',
		url: base_url + 'view_grades/fetch_grades',
		data: {
			school_year: formData.find('#school_year').val(),
			school_term: formData.find('#school_term').val()
		},
		dataType: 'json',
		success: function(data){
			var year = formData.find('#school_year').val();
			var term = formData.find('#school_term').val();

			clearfields();
			$('#h3').append(`<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-percent" viewBox="0 0 16 16">
						<path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
						</svg>
						Grade Records ( ${year} ${term} )`);

			var n = 0;

			for (var i = 0; i < data.length; i++) {
				
				var row = data[i];

				var code = row['code'];
				var description = row['description'];
				var units = row['units'];
				var midterm = row['midterm'];
				var final = row['final'];

				var n = parseInt(n) + parseInt(units); 

				$("#view_grades_tbl").find('tbody')
				.append(`<tr class="text-center">
						<td class="grades-td">${code}</td>
						<td class="grades-td">${description}</td>
						<td class="grades-td">${final}</td>
						<td class="grades-td">${midterm}</td>
						<td class="grades-td">${units}</td>
					</tr>`)

			}

			$("#view_grades_tbl").find('tfoot')
				.append(`<tr>
						<td class="grades-td"><strong>Total Units</strong></td>
						<td class="grades-td" colspan="3"></td>
						<td class="grades-td">${n}</td>
						</tr>`)
		},
		error: function(err){
			clearfields();
			$("#view_grades_tbl").find('tbody')
				.append(`<tr class="text-center">
						<td colspan="5" class="grades-td">No Data Found</td>
						</tr>`)
		}
	})
})

function clearfields(){
	$('#h3').empty();
	$("#view_grades_tbl").find('tbody').empty();
	$("#view_grades_tbl").find('tfoot').empty();
}
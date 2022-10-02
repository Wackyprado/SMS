var base_url = $('#base_url').val();

$(document).ready(function(e){

	$.ajax({
		type:'post',
		url: base_url + "subject-chart/fetch_subject",
		dataType: 'json',
		success:function(data){
			console.log(data);

			for (var i = 0 ; i < data.length; i++){
				var row = data[i];

				var code = row['code'];
				var year = row['year'];
				var semester = row['semester'];
				var ff = "";
				var fs = "";
				var sf = "";
				var ss = "";
				var tf = "";
				var ts = "";
				var ftf = "";
				var fts = "";
				var id = "";


				if (year == '1st-year' && semester == 'First') {
					ff = code;
					id = "#col1";
				}
				else if (year == '1st-year' && semester == 'Second') {
					 fs = code;
					 id = "#col2";
				}
				else if(year == '2nd-year' && semester == 'First'){
					 sf = code;
					 id = "#col3";
				}
				else if(year == '2nd-year' && semester == 'Second'){
					 ss = code;
					 id = "#col4";
				}
				else if(year == '3rd-year' && semester == 'First'){
					 tf = code;
					 id = "#col5";
				}

				else if(year == '3rd-year' && semester == 'Second'){
					ts = code;
					id = "#col6";
				}
				else if(year == '4th-year' && semester == 'First'){
					 ftf = code;
					 id = "#col7";
				}
				else{
					 fts = code;
					 id = "#col8";
				}

				$("#subject_chart_tbl").find(id)
				.append(`<td class="sub_td">${code}</td>`);


			}
		},
		error:function(err){

		}
	})

})
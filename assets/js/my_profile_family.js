var base_url = $('#base_url').val();



$(document).ready(function(e){
		$.ajax({
		type:'post',
		url: base_url + 'profile/getfamily',
		dataType: 'json',

		success: function(data){
			// console.log(data);

			for (var i = 0 ; i < data.length; i++) {
				var row = data[i];

				var p_name = row['p_name'];
				var	relationship = row['relationship'];
				var	occupation = row['occupation'];
				var	p_address = row['p_address'];
				var	p_mobile_no = row['p_mobile_no'];
				var	contact_on_emergency = row['contact_on_emergency'];
				var	authorize_access = row['authorize_access'];

				if (contact_on_emergency == 'true'){
					var emergency = 'green';
				}else{
					var emergency = 'red';
				}

				if (authorize_access == 'true') {
					var access = 'green';
				}
				else{
					var access = 'red';
				}

				// $('#mytable').find('tbody')
				// .append(`<tr>
				// 			<td><h5>${p_name}</h5></td>
				// 		</tr>
				// 		<tr>
				// 			<td><p><span style="font-weight:bold;">relationship : </span>${relationship}</p></td>
				// 		</tr>
				// 		<tr>
				// 			<td><p><span style="font-weight:bold;">Occupation : </span>${occupation}</p></td>
				// 		</tr>
				// 		<tr>
				// 			<td><p><span style="font-weight:bold;">Address : </span>${p_address}</p></td>
				// 		</tr>
				// 		<tr>
				// 			<td><p><span style="font-weight:bold;">Mobile No. : </span>${p_mobile_no}</p></td>
				// 		</tr>
				// 		<tr>
				// 			<td><p style="color:${emergency};">Contact on emergency</p></td>
				// 		</tr>
				// 		<tr>
				// 			<td><p style="color:${access};">Authorize Access</p></td>
				// 	</tr>`);

				$("#row_family").append(`<hr class="divider">
                    <div class="row">
                        <div class="col">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-hearts" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.5 1.246c.832-.855 2.913.642 0 2.566-2.913-1.924-.832-3.421 0-2.566ZM9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4Zm13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276ZM15 2.165c.555-.57 1.942.428 0 1.711-1.942-1.283-.555-2.281 0-1.71Z"/>
                            </svg>
                        </div>
                        <div class="col">
                            <h5>${p_name}</h5>
                            <p><span style="font-weight:bold;">relationship : </span>${relationship}</p>
                            <p><span style="font-weight:bold;">Occupation : </span>${occupation}</p>
                            <p><span style="font-weight:bold;">Address : </span>${p_address}</p>
                            <p><span style="font-weight:bold;">Mobile No. : </span>${p_mobile_no}</p>
                            <p style="color:${emergency};">Contact on emergency</p>
                            <p style="color:${access};">Authorize Access</p>


                        </div>
                    </div>`);


			}

				console.log(data);
		},
		error: function(data){

		}
	})

})

// function getfamily() {
// 	$.ajax({
// 		type:'post',
// 		url: base_url + 'profile/getfamily',
// 		dataType: 'json',

// 		success: function(data){
// 			// console.log(data);

// 			for (var i = 0 ; i < data.lenght; i++) {
// 				var row = data[i];

// 				var p_name = row['p_name'];
// 				var	relationship = row['relationship'];
// 				var	occupation = row['occupation'];
// 				var	p_address = row['p_address'];
// 				var	p_mobile_no = row['p_mobile_no'];
// 				var	contact_on_emergency = row['contact_on_emergency'];
// 				var	authorize_access = row['authorize_access'];

// 				if (contact_on_emergency == 'true'){
// 					var emergency = 'green';
// 				}else{
// 					var emergency = 'red';
// 				}

// 				if (authorize_access == 'true') {
// 					var access = 'green';
// 				}
// 				else{
// 					var access = 'red';
// 				}

// 				$('#mytable').find('tbody')
// 				.append(`<tr>
// 							<td><h5>${p_name}</h5></td>
// 						</tr>
// 						<tr>
// 							<td><p><span style="font-weight:bold;">relationship : </span>${relationship}</p></td>
// 						</tr>
// 						<tr>
// 							<td><p><span style="font-weight:bold;">Occupation : </span>${occupation}</p></td>
// 						</tr>
// 						<tr>
// 							<td><p><span style="font-weight:bold;">Address : </span>${p_address}</p></td>
// 						</tr>
// 						<tr>
// 							<td><p><span style="font-weight:bold;">Mobile No. : </span>${p_mobile_no}</p></td>
// 						</tr>
// 						<tr>
// 							<td><p style="color:${emergency};">Contact on emergency</p></td>
// 						</tr>
// 						<tr>
// 							<td><p style="color:${access};">Authorize Access</p></td>
// 						</tr>

// 					`);

// 				// $("#parent").append(`<hr class="divider">
//     //                 <div class="row">
//     //                     <div class="col">
//     //                         <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-hearts" viewBox="0 0 16 16">
//     //                         <path fill-rule="evenodd" d="M11.5 1.246c.832-.855 2.913.642 0 2.566-2.913-1.924-.832-3.421 0-2.566ZM9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4Zm13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276ZM15 2.165c.555-.57 1.942.428 0 1.711-1.942-1.283-.555-2.281 0-1.71Z"/>
//     //                         </svg>
//     //                     </div>
//     //                     <div class="col">
//     //                         <h5>${p_name}</h5>
//     //                         <p><span style="font-weight:bold;">relationship : </span>${relationship}</p>
//     //                         <p><span style="font-weight:bold;">Occupation : </span>${occupation}</p>
//     //                         <p><span style="font-weight:bold;">Address : </span>${p_address}</p>
//     //                         <p><span style="font-weight:bold;">Mobile No. : </span>${p_mobile_no}</p>
//     //                         <p style="color:${emergency};">Contact on emergency</p>
//     //                         <p style="color:${access};">Authorize Access</p>


//     //                     </div>
//     //                 </div>`);


// 			}

// 				console.log(data);
// 		},
// 		error: function(data){

// 		}
// 	})
// }
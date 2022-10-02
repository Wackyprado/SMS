<div class="container-fluid">
	<div class="row mb-3">
		<h2>
			My Profile
		</h2>
	</div>
	<div class="row profile-row">
		<div class="col profile-col">
			<div class="text-center">
				<img src="assets/img/default-img.png" alt="" height="150" width="150">
			</div>
		</div>
		<div class="col profile-col">
				<div class="row profile-row">
					<table>
						<tr>
							<th> <h4 class="profile-h4"><?php echo $full_name; ?></h4></th>
						</tr>
						<tr>
							<td>course: <strong><?php echo $course; ?></strong></td>
						</tr>
						<tr>
							<td>(<?=$course_avr; ?>)</td>
						</tr>
					</table>
				</div>
				<div class="row profile-row">
					<table>
						<tr>
							<th>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
								<path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z"/>
								</svg>
								ID Number :
							</th>
							<td>
								<?=$student_id; ?>
							</td>
						</tr>
						<tr>
							<th>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
							<path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
							</svg>
								Department:
							</th>
							<td>
								<?=$department; ?>
							</td>

						</tr>
						<tr>
							<th>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
							<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
							</svg>
							Official Email Address:
							</th>
							<td>
								<?=$email; ?>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div>
		<div class="row profile-row2">
			<div class="row">
				<nav aria-label="Page navigation example">
					<ul class="pagination d-flex justify-content-center">
						<li class="page-item  active"><a class="page-link text-center" href="my-profile">About me</a></li>
						<li class="page-item"><a class="page-link text-center" href="my-profile-education">Education</a></li>
						<li class="page-item"><a class="page-link text-center" href="my-profile-family">Family</a></li>
						
					</ul>
				</nav>
			</div>
			<div class="row con">
			<div class="row aboutme basic-information">
				<div class="row">
		
					<h2>
						<svg xmlns="http://www.w3.org/2000/svg"  width="30" height="30" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
						<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
						<path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
						</svg>
						Basic Information 
					</h2>
				</div>

				<div>
					<hr class="divider">
				</div>

				<div class="row">
					<form action="" id="about_me">
						<div class="row mb-2">
							<div class="col">
								Last Name :
							</div>
							<div class="col">
								<input type="text" class="form-control" id="last_name" disabled>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col">
								First Name :
							</div>
							<div class="col">
								<input type="text" class="form-control" id="first_name" disabled>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col">
								Middle Name :
							</div>
							<div class="col">
								<input type="text" class="form-control" id="middle_name" disabled>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col">
								Suffix :
							</div>
							<div class="col">
								<input type="text" class="form-control" id="suffix"disabled>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col">
								Birthdate :
							</div>
							<div class="col">
								<input type="text" class="form-control" id="birthdate" disabled>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col">
								Country of Birth :
							</div>
							<div class="col">
								<input type="text" class="form-control" id="country_of_birth" disabled>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col">
								Birthplace :
							</div>
							<div class="col">
								<input type="text" class="form-control" id="birthplace" disabled>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col">
								Nationality :
							</div>
							<div class="col">
								<input type="text" class="form-control" id="nationality" disabled>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col">
								Civil Status :
							</div>
							<div class="col">
								<input type="text" class="form-control" id="civil_status" disabled>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col">
								Gender :
							</div>
							<div class="col">
								<input type="text" class="form-control" id="gender" disabled>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col">
								Religion :
							</div>
							<div class="col">
								<input type="text" class="form-control" id="religion" disabled>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col">
								Mobile No. :
							</div>
							<div class="col">
								<input type="text" class="form-control" id="mobile_no" disabled>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col">
								Tel No. :
							</div>
							<div class="col">
								<input type="text" class="form-control"  id="tel_no" disabled>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col">
								Email Address :
							</div>
							<div class="col">
								<input type="text" class="form-control" id="email_address" disabled>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="row address ">
				<div class="row">
					<h2>
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
						<path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
						<path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
						</svg>

						Address
					</h2>
				</div>

				<div>
					<hr class="divider">
				</div>

				<div class="row">
					<form action="" id="form_address">
						<div class="mb-3">
							<h4>Present Address</h4>
						</div>

						<div>
							<hr class="divider">
						</div>
								
						<div class="row mb-2">
							<div class="col">
								Province :
							</div>
							<div class="col">
								<input type="text" class="form-control" id="province" disabled>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col">
								City/Municipality :
							</div>
							<div class="col">
								<input type="text" class="form-control"  id="city_municipality" disabled>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col">
								Hosue No./St./Brgy. :
							</div>
							<div class="col">
								<input type="text" class="form-control" id="house_no_st_brgy" disabled>
							</div>
						</div>

						<div class="row mb-3">
							<div class="col">
								Postal Code :
							</div>
							<div class="col">
								<input type="text" class="form-control" id="postal_code" disabled>
							</div>
						</div>

						<div class="mb3">
							<h4>Permanent Address</h4>
						</div>

						<div>
							<hr class="divider">
						</div>

						<div class="row mb-2">
							<div class="col">
								Country:
							</div>
							<div class="col">
								<input type="text" class="form-control" id="p_country" disabled>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col">
								Province :
							</div>
							<div class="col">
								<input type="text" class="form-control" id="p_province" disabled>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col">
								City/Municipality :
							</div>
							<div class="col">
								<input type="text" class="form-control" id="p_city_municipality" disabled>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col">
							Hosue No./St./Brgy. :
							</div>
							<div class="col">
								<input type="text" class="form-control" id="p_house_no_st_brgy" disabled>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col">
							Postal Code :
							</div>
							<div class="col">
								<input type="text" class="form-control" id="p_postal_code" disabled>
							</div>
						</div>
			
					</form>
				</div>
			</div>

			<div class="row other-informantion">
				<div class="row">
					<h2>
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-earmark" viewBox="0 0 16 16">
					<path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
					</svg>
					Other Information
					</h2>
				</div>

				<div>
					<hr class="divider">
				</div>

				<div class="row">
				<form action="" id="form_other">
					<div class="row mb-2">
							<div class="col">
							Admission Date :
							</div>
							<div class="col">
								<input type="text" class="form-control" id="admission_date" disabled>
							</div>
					</div>

					<div class="row mb-2">
							<div class="col">
							Entry Level :
							</div>
							<div class="col">
								<input type="text" class="form-control" id="entry_level" disabled>
							</div>
					</div>

					<div class="row mb-2">
							<div class="col">
							Exit Level :
							</div>
							<div class="col">
								<input type="text" class="form-control" id="exit_level" disabled>
							</div>
					</div>

					<div class="row mb-2">
							<div class="col">
							Student Type :
							</div>
							<div class="col">
								<input type="text" class="form-control" id="student_type" disabled>
							</div>
					</div>

			

				<div class="table d-flex justify-content-center">
					<table>
						<tr class="req-tr req-table">
							<th class="req-th">#</th>
							<th class="req-th">Requirements</th>
						</tr>
						<tr class="req-table">
							<td class="req-td">
								<div class="form-check d-flex">
								<input class="form-check-input" type="checkbox" value="true" name="g12rc" id="g12rc" disabled>
								</div>
							</td>
							<td class="req-td">
								Grade 12 (Report Card)
							</td>
						</tr>

						<tr  class="req-table">
							<td class="req-td">
								<div class="form-check d-flex">
								<input class="form-check-input" type="checkbox" value="" id="cr_good_moral" disabled>
								</div>
							</td>
							<td class="req-td">
								Certificate of Good Moral Character
							</td>
						</tr>

						<tr  class="req-table">
							<td class="req-td">
								<div class="form-check d-flex">
								<input class="form-check-input" type="checkbox" value="" id="PSA" disabled>
								</div>
							</td>
							<td class="req-td">
								PSA-authenticated Birth Certificate
							</td>
						</tr>

						<tr  class="req-table">
							<td class="req-td">
								<div class="form-check d-flex">
								<input class="form-check-input" type="checkbox" value="" id="idpic" disabled>
								</div>
							</td>
							<td class="req-td">
								2 X 2 Colored ID Picture
							</td>
						</tr>

						<tr  class="req-table" >
							<td class="req-td">
								<div class="form-check d-flex">
								<input class="form-check-input" type="checkbox" value="" id="form137" disabled>
								</div>
							</td>
							<td class="req-td">
								Form 137
							</td>
						</tr>

						<tr  class="req-table">
							<td class="req-td">
								<div class="form-check d-flex">
								<input class="form-check-input" type="checkbox" value="" id="als1" disabled>
								</div>
							</td>
							<td class="req-td">
								For Passers of Philippine Educational Placement Test (PEPT) and Alternative Learning System Accredition and Equivalency(ALS A&E), Certifcate of Passing
							</td>
						</tr>
						
						<tr  class="req-table">
							<td class="req-td">
								<div class="form-check d-flex">
								<input class="form-check-input" type="checkbox" value="" id="als2" disabled>
								</div>
							</td>
							<td class="req-td">
							For Passers of Philippine Educational Placement Test (PEPT) and Alternative Learning System Accredition and Equivalency(ALS A&E), Certifcate of Rating
							</td>
						</tr>

						<tr  class="req-table">
							<td class="req-td">
								<div class="form-check d-flex">
								<input class="form-check-input" type="checkbox" value="" id="als_dep" disabled>
								</div>
							</td>
							<td class="req-td">
							For ALS A&E passers, Diploma
							</td>
						</tr>

						<tr  class="req-table">
							<td class="req-td">
								<div class="form-check d-flex">
								<input class="form-check-input" type="checkbox" value="" id="form138" disabled>
								</div>
							</td>
							<td class="req-td">
							For graduates of 2015 and below, Form 138 (Report Card)
							</td>
						</tr>
					</table>

					</div>
				</form>
				</div>

			</div>




		</div>
	</div>
</div>
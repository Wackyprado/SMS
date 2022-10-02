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
		<div class="row profile-row2" id="parent">
			<div class="row">
				<nav aria-label="Page navigation example">
					<ul class="pagination d-flex justify-content-center">
						<li class="page-item"><a class="page-link text-center" href="my-profile">About me</a></li>
						<li class="page-item"><a class="page-link text-center" href="my-profile-education">Education</a></li>
						<li class="page-item active"><a class="page-link text-center" href="#">Family</a></li>
					</ul>
				</nav>
			</div>
            <div class="row con">
                <div class="row family">
                    <div class="row">
                                <h2>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                    </svg>
                                  Family Background
                                </h2>
                    </div>>
                    <div id="row_family">
                    </div>
            </div>
        </div>
	</div>	
</div>
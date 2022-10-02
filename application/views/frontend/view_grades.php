<div class="container-fluid">
		<div class="row mb-5">
			<h2>View Grades</h2>
		</div>
		<div class="row con">
			<div class="row view-grades">
				<div class="row">
					<h5>
					<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"/>
					</svg>
					 Select Term
					</h5>
				</div>
				<hr class="divider">
				<div class="row select-term">
					<form method="POST" action="" id="form_view_grades">
						<div class="row mb-3">
							<div class="col">
								<strong>School Year :</strong>
							</div>
							<div class="col">
								<select name="school_year" id="school_year" class="form-select">

								</select>
							</div>
						</div>

						<div class="row mb-4">
							<div class="col">
								<strong>School Term : </strong>
							</div>
							<div class="col d-flex">
								<select name="school_term" id="school_term" class="form-select">
									<option value="First">First Semester</option>
									<option value="Second">Second Semester</option>
									<option value="Summer">Summer</option>
								</select>
							</div>
						</div>
						<div class="row mb-5 d-flex justify-content-end">
							<button Type="submit" class="btn btn-success" id="btnsubmit">Submit</button>
						</div>
					</form>
				</div>

				<div class="row">
					<h3 id="h3"> <!-- <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-percent" viewBox="0 0 16 16">
						<path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
						</svg> -->
						<!-- Grade Records () -->
					</h3>
				</div>
				<hr class="divider">
				<div class="row grade-records">
					<div class="row mb-5">
						<div class="row mb-3">
							<div class="col">
								<span style="font-weight:bold;"> Student ID : </span>
							</div>
							<div class="col">
								<?=$student_id;?>
							</div>
						</div>

						<div class="row mb-3">
							<div class="col">
							<span style="font-weight:bold;"> Student Name : </span>
							</div>
							<div class="col">
								<?=$fullname;?>
							</div>
						</div>

						<div class="row">
							<div class="col">
							<span style="font-weight:bold;">Course : </span>
							</div>
							<div class="col">
								<?=$course;?> (<?=$course_avr;?>)
							</div>
						</div>
					</div>
					<div class="row grades-table">
						<table id="view_grades_tbl">
							<thead>
								<tr class="grades-tr">
									<th class="grades-th">Subject Course</th>
									<th  class="grades-th">Subject Description</th>
									<th  class="grades-th">Midterm Grade</th>
									<th  class="grades-th">Final Grade</th>
									<th  class="grades-th">Units</th>
								</tr>
							</thead>
							<tbody>
								<tr class="text-center">
									<td colspan="5" class="grades-td">Please Select school year and school term</td>
								</tr>
								
							</tbody>
							<tfoot>
								<!-- <tr>
									<th colspan="4">
										Total Units
									</th>
									<th>
										123
									</th>
								</tr> -->
							</tfoot>
						</table>
					</div>

				</div>
			</div>
		</div>
</div>
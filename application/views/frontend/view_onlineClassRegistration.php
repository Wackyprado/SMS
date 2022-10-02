<div class="container-fluid">
		<div class="row mb-5">
			<h2>Online Class Registration</h2>
		</div>
		<div class="row con">
			<div class="row online_class">
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
					<form method="POST" action="" id="form_register">
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
								<strong>Year Level : </strong>
							</div>
							<div class="col d-flex">
								<select name="school_term" id="year_lvl" class="form-select">
									<option value="1">First Year</option>
									<option value="2">Second Year</option>
									<option value="3">Third Year</option>
									<option value="4">Fourth Year</option>
								</select>
							</div>
						</div>

						<div class="row mb-4">
							<div class="col">
								<strong>School Term : </strong>
							</div>
							<div class="col d-flex">
								<select name="school_term" id="school_term" class="form-select">
									<option value="first">First Semester</option>
									<option value="second">Second Semester</option>
								</select>
							</div>
						</div>
						<div class="row mb-5 d-flex justify-content-end">
							<button Type="button" class="btn btn-success" id="btnsubmit">Submit</button>
						</div>
					</form>
				</div>
				<div class="row">
					<h3>Sujects</h3>
				</div>
				<hr class="divider">
				<div class="row tabl_div mb-4">
					
					<table id="tbl_reg">
						<thead>
							<tr>
								<td class="text-center">
									Subject Code
								</td>
								<td class="text-center">
									Description
								</td>
								<td class="text-center">
									Units
								</td>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
						<tfoot>
							
						</tfoot>
					</table>

				</div>
				<div class="row mb-5">
					<form id="form_hidden">
					<input type="hidden" name="" id="school_year">
					<input type="hidden" name="" id="school_term">
					<input type="hidden" name="" id="year_level">
					<div class="d-flex justify-content-end">
						<button width=100 type="submit" class="btn btn-success" id="btn_reg" disabled>Register</button>	
					</div>

					
				</form>
				</div>
			
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row mb-5">
			<h2>Certificate of Registration</h2>
	</div>


	<div class="row con">
		<div class="row Create-form">
			<div class="row">
				<div class="row">
						<h5>
						<strong>Generate Form</strong>
						
						</h5>
					</div>
			</div>
			<hr class="divider">
			<div class="row form">
				<!-- action="certificate-of-registration/request" -->
				<form method="post"  id="form_cor">
					<div class="row mb-3">
						<div class="col">
							<strong>Student ID :</strong>
						</div>
						<div class="col">
							<?=$student_id;?>
						</div>
					</div>

					<div class="row mb-3">
						<div class="col">
							<strong>Student Name : </strong>
						</div>
						<div class="col">
							<?=$fullname;?>
						</div>
					</div>

					<div class="row mb-3">
						<div class="col">
							<strong>School Year :</strong>
						</div>
						<div class="col">
							<select name="school_year" id="school_year" class="form-select">
	
							</select>
						</div>
					</div>

					<div class="row mb-3">
						<div class="col">
							<strong>School Term :</strong>
						</div>
						<div class="col">
							<div class="col d-flex">
								<select name="school_term" id="school_term" class="form-select">
									<option value="First">First Semester</option>
									<option value="Second">Second Semester</option>
									<option value="Summer">Summer</option>
								</select>
							</div>
						</div>
					</div>

					<div class="row mb-3 d-flex justify-content-end">
						<button class="btn btn-success" Type="submit" id="btn-cor">Send Request</button>
					</div>
				</form>

			</div>

		</div>	
	</div>


</div>
<div class="container-fluid">
		<div class="row mb-5">
			<h2>Print Exam Permit</h2>
		</div>
		<div class="row con">
			<div class="row students-Profile">
				<div class="row">
					<h5>
						<strong>Student's Profile</strong>
					</h5>
				</div>
				<hr class="divider">
				<div class="row ">
				
						<img src="assets/img/default-img.png" alt="" height="300">
		
				<form action="" class="print-permit" id="form_permit">
					<div class="row mb-3">
						<div class="col">
							<strong>Student ID : </strong>
						</div>
						<div class="col">
							<input type="hidden" name="" id="student_id" value="<?=$student_id;?>">
							<?=$student_id;?>
						</div>
					</div>

					<div class="row mb-3">
						<div class="col">
						<strong>Student Name :</strong>
						</div>
						<div class="col">
							<input type="hidden" name="" id="fullname" value="<?=$fullname;?>">
							<?=$fullname;?>
						</div>
					</div>
					
					<div class="row mb-3">
						<div class="col">
						<strong>Course :</strong>
						</div>

						<div class="col">
							<?=$course;?>
						</div>
					</div>
				</div>
				<hr class="divider">
				<div class="row mb-3">
					<strong>Accountabilities</strong>
				</div>
				
				<Button class="btn btn-success" type="submit" id="permit_btn">Request Permit</Button>
					
				</form>


			</div>
		</div>

	</div>
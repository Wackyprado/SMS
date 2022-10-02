<div class="container-fluid">
	<div class="row mb-5">
		<h2>
			Subject Chart
		</h2>
	</div>

	<div class="row con">
		<div class="row subject_chart">
			<div class="row mb-3">
				<div class="row mb-3">
					<h5>
					<strong>Student Information</strong>
					</h5>
				</div>

				<hr class="divider">
				<div class="row mb-3">
					<div class="col">
						<strong>Student ID:</strong>
					</div>
					<div class="col">
						<?=$student_id;?>
					</div>
				</div>
				
				<div class="row mb-3">
					<div class="col">
						<strong>Student Name:</strong>
					</div>
					<div class="col">
						<?=$fullname;?>
					</div>
				</div>

				<div class="row mb-3">
					<div class="col">
						<strong>Course:</strong>
					</div>
					<div class="col">
						<?=$course;?>
					</div>
				</div>

				<div class="row mb-3">
					<div class="col">
						<strong>Year Level:</strong>
					</div>
					<div class="col">
						<?=$year_lvl;?>
					</div>
				</div>

			</div>
			<hr class="divider">
			<div class="row mb3">
				<table class="table" id="subject_chart_tbl">
<!-- 					<thead>
						<tr class="text-center">
							<th>Term 1 </th>
							<th>Term 2 </th>
							<th>Term 3 </th>
							<th>Term 4 </th>
							<th>Term 5 </th>
							<th>Term 6 </th>
							<th>Term 7 </th>
							<th>Term 8 </th>
						</tr>
					</thead> -->
					<tbody>
						<tr id="col1" class="sub_tr">
							<th  class="sub_th">Term 1 </th>
						</tr>
						<tr id="col2" class="sub_tr">
							<th  class="sub_th">Term 2 </th>
						</tr>
						<tr id="col3" class="sub_tr">
							<th  class="sub_th">Term 3 </th>
						</tr>
						<tr id="col4" class="sub_tr">
								<th  class="sub_th">Term 4 </th>
						</tr>
						<tr id="col5" class="sub_tr">
							<th  class="sub_th">Term 5 </th>
						</tr>
						<tr id="col6" class="sub_tr">
							<th  class="sub_th">Term 6 </th>
						</tr>
						<tr id="col7" class="sub_tr">
							<th  class="sub_th">Term 7 </th>
						</tr>
						<tr id="col8" class="sub_tr">
							<th  class="sub_th">Term 8 </th>
						</tr>


					</tbody>
					<tfoot>
						
					</tfoot>

					
				</table>
			</div>

			<hr class="divider">

		</div>
	</div>
</div>
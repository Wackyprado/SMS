<div class="container-fluid">
	<div class="row mb-5">
		<h2>
			Student Ledger
		</h2>
	</div>



	<div class="row con">
		<div class="row ledger">
			<div class="row mb-3">
				<div class="row mb-3">
					<h5>
					<strong>Student Information</strong>
					</h5>
				</div>
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

			</div>



			<hr class="divider">

			<div class="row">

				<div class="row">

					<form action="">
						<div class="row mb-3">
							<div class="col">
								Assessments :
							</div>
							<div class="col">
								<div class="form-group">
									<select name="" id="" class="form-select">
										<option value="">1</option>
										<option value="">2</option>
									</select>
								</div>
							</div>
							<div class="col">
								<button type="submit" class="btn btn-success">Submit</button>
							</div>
						</div>
					</form>
				
				</div>

				<div class="row">
					<div class="row mb-3 d-flex justify-content-center">
						<table>
							<thead>
									<tr>
										<th colspan="7" class="th-ledger">Assessment #123123</th>
									</tr>
							</thead>
							<tbody>
									<tr>
										<th class="th-ledger">Date</th>
										<th class="th-ledger">Transaction</th>
										<th class="th-ledger">Reference No.</th>
										<th class="th-ledger">Description</th>
										<th class="th-ledger">Billing</th>
										<th class="th-ledger">Payments</th>
										<th class="th-ledger">Balance</th>
									</tr>
									<tr>
										<td class="td-ledger">
											2022
										</td>
										<td class="td-ledger">
											Assessment
										</td>
										<td class="td-ledger">
											21-28105
										</td>
										<td class="td-ledger">
											qweqweqwe
										</td>
										<td class="td-ledger">
											23,123
										</td>
										<td class="td-ledger">

										</td>
										<td class="td-ledger">
											23,123
										</td>
									</tr>
							</tbody>

							<tfoot>
									<tr>
										<th colspan="4" class="th-ledger span">Previous Balance: </th>
										<td class="td-ledger">

										</td>
										<td class="td-ledger">
											
										</td>
										<td class="td-ledger">
											123123
										</td>
									</tr>
									<tr>
										<th colspan="4" class="th-ledger span"><h5>Total :</h5></th>
										<td class="td-ledger">
											123123
										</td>
										<td class="td-ledger">
											123123
										</td>
										<td class="td-ledger">
											123123
										</td>
									</tr>
							</tfoot>

						</table>
					
					</div>
				

					<div class="row">
						<button type="button" class="btn btn-success download">Download</button>
					</div>

				</div>

			</div>

		</div>


	</div>

</div>
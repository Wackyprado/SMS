<!DOCTYPE html>
<html lang="en">
<head>
	<title>Email</title>
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col d-flex justify-content-center" >
			
		</div>
		<div class="col">
			<p>
				<strong><?php echo $full_name;?></strong> are requesting to register
			</p>
			<p>
				School Year of <strong><?=$school_year;?></strong> and School Term of <strong><?=$school_term;?> Semester</strong>
			</p>
			<p>
				<a href="http://localhost/StudentManagement/requestconfirm/sendmail/<?=$student_id;?>/<?=$school_year?>/<?=$school_term?>">Click Here to approve the requested file</a>
			</p>
		<!-- 	<button class="btn btn-success">CLICK HERE</button> -->

			<!-- <a href="https://www.facebook.com/">Click here</a> -->
			<!-- <a href="http://localhost/StudentManagement/requestconfirm/sendmail/?id=1001 " class="btn btn-success">Click Here to confirm</a> -->

			
		</div>
		<div class="col  d-flex justify-content-center">
			
		</div>
	</div>

</div>
</body>
</html>
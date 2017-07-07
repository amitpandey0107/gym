<?php require_once "header.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<!-- <img src="registration-header.jpg" alt="Registration Form" class="img-responsive"> -->
				<div class="viewBanner">
					<div class="textBanner">
						View All Employee
					</div>
				</div>
			</div>
		</div>
	
		<div class="row">
			<div class="col-sm-12">
				<div class="showListWrap">
					<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
		                    <tr>
		                        <th>S.N.</th>
		                        <th>Name</th>
		                        <th>Father Name</th>
		                        <th>Mother Name</th>
		                        <th>Email</th>
		                        <th>Department</th>
		                        <th>Designation</th>
		                        <th>Role</th>
		                        <th>Basic Salary</th>
		                        <th>DA</th>
		                        <th>HRA</th>
		                        <th>Gross Salary</th>
		                        <th>Date</th>
		                        <th>Action</th>
		                    </tr>
		                </thead>
		                <tbody>
		                <?php 
		                	$sql = 'select * from employee_info a join employee_office b on a.id = b.emp_id join employee_salary c on c.emp_id = a.id order by a.id desc';
		                	$result = mysqli_query($conn, $sql);
		                	$rowCount = mysqli_num_rows($result);
		                	if ($rowCount > 0){
		                		while ($row = mysqli_fetch_array($result)) {
		                			?>
		                			<tr>
		                				<td><?php echo $row["id"]; ?></td>
		                				<td><?php echo $row["emp_name"]; ?></td>
		                				<td><?php echo $row["emp_father_name"]; ?></td>
		                				<td><?php echo $row["emp_mother_name"]; ?></td>
		                				<td><?php echo $row["emp_email"]; ?></td>
		                				<td><?php echo $row["emp_designation"]; ?></td>
		                				<td><?php echo $row["emp_department"]; ?></td>
		                				<td><?php echo $row["emp_role"]; ?></td>
		                				<td><?php echo $row["basic_salary"]; ?></td>
		                				<td><?php echo $row["da"]; ?></td>
		                				<td><?php echo $row["hra"]; ?></td>
		                				<td><?php echo $row["gross_dalary"]; ?></td>
		                				<td><?php echo $row["date_created"]; ?></td>
		                				<td>
		                					<a href="javascript:void(0)" class="deleterow">
		                						<i class="fa fa-trash"></i>
		                					</a>
		                					&nbsp;
		                					<a href="javascript:void(0)" class="editrow">
		                						<i class="fa fa-pencil"></i>
		                					</a>
		                				</td>
		                			</tr>
		                			<?php
		                		}
		                	} else {
		                		?>
		                			<tr>
		                				<td colspan="13" style="text-align: center;"><strong>No record found !</strong></td>
		                			</tr>
		                		<?php
		                	}

		                ?>
		                </tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
</body>
</html>
<?php require_once "footer.php" ?>
<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#example').DataTable();
});
</script>
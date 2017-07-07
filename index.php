<?php require_once "header.php" ?>
<?php 
if (isset($_REQUEST["empRegSubmit"]) ){	
	$flag = 0;
	$count = count($_REQUEST["empName"]);
	for($i=0;$i<$count;$i++){
		$sql = 'INSERT INTO employee_info (emp_name, emp_father_name, emp_mother_name, 	emp_email) VALUES ("'.$_REQUEST["empName"][$i].'", "'.$_REQUEST["empFatherName"][$i].'", "'.$_REQUEST["empMotherName"][$i].'", "'.$_REQUEST["empEmail"][$i].'")';
		$result = mysqli_query($conn, $sql);
		$emp_id = mysqli_insert_id($conn);
		if ($result){
			$flag=1;
		} else {
			$flag=0;
		}
		$sql1 = 'INSERT INTO employee_office (emp_id, emp_designation, emp_department, emp_role) VALUES ('.$emp_id.', "'.$_REQUEST["emp_designation"][$i].'", "'.$_REQUEST["emp_department"][$i].'", "'.$_REQUEST["emp_role"][$i].'")';
		$result1 = mysqli_query($conn, $sql1);

		$sql2 = 'INSERT INTO employee_salary (emp_id, basic_salary, da, hra, gross_dalary) VALUES ('.$emp_id.', "'.$_REQUEST["basic_salary"][$i].'", "'.$_REQUEST["da"][$i].'", "'.$_REQUEST["hra"][$i].'", "'.$_REQUEST["gross_dalary"][$i].'")';
		$result2 = mysqli_query($conn, $sql2);
	}
	if ($flag==1){
		?>
		<script>
			jQuery(document).ready(function(){
				jQuery("#successalert").fadeIn(500);
				setTimeout(function(){ jQuery("#successalert").fadeOut(500); }, 5000);
			});
		</script>
		<?php
	} else {
		?>
		<script>
			jQuery(document).ready(function(){
				jQuery("#erroralert").fadeIn(500);
				setTimeout(function(){ jQuery("#erroralert").fadeOut(500); }, 5000);
			});
		</script>
		<?php
	}
}
?>

	<div class="container akbc">
		<div class="row">
			<div class="col-sm-12">
				<!-- <img src="registration-header.jpg" alt="Registration Form" class="img-responsive"> -->
				<div class="viewBanner">
					<div class="textBanner">
						Employee Registration
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<div class="alert alert-success messagesBox" id="successalert" style="display: none;">
				  <strong>Success!</strong> Recored saved successfully !!
				</div>
				<div class="alert alert-danger messagesBox" id="erroralert" style="display: none;">
				  <strong>Error!</strong> Failed to save, please try again !!
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-12">
				<div class="userAdd text-right">
					<a href="javascript:void(0)" id="addMoreEmp">
						<i class="fa fa-user-plus"></i>
						Add More
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="formWrap" id="formWrap">
				<form action="" method="POST" id="empRegistration" name="empRegistration" class="empRegistration">
					<div class="border">
						<div class="formRow">
							<div class="col-sm-12">
								<label for="empName">Name</label>
								<input type="text" name="empName[]" id="empName" class="form-control">
							</div>
						</div>
						<div class="formRow">
							<div class="col-sm-12">
								<label for="empFatherName">Father Name</label>
								<input type="text" name="empFatherName[]" id="empFatherName" class="form-control">
							</div>
						</div>
						<div class="formRow">
							<div class="col-sm-12">
								<label for="empMotherName">Mother Name</label>
								<input type="text" name="empMotherName[]" id="empMotherName" class="form-control">
							</div>
						</div>
						<div class="formRow">
							<div class="col-sm-12">
								<label for="empEmail">Email Address</label>
								<input type="text" name="empEmail[]" id="empEmail" class="form-control">
							</div>
						</div>
						<div class="formRow">
							<div class="col-sm-12">
								<label for="emp_designation">Designation</label>
								<input type="text" name="emp_designation[]" id="emp_designation" class="form-control">
							</div>
						</div>
						<div class="formRow">
							<div class="col-sm-12">
								<label for="emp_department">Department</label>
								<input type="text" name="emp_department[]" id="emp_department" class="form-control">
							</div>
						</div>
						<div class="formRow">
							<div class="col-sm-12">
								<label for="emp_role">Role</label>
								<input type="text" name="emp_role[]" id="emp_role" class="form-control">
							</div>
						</div>
						<div class="formRow">
							<div class="col-sm-12">
								<label for="basic_salary">Basic Salary</label>
								<input type="text" name="basic_salary[]" id="basic_salary" class="form-control">
							</div>
						</div>
						<div class="formRow">
							<div class="col-sm-12">
								<label for="da">DA</label>
								<input type="text" name="da[]" id="da" class="form-control">
							</div>
						</div>
						<div class="formRow">
							<div class="col-sm-12">
								<label for="hra">HRA</label>
								<input type="text" name="hra[]" id="hra" class="form-control">
							</div>
						</div>
						<div class="formRow">
							<div class="col-sm-12">
								<label for="gross_dalary">Gross Salary</label>
								<input type="text" name="gross_dalary[]" id="gross_dalary" class="form-control">
							</div>
						</div>	
					</div>				
					<div id="addMore">
						
					</div>
					<!-- #addMore -->
					<div class="formRow">
						<div class="col-sm-12">							
							<input type="submit" name="empRegSubmit" id="empRegSubmit" value="Register" class="btn btn-lg btn-danger empRegSubmit">
						</div>
					</div>
				</form>
			</div>
		</div>

	</div>

<?php require_once "footer.php" ?>

<script>
	jQuery(document).ready(function(){
		var i=1;
		jQuery("#addMoreEmp").on("click", function(){			
			jQuery("#addMore").append('<div class="border"><div class="formRow"><div class="col-sm-12"><label for="empName">Name</label><input type="text" name="empName[]" id="empName'+i+'" class="form-control"></div></div><div class="formRow"><div class="col-sm-12"><label for="empFatherName">Father Name</label><input type="text" name="empFatherName[]" id="empFatherName'+i+'" class="form-control"></div></div><div class="formRow"><div class="col-sm-12"><label for="empMotherName">Mother Name</label><input type="text" name="empMotherName[]" id="empMotherName'+i+'" class="form-control"></div></div><div class="formRow"><div class="col-sm-12"><label for="empEmail">Email Address</label><input type="text" name="empEmail[]" id="empEmail'+i+'" class="form-control"></div></div><div class="formRow"><div class="col-sm-12"><label for="emp_designation">Designation</label><input type="text" name="emp_designation[]" id="emp_designation'+i+'" class="form-control"></div></div><div class="formRow"><div class="col-sm-12"><label for="emp_department">Department</label><input type="text" name="emp_department[]" id="emp_department'+i+'" class="form-control"></div></div><div class="formRow"><div class="col-sm-12"><label for="emp_role">Role</label><input type="text" name="emp_role[]" id="emp_role'+i+'" class="form-control"></div></div><div class="formRow"><div class="col-sm-12"><label for="basic_salary">Basic Salary</label><input type="text" name="basic_salary[]" id="basic_salary'+i+'" class="form-control"></div></div><div class="formRow"><div class="col-sm-12"><label for="da">DA</label><input type="text" name="da[]" id="da'+i+'" class="form-control"></div></div><div class="formRow"><div class="col-sm-12"><label for="hra">HRA</label><input type="text" name="hra[]" id="hra'+i+'" class="form-control"></div></div><div class="formRow"><div class="col-sm-12"><label for="gross_dalary">Gross Salary</label><input type="text" name="gross_dalary[]" id="gross_dalary'+i+'" class="form-control"></div></div></div>');
			i++;
		});
	});
</script>
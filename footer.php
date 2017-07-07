<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<span>&copy; <?php  echo date ('Y'); ?> | </span><span>All Right Reserved.</span>
			</div>
		</div>
	</div>
</footer>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
</body>
</html>

<script>
	jQuery(function() {

	jQuery("#empRegistration").validate({
		ignore: ".ignore",
		rules: {			
			empName: "required",
			empFatherName: "required",
			empMotherName: "required",
			empEmail: {
				required : true, 
				email : true, 
			}
		},
		messages: {			
			empName: "please enter your name",
			empFatherName: "please enter your father name",			
			empMotherName: "please enter your mother name",	
			empEmail: {
				required : "please enter email address", 
				email : "please enter valid email address", 
			}		
		},
	});
});


</script>
<script>
$( document ).ready(function() {
	$('#new_password2').keyup(function() {
		
		var pass1 = $("#new_password1").val();
		var pass2 = $("#new_password2").val();
		console.log('echo');
		if(pass1.length == pass2.length)
		{
			if(pass1 != pass2)
			{
				$(".btn").attr("disabled", "disabled");
				$(".vis_pass").css('display', 'block');
			}
			else
			{
				$(".vis_pass").css('display', 'none');
				$(".btn").removeAttr("disabled");
			}
		}
		if (pass1.length > pass2.length)
		{
			$(".vis_pass").css('display', 'none');
			$(".btn").attr("disabled", "disabled");
		}
		if (pass1.length < pass2.length)
		{
			$(".btn").attr("disabled", "disabled");
			$(".vis_pass").css('display', 'block');
		}
	});
	
});
</script>
<div class="col-md-12 col-md-offset-0" >
	<div class="page-header"style="margin-top:0px;">
	<h1>Account settings <small> | <a href="<?=BASE_URL?>?module=config&method=changelog">login change</a> </small></h1>
	</div>

	<h2 style = "margin-top:0px; margin-bottom:20px;">Password change</h2>
	<?php
		if(isset($msg))
		{
			echo '<p style="color:red; margin-top:10px;"">'.$msg.'</p>';
		}		
	?>
	<div id="form_login">
		<form class="form-horizontal" method="POST" action="<?=BASE_URL?>?module=config&method=changepass#">
			<div class="form-group">
				<div class="col-sm-4">
					<input type="password" class="form-control" name="password" placeholder="Current password">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input type="password" class="form-control" name="new_password1" id="new_password1" placeholder="Password">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input type="password" class="form-control" name="new_password2" id="new_password2" placeholder="Password">
				</div>
				<div class="col-sm-2 vis_pass alert alert-danger" style="display: none; height:34px; margin-bottom:0px; padding:6px;" role="alert">Passwords do not match</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<button type="submit" class="btn btn-info">Save</button> 
				</div>
			</div>
		</form>
	</div>
</div>
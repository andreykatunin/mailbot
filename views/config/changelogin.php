<div class="col-md-12 col-md-offset-0" >
	<div class="page-header"style="margin-top:0px;">
		<h1>Account settings <small> | <a href="<?=BASE_URL?>?module=config&method=changepass">password change</a> </small></h1>
	</div>

	<h2 style = "margin-top:0px; margin-bottom:20px;">Login change</h2>
	<?php
		if(isset($msg))
		{
			echo '<p style="color:red; margin-top:10px;"">'.$msg.'</p>';
		}		
	?>
	<div id="form_login">
		<form class="form-horizontal" method="POST" action="<?=BASE_URL?>?module=config&method=changelog#">
			<div class="form-group">
				<div class="col-sm-4">
					<input type="text" class="form-control" name="new_login" placeholder="New login">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input type="password" class="form-control" name="password" placeholder="Password">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<button type="submit" class="btn btn-info">Save</button> 
				</div>
			</div>
		</form>
	</div>
</div>


<div class="col-md-12" >	
	
	<div class="page-header"style="margin-top:0px; margin-bottom:0px">
		<h1>Mail settings <small> | <a href="<?=BASE_URL?>?module=config&method=settings">account settings</a></small></h1>
	</div>



	
	<div class="row">
		<div class="col-md-12">
			<h3>Add or change your email account to manage your mail</h3>
		</div>
	</div>
	<?php 
	if(isset($msg))
	{
		echo '<div class="alert alert-'.$alert.'" role="alert"> <strong>! </strong>'.$msg.' </div>';
	}
	?>
	<?php 
	if(isset($information))
	{
		echo '<div class="alert alert-info" role="alert"> <strong>! </strong>'.$information.' </div>';
	}
	?>
</div>
	
<div class="col-md-4" >		
	<form class="form-horizontal" method="POST" action="">
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-4 control-label">Email</label>
			<div class="col-sm-8">
				<input type="email" class="form-control" value="<?=(isset($account->email)) ? $account->email : "Guest"?>" name="email" placeholder="Email">
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-4 control-label">Password</label>
			<div class="col-sm-8">
				<input type="password" class="form-control" name="password" value="<?=(isset($account->email_password)) ? $account->email_password : "Guest"?>" placeholder="Password">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-4 col-sm-8">
				<input type="hidden" name="login_id" value="<?=(isset($account->user_id)) ? $account->user_id : 0 ?>">
				<button type="submit" class="btn btn-default"><?=$button?></button> 
				<!--<button type="submit" class="btn btn-default disabled">Clear</button> -->
			</div>
		</div>
	</form>
		
</div>

<script>
$(document).ready(function() {
    
	var flag = false;
    
	$('#login_change').click(function(){
		if(flag == false){
			$('#form_login').show();
			flag = true;
		}
		else{
			$('#form_login').hide();
			flag = false;
		}
    });
});

</script>

<div class="col-md-12 col-md-offset-0" >	
	
	<div class="page-header"style="margin-top:0px;">
		<h1>Account settings <small> | <a href="<?=BASE_URL?>?module=config&method=manager">mail settings </small></h1>
	</div>
	
	<div class="col-md-4"> 
		<a href="<?=BASE_URL?>?module=config&method=changelog" id="login_change">Change login</a> 
		<a href="<?=BASE_URL?>?module=config&method=changepass" id="pass_change">Change password</a> 	
	</div>
	<!--
	<div class="row">
		<div class="col-md-6">
			<button type="button" class="btn btn-default" id="login_change">Change login</button>
			
			<div id="form_login" style="display: none">
				<form class="form-horizontal" method="POST" action="<?=BASE_URL?>?module=config&method=getemail#">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">New login</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="new_login" placeholder="New login">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" name="password" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-warning">Save</button> 
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-6">
			<button type="button" class="btn btn-default" id="pass_change">Change password</button>
		</div>
	</div>
	-->
</div>
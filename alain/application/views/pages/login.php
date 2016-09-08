<div class="col-sm-9 col-md-9 prima-Div">
	<div class="row">
		<div class="col-sm-3 col-md-3">
			
		</div>
		<div class="col-sm-6 col-md-6" style="background-color:#ececec;min-height:400px;">
		<h3 class="title">School Management System</h3>
				<form class="form-horizontal loginForm" action="http://ads1ict.ethdigitalcampus.com/DCWeb/authenticate.do" method="post" style="margin:0px;padding:0px 35px 0px 35px;">
				   <div class="control-group" style="margin-bottom:10px;">
				    <label class="control-label" style="margin-bottom:10px;" for="inputEmail">Sign In</label>
				    <div class="controls">
				      <input type="text" name="loginid" placeholder="User ID">
				    </div>
				  </div>
				  <div class="control-group">
				    <div class="controls">
				      <input type="password" name="password" placeholder="Password">
				    </div>
				  </div>
				  <input type="hidden" name="dbConnVar" value="ADS1">
					<p><?php echo anchor('http://ads1ict.ethdigitalcampus.com/DCWeb/form/jsp_sms/ForgotPasswordNew.jsp?mailflag=true&header=true&dbConnVar=ADS1', 'Forgot password?') ?> <button class="btn btn-info pull-right"><b>Sign In <i class="fa fa-sign-in fa-fw"></i></b></button></p>
				</form>		
		</div>	
		<div class="col-sm-3 col-md-3">
			
		</div>		
	</div>
</div>

		<div style="background-color:#ececec;min-height:400px;text-align:center;">
		<h3 class="title">School Management System</h3>
				<form class="form-horizontal loginForm" action="http://adsict.ethdigitalcampus.com/DCWeb/authenticate.do" method="post" style="margin:0px;padding:0px 35px 0px 35px;">
				   <div class="control-group" style="margin-bottom:10px;">
						 <br><br>
				    <label class="control-label" style="margin-bottom:10px;" for="inputEmail">Sign In</label>
						<br><br>
				    <div class="controls">
				      <input type="text" name="loginid" placeholder="User ID" style="border: 1px solid #000;padding:10px;">
				    </div>
				  </div>
				  <div class="control-group">
						<br>
				    <div class="controls">
				      <input type="password" name="password" placeholder="Password" style="border: 1px solid #000;padding:10px;">
				    </div>
				  </div>
				  <input type="hidden" name="dbConnVar" value="ADS">
					<br><br>
					<button class="btn btn-warning btn-top-head dpsRight"><b>Sign In <i class="fa fa-sign-in fa-fw"></i></b></button></p>
					<p><?php echo anchor('http://adsict.ethdigitalcampus.com/DCWeb/form/jsp_sms/ForgotPasswordNew.jsp?mailflag=true&header=true&dbConnVar=ADS', 'Forgot password?') ?>

				</form>
		</div>
	</div>
</section>


	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="index">
				Cribpark Service Admin
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					
					<li class="">						
						<a href="signup.html" class="">
							Don't have an account?
						</a>
						
					</li>
					
					<li class="">						
						<a href="index.html" class="">
							<i class="icon-chevron-left"></i>
							Back to Homepage
						</a>
						
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="account-container">
	
	<div class="content clearfix">
		
		
		
			<h1>Admin Login</h1>		
			
			<div class="login-fields">
				
				<p>Please provide your details</p>
				
				
				
				
					<?php echo $this->Form->create('User', array('action'=>'admin_adduser')); ?>
                    <?php 
                        	                                                                              
                      	echo $this->Form->input('username', array('placeholder'=>'username', 'id'=>'name', 'required'=>'required')); 
                      	echo '<br/>';
                        echo $this->Form->input('password', array('placeholder'=>'password', 'id'=>'password'));
                      	echo '<br/>';


                    ?> 
                    <?php echo $this->Form->end(__('Add User')); ?>
                    
                    <?php /*echo $this->Js->submit('Login', array(
                            	'before'=>$this->Js->get('#sending')->effect('fadeIn'), 
                            	'success'=>$this->Js->get('#loggedin')->effect('fadeOut'),
                            	'class'=>"btn btn-large"
                            	));*/
                    ?>
                    <div id='sending' style="display: none; background-color:; padding:4px;">Logging in ...</div>
                    <div id='loggedin' style="display: none; background-color:; padding:4px;">Loggedin!<div>
				<!-- /password -->
				
			</div> <!-- /login-fields -->
			
			
			
			
		
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->



<div class="login-extra">
	<a href="#">Reset Password</a>
</div> <!-- /login-extra -->



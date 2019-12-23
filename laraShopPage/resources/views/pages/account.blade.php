﻿  @extends('layouts.masterlayout')


  @section('content')
  
  
  
  
  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
      
        
        <div class="page-content">
          
            <div class="account-login">
              
   
          
              <div class="box-authentication">
                <h4>Login</h4>
               <p class="before-login-text">Welcome back! Sign in to your account</p>
                <label for="emmail_login">Email address<span class="required">*</span></label>
                <input id="emmail_login" type="text" class="form-control">
                <label for="password_login">Password<span class="required">*</span></label>
                <input id="password_login" type="password" class="form-control">
                <p class="forgot-pass"><a href="#">Lost your password?</a></p>
                <button class="button"><i class="fa fa-lock"></i>&nbsp; <span>Login</span></button><label class="inline" for="rememberme">
													<input type="checkbox" value="forever" id="rememberme" name="rememberme"> Remember me
												</label>
              </div>
              <div class="box-authentication">
                <h4>Register</h4><p>Create your very own account</p> 											
                <label for="emmail_register">Email address<span class="required">*</span></label>
                <input id="emmail_register" type="text" class="form-control">
                <button class="button"><i class="fa fa-user"></i>&nbsp; <span>Register</span></button>
                
                <div class="register-benefits">
												<h5>Sign up today and you will be able to :</h5>
												<ul>
													<li>Speed your way through checkout</li>
													<li>Track your orders easily</li>
													<li>Keep a record of all your purchases</li>
												</ul>
											</div>
              </div>
   
    
        </div>
      </div>

    </div>
  </section>
  <!-- Main Container End --> 
    


  
  
  @endsection
  
<?php include 'master/header.view.php';?>
 
<div class="container">
    <div class="row">
        <div class='col-md-3'></div>
        <div class="col-md-6">
            <div class="login-box well">
                    <form method="POST" action="/login">
                        <legend>Sign In</legend>
                        <div class="form-group">
                            <label for="username-email">E-mail</label>
                            <input value='' id="username-email" placeholder="E-mail" type="text" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" value='' placeholder="Password" type="password" class="form-control" required />
                        </div>
                        <div class="input-group">
                          <div class="checkbox">
                            <label>
                              <input id="login-remember" type="checkbox" name="remember" value="0"> Remember me
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-default btn-login-submit btn-block m-t-md" value="Login" />
                        </div>
                        <span class='text-center'><a href="/resetting/request" class="text-sm">Forgot Password?</a></span>
                        <div class="form-group">
                            <p class="text-center m-t-xs text-sm">Do not have an account?</p> 
                            <a href="/register" class="btn btn-default btn-block m-t-md">Create an account</a>
                        </div>
                    </form>
                
            </div>
        </div>
        <div class='col-md-3'></div>
    </div>
</div>


<?php 

// include 'master/social.view.php';
include 'master/footer.view.php';

?>
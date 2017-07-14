<?php require "common/header.php" ?>

<style>
	body
	{
	    background: url('http://farm3.staticflickr.com/2832/12303719364_c25cecdc28_b.jpg') fixed;
	    background-size: cover;
	    padding: 0;
	    margin: 0;
	}
</style>

<div class="alert alert-danger" id="errorWrapper" style="display: none;">
  <strong>ERROR!</strong> <span id="error"></span>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pr-wrap">
                <div class="pass-reset">
                    <label>
                        Enter the email you signed up with</label>
                    <input type="email" placeholder="Email" />
                    <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" />
                </div>
            </div>
            <div class="wrap">
                <p class="form-title">
                    Sign In</p>
                <form class="login" id="loginForm">
	                <input type="email" id="email" placeholder="Email" />
	                <input type="password" id="password" placeholder="Password" required />
	                <input type="submit" value="Sign In" class="btn btn-success btn-sm" required/>
                </form>
            </div>
        </div>
    </div>
</div>


<?php require "common/footer.php" ?>
<body class="loginpage">

<div class="loginpanel">
    <div class="loginpanelinner">
        <form id="login_form" method="POST" action="<?=  base_url()?>user/login">
            <?php if (isset($login_error)) {
                echo $login_error;
            } ?>
            <div class="inputwrapper login-alert">
                <div class="alert alert-error">Invalid username or password</div>
            </div>
            <div class="inputwrapper animate1 bounceIn">
                <input type="text" name="username" id="username" placeholder="Enter any username" />
            </div>
            <div class="inputwrapper animate2 bounceIn">
                <input type="password" name="password" id="password" placeholder="Enter any password" />
            </div>

            <div class="inputwrapper animate3 bounceIn">
                <button name="submit">Login</button>
            </div>

            <div class="inputwrapper animate3 bounceIn">
                <label class="left margin-top">Need an account?</label>
                <a href="<?php echo base_url() ?>register" class="btn blue">Register</a>
            </div>
            
        </form>
    </div><!--loginpanelinner-->
</div><!--loginpanel-->


</body>

<!-- <div class="row-fluid">
    <center>
        <form class="login-form span12" id="login_validation" action="<?=  base_url()?>user/login" method="post" novalidate="novalidate">
            <h3 class="form-title">Sign In</h3>
            <div class="alert alert-danger display-hide <?php if (!validation_errors() && !isset($login_error)){echo 'hidden';} ?>">
            <button class="close" data-close="alert"></button>
            <span><?php echo validation_errors(); ?></span>
            <?php if (isset($login_error))
            {
               echo '<span>'.$login_error.'</span>'; 
            }
            ?>
        </div>
            <div class="form-group">
                <label class="left">Email</label>
                <input class=" span4 form-control form-control-solid placeholder-no-fix validate[required,custom[email],minSize[6],maxSize[25]]" maxlength="25" type="text" autocomplete="off" placeholder="Email" name="email" style="cursor: auto; background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QsPDhss3LcOZQAAAU5JREFUOMvdkzFLA0EQhd/bO7iIYmklaCUopLAQA6KNaawt9BeIgnUwLHPJRchfEBR7CyGWgiDY2SlIQBT/gDaCoGDudiy8SLwkBiwz1c7y+GZ25i0wnFEqlSZFZKGdi8iiiOR7aU32QkR2c7ncPcljAARAkgckb8IwrGf1fg/oJ8lRAHkR2VDVmOQ8AKjqY1bMHgCGYXhFchnAg6omJGcBXEZRtNoXYK2dMsaMt1qtD9/3p40x5yS9tHICYF1Vn0mOxXH8Uq/Xb389wff9PQDbQRB0t/QNOiPZ1h4B2MoO0fxnYz8dOOcOVbWhqq8kJzzPa3RAXZIkawCenHMjJN/+GiIqlcoFgKKq3pEMAMwAuCa5VK1W3SAfbAIopum+cy5KzwXn3M5AI6XVYlVt1mq1U8/zTlS1CeC9j2+6o1wuz1lrVzpWXLDWTg3pz/0CQnd2Jos49xUAAAAASUVORK5CYII=); background-attachment: scroll; background-position: 100% 50%; background-repeat: no-repeat;" onkeypress="return blockUserInputs(this, event, true, true, false, false, false, true, true, true, true, false, true, false, false)">
            </div>
            <div class="form-group">
                <label class="left">Password</label>
                <input class="span4 form-control form-control-solid placeholder-no-fix validate[required]" maxlength="20" type="password" autocomplete="off" placeholder="Password" name="pass" style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QsPDhss3LcOZQAAAU5JREFUOMvdkzFLA0EQhd/bO7iIYmklaCUopLAQA6KNaawt9BeIgnUwLHPJRchfEBR7CyGWgiDY2SlIQBT/gDaCoGDudiy8SLwkBiwz1c7y+GZ25i0wnFEqlSZFZKGdi8iiiOR7aU32QkR2c7ncPcljAARAkgckb8IwrGf1fg/oJ8lRAHkR2VDVmOQ8AKjqY1bMHgCGYXhFchnAg6omJGcBXEZRtNoXYK2dMsaMt1qtD9/3p40x5yS9tHICYF1Vn0mOxXH8Uq/Xb389wff9PQDbQRB0t/QNOiPZ1h4B2MoO0fxnYz8dOOcOVbWhqq8kJzzPa3RAXZIkawCenHMjJN/+GiIqlcoFgKKq3pEMAMwAuCa5VK1W3SAfbAIopum+cy5KzwXn3M5AI6XVYlVt1mq1U8/zTlS1CeC9j2+6o1wuz1lrVzpWXLDWTg3pz/0CQnd2Jos49xUAAAAASUVORK5CYII=); background-attachment: scroll; background-position: 100% 50%; background-repeat: no-repeat;">
            </div>
            <div class="row-fluid margin-top">
                <button type="submit" class="btn span12 green uppercase right">Login</button>
            </div>
            <div class="row-fluid margin-top">
                <label class="left margin-top">Need an account?</label>
                <a href="<?php echo base_url() ?>register" class="btn blue uppercase left margin-left">Register</a>
            </div>
        </form>
    </center>
</div> -->

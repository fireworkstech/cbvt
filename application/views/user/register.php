<body class="loginpage">

<div class="loginpanel">
    <div class="loginpanelinner">
        <form id="register_from" method="POST" action="<?=base_url()?>user/register">
            <div class="inputwrapper login-alert">
                <div class="alert alert-error">Invalid username or password</div>
            </div>
            <div class="inputwrapper animate1 bounceIn">
                <input type="text" name="username" id="username" placeholder="Enter any username" />
            </div>
            <div class="inputwrapper animate2 bounceIn">
                <input type="password" name="password" id="password" placeholder="Enter any password" />
            </div>
             <div class="inputwrapper animate2 bounceIn">
                <select name="type" id="type" class="uniformselect" >
                    <option value="driver">Driver</option>
                    <option value="dmv">DMV</option>
                    <option value="bank">Bank</option>
                </select>
            </div>
            <div class="inputwrapper animate3 bounceIn">
                <button name="submit" onclick="registerUser()">Register</button>
            </div>

            <div class="inputwrapper animate3 bounceIn">
                <!-- <a href="<?php echo base_url() ?>login" class="btn blue">Login</a> -->
            </div>
            
        </form>
    </div><!--loginpanelinner-->
</div><!--loginpanel-->


</body>

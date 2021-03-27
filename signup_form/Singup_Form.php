<!------------------------- START CREATING SIGNUP FORM  ------------------------------->
<?php include('Signup_header.php'); ?>
<?php include('browser_border.php'); ?>
<div class="Signup_out_area">

    <form action="?" method="post" name="formControl" enctype="multipart/form-data" onsubmit="return myvalidation()">
        <div class="Signup_input_area" id="Signup_input_arrea">
            <h1 class="top_letters">Signup Now please Correct Fill</h1>
            <div class="Signup_form_control">

            <span class="alert_message"><pre id="alert"></pre></span><br><br>

            <label for="username">Username</label><input type="text" name="name" id="A" placeholder="Username" autocomplete="off" class="Signup cotch"></div>
           
            <div class="Signup_form_control">
            <label for="email">Email address</label><input type="text" name="email" id="B" placeholder="Enter email address or phone number" autocomplete="off" class="Signup cotch"></div>
           
            <div class="Signup_form_control">
            <label for="password">Password</label><input type="password" name="password" id="C" placeholder="Password" autocomplete="offq" class="Signup cotch"></div>
           
            <div class="Signup_form_control">
            <label for="confirm password">Confirm Password</label><input type="password" name="" id="D" placeholder="Confirm Password" autocomplete="off" class="Signup cotch"></div>
           
            <div class="Signup_form_control">
            <label for="ciry">City</label><input type="text" name="city" id="E" placeholder="City" autocomplete="off" class="Signup cotch"></div>

            <label for="Sexm" id="sexm">Gender</label>
            <div class="Signup_form_control sex">
            <span class="Male">Male</span><input type="radio" name="sex" value="Male" id="F" value="" class="Signupsex radio1">
            <span class="Male">Female</span><input type="radio" name="sex" value="Female" id="F" value="" class="Signupsex radio2">
            <span class="Male">Custom</span><input type="radio" name="sex" value="Custom" id="F" value="" class="Signupsx radio3">
            <label id="birth">Date of Birth</label><input type="date" name="dob" id="G" class="Signupdate date"></div>
           
            <label for="upload_id" id="file">Upload ID</label>
            <div class="upload_file">
            <div class="Signup_form_control upl"><input type="file" name="upload" id="H" autocomplete="" class="Signup upload">
            <data id="upload_message"></data></div></div><br>

            <div class="Signup_form_control"><input type="checkbox" value="Submit" id="Icheck" class="Signupm chk">
            <data id="term">If you agree so Check Term & Condition?</data></div>

            <div class="Signup_form_control"><input type="submit" name="signup" value="Submit" id="I" class="Signup btn"></div>
        </div>
        <button type="button" value="0" class="btn_Signup" id="buttonsign">SignUp</button>
        <a href="../Login_Form/login_form.php?id=346"><button type="button" class="btn_login">LogIn</button></a>
    </form>
</div>
<?php include('javascript.php'); ?>
<?php include('phpSignup.php'); ?>
<?php include('Signup_footer.php'); ?>
<!------------------------- END CREATING SIGNUP FORM  ------------------------------->
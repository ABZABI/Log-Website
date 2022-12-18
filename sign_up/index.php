<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/style.css " >
    <link rel="icon" type="image/x-icon" href="../homepage/assets/images_and_logo/logo/x-icon_3.png" >
    <title>Emanan | Sign Up</title>
</head>
<body>
    <div class="container">
        <span class="form-container-span">
            <span class="logo-span">
                <img src="../homepage/assets/images_and_logo/logo/logo_2.png" alt="Company Logo" width="70px">
                <h1>SIGN UP</h1>
            </span>
            <form method="post" class="sign-up">
                <div>
                    <span class="first-name-span">
                        <label for="first_name">First Name<span class="star">*</span></label>
                        <input required="required" type="text" title="user-info" id="first_name" name="first_name">
                    </span>
                    <span class="last-name-span">
                        <label for="last_name">Last Name<span class="star">*</span></label>
                        <input required="required" type="text" title="user-info" id="last_name" name="last_name">
                    </span>
                </div>
                <div >
                    <span class="dob-span">
                        <label for="dob">Date of Birth<span class="star">*</span></label>
                        <input required="required" type="date" title="user-info" id="dob" name="dob">
                    </span>
                    <span class="gender-span">
                        <label for="gender">Gender<span class="star">*</span></label>
                        <input required="required" type="text" title="user-info" id="gender" name="gender">
                    </span>
                </div>
                <div >
                    <span class="email-span">
                        <label for="email">Email<span class="star">*</span></label>
                        <input required="required" type="email" title="user-info" id="email" name="email">
                    </span>
                    <span class="phone-span">
                        <label for="phone">Phone<span class="star">*</span></label>
                        <input required="required" type="text" title="user-info" id="phone" name="phone">
                    </span>
                </div>
                <div>
                    <span class="department-span">
                        <label for="department">Department<span class="star">*</span></label>
                        <input required="required" type="department" title="user-info" id="department" name="department">
                    </span>
                    <span class="staff_id-span">
                        <label for="staff_id">Staff ID<span class="star">*</span></label>
                        <input required="required" type="staff_id" title="user-info" id="staff_id" name="staff_id">
                    </span>
                </div>
                <div>
                    <span class="password-span">
                        <label for="password">Password<span class="star">*</span></label>
                        <input required="required" type="password" title="user-info" id="password" name="password">
                    </span>
                    <span class="c-password-span">
                        <label for="c-password">Confirm Password<span class="star">*</span></label>
                        <input required="required" type="password" title="user-info" id="c-password" name="c-password">
                    </span>
                </div>
                <a href="../homepage/index.html">
                    <span class="reg-btn">
                        <input type="submit" class="register-btn" value="REGISTER">
                    </span>
                </a>
            </form>
            <span class="base-info">
                <p class="star-required">All fields with <span class="bold star">*</span> are required</p>
                <p>
                    <form class="check-terms">
                        <input type="checkbox" name="terms" class="terms" title="Terms & Conditions" required="required"><label for="terms">I accept the <a href="">Terms Of Service</a></label>
                    </form>
                </p>
            </span>
            <div class="register">
                <a href="../homepage/index.html">Already have an account? Login</a>
            </div>
        </span>
    </div>
</body>
</html>
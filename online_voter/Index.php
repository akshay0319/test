<body>
    <?php include("./includes/header.php") ?>
    <!-- <img src="./img/voteq.jpg" style="height:1000px; width:500px;"> -->
    <section>
        <div class="home-container">
            <div class="login-container">
                <div class="tab">
                    <button class="tablinks" onclick="openpage(event, 'login')">login</button>
                    <button class="tablinks" onclick="openpage(event, 'registration')">registration</button>
                </div>

                <form action="login.php" method="POST">
                    
                <div id="login" class="tabcontent" style="display:block;">
                    <p class="logbox-title">username</p>
                    <div class="loginid-box">
                        <input class="login-input" type="text" name="user_id" placeholder=" Type your username">
                    </div>
                    <p class="logbox-title">Password</p>
                    <div class="password-box">
                        <input class="password-input" type="password" name="password" placeholder="Type your Password" id="myInput">
                    </div>
                    <div class="forgot-psw"><a class="link" href="forgotpsw.php">forget Password ?</a></div>
                    <div class="loginchkbx">
                        <input type="checkbox" onclick="myFunction()">Show Password
                    </div>
                    <div class="logbox-submit">
                        <input type="submit" class="logbox-subtn" name="submit1" value="LOGIN">
                    </div>
                    <div class="logbox-Option">
                        <p>Or Sign Up Using</p>
                        <div>
                            <div>
                                <i class="fa-brands fa-facebook-f"></i>
                                <i class="fa-brands fa-google"></i>
                            </div>
                        </div>
                    </div>
                </div>
                </form>

                <form action="register.php" method="POST">
                    <div id="registration" class="tabcontent">
                        <div class="reg_name">
                            <input class="reg_box" type="text" name="fname" placeholder="First name" required>
                            <input class="reg_box" type="text" name="lname" placeholder="Last name" required>
                        </div>
                        <div class="reg_name">
                            <input class="reg_box" type="text" name="user_name" placeholder="User name" required>
                            <input class="reg_box" type="email" name="email" placeholder="E-mail " required>
                        </div>
                        <div class="reg_name">
                            <input class="reg_box" type="Password" name="password" placeholder="Password" id="txtPassword" onclick="ValidatePassword()" required>
                            <input class="reg_box" type="Password" placeholder="Confirm Password" id="txtConfirmPassword" required>
                        </div>
                        <div class="reg_name">
                            <input class="reg_box" type="text" name="phone_num" placeholder="Phone number" required>
                        </div>
                        <div class="reg_submit">
                            <button type="submit" class="reg_subtn">Submit</button>
                        </div>
                    </div>
                </form>

                <script>
                    function openpage(evt, pagename) {
                        var i, tabcontent, tablinks;
                        tabcontent = document.getElementsByClassName("tabcontent");
                        for (i = 0; i < tabcontent.length; i++) {
                            tabcontent[i].style.display = "none";
                        }
                        tablinks = document.getElementsByClassName("tablinks");
                        for (i = 0; i < tablinks.length; i++) {
                            tablinks[i].className = tablinks[i].className.replace(" active", "");
                        }
                        document.getElementById(pagename).style.display = "block";
                        evt.currentTarget.className += " active";
                    }

                    function myFunction() {
                        var x = document.getElementById("myInput");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                    }

                    function Validate() {
                        var password = document.getElementById("txtPassword").value;
                        var confirmPassword = document.getElementById("txtConfirmPassword").value;
                        if (password != confirmPassword) {
                            alert("Passwords do not match.");
                            return 0;
                        }
                        return true;
                    }
                </script>
            </div>
        </div>
    </section>

    <?php include("./includes/footer.php") ?>
</body>
<?php
include ("header.php");
?>
<div class="login-register-area pt-95 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                        <div class="login-register-wrapper">
                            <div class="login-register-tab-list nav">
                                <a class="active" data-toggle="tab" href="#lg1">
                                    <h4> login </h4>
                                </a>
                                <a data-toggle="tab" href="#lg2">
                                    <h4> register </h4>
                                </a>
                            </div>
                            <div class="tab-content">
                                <div id="lg1" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="loggedin.php" method="post">
                                                <input type="text" name="user_name" placeholder="Username">
                                                <input type="password" name="user_password" placeholder="Password">
                                                <div class="button-box">
                                                    <button type="submit">Login</button>
													<!-- <input type="hidden" name="type" value="login"/>
												   <div id="form_login_msg" class="success_field"></div> -->
                                                </div>
                                                <br>
                                                <strong style="color: #da2020;">
                                                    
                                                    <?php 
                                                        if(isset($_SESSION['login_msg1'])) {
                                                            echo $_SESSION['login_msg1'];
                                                        } 
                                                        if(isset($_SESSION['login_msg2'])) {
                                                            echo $_SESSION['login_msg2'];
                                                        } 
                                                    ?>

                                                </strong>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="lg2" class="tab-pane">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form method="post" id="frmRegister">
                                                <input type="text" name="name" placeholder="Name" id="name" required>
												<input name="email" id="email" placeholder="Email" type="email" required>
												<div id="email_error" class="error_field"></div>
                                                <input type="password" name="password" placeholder="Password" id="password" required>
                                                <input type="text" name="mobile" placeholder="Mobile" id="mobile" required>
                                                <div class="button-box">
                                                    <button type="submit" id="register_submit">Register</button>
                                                </div>
												<input type="hidden" name="type" value="register"/>
												<div id="form_msg" class="success_field"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<?php
include("footer.php");
?>
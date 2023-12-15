<?php
$pageTitle = "Login";
$pageStyles = '<link rel="stylesheet" href="../../Assets/css/login.css" rel="stylesheet" /> 
<link rel="stylesheet" href="../../Assets/css/styles.css" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">';
$pageScripts = '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>';


require("../../Controller/register.php");
require("../templates/header.php");
?>


<div style="padding-top: 10vh; background-color: #eee;">
  <section class="h-100 gradient-form" style=" ">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">We are more than just a company</h4>
                  <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">


                  <div class="text-center">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                      style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">We are The () Team</h4>
                  </div>

                  <div class="container mt-5">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="alert fade_success .fade"> <button aria-hidden="true" data-dismiss="alert"
                            class="close" type="button">&times;</button> <strong>success!</strong> </div>
                        
                            <div class="alert fade_error .fade"> <button aria-hidden="true" data-dismiss="alert" class="close" type="button">&times;</button> <strong>error!</strong> </div>
                    </div>
                  </div>
                  <?php
                  // Display registration error if present
                  if (!empty($registrationError)) {
                    echo '<p>' . htmlspecialchars($registrationError, ENT_QUOTES, 'UTF-8') . '</p>';
                  }
                  ?>

                  <form method="POST" action="../../Controller/register.php">
                    <p>Please login to your account</p>

                    <div class="form-outline mb-4">
                      <input type="text" id="form1ExampleName" name="userNameInput" class="form-control"
                        placeholder="Name" />
                      <label class="form-label" for="form1ExampleName">Username</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="email" id="form1ExampleEmail" name="emailInput" class="form-control"
                        placeholder="Email address" />
                      <label class="form-label" for="form1ExampleEmail">Email</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" id="form1ExamplePswd" name="pswdInput" class="form-control"
                        placeholder="Password" />
                      <label class="form-label" for="form1ExamplePswd">Password</label>
                    </div>


                    <div class="form-outline mb-4">
                      <input type="password" id="form1ExampleCnfrm" name="cfrmPswdInput" class="form-control"
                        placeholder="Confirmation" />
                      <label class="form-label" for="form1ExampleCnfrm">Confirmation</label>
                    </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" name="registerBtn"
                        type="submit">Sign Up</button>
                      <a class="text-muted" href="#!">Forgot password?</a>
                    </div>

                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Already have an account?</p>
                      <button type="button" class="btn btn-outline-danger">Log in</button>
                    </div>

                    <!-- <div class="radio-container">
                      <div><b>Type de registration:</b></div>
                      <div class="form-check">
                        <input class="" type="radio" name="typeUser" id="flexRadioDefault1" value="Client">
                        <label class="form-check-label" for="flexRadioDefault1">Client</label>
                      </div>
                      <div class="form-check">
                        <input class="" type="radio" name="typeUser" id="flexRadioDefault2" value="Artisan">
                        <label class="form-check-label" for="flexRadioDefault2">Artisan</label>
                      </div>
                    </div> -->

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>

<?php
echo $pageScripts;
require("../templates/footer.php");
?>
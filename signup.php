<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign up</title>
    <!-- web logo -->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/img/logo/logo.png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css" />
    <!-- plain css -->
    <link rel="stylesheet" href="./assets/css/index.css?<?php echo time(); ?>" />
</head>

<body>
    <!-- main container of the form -->
    <div class="form-container">
        <div class="text-center">
            <h1 class="text-black">
                Research<span class="text-primary">Hub</span>
            </h1>
            <p>Create your account</p>
        </div>

        <!-- displays the error or success message when authenticating whether the password are incorrect and etc -->
        <?php if (isset($_GET["error"])) { ?>
            <div class="alert alert-danger text-center" role="alert">
                <?php echo $_GET['error'] ?>
            </div>
        <?php } ?>
        <?php if (isset($_GET["success"])) { ?>
            <div class="alert alert-success text-center" role="alert">
                <?php echo $_GET['success'] ?>
            </div>
        <?php } ?>

        <!-- start of the form tag where all data are going to signup.php and perform the backend logic -->
        <form class="mt-1" action="./scripts/authentication/signup.php" method="POST">
            <div class="form-group">
                <label for="FULL_NAME">Enter your Full name</label>
                <input id="EMAIL" type="text" class="form-control mt-1 input" placeholder="ex. Warner Kayleigh "
                       name="FULL_NAME" required/>
            </div>
            <div class="form-group mt-2">
                <label for="EMAIL">Enter your Email</label>
                <input id="EMAIL" type="email" class="form-control mt-1 input"
                       placeholder="ex. warnerkayleigh@gmail.com" name="EMAIL" required/>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <label for="PASSWORD">Enter your Password</label>
                    <input id="PASSWORD" type="password" class="form-control mt-1 input" placeholder="********"
                           name="PASSWORD" required/>
                </div>
                <div class="col">
                    <label for="RE_PASSWORD">Confirm Password</label>
                    <input id="PASSWORD" type="password" class="form-control mt-1 input" placeholder="********"
                           name="RE_PASSWORD" required/>
                </div>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-primary form-control fw-bold">
                    SIGNUP
                </button>
            </div>
        </form>
        <p class="text-center mt-2">Registered? <a href="./index.php">Login</a></p>
    </div>

    <!-- bootstrap javascript -->
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>
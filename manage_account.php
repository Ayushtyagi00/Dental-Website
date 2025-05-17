<?php
include ("connection.php");
session_start();
if (!isset($_SESSION["userid"])){
    header("location: log-in.php");
} 
else {
    function welcome(){
        echo "<h1> Welcome to my dental health $_SESSION[name] !! :)</h1>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="./style/book_appoinment.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    

    <div class="container-fluid d-flex">
        <div class="navbar-panal">
            <div id="nav-bar">
                <input id="nav-toggle" type="checkbox"/>
                <div id="nav-header">
                    <a id="nav-title" href="index.php" target="_blank">
                        <img src="./media/Screenshot_2024-07-04_210634-removebg-preview__1_-removebg-preview.png" alt="" height="100px" width="200px">
                    </a>
                    <label for="nav-toggle"><span id="nav-toggle-burger"></span></label>
                    <hr/>
                </div>
                <div id="nav-content">
                    <div class="nav-button">
                        <i class="fas fa-palette"></i><span>
                        <a href="dashboard.php">Dashboard</a>
                        </span>
                    </div>
                    <div class="nav-button">
                        <i class="fas fa-images"></i><span>
                        <a href="account.php">Account</a>
                        </span>
                    </div>
                    <div class="nav-button">
                        <i class="fas fa-magic"></i><span>
                        <a href="manage_account.php">Manage Account</a>
                        </span>
                    </div>
                    <hr/>
                    <div class="nav-button">
                        <i class="fas fa-thumbtack"></i><span>
                            <a href="book_appoinment.php">Book Appoinment</a>
                        </span>
                    </div>
                    <div class="nav-button">
                        <i class="fas fa-heart"></i><span>
                        <a href="past_appoinment.php">Past Appoinment</a>
                        </span>
                    </div>
                    <hr/>
                    <div class="nav-button">
                        <i class="fas fa-gem"></i><span>
                        <a href="./log-out.php">Log-out</a>
                        </span></div>
                    <div id="nav-content-highlight"></div>
                </div>
            </div>
        </div>
        <div class="manage_account">
            <div class="welcome mt-5 d-flex justify-content-center">
                <?php echo welcome(); ?>
            </div>
            <div class="alert mt-2 d-flex justify-content-center">
                <h3>Oops this featurs this feature is not working right now, sorry</h3>
            </div>
            <form class="row g-3 needs-validation mt-3 ms-5 me-5" novalidate>
                <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">First name</label>
                    <input type="text" class="form-control" id="validationCustom01" name="fname" value="first name" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="validationCustom02" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="validationCustom02" name="lname" value="last name" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="validationCustomUsername" class="form-label">email</label>
                    <div class="input-group has-validation">
                        <input type="email" class="form-control" name="email" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="validationCustomUsername" class="form-label">password</label>
                    <div class="input-group has-validation">
                        <input type="password" class="form-control" name="email" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback" required>
                            You must agree before submitting.
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <button class="btn btn-primary" type="submit" name="update">Update Details</button>
                </div>
</form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
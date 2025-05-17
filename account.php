<?php
include ("connection.php");
session_start();
if (!isset($_SESSION["userid"])){
    header("location: log-in.php");
} 
else {
    function wecome(){
        echo "<h1> Welcome to my dental health $_SESSION[name] !! :)</h1>";
    }
    $qry = "SELECT fname, lname, phone, username, reg_time FROM signup WHERE id=$_SESSION[userid] ";
    $rs = mysqli_query($conn, $qry);
    $row = mysqli_fetch_row($rs);
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
    <link href="./style/dashboard.css" rel="stylesheet">
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
        <div class="display-panal container-fluid">
            <div class="center d-flex justify-content-center mt-5">
                <?php
                    echo wecome();
                ?>
            </div>
            <div class="form-container">
                <div class="small d-flex justify-content-center mt-5">
                    <small>User Account Detail</small>
                </div>
                <form action="">
                    <div class="row">
                        <div class="col">
                            <small>First Name</small>
                            <input type="text" class="form-control" placeholder="First name" value="<?php if(isset($row)){ echo $row[0];} ?>" aria-label="First name" disabled readonly>
                        </div>
                        <div class="col">
                            <small>Last Name</small>
                            <input type="text" class="form-control" placeholder="Last name" value="<?php if(isset($row)){ echo $row[1];} ?>" aria-label="Last name" disabled readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <small>Redistered Email Id</small>
                            <input class="form-control" type="text" value="<?php if(isset($row)){ echo $row[3];} ?>" aria-label="Disabled input example" disabled readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <small>Registered Phone Number</small>
                            <input type="text" class="form-control" value="<?php if(isset($row)){ echo $row[2];} ?>" placeholder="Phone Number" aria-label="Phone Number" disabled readonly>
                        </div>
                        <div class="col">
                            <small>Registration Date-Time</small>
                            <input type="text" class="form-control" value="<?php if(isset($row)){ echo $row[4];} ?>" placeholder="Redistration Date" aria-label="Redistration Date" disabled readonly>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
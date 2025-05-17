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

    $sqli = "SELECT COUNT(*) AS total_rows FROM booked_appoinment WHERE user_id = $_SESSION[userid]";
    $result = mysqli_query($conn, $sqli);

    if ($result) {
        function row(){
            $sqli = "SELECT COUNT(*) AS total_rows FROM booked_appoinment WHERE user_id = $_SESSION[userid]";
            // $result = array($sqli);
            // $row = count($result);
            // echo "<h1>$row</h1>";
            include ("connection.php");
            $result = mysqli_query($conn, $sqli);

            $row = mysqli_fetch_assoc($result);
            $total_rows = $row['total_rows'];

            // Display the result
            echo "<h1>$total_rows</h1>";
        }
    }
    else {
        echo "result not found";
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
            <div class="welcom">
                <?php echo welcome();?>
            </div>
            <div class="small d-flex justify-content-center mt-5">
                <small>
                    User Dashboard
                </small>
            </div>
            <div class="container">
                <div class="row d-flex">
                    <div class="dashboard-box">
                        <h3>Booked Appoinment</h3>
                        <?php echo row(); ?>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <h3>
                        Sorry for inconvineance, More featurs are comming soon...
                    </h3>
                </div>    
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
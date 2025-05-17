<?php
require_once("./connection.php");
session_start();
if(!isset($_SESSION["userid"]))
{
	header("location: log-out.php");
}
else
{
    $qry="SELECT first_name,last_name,DOB_day,DOB_month,DOB_year,gender,test_name,city,state,phone_number,appoinment_date,appoinment_time, appoinment_made_on FROM booked_appoinment WHERE user_id = $_SESSION[userid]";
	$rs=mysqli_query($conn,$qry);
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
    <link href="./style/past_appoinment.css" rel="stylesheet">
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
                <?php echo("<h1>$_SESSION[name] Welcom To MY Dental Health</h1>");?>
            </div>
            <div class="small d-flex justify-content-center mt-5">
                <small>
                    Cancel Your Appoinments
                </small>
            </div>
            <div class="table mt-5">
            <table class="table table-bordered mg-b-0">
                <thead>
                    <tr>
                        <th>Serial No</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>DOB Day</th>
                        <th>DOB Month</th>
                        <th>DOB Year</th>
                        <th>Gender</th>
                        <th>Test Appoinment For</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Phone Number</th>
                        <th>Appoinment Date</th>
                        <th>Appoinment Time</th>
                        <th>Appoinment Booked On</th>
                    </tr>
                </thead>
			    <tbody>
                <?php 
    $i=1;
    while($row=mysqli_fetch_row($rs))
    {
        echo"<tr><td>$i</td><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td><td>$row[10]</td><td>$row[11]</td><td>$row[12]</td><td><a href='#'>Cancel Appoinment</a></td></tr>";
        $i++;
    }
?>
                </tbody>
            </table>
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
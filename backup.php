<?php
    include "connection.php";
    session_start();
    if(!isset($_SESSION["userid"]))
    {
        header("location: index.php");
    }
    else {
        if (isset($_POST["make_appoinment"])) {
            $user_id = $_SESSION['userid'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $DOB_day = $_POST['DOB-day'];
            $DOB_month = $_POST['DOB-month'];
            $DOB_year = $_POST['DOB-yesr'];
            $gender = $_POST['gender'];
            $phone_number = $_POST['phone number'];
            $address = $_POST['address'];
            $district = $_POST['village'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $zip_code = $_POST['zip code'];
            $email = $_POST['email'];
            $confirm_email = $_POST['confirm email'];
            $question = $_POST['Have you ever applied to our facility before?'];
            $procedure = $_POST['procedure'];
            $appoinment_date = $_POST['appoinment date'];
            $appoinment_time = $_POST['$appoinment_time'];
    
    
            $sqli = "INSERT INTO booked_appoinment(id, user_id, first_name, last_name, DOB_day, DOB_month, DOB_year, gender, phone_number, address, district, city, state, zip_code, email, confirm_email, question, procedure, appoinment_date, appoinment_time, appoinment_made_on) VALUES (NULL, '$user_id', '$first_name', '$last_name'. '$DOB_day', '$DOB_month', '$DOB_year', '$gender', '$phone_number', '$address', '$district', '$city', '$state', '$zip_code', '$email', '$confirm_email', '$question', '$procedure', '$appoinment_date', '$appoinment_time', current_timestamp());";

            echo '<script>
                        alert("Appoinment booked successfully");
                        window.location.href = "dashboard.php";
                    </script>';
        } 
        else
        {
            echo '<script>
                    alert("Oopes, Appoinmet not booked !");
                    window.location.href = "dashboard.php";
                </script>';
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
                        <i class="fas fa-chart-line"></i><span>
                        <a href="Manage_appoinment.php">Manage Appoinment</a>
                        </span>
                    </div>
                    <div class="nav-button">
                        <i class="fas fa-fire"></i><span>
                        <a href="cancel_appoinment.php">Cancel Appoinment</a>
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
            <form action="book_appoinment.php" method="POST">
                <div class="mt-5">
                    <h1>
                        Doctor Appoinment Request Form
                    </h1>
                    <h4>
                        Fill the form below and we will get back soon to you for more updates and<br> plan your appointment.
                    </h4>
                </div>
                <hr size="10">
                <div class="Names">
                    NAME
                </div>
                <div class="row ms-5 me-5">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name" name="first_name" id="first-name" aria-label="First name">
                        <div class="form-text">First Name</div>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name" name="last_name" id="last-name" aria-label="First name">
                        <div class="form-text">Last Name</div>
                    </div>
                </div>
                <div class="row ms-5 me-5">
                    <div class="col">
                        <select class="form-select" name="DOB-day" aria-label="Default select example">
                            <option selected>Day</option>
                            <option value="1" >1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                        </select>
                        <div class="form-text">Day</div>
                    </div>
                    <div class="col">
                        <select class="form-select" name="DOB-month" aria-label="Default select example">
                            <option selected>Month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="april">April</option>
                            <option value="may">May</option>
                            <option value="june">June</option>
                            <option value="july">July</option>
                            <option value="augest">Augest</option>
                            <option value="september">September</option>
                            <option value="october">October</option>
                            <option value="november">November</option>
                            <option value="Decembr">December</option>
                        </select>
                        <div class="form-text">Month</div>
                    </div>
                    <div class="col">
                        <select class="form-select" name="DOB-year" aria-label="Default select example">
                            <option selected>Year</option>
                            <option value="1990">1990</option>
                            <option value="1991">1991</option>
                            <option value="1992">1992</option>
                            <option value="1993">1993</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2020">2020</option>
                            <option value="2000">2000</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                        </select>
                        <div class="form-text">Year</div>
                    </div>
                </div>
                <div class="row ms-5 me-5">
                    <div class="col">
                        <select class="form-select" aria-label="Default select example" name="gender">
                            <option selected>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                        <div class="form-text">Gender</div>
                    </div>
                    <div class="col">
                        <input type="tel" class="form-control" placeholder="Phone Number" name="phone number" aria-label="Phone Number">
                        <div class="form-text">Phone Number</div>
                    </div>
                </div>
                <div class="row ms-5 me-5">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Address" name="address" aria-label="Address">
                        <div class="form-text">Address</div>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Village" name="village" aria-label="Village">
                        <div class="form-text">Village</div>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="District" name="district" aria-label="District">
                        <div class="form-text">District</div>
                    </div>
                </div>
                <div class="row ms-5 me-5">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="City" name="city" aria-label="City">
                        <div class="form-text">City</div>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="State" name="state" aria-label="State">
                        <div class="form-text">State</div>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Zip Code" name="zip code" aria-label="Zip Code">
                        <div class="form-text">Zip Code</div>
                    </div>
                </div>
                <div class="row ms-5 me-5">
                    <div class="col">
                        <input type="email" class="form-control" placeholder="Email" name="email" aria-label="Email">
                        <div class="form-text">Email</div>
                    </div>
                    <div class="col">
                        <input type="email" class="form-control" placeholder="Confirm Email" name="confirm email" aria-label="Confirm Email">
                        <div class="form-text">Confirm Email</div>
                    </div>
                </div>
                <div class="row ms-5 me-5">
                    <div>
                        <h6 class="mt-4">Have you ever applied to our facility before?</h6>
                    </div>
                    <div class="form-check mt-3 ms-5 me-5">
                        <input class="form-check-input" type="radio" name="Have you ever applied to our facility before?" id="facility_application_yes" value="yes">
                        <label class="form-check-label" for="facility_application_yes">
                            Yes
                        </label>
                    </div>
                    <div class="form-check mt-3 ms-5 me-5">
                        <input class="form-check-input" type="radio" name="Have you ever applied to our facility before?" id="facility_application_no" value="no">
                        <label class="form-check-label" for="facility_application_no">
                            No
                        </label>
                    </div>
                </div>
                <div class="row ms-5 me-5">
                    <div class="col">
                        <div>
                            <h6>
                                Which procedure do you want to make an appointment for?
                            </h6>
                        </div>
                        <div class="dropdown">
                            <select class="form-select" name="procedure" aria-label="Default select example">
                            <option selected>Choose Procedure..</option>
                            <option value="procedure 1">Procedure 1</option>
                            <option value="procedure 2">Procedure 2</option>
                            <option value="procedure 3">Procedure 3</option>
                            <option value="procedure 4">Procedure 4</option>
                            <option value="procedure 5">Procedure 5</option>
                            </select>
                            <div class="form-text">Choose Procedure..</div>
                        </div>
                    </div>
                </div>
                <div class="row ms-5 me-5">
                    <div class="col">
                        <label for="appointment_date" class="form-label">Appointment Date</label>
                        <input type="date" class="form-control" id="appointment_date"  name="appointment_date" aria-describedby="appointment_date_help">
                        <small id="appointment_date_help" class="form-text text-muted">Please select a date for your appoinment.</small>
                    </div>
                    <div class="col">
                        <label for="appointment_time" class="form-label">Appointment Time</label>
                        <div class="row">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="appointment_time" id="appointment_time_1" value="1:00 PM - 2:00 PM">
                                    <label class="form-check-label" for="appointment_time_1">
                                        1:00 PM - 2:00 PM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="appointment_time" id="appointment_time_2" value="2:00 PM - 3:00 PM">
                                    <label class="form-check-label" for="appointment_time_2">
                                        2:00 PM - 3:00 PM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="appointment_time" id="appointment_time_3" value="3:00 PM - 4:00 PM">
                                    <label class="form-check-label" for="appointment_time_3">
                                        3:00 PM - 4:00 PM
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="appointment_time" id="appointment_time_4" value="4:00 PM - 5:00 PM">
                                    <label class="form-check-label" for="appointment_time_4">
                                        4:00 PM - 5:00 PM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="appointment_time" id="appointment_time_5" value="5:00 PM - 6:00 PM">
                                    <label class="form-check-label" for="appointment_time_5">
                                        5:00 PM - 6:00 PM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="appointment_time" id="appointment_time_6" value="6:00 PM - 7:00 PM">
                                    <label class="form-check-label" for="appointment_time_6">
                                        6:00 PM - 7:00 PM
                                    </label>
                                </div>
                            </div>
                        </div>
                        <small id="appointment_time_help" class="form-text text-muted">Please select a time for your appoinment.</small>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary" name="make_appoinment">Make Appoinment</button>
                    </div>
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
<?php
    include("connection.php");
    session_start();
    if(isset($_POST['submit'])){
        // $email = mysqli_real_escape_string($conn, $_POST['email']);
        $username = mysqli_real_escape_string($conn, $_POST['user']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);

        $sql = "SELECT * FROM signup WHERE username = '$username' OR email = '$username'";

        $result = mysqli_query($conn, $sql);
        // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if(mysqli_num_rows($result)==1){
            $ro = mysqli_fetch_row($result);
            // echo "<h1> userid: $ro[0] and name: $ro[1]</h1>";
            $_SESSION["userid"] = $ro[0];
            $_SESSION["name"] = $ro[1];
            header("location: account.php");
            
        }   else {
                echo '<script>
                alert("invalid user or password !");
                window.location.href="index.php";
                </script>';
            }
        
        // else {
        //     echo '<script>
        //         alert("invalid user or password !");
        //         window.location.href="index.php";
        //         </script>';
        // }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="media/flex-up black.png" rel="icon" type="icon/image">
    <link href="./style/log-in.css" rel="stylesheet"/>
    <title>Document</title>
</head>
<body>
<br><br>
        <div id="form">
            <h1 id="heading">Login Form</h1>
            <form name="form" action="log-in.php" method="POST" required>
                <label>Enter Username/Email: </label>
                <input type="text" id="user" name="user"></br></br>
                <label>Password: </label>
                <input type="password" id="pass" name="pass" required></br></br>
                <input type="submit" id="btn" value="Login" name = "submit"/>
            </form>
        </div>  
</body>
</html>

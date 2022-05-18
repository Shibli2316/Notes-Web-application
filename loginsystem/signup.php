<?php
    $showAlert = false;
    $showError = false;
if ($_SERVER['REQUEST_METHOD']=='POST'){
    include "_dbconnect.php";
    $name = $_POST["name"];
    $location = $_POST["location"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $existSql="SELECT * FROM `users` WHERE username= '$username'";
    $result=mysqli_query($conn, $existSql);
    $numExistRows= mysqli_num_rows($result);
    if ($numExistRows>0){
        $showError = "Username already exists";
    }
    else{
    

    if(($password==$cpassword)){
        $hash=password_hash($password, PASSWORD_DEFAULT);
        
        
        
        $sql="INSERT INTO `users` (`name`, `location`, `phone`, `email`, `username`, `password`, `dt`) VALUES ('$name', '$location', '$phone', '$email', '$username', '$hash', current_timestamp())";
        
        
        
        $result=mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    } 
    else{
        $showError = "Passwords do not match";
    }
}
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sign Up</title>
</head>

<body>

    <?php require '_nav.php' ?>
    <?php
    if ($showAlert){
        echo '<div class="alert alert-success alert-success fade show" role="alert">
        <strong>Success!</strong> Your account has been created.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if ($showError){
        echo '<div class="alert alert-danger alert-success fade show" role="alert">
        <strong>Error!</strong>'. $showError.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>
    
    <div class="container">
        <h1 class="text-center">
            Sign Up to our website
        </h1>

        <form action="/website/loginsystem/signup.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" maxlength="20" class="form-control" id="name" name="name" aria-describedby="emailHelp">
            </div>
            
            
            
            <div class="mb-3">
                <label for="location" class="form-label">City Name</label>
                <input type="text" maxlength="20" class="form-control" id="location" name="location" aria-describedby="emailHelp">
            </div>
            
            
            
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" maxlength="10" class="form-control" id="phone" name="phone" aria-describedby="emailHelp">
            </div>
            
            
            
            <div class="mb-3">
                <label for="email" class="form-label">Your Email Address</label>
                <input type="text" maxlength="30" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            
            
            
            
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" maxlength="11" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" maxlength="23" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
                <div id="emailHelp" class="form-text">Make sure to type the same password.</div>
            </div>

            <button type="submit" class="btn btn-primary">Signup</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>
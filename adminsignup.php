<?php
include 'conection.php';
if($conn){
    echo "connect";
}else{
    echo"disconect";
}
$showAlert = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists = false;
    if(($password == $cpassword) && $exists == false){
        $sql = "INSERT INTO `admin credentials` (`Username`, `password`,`cpassword`) 
        VALUES ('$username', '$password', '$cpassword')";
        
        $result = mysqli_query($conn, $sql);
        if($result){
            $showAlert = true;
        }else{
          echo "Error:" .$sql;
        }

}

}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Signup</title>
  </head>
  <body>
   <?php include 'conection.php'?>
   <?php
   if($showAlert){
  
   echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your account is now created & you can log in.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

?>

  <div class="container my-5" >
      <h1 class="text-center">Signup to DOCTO CARE ADMIN</h1>
    <form action="/docto care/signup.php" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp">
        
    </div>
    <div class="mb-3"> 
        <label for="password" >Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="mb-3">
        <label for="password"> Confirm Password</label>
        <input type="password" class="form-control" id="cpassword" name="cpassword">
        <div id="emailHelp" class="form-text">Make sure to type the same password</div>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
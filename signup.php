<?php

    include "conection.php";

    /*if($con){
        echo"connect";
    }else{
        echo"error";
    }*/

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $email = $_POST["email"];
        $name = $_POST["user"];
        $age = $_POST["age"];
        $gender=$_POST["gender"];
        $password=$_POST["upassword"];
        $cpassword=$_POST["cpassword"];

        $exist = false;

        if(($password==$cpassword) && $exist==false)
        {
            $sql = "INSERT INTO `signup123` ( `email`, `user`, `age`, `gender`, `upassword`, `cpassword`) 
            VALUES ( ' $email', ' $name', ' $age ', ' $gender', '$password', '$cpassword')";

            $x = mysqli_query($conn,$sql);

            /*if($x==1){
                echo"1 row created !";
            }
            else{
                echo"error: ".$sql."<br/>";
            }*/
        }

    }



?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Signup</title>
        <meta charset="utf-8">
        <meta name="viewport"content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet"href="signup.css">
    </head>
    <body>
        <header>
            <div class="mainheader2">
                <div class="logo">
                    <img src="20210911_192751.png">
                </div>

                <nav>
                    <a href="page.html">Home</a>
                    <a href="#">Service</a>
                    <a href="#">About</a>
                    <a href="#">Contact Us</a>
                </nav>

                <div class="menubtn2">
                    <button>Admin</button>
                </div>
            </div>
            <main>
                <section class="form animated flipInX">
                    <h2>Signup to your Account</h2>
                    <form class="signupbox"autocomplete="off" method="post">

                        <lebel for="username">Email-ID</label>
                        <input type="text"placeholder="Email-ID" name="email"/>

                        <lebel for="name">Name</label>
                        <input type="text"placeholder="Name" name="user"/>

                        <lebel for="age">Age</label>
                        <input type="text"placeholder="Age" name="age"/>

                        

                        <lebel for="location">Gender</label>
                        <input type="text"placeholder="Gender" name ="gender"/>


                        <lebel for="password">Password</label>
                        <input type="password"placeholder="Password" name="upassword"/>

                        <lebel for="conform password">Conform Password</label>
                        <input type="password"placeholder="Conform Password" name="cpassword"/>

                        <button id="submit">SignUp</button>
                        
                    </form>
                    
                </section>
            </main>
        </header>
    </body>
</html>
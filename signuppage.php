<?php
ini_set("display_errors",'1');



if(isset($_COOKIE['email']) && isset($_COOKIE['firstname']) && isset($_COOKIE['gender']) && isset($_COOKIE['lastname']) && isset($_COOKIE['password'])){
    header('location:signin.php');
};


if(isset($_REQUEST['submit'])){    
    if($_REQUEST['password']===$_REQUEST['repassword'] && $_REQUEST['password']!=NULL){
        setcookie('firstname',$_REQUEST['first-name'],time()+ 86400,'/');
        setcookie('lastname',$_REQUEST['last-name'],time()+ 86400,'/');
        setcookie('email',$_REQUEST['email'],time()+86400,'/');
        setcookie('gender',$_REQUEST['gender'],time()+86400,'/');
        setcookie('password',$_REQUEST['password'],time()+86400,'/');
        header('location:signin.php');
    };
};




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- link for custom css -->
    <link href='./cssforphp/style.css' rel='stylesheet' />
</head>
<body>
    
    <div class="container ct-background rounded row p-3 m-auto">
        <h1 class='col-6'>To Create Your Own Account</h1>

        <form action='' method='post' class='col-6' enctype='multipart/form-data'>
            <input type='text' name='first-name' id='' class='form-control mb-3 shadow-none' placeholder='First Name' required/>
            <input type='text' name='last-name' id='' class='form-control mb-3 shadow-none' placeholder='Last Name (optional)' required/>
            <input type="email" name='email' id='' class='form-control mb-3 shadow-none' placeholder='username@gmail.com' required/>

            <h6 class='mb-2'>Gender</h6>
            <div class='row'>
                <div class="form-check col-3">
                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value='male' required/>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Male
                    </label>
                </div>
                
                <div class="form-check col-3">
                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" checked value='female' required/>
                    <label class="form-check-label" for="flexRadioDefault2">
                        female
                    </label>
                </div>
            </div>

            <input type='password' name='password' id='' class='form-control mb-3 shadow-none' placeholder='Enter Your Password' required/>
            <input type='password' name='repassword' id='' class='form-control mb-3 shadow-none' placeholder='Confirm Your Password' require/>

            <div class='row'>
                <div class='col-8'>
                    <?php
                        if(isset($_REQUEST['password']) && isset($_REQUEST['repassword'])){
                            if($_REQUEST['password']!==$_REQUEST['repassword']){
                                echo "<p class='text-danger'>Your password does not match!! Try Again</p>";
                            };
                        };
                    ?>
                </div>
                <button type='submit' class='btn btn-primary ms-auto d-block' name='submit'>Submit</button>
            </div>

        </form>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
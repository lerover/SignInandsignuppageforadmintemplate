<?php
ini_set('display_errors','1');


if(isset($_POST['submit'])){
    if($_POST['username']===$_COOKIE['email'] && $_POST['password']===$_COOKIE['password'] && $_COOKIE['email']!==NULL && $_COOKIE['password']!==NULL){
        header('location:admintemplate/index.php');
    }elseif($_COOKIE['email']===NULL && $_COOKIE['password']===NULL){
        header('location:signuppage.php');
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
    <link href='./cssforphp/signin.css' rel='stylesheet' />
</head>
<body>
    
   <div class='container row m-auto ct-background rounded p-3'>
        <h1 class=' col-6'>Log In To Your Account</h1>

        <div class='col-6'>
            <form action='' method='post'>
                <label class='input-label'>Username</label>
                <input type='text' name='username' id='' class='form-control shadow-none mb-3' placeholder='username@gmail.com'/>

                <label class='input-label'>Password</label>
                <input type='password' name='password' id='' class='form-control shadow-none mb-3' placeholder='Enter Your Password'/>


                <div class='row'>
                <div class='col-8'>
                    <?php
                        if(isset($_POST['username']) && isset($_POST['password'])){
                            if($_POST['username']!==$_COOKIE['email'] || $_POST['password']!==$_COOKIE['password']){
                                echo "<p class='text-danger'>Your username or password is wrong!!</p>";
                            };
                        };
                    ?>
                </div>
                <button type='submit' class='btn btn-primary ms-auto d-block' name='submit'>Submit</button>
            </div>
            </form>
        </div>
   </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
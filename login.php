<?php
include "function.php";
if(isset($_SESSION['user'])){
    echo "<script>window.open('../index.php','_self')</script>";
}
?>
<html>
    <head>
        <title>logPage</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        
        <?php include"nav.php"?>
        
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h2>Students Login</h2>
                            <form action="" method="post">
                                
                                <div class="form-group">
                                    <label>Contact</label>
                                    <input type="text" name="contact" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label>password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <input type="submit" name="log_send" class="btn btn-info">
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
if(isset($_POST['log_send'])){
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    
    $query = mysqli_query($con,"select * from reg where contact = '$contact' && password = '$password'");
    
    $run = mysqli_num_rows($query);
    
    if($run == 1){
        $_SESSION['user'] =$contact;
    echo "<script>window.open('users/home.php','_self')</script>";
    }
    else{
        echo "wrong data";
    }
    }
?>

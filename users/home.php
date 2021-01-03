<?php
include "../function.php";
if(!isset($_SESSION['user'])){
    echo "<script>window.open('index.php','_self')</script>";
}
?>
<html>
    <head>
        <title>MySchoolPage</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        
        <?php include"nav.php";?>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    
                <div class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            
                            <img src="1School-Illustration-Banner-01.jpg" alt="" class="w-100">
                            <div class="carousel-caption">
                                <h2 class="float-left">Welcome</h2>
                                <p class="lead float-left text-dark">Working together for a charitable purpose allows a family to come together and focus on a shared goal. Both the process and the goal remain a sustainable and viable activity as children become adults and begin the process with their children.</p>
                            </div>
                        </div>
                    </div>
                </div>
                       
                </div>
            </div>
        </div>
    </body>
</html>


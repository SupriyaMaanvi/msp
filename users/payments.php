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
        
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <?php include "dashboard.php";?>
                </div>
                
                <div class="col-lg-9 mt-5">
                   <h2>Payments</h2>
                    <form>
                        <div class="form-group">
                            <label>Name</label>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </body>
</html>

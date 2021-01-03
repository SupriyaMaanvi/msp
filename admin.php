<?php
include "function.php";

?>
<html>
    <head>
        <title>adminPage</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        
        <?php include"nav.php"?>
        
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h2>Admin Login</h2>
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


















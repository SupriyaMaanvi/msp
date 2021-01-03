<?php
include "../function.php";

?>
<html>
    <head>
        <title>MySchool</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        
        <?php include"nav.php";?>
        
        <div class="container-fluid mx-auto">
            <div class="row">
                <div class="col">
                    <div class="card mt-5">
                        <div class="card-body">
                            <table class="table table-bordered table-sm">
                                <thead>
                                <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>father_name</th>
                                <th>mother_name</th>
                                <th>admission_std</th>
                                <th>dob</th>
                                <th>category</th>
                                <th>religion</th>
                                <th>handicap</th>
                                <th>contact</th>
                                <th>email</th>
                                <th>address</th>
                                <th>area</th>
                                <th>pincode</th>
                                </tr>    
                                </thead>
                                <tbody>
                                    <?php
                                    $calling = mysqli_query($con,"select * from reg");
                    
                                    while($record = mysqli_fetch_array($calling)){ 
                                    ?>
                                    <tr>
                                    <td><?= $record['id'];?></td>
                                    <td><?= $record['name'];?></td>
                                    <td><?= $record['father_name'];?></td>
                                    <td><?= $record['mother_name'];?></td>
                                    <td><?= $record['admission_std'];?></td>
                                    <td><?= $record['dob'];?></td>
                                    <td><?= $record['category'];?></td>
                                    <td><?= $record['religion'];?></td>
                                    <td><?= $record['handicap'];?></td>
                                    <td><?= $record['contact'];?></td>
                                    <td><?= $record['email'];?></td>
                                    <td><?= $record['address'];?></td>
                                    <td><?= $record['area'];?></td>
                                    <td><?= $record['pincode'];?></td>
                                    </tr>    
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


















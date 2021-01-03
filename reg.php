<?php
include "function.php";

?>
<html>
    <head>
        <title>regPage</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        
        <?php include"nav.php";?>
        
        <div class="container">
            <div class="row">
                
                <div class="col-lg-9 mx-auto">
                    <div class="carousel slide" data-ride="crousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="Admission-Open.png" alt="" width="100%">
                            </div>
                        </div>    
                    </div>
                    <div class="card">
                        <div class="card-body p-5">
                            <br>
                            <form action="" method="post">
                                
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                
                                <div class="row">
                                <div class="col">
                                <div class="form-group">
                                    <label>Name of the Father</label>
                                    <input type="text" name="father_name" class="form-control">
                                </div>
                                </div>    
                                <div class="col">
                                <div class="form-group">
                                    <label>Name of the Mother</label>
                                    <input type="text" name="mother_name" class="form-control">
                                </div>
                                </div>
                                </div>
                                <div class="form-group">
                                    <label>Admission_Std</label>
                                    <select type="text" name="admission_std" class="form-control">
                                        <option>1st</option>
                                        <option>2nd</option>
                                        <option>3rd</option>
                                        <option>4th</option>
                                        <option>5th</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="text" name="dob" class="form-control">
                                </div>
                                
                                <div class="row">
                                <div class="col">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select type="text" name="category" class="form-control">
                                        <option>BC</option>
                                        <option>BC1</option>
                                        <option>BC2</option>
                                        <option>SST</option>
                                        <option>OTHER</option>
                                    </select>
                                </div>
                                </div>    
                                <div class="col">
                                <div class="form-group">
                                    <label>Religion</label>
                                    <select type="text" name="religion" class="form-control">
                                        <option>Hindu</option>
                                        <option>Cristun</option>
                                        <option>Islum</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                </div>
                                <div class="col">
                                <div class="form-group">
                                   <label>Handicap</label>
                                    <select type="text" name="handicap" class="form-control">
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </div>
                                </div>
                                </div>
                                
                                <div class="row">
                                <div class="col">
                                <div class="form-group">
                                    <label>Contact</label>
                                    <input type="text" name="contact" class="form-control">
                                </div>
                                </div>
                                <div class="col">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                                </div>
                                </div>
                                
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea name="address" class="form-control">
                                    </textarea>
                                </div>
                                
                                <div class="row">
                                <div class="col">
                                <div class="form-group">
                                    <label>Area</label>
                                    <input type="text" name="area" class="form-control">
                                </div>
                                </div>
                                <div class="col">
                                <div class="form-group">
                                    <label>Pincode</label>
                                    <input type="text" name="pincode" class="form-control">
                                </div>
                                </div>
                                </div>
                                
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                
                                
                                <div class="form-group">
                                    <input type="submit" name="reg_send" class="btn btn-info">
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
if(isset($_POST['reg_send'])){
    $fields = array(
    'name' => $_POST['name'],
    'father_name' => $_POST['father_name'],
    'mother_name' => $_POST['mother_name'],
    'admission_std' => $_POST['admission_std'],
    'dob' => $_POST['dob'],
    'category' => $_POST['category'],
    'religion' => $_POST['religion'],
    'handicap' => $_POST['handicap'],
    'contact'=> $_POST['contact'],
    'email' => $_POST['email'],
    'address' => $_POST['address'],
    'area' => $_POST['area'],
    'pincode' => $_POST['pincode'],
    'password' => $_POST['password']
    );
    
    if(check("reg","contact = '$contact' && password = '$password'")){
        $_SESSION['user'] = $contact;
    }
    
    else{
        insert('reg',$fields);
        echo "<script>alert('You are eligible for login')</script>";
    }
}
?>


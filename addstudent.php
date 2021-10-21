<?php

$connect = mysqli_connect('localhost','root','','STUDENT');

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger py-3">
        <div class="container">
            <a href="show.php" class="navbar-brand">Student</a>

            
            <ul class="navbar-nav">            
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>                
            </ul>
        </div>
    </nav>

<div class="container mt-5">
    <div class="row"> 
        <div class="col-lg-5 mx-auto">
            <div class="card shadow-lg">
                <div class="card-header text-center text-primary h3">Add Student</div>
                <div class="card-body">
                        <form action="addstudent.php" method="post">
                            <div class="mb-3">
                                <label>Student Name</label>
                                <input type="text" name="student_name" required="" class="form-control">
                            </div>                    
                            
                            <div class="mb-3">
                                <label>Student DOB</label>
                                <input type="date" name="student_dob" required="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Student DOJ</label>
                                <input type="date" name="student_doj" required="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="send"  class="btn btn-success btn-block">
                            </div>
                        </form>

                    <?php
                        if(isset($_POST['send'])){
                            $student_name = $_POST['student_name'];
                            $student_dob = $_POST['student_dob'];
                            $student_doj = $_POST['student_doj'];

                            $query = mysqli_query($connect, "INSERT INTO students(student_name,student_dob,student_doj)
                            value ('$student_name','$student_dob','$student_doj')");

                            
                            if($query){
                                echo "<script>open('show.php','_self')</script>";
                            }
                            else{
                                echo "fail";
                            }
                            
                        }
                    ?>
                </div>
            </div>
        </div>
        
    </div>
</div>

</body>
</html>
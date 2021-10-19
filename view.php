<?php $connect = mysqli_connect('localhost','root','','STUDENT'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <!-- CSS only -->
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
        <?php
        $id = $_GET['view'];
        $calling = mysqli_query($connect,"select * from students where student_no='$id'");
            $data = mysqli_fetch_array($calling);
        ?>
        <div class="col-lg-5 mx-auto">
            <div class="card shadow">
                <div class="card body">                          
                    <table class="table">
                            <tbody>
                                <tr>
                                <th scope="col">Student No</th>
                                <th scope="col"><?= $data['student_no'];?></th>                                        
                                </tr>
                           
                            
                                <tr>
                                <th scope="row">Student Name</th>
                                <td><?= $data['student_name'];?></td>                                        
                                </tr>
                                <tr>
                                <th scope="row">Student DOB </th>
                                <td><?= $data['student_dob'];?></td>
                                </tr>
                                <tr>
                                <th scope="row">Student DOJ</th>
                                <td colspan="2"><?= $data['student_doj'];?></td>
                                </tr>
                            </tbody>
                    </table>
                        
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>






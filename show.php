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

            <form action="" class="d-flex mx-auto">
                <input type="text" name="search" placeholder="search your student No & student Name..." class="form-control" size="70" style="border-radius:0px;">
                <input type="submit" name="find" value="Search"  class="btn btn-danger">           
            </form>
            <ul class="navbar-nav">            
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>                
                <li class="nav-item"><a href="addStudent.php" class="nav-link">Add Student</a></li>                
            </ul>
        </div>
    </nav>

<div class="container mt-5">
    <div class="row ">        
        <div class="col-lg-9 mx-auto">
           <div class="card shadow-lg p-3 mb-5 bg-body rounded">
               <div class="card-header h1 text-center text-success">Student Data Read</div>
               <div class="card-body">
               <table class=" table table-dark  shadow-lg p-3 mb-5 bg-body rounded table-striped">
                <?php   
                      
                    if(isset($_GET['del'])){
                        $id = $_GET['del'];
                        $query = mysqli_query($connect,"DELETE FROM students where student_no= '$id'");
                        //echo "<script>open('index.php','_self')</script>";
                        if($query){
                            echo "<div class='alert type= alert-success '>Student Data Delete successfully 
                            
                            </div>";
                            
                        }
                        else {
                        echo "<div class='alert alert-success'>Student Data Delete failed</div>";
                        }
                    }
                ?>
                    <tr>
                        <th>Student_NO</th>
                        <th>STUDENT_NAME</th>
                        <th>STUDENT_DOB</th>
                        <th>STUDENT_DOJ</th>
                        <th class="text-center">ACTION</th>
                    </tr>
                    <?php
                        if(isset($_GET['find'])){
                            $search = $_GET['search'];
                            $calling = mysqli_query($connect,"select * from students where student_no And student_name LIKE '%$search%'");
                        }
                        else{   

                            $calling = mysqli_query($connect,"SELECT * from students");
                        }
                            while($row = mysqli_fetch_array($calling)):
                        ?>  
                    <?php
                   ?>
                    <tr class="">
                        <td class="text-center"><?= $row['student_no'];?></td>
                        <td><?= $row['student_name'];?></td>
                        <td><?= $row['student_dob'];?></td>
                        <td><?= $row['student_doj'];?></td>
                        <td>
                            <a href="show.php?del=<?= $row['student_no'];?>" class="btn btn-danger">Delete</a>
                            <a href="edit.php?edit=<?= $row['student_no'];?>" class="btn btn-success">Update</a>
                            <a href="view.php?view=<?= $row['student_no'];?>" class="btn btn-warning">View</a>
                        </td>
                    </tr>
                    <?php endwhile;?>
                </table>
               </div>
           </div>
                
        </div>
    </div>
</div>

</body>
</html>
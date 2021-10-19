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
                <li class="nav-item"><a href="addstudent.php" class="nav-link">Add Student</a></li>                
            </ul>
        </div>
    </nav>
    
<div class="container mt-5">
    <div class="row">        
        <div class="col-lg-4  mx-auto">
            <a href="show.php">
            <div class="card shadow mini-stat bg-primary text-white">
                <div class="card-body">
                    <div class="mb-4">
                        <div class="float-left text-center mini-stat-img mr-4"><img src="01.png" width="50px" alt=""></div>
                        <h6 class="font-9    text-uppercase mt-0 "><b><u>Total Student</u></b></h6>
                        <h4 class="font-500 mb-3 text-center"><?php $query = "select student_no from students;"; mysqli_query($connect,$query); echo mysqli_affected_rows($connect);?></h4>
                    </div>                    
                </div>
            </div>
            </a>
        </div>
    </div>
</div>

</body>
</html>






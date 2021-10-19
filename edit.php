<?php $connect = mysqli_connect('localhost','root','','STUDENT'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title> 
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

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

    <div class="container mt-5 mx-auto">
        <div class="row mx-auto">
            <div class="col-lg-6">
            <div class="card">
                <div class="card-header">Student data Edit</div>
                <div class="card-body">
                <?php
                    $edit_id = $_GET['edit'];
                    $query = mysqli_query($connect,"select * from students where student_no='$edit_id'");
                    $val = mysqli_fetch_array($query);
                ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">STUDENT Name</label>
                        <input type="text" class="form-control" name="student_name" value="<?php echo $val['student_name'];?>">
                    </div>
                    <div class="form-group">
                        <label for="">student_dob</label>
                        <input type="date" class="form-control" name="student_dob" value="<?php echo $val['student_dob'];?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="">student_doj</label>
                        <input type="date" class="form-control" name="student_doj" value="<?php echo $val['student_doj'];?>">
                    </div>
                    
                    <div class="form-group">
                       <input type="submit" class="btn btn-danger btn-block" name="update">
                    </div>
                    
                </form>

                    <?php
                        if(isset($_POST['update'])){
                            $student_name = $_POST['student_name'];
                            $student_dob = $_POST['student_dob'];
                            $student_doj = $_POST['student_doj'];
                            
                            $query = mysqli_query($connect, "update Students SET 
                            student_name='$student_name', student_dob='$student_dob', student_doj='$student_doj' WHERE student_no='$edit_id'");
                             

                            if($query){
                                echo "<script>open('index.php','_self')</script>";
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
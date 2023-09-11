<?php
session_start();
include('database.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Edit & Update data</title>
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 mt-5 ">

                <?php if(isset($_SESSION['massage'])) : ?>
                    <h5 class="alert alert-success"><?=$_SESSION['massage'];?></h5>
                <?php unset($_SESSION['massage']); endif; ?>

                <div class="card">
                    <div class="card-header">
                        <h3 class="mt-5">Edit & Update data</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = $_GET['id'];

                            $query = "SELECT * FROM students WHERE id=:stud_id LIMIT 1";
                            $statement = $conn->prepare($query);
                            $data = [':stud_id' => $student_id];
                            $statement->execute($data);

                            $result = $statement->fetch(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
                        }
                        ?>
                        <form action="code.php" method="POST">

                            <input type="hidden" name="student_id" value="<?=$result->id?>" />

                            <div class="mb-3">
                                <input type="text" name="fullname" value="<?= $result->fullname; ?>" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <input type="text" name="email" value="<?= $result->email; ?>" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <input type="text" name="phone" value="<?= $result->phone; ?>" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <input type="text" name="course" value="<?= $result->course; ?>" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="update_student_btn" class="btn btn-primary">Update Student</button>
                                <a href="index.php" class="btn btn-dark float-end">BACK</a>
                            </div>
                        </form>

                        

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<!DOCTYPE html>

<?php 
    session_start();
    include('database.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PDO CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                
            <?php if(isset($_SESSION['massage'])) : ?>
                <h5 class="alert alert-success"><?=$_SESSION['massage'];?></h5>
            <?php unset($_SESSION['massage']); endif; ?>
                
            
                <!-- card start -->
                <div class="card">
                    <div class="card_header">
                        <h3>PHP PDO CRUD
                            <a href="student_add.php" class="btn btn-primary float-end">Add Student</a>
                        </h3>
                    </div>

                    <!-- card table start -->
                    <div class="cord-body">
                        <table class="table table-border table-striped">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Fullname</td>
                                    <td>Email</td>
                                    <td>Phone</td>
                                    <td>Course</td>
                                    <td>Edit</td>
                                    <td>Delete</td>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                    $query = "SELECT * FROM students";
                                    $statement = $conn->prepare($query);
                                    $statement->execute();

                                    $statement->setFetchMode(PDO::FETCH_OBJ);
                                    $result = $statement->fetchAll();
                                    if($result)
                                    {
                                        foreach($result as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?=$row->id; ?></td>
                                                <td><?=$row->fullname; ?></td>
                                                <td><?=$row->email; ?></td>
                                                <td><?=$row->phone; ?></td>
                                                <td><?=$row->course; ?></td>
                                                <td>
                                                    <a href="student_edit.php?id=<?= $row->id; ?>" class="btn btn-primary">Edit</a>
                                                </td>
                                                <td>
                                                    <form action="code.php" method="POST">
                                                        <button type="submit" name="delete_student" value="<?=$row->id;?>" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                        <tr>
                                            <th colspan="5">No record found</th>
                                        </tr>
                                        <?php
                                    }
                                ?>                                
                            </tbody>
                        </table>
                    </div>
                    <!-- card table end -->

                </div>
                <!-- card end -->


            </div>
        </div>
    </div>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
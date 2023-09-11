<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert data into database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </style>
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-4">
                
                <div class="card p-4">
                    <div class="card_header">
                        <h3>Insert data into database</h3>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                                <label>Full Name</label>
                                <input type="text" name="fullname" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Course</label>
                                <input type="text" name="course" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_student_btn" class="btn btn-primary">Save Student</button>
                                <a href="index.php" class="btn btn-dark float-end">Back</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
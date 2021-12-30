<!DOCTYPE html>
<html>

<head>
    <title>RHS Admissions</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style type="text/css">
        html,
        body {
            height: 100%;
            background-color: #ffa500;
        }

        .mid-center {
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
        }

        h1 {
            color: rgba(255, 255, 255);
            font-size: 4em;
        }

        .notifikasi {
            color: rgba(255, 255, 255, 0.5);
        }

        footer {
            margin-top: 250px;
            color: rgba(255, 255, 255, 0.8);
        }
    </style>
</head>

<body>
    <div class="position-relative h-100">
        <div class="position-absolute mid-center">
            <h1>Regents High School</h1>
            <h3>Admissions</h3>
            <a class="btn btn-primary btn-lg btn-block" href="register.php">Enroll new student</a>
            <a class="btn btn-primary btn-lg btn-block" href="list.php">Candidates list</a>
            <?php if(isset($_GET['status'])): ?>
            <p>
                <?php
                if($_GET['status'] == 'success'){
                    echo "<p class='text-center notifikasi'>Student data submitted</p>";
                } else {
                    echo "<p class='text-center notifikasi'>An error occured</p>";
                }
            ?>
            </p>
            <?php endif; ?>
            <footer class="text-center">
                &copy; Regents High School MMXXI
            </footer>
        </div>
    </div>
</body>

</html>
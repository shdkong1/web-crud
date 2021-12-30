<!DOCTYPE html>
<html>

<head>
    <title>RHS Admissions - Enrolment Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <header>
            <h3 class="text-center mt-5">Student Enrolment Form</h3>
        </header>

        <form action="registration.php" method="POST">
            <div class="form-group">
                <label for="name">Full Name </label>
                <input type="text" class="form-control" name="name"/>
            </div>
            <div class="form-group">
                <label for="address">Address: </label>
                <textarea class="form-control" name="address"></textarea>
            </div>
            <fieldset class="form-group">
                <legend class="col-form-label">Gender</legend>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="male" name="gender" value="male">
                    <label class="form-check-label" for="male">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="female" name="gender" value="female">
                    <label class="form-check-label" for="female">
                        Female
                    </label>
                </div>
            </fieldset>
            <div class="form-group">
                <input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit" name="submit" />
            </div>
        </form>
    </div>
</body>

</html>
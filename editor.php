<?php
include("config.php");

if( !isset($_GET['id']) ){
    header('Location: list.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM candidates WHERE candidate_id=$id";
$query = mysqli_query($db, $sql);
$entry = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("Student data not found");
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>RHS Admissions - Candidate Data Editor</title>
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
            <h3 class="text-center mt-5">Candidate Data Editor</h3>
        </header>

        <form action="edit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $entry['candidate_id'] ?>" />

            <div class="form-group">
                <label for="nama">Name</label>
                <input type="text" class="form-control" name="name"
                    value="<?php echo $entry['candidate_name'] ?>" />
            </div>
            <div class="form-group">
                <label for="alamat">Address</label>
                <textarea class="form-control" name="address"><?php echo $entry['candidate_adr'] ?></textarea>
            </div>
            <fieldset class="form-group">
                <legend class="col-form-label">Gender</legend>
                <?php $gdr = $entry['candidate_gdr']; ?>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="male" name="gender" value="male"
                        <?php echo ($gdr == 'male') ? "checked": "" ?>>
                    <label class="form-check-label" for="male">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="female" name="gender" value="female"
                        <?php echo ($gdr == 'female') ? "checked": "" ?>>
                    <label class="form-check-label" for="female">
                        Female
                    </label>
                </div>
            </fieldset>
            <div class="form-group">
                <input class="btn btn-primary btn-lg btn-block" type="submit" value="Save" name="save" />
            </div>
        </form>
    </div>
</body>

</html>
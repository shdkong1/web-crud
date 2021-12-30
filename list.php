<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>RHS Admissions - Candidates List</title>
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
            <h3 class="text-center mt-5">Candidates for Admissions</h3>
        </header>

        <nav class="text-center">
            <a href="register.php">Add new</a>
        </nav>

        <br>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM candidates";
                $query = mysqli_query($db, $sql);
                while($entry = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>".$entry['candidate_id']."</td>";
                    echo "<td>".$entry['candidate_name']."</td>";
                    echo "<td>".$entry['candidate_adr']."</td>";
                    echo "<td>".$entry['candidate_gdr']."</td>";
                    echo "<td>";
                    echo "<a href='editor.php?id=".$entry['candidate_id']."'>Edit</a> | ";
                    echo "<a href='remove.php?id=".$entry['candidate_id']."'>Remove</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>
</body>
</html>
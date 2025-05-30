<?php
$name = $email = $age = $course = "" ;
$nameErr = $emailErr = "";
include 'config/config.php';

$config = new Config();

$res = $config->fetchData();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<div class = "container pt-5 col-4 ">
    <table class="table table-hover table-dark  table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Course</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($result = mysqli_fetch_assoc($res)) { ?>
                    <tr> 
                        <td><?php echo $result['id']?></td>
                        <td><?php echo $result['name']?></td>
                        <td><?php echo $result['age']?></td>
                        <td><?php echo $result['course']?></td>
                    </tr>
                <?php } ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
 
</body>
</html>
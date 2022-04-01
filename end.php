<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $job = $_POST['job'];
} else {
    header("Location: index.php");
    exit;
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        body {
            direction: rtl;
            overflow-x: hidden;
            background-color: #fbfbfb;
        }

        .form-data {

            display: flex;
            flex-direction: column;
            margin-top: 54px;
            justify-content: center;
            align-items: center;
            font-size: 32px;
        }
    </style>

</head>

<body>

    <img src="img/logo.jpg" width="100%" height="400px">
    <div class="form-data">
        <div class="dataName"><?php echo $name ?></div><br><br>
        <div class="dataJob"><?php echo $job ?></div><br>

    </div>
    <img src="img/footer.jpg" width="100%" alt="">
</body>

</html>
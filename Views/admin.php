<?php

session_start();
if ($_SESSION['role'] != "admin") {
    die('You dont have permission to see this site');
}

$db= new Database();
$conn = $db->connect();

?>


<head>
    <meta charset="UTF-8">
    <title> Admin</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,500,600,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2fc3faf667.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="Stylesheet" type="text/css" href="./Public/css/navbar.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

</head>
<body>
<div class="container-fluid" style="b">
    <?php include(dirname(__DIR__) . '/Views/Common/navbar.php'); ?>
    <h1 style="padding-bottom: 0.5em;">User management</h1>

    <?php
    $sql = "SELECT * FROM farmer, corpo";
    $result = $conn->query($sql);
    ?>

    <table id="users_table" class="display">
        <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>E-mail</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($rows = mysqli_fetch_assoc($result))
        {?>
            <tr>
                <td><?php echo $rows['id_farmer']?></td>
                <td><?php echo $rows['name']?></td>
                <td><?php echo $rows['email']?></td>
                <td><?php echo $rows['role']?></td>
                <td><a href<?php echo $rows['id_user'];?>"><i class="fas fa-user-times"></i></td>
            </tr>
            <?php
        }?>
        </tbody>
    </table>
</body>
</div>

</div>

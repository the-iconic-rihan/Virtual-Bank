<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../basicbankingsystem-main/img/logo.jpg" type="image/x-icon">

    <title>Create User</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../basicbankingsystem-main/style/main.css" media="all">
    <link rel="stylesheet" href="../basicbankingsystem-main/style/all.min.css" media="all">
    <link rel="stylesheet" href="../basicbankingsystem-main/style/fontawesome.min.css" media="all">
    <!-- end here -->
    <!-- bootstrap cdn -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../basicbankingsystem-main/style.css">

</head>
<style>
    .screen-body {
        margin: auto;
        width: 100%;
        display: block;
    }

    .app-form-control {
        width: 100%;
        margin: 1rem;
        border-radius: 0.2rem;
        border: solid thin groove;
    }

    .app-form-button {

        margin-left: 1.5rem;
    }
</style>

<body>
    <?php
    include 'config.php';
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $balance = $_POST['balance'];
        $sql = "insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script> alert('Hurray! User created');
                                   window.location='transfermoney.php';
                         </script>";
        }
    }
    ?>



    <div class="jumbotron">
        <h1>Create User </h1>

    </div>
    <div class="background">
        <div class="container">
            <div class="screen">
                <div class="screen-header">
                    <div class="screen-header-right">
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                    </div>
                </div>
                <div class="screen-body">
                    <div class="screen-body-item left">
                        <img class="img-fluid" src="img/profile.png" style="border: none; border-radius: 25%;">
                    </div>
                    <br>
                    <div class="screen-body-item">
                        <form class="app-form" method="post">
                            <div class="app-form-group">
                                <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
                            </div>
                            <div class="app-form-group">
                                <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
                            </div>
                            <div class="app-form-group">
                                <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
                            </div>
                            <br>
                            <div class="app-form-group button">

                                <input class="app-form-button btn btn-outline-success" type="submit" value="CREATE" name="submit"></input>
                                <input class="app-form-button btn btn-outline-danger" type="reset" value="RESET" name="reset"></input>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Rihan Rashid Bagwan</b><br>GRIP The Sparks Foundation.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>

</html>
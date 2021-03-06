<?php
include_once('./includes/connection.inc.php');
include_once('./includes/function.inc.php');

session_start();

if (isset($_POST['submit'])) {
    $username = get_safe_value($con, $_POST['username']);
    $password = get_safe_value($con, $_POST['password']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecomm Inventory | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="./plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./dist/css/adminlte.min.css">
</head>

<body class="hold-transition bg-light login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="./index.php"><b>Ecom</b> Inventory | Sign In</a>
        </div>
        <!-- /.login-logo -->
        <div class="shadow rounded">
            <div class="card-body login-card-body my-2" style="background: #d0dbfd;">
                <p class="login-box-msg mb-2">Sign in to start your session</p>
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Username" value="" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>



                <p class="text-center mb-1 mt-3">
                    <a href="#" onclick="swal('Attention','Please contact System Admin to recover your credentials.','warning');">I forgot my password</a>
                </p>

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- Javascript -->
    <!-- jQuery -->
    <script src="/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/adminlte.min.js"></script>
    <!-- Sweetalert JS v1.0.1 -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js'></script>

    <!-- Custom Script -->
    <script type="text/javascript">
        // Sweet alert script function
        function loginSuccess() {
            swal({
                title: "Login Success",
                text: "Welcome back!",
                type: "success",
                buttons: false,
                icon: "success",
                timer: 2000,
            });
        }

        function loginFail() {
            swal({
                title: "Login Failed!",
                text: "Please enter correct details",
                type: "error",
                icon: "error",
                buttons: false,
                timer: 2000,
            });
        }
    </script>
</body>

</html>

<?php

// if (isset($_SESSION['user_role'])) {
//     if ($_SESSION['user_role'] === 'Admin') {
//         header("Location:./admin/dashboard.php");
//     } else if ($_SESSION['user_role'] === 'User') {
//         header("Location:./user/index.php");
//     }
// }

// if (isset($_POST['submit'])) {
//     $useremail = htmlspecialchars($_POST['username']);
//     $userpassword = htmlspecialchars($_POST['password']);

//     // Check User Validation
//     $query = $con->prepare("SELECT * FROM table_users WHERE user_email=:email AND user_password=:password");
//     $query->bindValue(":email", $useremail);
//     $query->bindValue(":password", $userpassword);
//     $query->execute();



//     if ($query->rowCount() == 1) {

//         $row = $query->fetch(PDO::FETCH_ASSOC);
//         // var_dump($row);
//         if ($row['user_role'] === "Admin") {
//             $_SESSION['user_id'] = $row['user_id'];
//             $_SESSION['user_name'] = $row['user_name'];
//             $_SESSION['user_email'] = $row['user_email'];
//             $_SESSION['user_role'] = $row['user_role'];

//             echo '
//                 <script type="text/javascript">
//                     loginSuccess();
//                 </script>';

//             header("Refresh:2; ./admin/dashboard.php");
//         } elseif ($row['user_role'] === "User") {
//             $_SESSION['user_id'] = $row['user_id'];
//             $_SESSION['user_name'] = $row['user_name'];
//             $_SESSION['user_email'] = $row['user_email'];
//             $_SESSION['user_role'] = $row['user_role'];
//             echo '
//             <script type="text/javascript">
//                 loginSuccess();
//             </script>';
//             header("Refresh:2; ./user/index.php");
//         }
//     } else {
//         echo '
//             <script type="text/javascript">
//                 loginFail();
//             </script>';
//         $login_err = "<span class='bg-maroon rounded shadow p-1'>Please enter correct login details</span>";
//     }
// }

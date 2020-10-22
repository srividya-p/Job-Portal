<?php
include("connection/db.php");

include('include/header.php');
include('include/sidebar.php');

$id = $_GET['id'];

$query = mysqli_query($conn, "select * from admin_login where id = $id");

while ($row = mysqli_fetch_array($query)) {
    $email = $row['admin_email'];
    $username = $row['admin_username'];
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $password = $row['admin_pass'];
}

?>

<style>
    label {
        font-size: 18px;
    }
</style>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="admin_account.php">Admin Accounts</a></li>
            <li class="breadcrumb-item"><a href="account_edit.php">Edit Account</a></li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Account</h1><br>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            </div>
        </div>
    </div>
    <div style="width: 60%; margin-left:20%; background-color:beige;">
        <form action="" style="margin:3%; padding:3%;" name="admin_form" id="admin_form" action="" method="POST">
            <div class="form-group">
                <label for="Email">Enter Seeker Email</label>
                <input type="email" name="email" value="<?php echo $email ?>" class="form-control" placeholder="Enter Email">
            </div>

            <div class="form-group">
                <label for="Username">Enter Username</label>
                <input type="text" name="username" value="<?php echo $username ?>" class="form-control" placeholder="Enter Username">
            </div>

            <div class="form-group">
                <label for="First Name">Enter First Name</label>
                <input type="text" name="first_name" value="<?php echo $first_name ?>" class="form-control" placeholder="Enter First Name">
            </div>

            <div class="form-group">
                <label for="Last Name">Enter Last Name</label>
                <input type="text" name="last_name" value="<?php echo $last_name ?>" class="form-control" placeholder="Enter Last Name">
            </div>

            <div class="form-group">
                <label for="Password">Enter Password</label>
                <input type="text" name="password" value="<?php echo $password ?>" class="form-control" placeholder="Enter Password">
            </div>

            <input type="hidden" name="id" id="id" value="<?php echo $_GET['id'] ?>">

            <div class="form-group">
                <input name="submit" id="submit" type="submit" class="btn btn-success" value="Save">
            </div>
        </form>
    </div>
</main>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>
<!-- <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script> -->

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>

<!-- datatables plugin -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

</body>

</html>

<?php

include("connection/db.php");

if (isset($_POST['submit'])) {
    $Id = $_POST['id'];
    $Email = $_POST['email'];
    $Username = $_POST['username'];
    $First_name = $_POST['first_name'];
    $Last_name = $_POST['last_name'];
    $Password = $_POST['password'];

    $query1 = mysqli_query($conn, "update admin_login set admin_email='$Email', admin_pass='$Password',
    admin_username = '$Username', first_name = '$First_name', last_name = '$Last_name' where id=$id");

    if ($query) {
        echo "<script>alert('Record updated successfully!')</script>";
    } else {
        echo "<script>alert('Could not update! Try again')</script>";
    }
}

?>
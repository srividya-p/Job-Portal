<?php
include('include/header.php');
include('include/sidebar.php');
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
            <li class="breadcrumb-item"><a href="job_seeker.php">Job Seekers</a></li>
            <li class="breadcrumb-item"><a href="add_job_seeker.php">Add Job Seeker</a></li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Job Seeker</h1><br>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            </div>
        </div>
    </div>
    <div style="width: 60%; margin-left:20%; background-color:beige;">
        <form action="" style="margin:3%; padding:3%;" name="seeker_form" id="seeker_form" action="" method="POST">
            <div class="form-group">
                <label for="Seeker Email">Enter Seeker Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>

            <div class="form-group">
                <label for="Seeker Username">Enter Username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>

            <div class="form-group">
                <label for="First Name">Enter First Name</label>
                <input type="text" name="first_name" class="form-control" placeholder="Enter First Name">
            </div>

            <div class="form-group">
                <label for="Last Name">Enter Last Name</label>
                <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name">
            </div>

            <div class="form-group">
                <label for="Password">Enter Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>

            <div class="form-group">
                <label for="User Type">User Type</label>
                <select name="user_type" class="form-control" id="user_type">
                    <option value="1">Admin</option>
                    <option value="2">Seeker</option>
                </select>
            </div>

            <div class="form-group">
                <input name="submit" id="submit" type="submit" class="btn btn-success" placeholder="SAVE">
            </div>
        </form>
        <div id='msg'></div>
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

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<script>
    $(document).ready(function() {
        $("#submit").click(function() {
            var email = $('#email').val();
            var username = $('#username').val();
            var first_name = $('#first_name').val();
            var last_name = $('#last_name').val();
            var password = $('#password').val();
            var user_type = $('#user_type').val();
            var data = $("#seeker_form").serialize();
            $.ajax({
                type: "POST",
                url: "seeker_added.php",
                data: data,
                success: function(data) {
                   alert(data);
                }
            });
        })
    })
</script>

</body>

</html>
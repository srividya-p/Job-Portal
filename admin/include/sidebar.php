<?php
$conn = mysqli_connect('localhost', 'root', '', 'job_portal');
$query = mysqli_query($conn, "select * from admin_login where 
admin_email='{$_SESSION['email']}'");
if (mysqli_num_rows($query) > 0) {
?>

    <section>
        <section class="mainbody">
            <div class="sidenav">
                <a href="dashboard.php">
                    <span data-feather="home"></span>
                    Dashboard
                </a>

                <a href="uv_company.php">
                    <span data-feather="user-plus"></span>
                    Unverified Companies
                </a>

                <a href="job.php">
                    <span data-feather="briefcase"></span>
                    Job Posts
                </a>

                <a href="seeker.php">
                    <span data-feather="users"></span>
                    Job Seekers
                </a>

                <a href="company.php">
                    <span data-feather="layers"></span>
                    Companies
                </a>

                <a href="admin_account.php">
                    <span data-feather="settings"></span>
                    Admin Accounts
                </a>
            </div>

            <div class="main">
                <div id="page-wrapper">
                    <div class="container-fluid">
                        <wbr>

                    <?php } else { ?>
                        <section>
                            <section class="mainbody">
                                <div class="sidenav">
                                    <a href="dashboard.php">
                                        <span data-feather="home"></span>
                                        Dashboard
                                    </a>

                                    <a class="nav-link" href="job.php">
                                        <span data-feather="briefcase"></span>
                                        Post a Job
                                    </a>

                                    <a class="nav-link" href="applicants.php">
                                        <span data-feather="users"></span>
                                        Applicants
                                    </a>

                                    <a class="nav-link" href="selected_applicants.php">
                                        <span data-feather="users"></span>
                                        Accepted
                                    </a>

                                    <a class="nav-link" href="company_update.php">
                                        <span data-feather="user"></span>
                                        Your Profile
                                    </a>
                                </div>

                                <div class="main">
                                    <div id="page-wrapper">
                                        <div class="container-fluid">
                                            <wbr>
                                        <?php } ?>
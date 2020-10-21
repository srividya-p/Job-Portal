<?php 
$conn = mysqli_connect('localhost', 'root', '', 'job_portal');
$query = mysqli_query($conn, "select * from admin_login where 
admin_email='{$_SESSION['email']}'");
if (mysqli_num_rows($query)>0){
?>
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.php">
                            <span data-feather="home"></span>
                            Dashboard 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="uv_company.php">
                            <span data-feather="user-plus"></span>
                            Unverified Companies
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="job.php">
                            <span data-feather="briefcase"></span>
                            Job Posts
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="seeker.php">
                            <span data-feather="users"></span>
                            Job Seekers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="company.php">
                            <span data-feather="layers"></span>
                            Companies
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin_account.php">
                            <span data-feather="settings"></span>
                            Admin Accounts 
                        </a>
                    </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Saved reports</span>
                    <a class="d-flex align-items-center text-muted" href="#">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Current month
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Last quarter
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Social engagement
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
   
<?php
} else{
?>
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.php">
                            <span data-feather="home"></span>
                            Dashboard
                        </a>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" href="job.php">
                            <span data-feather="briefcase"></span>
                            Post a Job
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="users"></span>
                            Applicants
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="users"></span>
                            Accepted
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="user"></span>
                            Your Profile
                        </a>
                    </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Saved reports</span>
                    <a class="d-flex align-items-center text-muted" href="#">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Current month
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Last quarter
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Social engagement
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
 

<?php
}
?>


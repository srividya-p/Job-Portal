<?php
include("connection/db.php");

include('include/header.php');
include('include/sidebar.php');

$conn = mysqli_connect('localhost', 'root', '', 'job_portal');
$query = mysqli_query($conn, "select * from admin_login where 
admin_email='{$_SESSION['email']}'");
if (mysqli_num_rows($query)>0){
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="job.php">Job Posts</a></li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">All Job Posts</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            </div>
        </div>
    </div>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>#SR No.</th>
                <th>Creator</th>
                <th>Job Title</th>
                <th>Description</th>
                <th>Country</th>
                <th>State</th>
                <th>City</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('connection/db.php');
            $query = mysqli_query($conn, "select * from jobs");
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $row['job_id'] ?></td>
                    <td><?php echo $row['creator_email'] ?></td>
                    <td><?php echo $row['job_title'] ?></td>
                    <td><?php echo $row['description'] ?></td>
                    <td><?php echo $row['country'] ?></td>
                    <td><?php echo $row['state'] ?></td>
                    <td><?php echo $row['city'] ?></td>
                    <td>
                        <div class="row">
                            <div class="btn-group">
                                <a href="job_edit.php?id=<?php echo $row['job_id'] ?>" class="btn btn-success glyphicon glyphicon-pencil"><span class=""></span></a>
                                <a href="job_delete.php?del=<?php echo $row['job_id'] ?>" class="btn btn-danger glyphicon glyphicon-trash"><span class=""></span></a>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>#SR No.</th>
                <th>Creator</th>
                <th>Job Title</th>
                <th>Description</th>
                <th>Country</th>
                <th>State</th>
                <th>City</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</main>
</div>
</div>

<?php
} else{
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="job.php">Post a Job</a></li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Your Job Posts</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            </div>
            <a class="btn btn-primary" href="add_job.php">Add Job</a>
        </div>
    </div>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>#SR No.</th>
                <th>Creator</th>
                <th>Job Title</th>
                <th>Description</th>
                <th>Country</th>
                <th>State</th>
                <th>City</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('connection/db.php');
            $query = mysqli_query($conn, "select * from jobs where creator_email = '{$_SESSION['email']}'");
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $row['job_id'] ?></td>
                    <td><?php echo $row['creator_email'] ?></td>
                    <td><?php echo $row['job_title'] ?></td>
                    <td><?php echo $row['description'] ?></td>
                    <td><?php echo $row['country'] ?></td>
                    <td><?php echo $row['state'] ?></td>
                    <td><?php echo $row['city'] ?></td>
                    <td>
                        <div class="row">
                            <div class="btn-group">
                                <a href="job_edit.php?id=<?php echo $row['job_id'] ?>" class="btn btn-success glyphicon glyphicon-pencil"><span class=""></span></a>
                                <a href="job_delete.php?del=<?php echo $row['job_id'] ?>" class="btn btn-danger glyphicon glyphicon-trash"><span class=""></span></a>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>#SR No.</th>
                <th>Creator</th>
                <th>Job Title</th>
                <th>Description</th>
                <th>Country</th>
                <th>State</th>
                <th>City</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</main>
</div>
</div>

<?php
}
?>

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

</body>

</html>
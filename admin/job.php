<?php
include("connection/db.php");

include('include/header.php');
include('include/sidebar.php');

$query = mysqli_query($conn, "select * from admin_login where 
admin_email='{$_SESSION['email']}'");
if (mysqli_num_rows($query) > 0) {
?>
    <p><a href="dashboard.php">Dashboard</a>&nbsp;/&nbsp;<a href="job.php">Job Posts</a></p>
    <div class="row">
        <div class="col">
            <h1 class="page-header" style="font-size: 25px;">
                Job Posts
            </h1>
        </div>
    </div>
    <div class="table-div">
        <table id="example" class="row-border hover">
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
                                    <a href="job_edit.php?id=<?php echo $row['job_id'] ?>"><span class="success" data-feather="edit-2"></span></a>
                                    <a href="job_delete.php?del=<?php echo $row['job_id'] ?>"><span class="danger" data-feather="trash-2"></span></a>
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
    </div>
    </div>
    </div>
    </div>

<?php
} else {
?>
    <p><a href="dashboard.php">Dashboard</a>&nbsp;/&nbsp;<a href="job.php">Job Posts</a></p>

    <div class="row">
        <div class="col">
            <p style="font-size: 25px;">
                Your Job Posts<br><a href="add_job.php" class="info-button" style="font-size: 15px;margin-left: 1125px;">ADD JOB POST</a>
            </p>
        </div>
    </div>
    <div class="table-div">
        <table id="example" class="row-border hover">
            <thead>
                <tr>
                    <th>#SR No.</th>
                    <th>Job Title</th>
                    <th>Description</th>
                    <th>Openings</th>
                    <th>Salary</th>
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
                        <td><?php echo $row['job_title'] ?></td>
                        <td><?php echo $row['description'] ?></td>
                        <td><?php echo $row['openings'] ?></td>
                        <td><?php echo $row['salary'] ?></td>
                        <td><?php echo $row['country'] ?></td>
                        <td><?php echo $row['state'] ?></td>
                        <td><?php echo $row['city'] ?></td>
                        <td>
                            <div class="row">
                                <div class="btn-group">
                                    <a href="job_edit.php?id=<?php echo $row['job_id'] ?>"><span class="success" data-feather="edit-2"></a>
                                    <a href="job_delete.php?del=<?php echo $row['job_id'] ?>"><span class="danger" data-feather="trash-2"></a>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>#SR No.</th>
                    <th>Job Title</th>
                    <th>Description</th>
                    <th>Openings</th>
                    <th>Salary</th>
                    <th>Country</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
    </div>
    </div>
    </div>

<?php
}
?>

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
<?php
include("connection/db.php");

include('include/header.php');
include('include/sidebar.php');

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="seeker.php">Job Seekers</a></li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Job Seekers</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            </div>
        </div>
    </div>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Country</th>
                <th>Age</th>
                <th>Qualification</th>
                <th>CGPA</th>
                <th>Resume</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('connection/db.php');
            $query = mysqli_query($conn, "select * from job_seeker");
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $row['fname'] ?></td>
                    <td><?php echo $row['lname'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['mobileno'] ?></td>
                    <td><?php echo $row['country'] ?></td>
                    <td><?php echo $row['age'] ?></td>
                    <td><?php echo $row['qualification'] ?></td>
                    <td><?php echo $row['cgpa'] ?></td>
                    <td>
                        <button data-feather="eye" onclick="showDoc('<?php echo $row['resume'] ?>')"></button>
                    </td>
                    <td>
                        <div class="row">
                            <div class="btn-group">
                                <a href="seeker_edit.php?id=<?php echo $row['id'] ?>" class="btn btn-success glyphicon glyphicon-pencil"><span class=""></span></a>
                                <a href="seeker_delete.php?del=<?php echo $row['id'] ?>" class="btn btn-danger glyphicon glyphicon-trash"><span class=""></span></a>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Country</th>
                <th>Age</th>
                <th>Qualification</th>
                <th>CGPA</th>
                <th>Resume</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</main>
</div>
</div>

<script>
    function showDoc(pth) {
        window.open(pth, '_blank');
    }
</script>

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
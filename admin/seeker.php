<?php
include("connection/db.php");

include('include/header.php');
include('include/sidebar.php');

?>

<p><a href="dashboard.php" >Dashboard</a>&nbsp;/&nbsp;<a href="seeker.php">Job Seekers</a></p>

<div class="row">
    <div class="col">
        <h1 class="page-header" style="font-size: 25px;">
            Job Seekers
        </h1>
    </div>
</div>

<div class="table-div">
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
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
                    <td><?php echo $row['fname'] ?> <?php echo $row['lname'] ?></td>
                    <td style="font-size:10px;"><?php echo $row['email'] ?></td>
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
                                <a href="seeker_edit.php?id=<?php echo $row['id'] ?>" ><span data-feather="edit-2" class="success"></span></a>
                                <a href="seeker_delete.php?del=<?php echo $row['id'] ?>"><span data-feather="trash-2" class="danger"></span></a>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
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
</div>
</div>
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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/r-2.2.6/datatables.min.css" />
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/r-2.2.6/datatables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            responsive: true
        });
    });
</script>

</body>

</html>
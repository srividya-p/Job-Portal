<?php
include("connection/db.php");

include('include/header.php');
include('include/sidebar.php');

$company = $_SESSION['email'];

$conn = mysqli_connect('localhost', 'root', '', 'job_portal');
$query = mysqli_query($conn, "select j.job_title, j.job_id, s.id, s.fname, s.lname, s.resume,
 s.mobileno from job_seeker s, jobs j, applicant a where a.user_id=s.id and
a.job_post_id=j.job_id and a.status='applied' and j.creator_email='$company'");

?>

<html>

<p><a href="dashboard.php">Dashboard</a>&nbsp;/&nbsp;<a href="applicants.php">Applicants</a></p>

<div class="row">
    <div class="col">
        <p style="font-size: 25px;">
            Applicants
        </p>
    </div>
</div>
<div class="table-div">
    <table id="example" class="row-border hover">
        <thead>
            <tr>
                <th>Job Title</th>
                <th>Applicant</th>
                <th>Phone</th>
                <th>Resume</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $row['job_title'] ?></td>
                    <td><?php echo $row['fname'] . ' ';
                        echo $row['lname'] ?></td>
                    <td><?php echo $row['mobileno'] ?></td>
                    <td>
                        <button data-feather="eye" onclick="showDoc('<?php echo $row['resume'] ?>')"></button>
                    </td>
                    <td>
                        <div class="row">
                            <div class="btn-group">
                                <a href="js_selected.php?u-id=<?php echo $row['id'] ?>&j-id=<?php echo $row['job_id'] ?>" ><span data-feather="check" class="success"></span></a>
                                <a href="js_rejected.php?u-id=<?php echo $row['id'] ?>&j-id=<?php echo $row['job_id'] ?>" ><span data-feather="x" class="danger"></span></a>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Job Title</th>
                <th>Applicant</th>
                <th>Phone</th>
                <th>Resume</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>
</div>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>

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
    function showDoc(pth) {
        window.open(pth, '_blank');
    }
</script>

</html>
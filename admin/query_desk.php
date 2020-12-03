<?php
include("connection/db.php");

include('include/header.php');
include('include/sidebar.php');

?>
<p><a href="dashboard.php" >Dashboard</a>&nbsp;/&nbsp;<a href="query_desk.php">Query Desk</a></p>
<div class="row">
    <div class="col">
        <h1 class="page-header" style="font-size: 25px;">
            Query Desk
        </h1>
    </div>
</div>
<div class="table-div">
    <table id="example">
        <thead>
            <tr>
                <th>Email</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('connection/db.php');
            $query = mysqli_query($conn, "select * from querydesk");
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['message'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Email</th>
                <th>Message</th>
            </tr>
        </tfoot>
    </table>
</div>
</div>
</div>
</div>

<script>
    function showPic(pth) {
        window.open(pth, '_blank');
    }

    function showDoc(pth) {
        window.open(pth, '_blank');
    }
</script>

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
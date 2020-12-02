<?php
include("connection/db.php");

include('include/header.php');
include('include/sidebar.php');

?>
<p><a href="dashboard.php" >Dashboard</a>&nbsp;/&nbsp;<a href="uv_company.php">Unverified Companies</a></p>
<div class="row">
    <div class="col">
        <h1 class="page-header" style="font-size: 25px;">
            Unverified Companies
        </h1>
    </div>
</div>
<div class="table-div">
    <table id="example">
        <thead>
            <tr>
                <th>Company Name</th>
                <th>Desc</th>
                <th>Country</th>
                <th>Stream</th>
                <th>Website</th>
                <th>Date of Formation</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Profile Picture</th>
                <th>Formation Docs</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('connection/db.php');
            $query = mysqli_query($conn, "select * from company where verified=0");
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['description'] ?></td>
                    <td><?php echo $row['country'] ?></td>
                    <td><?php echo $row['stream'] ?></td>
                    <td><?php echo $row['website'] ?></td>
                    <td><?php echo $row['date'] ?></td>
                    <td style="font-size:10px;" ><?php echo $row['email'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td>
                        <button data-feather="eye" onclick="showPic('<?php echo $row['photo'] ?>')"></button>
                    </td>
                    <td>
                        <button data-feather="eye" onclick="showDoc('<?php echo $row['form_doc'] ?>')"></button>
                    </td>
                    <td>
                        <div class="row">
                            <div class="btn-group">
                                <a href="accept.php?id=<?php echo $row['id'] ?>"><span class="success" data-feather="check"></span></a>
                                <a href="reject.php?del=<?php echo $row['id'] ?>"><span class="danger" data-feather="x"></span></a>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Company Name</th>
                <th>Description</th>
                <th>Country</th>
                <th>Stream</th>
                <th>Website</th>
                <th>Date of Formation</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Profile Picture</th>
                <th>Formation Documents</th>
                <th>Action</th>
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
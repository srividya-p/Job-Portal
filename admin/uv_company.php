<?php
include("connection/db.php");

include('include/header.php');
include('include/sidebar.php');

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="uv_company.php">Unverified Companies</a></li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Unverified Companies</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            </div>
        </div>
    </div>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Company Name</th>
                <th>Description</th>
                <th>Country</th>
                <th>Stream</th>
                <th>Website</th>
                <th>Date of Formation</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Profile Picture</th>
                <th>Formation Documents</th>
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
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td><?php echo $row['password'] ?></td>
                    <td>
                        <button data-feather="eye" onclick="showPic('<?php echo $row['photo'] ?>')"></button>
                    </td>
                    <td>
                        <button data-feather="eye" onclick="showDoc('<?php echo $row['form_doc'] ?>')"></button>
                    </td>
                    <td>
                    <div class="row">
                        <div class="btn-group">
                            <a href="accept.php?id=<?php echo $row['id'] ?>" class="btn btn-success glyphicon glyphicon-ok"><span class=""></span></a>
                            <a href="reject.php?del=<?php echo $row['id'] ?>" class="btn btn-danger glyphicon glyphicon-remove"><span class=""></span></a>
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
                <th>Password</th>
                <th>Profile Picture</th>
                <th>Formation Documents</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</main>
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
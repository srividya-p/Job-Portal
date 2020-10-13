<?php
include('include/header.php');
include('include/sidebar.php');
?>
<style>
    label {
        font-size: 18px;
    }
</style>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="company.php">Companies</a></li>
            <li class="breadcrumb-item"><a href="add_company.php">Add Company</a></li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Company</h1><br>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            </div>
        </div>
    </div>
    <div style="width: 60%; margin-left:20%; background-color:beige;">
        <form action="" style="margin:3%; padding:3%;" name="company_form" id="company_form" action="" method="POST">
            <div class="form-group">
                <label for="Company Name">Enter Company Name</label>
                <input type="text" name="c_name" class="form-control" placeholder="Enter Company Name">
            </div>

            <div class="form-group">
                <label for="Description">Enter Description</label>
                <textarea name="desc" cols = "30" rows = "10" class="form-control" id="desc"></textarea>
            </div>

            <div class="form-group">
                <input name="submit" id="submit" type="submit" class="btn btn-success" placeholder="SAVE">
            </div>
        </form>
        <div id='msg'></div>
    </div>
</main>
</div>
</div>

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

<script>
    $(document).ready(function() {
        $("#submit").click(function() {
            var c_name = $('#c_name').val();
            var desc = $('#desc').val();
            if (c_name == ""){
                alert('Please Enter a Company Name!')
                return false
            }
            if (desc == ""){
                alert('Please Enter a Description!')
                return false
            }
            var data = $("#company_form").serialize();
            $.ajax({
                type: "POST",
                url: "company_added.php",
                data: data,
                success: function(data) {
                    alert(data);
                }
            });
        });
    });
</script>

</body>

</html>
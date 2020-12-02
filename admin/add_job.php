<?php
include("connection/db.php");

include('include/header.php');
include('include/sidebar.php');

?>

<style>
    label {
        font-size: 18px;
    }
</style>
<p><a href="dashboard.php">Dashboard</a>&nbsp;/&nbsp;<a href="job.php">Job Posts</a>&nbsp;/&nbsp;<a href="#">Add Job Post</a></p>

<div class="row">
    <div class="col">
        <h1 class="page-header" style="font-size: 25px;">
            Add Job Post 
        </h1>
    </div>
</div>
<div style="width: 50%; margin-left:15%; background-color:beige; border-radius:10px;">
    <form action="" style="margin:3%; padding:3%;" name="job_form" id="job_form" action="" method="POST">
        <div class="form-group">
            <label for="Job Title">Enter Job Title</label><br><br>
            <input type="text" name="jobTitle"  placeholder="Enter Job Title">
        </div>

        <div class="form-group">
            <label for="Description">Enter Description</label><br><br>
            <textarea name="desc" id="desc" cols="30" rows="10" id="desc"></textarea>
        </div>

        <div class="form-group">
            <label for="Country">Enter Country</label><br><br>
            <select name="country" class="countries" id="countryId">
                <option value="">Select Country</option>
            </select>
        </div>

        <div class="form-group">
            <label for="State">Enter State</label><br><br>
            <select name="state" class="states" id="stateId">
                <option value="">Select State</option>
            </select>
        </div>

        <div class="form-group">
            <label for="City">Enter City</label><br><br>
            <select name="city" class="cities" id="cityId">
                <option value="">Select City</option>
            </select>
        </div>

        <div class="form-group">
            <label for="Openings">Enter Number of Openings</label><br><br>
            <input type="number" id="openings" required name="openings" placeholder="Enter number of Openings">
        </div>

        <div class="form-group">
            <label for="Openings">Enter Salary</label><br><br>
            <input type="number" id="salary" required name="salary" placeholder="Enter Salary">
        </div>

        <div class="form-group">
            <input name="submit" id="submit" type="submit" class="submit-button" value="ADD">
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
            var jobTitle = $('#jobTitle').val();
            var desc = $('#desc').val();
            var country = $('#countryId').val();
            var state = $('#stateId').val();
            var city = $('#cityId').val();
            var salary = $('#salary').val();
            var openings = $('#openings').val();

            if (jobTitle == "") {
                alert('Please Enter a Job Title!')
                return false
            }
            if (desc == "") {
                alert('Please Enter a Description!')
                return false
            }
            if (country == "") {
                alert('Please Select a Country!')
                return false
            }
            if (state == "") {
                alert('Please Select a State!')
                return false
            }
            if (city == "") {
                alert('Please Select a City!')
                return false
            }

            if (openings == 0) {
                alert('Please enter Openings!')
                return false
            }

            if (salary == 0) {
                alert('Please enter Salary!')
                return false
            }

            var data = $("#job_form").serialize();
            $.ajax({
                type: "POST",
                url: "job_added.php",
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
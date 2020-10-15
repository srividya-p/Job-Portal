<?php
//To Handle Session Variables on This Page
session_start();
$conn = mysqli_connect("localhost", "root", "Anya@1208");

if(!$conn){
	echo "conn fail";
}

if(!mysqli_select_db($conn,"job_portal"))
{
	echo("db not selected");
}

//Including Database Connection From db.php file to avoid rewriting in all files

//If user Actually clicked register button
if(isset($_POST['submit'])) {

	//Escape Special Characters In String First
	$seeker_id=1;

	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
	$lname = mysqli_real_escape_string($conn, $_POST['lname']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$city = mysqli_real_escape_string($conn, $_POST['city']);
	$state = mysqli_real_escape_string($conn, $_POST['state']);
	$contactno = mysqli_real_escape_string($conn, $_POST['contactno']);
	$qualification = mysqli_real_escape_string($conn, $_POST['qualification']);
	$stream = mysqli_real_escape_string($conn, $_POST['stream']);
	$passingyear = mysqli_real_escape_string($conn, $_POST['passingyear']);
	$dob = mysqli_real_escape_string($conn, $_POST['dob']);
	$age = mysqli_real_escape_string($conn, $_POST['age']);
	$cgpa = mysqli_real_escape_string($conn, $_POST['cgpa']);
	$aboutme = mysqli_real_escape_string($conn, $_POST['aboutme']);
	$skills = mysqli_real_escape_string($conn, $_POST['skills']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	


	$sql = "insert into `jobseekers`(`seeker_id`,`fname`, `lname`, `address`, `city`, `state`, `contactno`, `qualification`, `stream`, 
	`passingyear`, `dob`, `age`, `cgpa`, `aboutme`, `skills`, `email`, `password`) values ('$seeker_id','".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['address']."', 
	'".$_POST['city']."', '".$_POST['state']."', '".$_POST['contactno']."', '".$_POST['qualification']."', '".$_POST['stream']."', '".$_POST['passingyear']."', '".$_POST['dob']."',
	'".$_POST['age']."', '".$_POST['cgpa']."', '".$_POST['aboutme']."', '".$_POST['skills']."', '".$_POST['email']."', '".$_POST['password']."')";
	
	if(!mysqli_query($conn,$sql))
	{
	echo "not inserted";
	}
	else
	{
	echo "inserted";
	}

    $query = "INSERT INTO `job_seeker`(`seeker_id`,`fname`, `lname`, `address`, `city`, `state`, `contactno`, `qualification`, `stream`, 
	`passingyear`, `dob`, `age`, `cgpa`, `aboutme`, `skills`, `email`, `password`) values ('$seeker_id','$fname', '$lname', '$address', 
	'$city', '$state', '$contactno', '$qualification', '$stream', '$passingyear', '$dob', '$age', '$cgpa', 
	'$aboutme', '$skills', '$email', '$password')";
	
	if(!mysqli_query($conn,$query))
	{
	echo "not inserted";
	}
	else
	{
	echo "inserted";
	}

	echo $sql;
	echo("$seeker_id,$fname,$lname, $address, 
	$city, $state, $contactno, $qualification, $stream, $passingyear, $dob, $age, $cgpa, 
	$aboutme, $skills, $email, $password");
}
?>
<?php    /* //start php tag
//include connect.php page for database connection
Include('connect.php')
//if submit is not blanked i.e. it is clicked.
If(isset($_REQUEST['submit'])!='')
{
If($_REQUEST['name']=='' || $_REQUEST['email']=='' || $_REQUEST['password']==''|| $_REQUEST['repassword']=='')
{
Echo "please fill the empty field.";
}
Else
{
$sql="insert into student(name,email,password,repassword) values('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['password']."', '".$_REQUEST['repassword']."')";
$res=mysql_query($sql);
If($res)
{
Echo "Record successfully inserted";
}
Else
{
Echo "There is some problem in inserting record";
}

}
}
*/
?>
<?php
$username="root";
$pass="";
$server="localhost";
$database="student_information";
 $conn = new mysqli($server, $username, $pass, $database);

$point= $_GET["point"];
$user_name=$_GET["username"];
$solnby=$_GET["solnby"];
$solnID=$_GET["solnid"];

$sql="SELECT * FROM rated WHERE Username like '$user_name' and SolutionID like '$solnID';" ;
$result = $conn->query($sql);
if($result->num_rows==0)
{
	$r=$conn->query("insert into rated (Username,SolutionID,Rating) values ('$user_name','$solnID',$point);");
  $conn->query("update student set RatedNo=RatedNo+1 where Username like '$solnby';");
  $conn->query("update student set Rating=(((Rating)*(RatedNo-1)+$point)/RatedNo ) where Username like '$solnby';");
  echo "Done";
}
else 
{
	$result1=$conn->query("SELECT * FROM rated WHERE Username like '$user_name' and SolutionID like '$solnID' and Rating like '$point';");
	if($result1->num_rows==0)
	{ 
$int=$conn->query("select Rating from rated WHERE Username like '$user_name' and SolutionID like '$solnID';"); 
$initi=mysqli_fetch_array($int);
$initial=$initi['Rating'];
		$r=$conn->query("update rated set Rating=$point where Username like '$user_name' and SolutionID like '$solnID';");
		$conn->query("update student set Rating=(Rating)+(($point-$initial)/(RatedNo)) where Username like '$solnby';");
		if($r==true)
			echo "Done";
	}
	else
	{
		echo "same";
	}
}

















?>

<?php
# Fill our vars and run on cli
# $ php -f db-connect-test.php
$dbname = 'team_yuntech';
$dbuser = 'root';
$dbpass = '';
$dbhost = '127.0.0.1';
/*
$arid = array();
$arrname = array();
$arrtype = array();
$arraffiliationplan = array();
$arrmember = array();
$arrdescription = array();
$arrregistertime = array();
$arrupdatetime = array();
*/
$arrsql[] = array();

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Unable to Connect to '$dbhost'");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
	# 確認回傳值為UTF8
	$conn->query("SET NAMES 'utf8'");
	# 選擇name, member, descript
	$sql = "SELECT * FROM cultivate_team";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	$arrsql[] = $row;
	    }
	} else {
	    #echo "<script>alert('0 results');</script>";
	}
	$conn->close();
}
?>
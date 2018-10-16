<?php 
	//echo 'ddd'; 
	$formteamname= isset($_POST['newteamname']) ? $_POST['newteamname'] : null;
	$formteamadvisor= isset($_POST['newteamadvisor']) ? $_POST['newteamadvisor'] : null;
	$formteammember= isset($_POST['newteammember']) ? $_POST['newteammember'] : null;
	$formteamdescription= isset($_POST['newteamdescription']) ? $_POST['newteamdescription'] : null;
	$formteamtype= isset($_POST['newteamtype']) ? $_POST['newteamtype'] : null;
	$formteamplansexecuted= isset($_POST['newteamplansexecuted']) ? $_POST['newteamplansexecuted'] : null;
	//echo $formteamname;

	$dbname = 'team_yuntech';
	$dbuser = 'root';
	$dbpass = '';
	$dbhost = '127.0.0.1';


	// temp
	$dbDir =  dirname(__FILE__);
	$tmpfilePath=$dbDir.DIRECTORY_SEPARATOR .'upload'.DIRECTORY_SEPARATOR .'cover.jpg';
	$libfiledir=$dbDir.DIRECTORY_SEPARATOR .'library'.DIRECTORY_SEPARATOR . $formteamplansexecuted .DIRECTORY_SEPARATOR;
	$libfilePath=$libfiledir.'cover.jpg';


	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Unable to Connect to '$dbhost'");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
	//if ($formteamname==='none' || $formteamnadvisor==='none' || $formteammember==='none' || $formteamdescription==='none' || $formteamtype==='none' || $formteamplansexecuted === 'none'){echo "填寫未完全"} 

	# 確認回傳值為UTF8
	$conn->query("SET NAMES 'utf8'");
	# 選擇name, member, descript
	$sql = "INSERT INTO cultivate_team (teamname, teamtype, teamadvisor, teammember, teamdescription, teamplansexecuted) VALUES ('".$formteamname."', '".$formteamtype."', '".$formteamadvisor."', '".$formteammember."', '".$formteamdescription."', '".$formteamplansexecuted."')";
	$result = $conn->query($sql);

	// 製作 資料檔
	if(!is_dir($libfiledir)){
    	//Directory does not exist, so lets create it.
    	mkdir($libfiledir, 0755, true);
	}
	// 上傳圖片
	if (!rename($tmpfilePath, $libfilePath)) {
             return;
    }
    echo "成功上傳!!";
	
	$conn->close();


}
?>
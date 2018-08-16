<?php include('server.php');

$dateQuery = "SELECT duedate FROM login WHERE username LIKE '". $_SESSION['username']."' ";
$dateQueryResult = mysqli_query($db, $dateQuery);
	if ($dateQueryResult->num_rows > 0) {
		
			$row = $dateQueryResult->fetch_assoc();
			$dueDate = $row['duedate'];
		
	}
	$todaysDate = new DateTime();
	$dueDate = new DateTime($row['duedate']);

    $weeksPregnant = 40 -($dueDate->diff($todaysDate)->format("%a"))/7;
    
    $tmp = explode('.', $weeksPregnant);
	$file_extension = end($tmp);

?>
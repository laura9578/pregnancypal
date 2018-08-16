<?php
include('server.php');


if(isset($_GET['dayClicked']))
{
	$daySelected = $_GET['dayClicked'];
	$_SESSION['dayClicked'] = $daySelected;
	$day = mysqli_real_escape_string($db, $daySelected);
	$dayQuery = "SELECT title,event FROM calendar where eventDate like '%$day%';" ;
	$results = mysqli_query($db, $dayQuery);

	

		if ($results->num_rows > 0) {
		while($row = $results->fetch_assoc()) { 
		echo "<li>";
			echo "<ul>".$row['title']. "<br>" .$row['event']."</ul>"  ;
			echo "</li>";
		 } 
		 echo '<br>';
		 echo "<a href='addEvent.php'> Add Event </a>";
	}
	
	else
	{
		echo "<a href ='addEvent.php'> Add Event </a>";
	}
	


}

			
?>

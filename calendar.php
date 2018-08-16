<?php
include ('server.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Calendar</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	</head>
<body>
	<div class="main">
		<h2>Calendar</h2>

		<nav class="nav">
		<img src =/registration/Images/Logo.jpg width='150px' height='150px' float='left' style= 'position:absolute; top:0; right:0;' />
 			<a class="nav-link" href="index.php">Home</a>
  			<a class="nav-link" href="profile.php">Profile</a>
  			<a class="nav-link" href="pregnancyByWeek.php">Weekly Development</a>
			<a class="nav-link active" href="calendar.php">Calendar</a>
			<a class="nav-link" href="healthInfo.php">Food and Medicine Warnings</a>
			<a class="nav-link" href="terminology.php">Terminology</a>
			<a class="nav-link" href="chat.php">Chatroom</a>
            <a class="nav-link" href="index.php?logout='1'" style="color: red;">Logout</a>
		</nav>
	</div>
	<br>
	<div class = "calendar">
		<?php
		if(isset($_SESSION['day']))
		{
			$day = $_SESSION['day'];
		}
		else
		{
			$day = date('d');
			$_SESSION['day'] = $day;
		}
		if(isset($_SESSION['calendarMonth']))
		{
			$monthNum = $_SESSION['calendarMonth'];
			$month = date('M', mktime(0, 0, 0, $monthNum));
		}
		else
		{
			$month = date('M');
			$monthNum = date('m',strtotime($month));
			$_SESSION['calendarMonth'] = $monthNum;
		}
		if(isset($_SESSION['year']))
		{
			$year = $_SESSION['year'];
		}
		else
		{
			$year = date('Y');
			$_SESSION['year'] = $year;
		}

		$today = "$day $month $year";
		?>

	    <table border='1'>
		
			<?php

			if(isset($_GET['prev']))
			{
				$monthNum = date('m',strtotime($month))-1;
				if($monthNum == 0)
				{
					$year = $year -1;
					$monthNum = 12;
				}

				$_SESSION['year'] = $year;
				$_SESSION['calendarMonth'] = $monthNum;
				$month = date('M', mktime(0, 0, 0, $monthNum));
			}
			if(isset($_GET['next']))
			{
				$monthNum = date('m',strtotime($month))+1;
				if($monthNum == 13)
				{
					$year = $year +1;
					$monthNum = 1;
				}

				$_SESSION['year'] = $year;
				$_SESSION['calendarMonth'] = $monthNum;
				$month = date('M', mktime(0, 0, 0, $monthNum));
			}
			if(isset($_GET['today']))
			{
				$day = date('d');
				$_SESSION['day'] = $day;

				$month = date('M');
				$monthNum = date('m',strtotime($month));
				$_SESSION['calendarMonth'] = $monthNum;

				$year = date('Y');
				$_SESSION['year'] = $year;
			}

			?>
			<tr>
			<td><form method="get" action"calendar.php">
			<input class="button" type="submit" name="prev" value="prev" />
			</form></td>
			<th colspan ='4'><?php echo "$day $month $year" ?>
			<td><form method="get" action"calendar.php">
			<input class="button" type="submit" name="today" value="Today" style="float:right"/>
			</form></td></th>
			<td> <form method="get" action"calendar.php">
			<input class="button" type="submit" name="next" value="next"/></td>
			</tr>
			<tr>
				<td width='50xp' style='font-weight:bold'>Sun</td>
				<td width='50xp'style='font-weight:bold'>Mon</td>
				<td width='50xp'style='font-weight:bold'>Tue</td>
				<td width='50xp'style='font-weight:bold'>Wed</td>
				<td width='50xp'style='font-weight:bold'>Thu</td>
				<td width='50xp'style='font-weight:bold'>Fri</td>
				<td width='50xp'style='font-weight:bold'>Sat</td>
			</tr>
			<?php
			echo "<tr>";
			$counter = 0;
			$currentDate = strtotime("$day $month $year");
			$noOfDays = date("t", $currentDate);
			$day_array = [];
			for($i=1; $i<=$noOfDays; $i++)
			{
				$thisDate = strtotime("$i $month $year") ;
				$dayClicked = date("w", $thisDate);
				$counter++;
					  if($i==1)
					  {
						$startDay = date("w",$thisDate);
						for ($j = 1; $j <= $startDay; $j++){
							$counter++;
							echo "<td>&nbsp;</td>";
							}
					  }
					  echo '<td><a href ="calendarEvent.php?dayClicked=' . $i . '"> '.$i.' </a></td>';
					 

					  if($counter % 7 == 0)
					  {
						  echo "<tr></tr>";

					  }
			}
			
			echo "</tr>";
			?>
		</table>	
	</div>
</body>
</html>
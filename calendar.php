<?php include('server.php'); ?>
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
 			<a class="nav-link" href="index.php">Home</a>
  			<a class="nav-link" href="quiz.php">Quiz</a>
  			<a class="nav-link" href="pregnancyByWeek.php">Weekly Development</a>
			<a class="nav-link active" href="calendar.php">Calendar</a>
			<a class="nav-link" href="healthInfo.php">Food and Medicine Warnings</a>
			<a class="nav-link" href="terminology.php">Terminology</a>
			<a class="nav-link" href="chatroom.php">Chatroom</a>
            <a class="nav-link" href="index.php?logout='1'" style="color: red;">Logout</a>
		</nav>
	</div>
	<br>
	<div class = "calendar">
		<?php
		if(isset($day)){
			$day = $_GET[$day];
		}
		else{
			$day = date('d');
		}
		if(isset($month)){
			$month = $_GET[$month];
		}
		else{
			$month = date('M');
		}
		if(isset($year)){
			$year = $_GET[$year];
		}
		else{
			$year = date('Y');
		}

		$today = "$day $month $year";
		$currentDate = strtotime("$day $month $year");
		$noOfDays = date("t", $currentDate);
		$counter = 0;
		?>

	    <table border='1'>
			<tr>
			<td><form method="get" action"calendar.php">
			<input class="button" type="submit" name="prev" value="previous"/>
			</form></td>
			<th colspan ='5'><?php echo "$day $month $year" ?>
			</th>
			<td> <input class="button" type="submit" name="next" value="next"/></td>
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
			if(isset($_GET['prev']))
			{
				$month= date("M", strtotime("first day of last month"));
				var_dump($month);
		    
			echo "<tr>";
			for($i=1; $i<=$noOfDays; $i++)
			{
				$thisDate = strtotime("$i $month $year") ;
				$counter++;
					  if($i==1)
					  {
						$startDay = date("w",$thisDate);
						for ($j = 1; $j < $startDay; $j++){ 
							$counter++;
							echo "<td>&nbsp;</td>";
							}     
					  }
					  echo "<td>".$i."</td>";

					  if($counter % 7 == 0)
					  {
						  echo "<tr></tr>";
						  
					  }
			}
			
			echo "</tr>";
		}
			?>
		</table>
	</div>
</body>
</html>
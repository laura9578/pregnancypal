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
		<!--Calendar from Google
        <iframe src="https://calendar.google.com/calendar/embed?showPrint=0&amp;height=500&amp;wkst=1&amp;bgcolor=%2399ff99&amp;src=r13v62t4q5oeco5869pfa8n6oc%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=Europe%2FLondon"
			 style="border:solid 1px #777" width="600" height="500" frameborder="0" scrolling="no"></iframe> !-->
		<?php
		$day = date("d");
		$month = date('M');
		$year = date('Y');
		$today = "$day $month $year";

		$currentDate = strtotime("$day $month $year");
		$noOfDays = date("t", $currentDate);
		$counter = 0;

		var_dump($day);
		var_dump($month);
		var_dump($year);
		var_dump($today);
		var_dump($noOfDays);
		?>

	    <table border='1'>
			<tr>
			<th colspan ='7'> <?php echo $today ?>
			</th>
			</tr>
			<tr>
				<td width='50xp'>Sun</td>
				<td width='50xp'>Mon</td>
				<td width='50xp'>Tue</td>
				<td width='50xp'>Wed</td>
				<td width='50xp'>Thu</td>
				<td width='50xp'>Fri</td>
				<td width='50xp'>Sat</td>
			</tr>
			<?php
			echo "<tr>";
			for($i=0; $i<$noOfDays; $i++)
			{
				$counter++;
				$eachDay = strtotime("$year/$month/$i");
				$firstDay = "";
				echo "<td>";
					if($i==1)
					{
					  $firstDay = date("w",$eachDay);
					  for($j=0; $j<$firstDay; $counter++)
					  {
						  echo "<td>&nbsp</td>";
					  }
					  if($counter % 7 == 0)
					  {
						  echo "</tr><tr>";
					  }
					  echo "<td>".$i."</td>";
					}
					echo "</td>";

			}
			echo "</tr>";
			var_dump($eachDay);
			?>
		</table>
	</div>
</body>
</html>
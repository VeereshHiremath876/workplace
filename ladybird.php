

<?php

if(isset($_POST["Submit"]))
{
	$s_number=$_POST["s_number"];
	$e_number=$_POST["e_number"];

	for ($i=$e_number; $i >$s_number; $i--)
	{ 
		$number=$i%3;

		if($number==0)
		{	echo "Multiple of 3 : ".$i."<br>";	}

	}

}

?>

<!DOCTYPE html>
<html>
<head>
<title> Task 1 : Multiple of 3 in reverse order</title>
<link rel="stylesheet" href="style1.css">

</head>

<body>
<div class="">
<form class="" action="ladybird.php" method="post">
<fieldset>

	<span class="Fieldinfo">Starting Number:</span>
	<br>
	<input type="number" name="s_number" value="">
	<br><br>

	<span class="Fieldinfo">End Number:</span>
	<br>
	<input type="number" name="e_number" value="">
	<br><br>

	<input type="submit" id="submit_id" name="Submit" value="Submit">

</fieldset>
</form>
</div>
</body>
</html>
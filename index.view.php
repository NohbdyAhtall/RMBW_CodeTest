<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RM_BW_Form</title>

	<style>
	header
	{
		background: #e3e3e3;
		padding: 2em;
		text-align: center;
	}
	</style>

</head>
<body>	
	<header>
		<h1>
			<?=
				foreach ($task as $heading => $value)
				{
					echo ucwords("$heading : $value </br>");
				}
			?>
		</h1>
	</header>
</body>
</html>
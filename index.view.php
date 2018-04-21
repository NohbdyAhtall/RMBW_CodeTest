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
				$names[$_GET['num']];
			?>
		</h1>
	</header>
</body>
</html>
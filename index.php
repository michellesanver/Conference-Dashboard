<!doctype html>
 
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Conference Dashboard</title>

  <link rel="stylesheet" href="css/smoothness/jquery-ui-1.10.3.custom.min.css" />
  <script src="js/jquery/jquery-1.9.1.js"></script>
  <script src="js/jquery/jquery-ui-1.10.3.custom.min.js"></script>
  <script src="js/DashboardApp.js"></script>

</head>

<body>
 
	<h1>Conference Dashboard</h1>
	 
	<div id="widgetarea">

		<!-- Temp data, this should be generated -->
		<?php
			include('Widget.php');

			$widgets = array();
			$widgets[] = new Widget("Emergency Ticker", "Important information...", 0, false);
			$widgets[] = new Widget("Now / Next", "Schedule...");
			$widgets[] = new Widget("Social Info", "Social information :D");
			$widgets[] = new Widget("Map", "Beautiful map!");
			$widgets[] = new Widget("Break time", "Break countdown");
			$widgets[] = new Widget("Menu", "Menu with allergy information");
			$widgets[] = new Widget("Sponsors", "Sponsorlogos", 20, false);

		?>

		<!-- Dynamic Widgetarea -->
		<?php foreach($widgets as $widget): ?>

			<div class="collapsible">
				<h3 class="collapsible"><?php echo $widget->getHeader(); ?></h3>
				<div><?php echo $widget->getOutput(); ?></div>
			</div>

		<?php endforeach; ?>

	</div>
 
</body>
</html>
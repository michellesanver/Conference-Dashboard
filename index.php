<!doctype html>
 
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Conference Dashboard</title>

  <link rel="stylesheet" href="css/smoothness/jquery-ui-1.10.3.custom.min.css" />
  <link rel="stylesheet" href="css/dashboardstyle.css" />
  <script src="js/jquery/jquery-1.9.1.js"></script>
  <script src="js/jquery/jquery-ui-1.10.3.custom.min.js"></script>

  <script src="js/DashboardApp.js"></script>

</head>

<body>
 	<?php include('Widget.php'); ?>

	<h1>Conference Dashboard</h1>
	
	<div class="widgetheader">
		<?php
			$headerwidgets = array();
			$headerwidgets[] = new Widget("Emergency Ticker", "Important information...", 0, false);
		?>

		<?php foreach($headerwidgets as $widget): ?>
			<div class="portlet">

				<div class="portlet-header"><?php echo $widget->getHeader(); ?></div>
				<div class='portlet-content'><?php echo $widget->getOutput(); ?></div>

			</div>
		<?php endforeach; ?>
	</div>

	<div class="widgetarea">

		<!-- Temp data, this should be generated -->
		<?php
			$widgets = array();
			$widgets[] = new Widget("Now / Next", "Schedule...");
			$widgets[] = new Widget("Social Info", "Social information :D");
			$widgets[] = new Widget("Map", "Beautiful map!");
			$widgets[] = new Widget("Break time", "Break countdown");
			$widgets[] = new Widget("Menu", "Menu with allergy information");

		?>

		<!-- Dynamic Widgetarea -->
		<?php foreach($widgets as $widget): ?>

			<div class="portlet">

				<div class="portlet-header"><?php echo $widget->getHeader(); ?></div>
				<div class='portlet-content'><?php echo $widget->getOutput(); ?></div>

			</div>

		<?php endforeach; ?>

	</div>
 	
 	<div class="widgetfooter">
		<?php
			$footerwidgets = array();
			$footerwidgets[] = new Widget("Sponsors", "Sponsorlogos", 20, false);
		?>

		<?php foreach($footerwidgets as $widget): ?>
			<div class="portlet">

				<div class="portlet-header"><?php echo $widget->getHeader(); ?></div>
				<div class='portlet-content'><?php echo $widget->getOutput(); ?></div>

			</div>
		<?php endforeach; ?>		
 	</div>

</body>
</html>
<?php
require "utilities.php";

$pages = array(
	"our-mission",
	"campaigns",
	"get-involved",
	"stay-informed",
	"the-team",
	"blog",
	"donate",
	"contact",
	"notes"
	);

?>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<link href="css/standard.css" rel="stylesheet">
<link rel="stylesheet" href="//cdn.jsdelivr.net/dashicons/0.1.0/css/dashicons.min.css">

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="js/smooth-scroll.js"></script>
<script src="js/standard.js"></script>

</head>
<body data-spy="scroll" data-target="#sidebar">

<div class="container">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-8">
			<?php require "sidebar.php"; ?>
		</div>
	</div>
</div>

<?php foreach($pages as $page){ ?>
<div class="section" id="<?= $page ?>">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<h1 class="section_header"><?= pretty_print($page) ?></h1>
				<?php require $page . ".php"; ?>
			</div>
		</div>
	</div>
</div>
<?php } ?>

<div class="section" id="<?= $page ?>">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				code+design: <span class="highlight">jon chin</span>
			</div>
		</div>
	</div>
</div>


</body>
</html>

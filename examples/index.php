<?php
$pathLinkFile = "./assets/";
$slidersCpt = 1;
?>

<!doctype html>
<html lang="fr">
<head>
	<title>formflex</title>

	<meta name="description" content="Description courte de la page" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="fr" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="<?php echo $pathLinkFile; ?>css/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link href="<?php echo $pathLinkFile; ?>img/favicon.png" rel="shortcut icon" type="image/png" />
	<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
</head>
<body>

<div id="wrapper">

<ul id="buttons_dl">
	<li>
		<a href="https://github.com/Zenike/sliker" target="_blank">
		Download on <strong>GITHUB</strong>
		</a>
	</li>
</ul>

<h1><i class="fa fa-link"></i> SliKer</h1>

<!-- /FIN DU HEADER ------------------------------------------------------------------------------->

<h2 class="sliker-example-title">
	Classical
</h2>

<div class="sliker-example-text">
	the "sliker__item--selected" class is optionnal. Without it, the slider will simply start at
	the first sliker__item
</div>

<?php ob_start(); ?>

<div id="slider_<?php echo $slidersCpt; ?>" class="sliker">
	<div class="sliker__window">
		<ul class="sliker__track">
<?php for($i=1;$i<=3;$i++){ ?>
			<li class="sliker__item<?php if($i==2){echo " sliker__item--selected";} ?>">
				<div class="block-3-2"><span><img src="<?php echo $pathLinkFile; ?>img/examples/<?php echo $i; ?>.jpg"></span></div>
			</li>
<?php } ?>
		</ul>
	</div>
</div>

<script>
$(document).ready(function(){
	$('#slider_<?php echo $slidersCpt; ?>').sliker();
});
</script>

<?php $ffx_example_code = ob_get_clean(); ?>
<?php echo $ffx_example_code; ?>
<pre>
<?php echo str_replace("<", "&lt;", "$ffx_example_code"); ?>
</pre>
<?php echo $slidersCpt++; ?>
<!--------------------------------------------------------------------------------->

<h2 class="sliker-example-title">
	Classical with "safeload"
</h2>

<div class="sliker-example-text">
	"sliker--safeload" is an option that preserve the aspect of the slider before
	the initialization of the javascript (window load here). In this example, the call is commented out
	to show the slider style in this short period of time before loading.
</div>

<?php ob_start(); ?>

<div id="slider_<?php echo $slidersCpt; ?>" class="sliker sliker--safeload">
	<div class="sliker__window">
		<ul class="sliker__track">
<?php for($i=1;$i<=3;$i++){ ?>
			<li class="sliker__item<?php if($i==2){echo " sliker__item--selected";} ?>">
				<div class="block-3-2"><span><img src="<?php echo $pathLinkFile; ?>img/examples/<?php echo $i; ?>.jpg"></span></div>
			</li>
<?php } ?>
		</ul>
	</div>
</div>

<script>
// $(document).ready(function(){
// 	$('#slider_<?php echo $slidersCpt; ?>').sliker();
// });
</script>

<?php $ffx_example_code = ob_get_clean(); ?>
<?php echo $ffx_example_code; ?>
<pre>
<?php echo str_replace("<", "&lt;", "$ffx_example_code"); ?>
</pre>
<?php echo $slidersCpt++; ?>

<!--------------------------------------------------------------------------------->

<h2 class="sliker-example-title">
	With customs icons
</h2>

<div class="sliker-example-text">
	Bullets and arrows are customs.
	The options are in the data-properties on the root of the slider
</div>

<?php ob_start(); ?>

<div id="slider_<?php echo $slidersCpt; ?>" class="sliker" data-arrow="fa fa-caret" data-bullet="<i class='fa fa-star'></i>">
	<div class="sliker__window">
		<ul class="sliker__track">
<?php for($i=1;$i<=3;$i++){ ?>
			<li class="sliker__item">
				<div class="block-3-2"><span><img src="<?php echo $pathLinkFile; ?>img/examples/<?php echo $i; ?>.jpg"></span></div>
			</li>
<?php } ?>
		</ul>
	</div>
</div>

<script>
$(document).ready(function(){
	$('#slider_<?php echo $slidersCpt; ?>').sliker();
});
</script>

<?php $ffx_example_code = ob_get_clean(); ?>
<?php echo $ffx_example_code; ?>
<pre>
<?php echo str_replace("<", "&lt;", "$ffx_example_code"); ?>
</pre>
<?php echo $slidersCpt++; ?>

<!--------------------------------------------------------------------------------->

<h2 class="sliker-example-title">
	Sliker multi pics
</h2>

<div class="sliker-example-text">
	With the "liquid" option at 0, the sliker__items don't thake the full with.
	So, we need to set their width in css to see them.<br>
	IMPORTANT: a sliker without liquid should NOT use the "sliker--safeload" option.
</div>

<?php ob_start(); ?>

<div id="slider_<?php echo $slidersCpt; ?>" class="sliker">
	<div class="sliker__window">
		<ul class="sliker__track">
<?php for($i=1;$i<=6;$i++){ ?>
			<li class="sliker__item">
				<div class="block-3-2"><span><img src="<?php echo $pathLinkFile; ?>img/examples/<?php echo $i; ?>.jpg"></span></div>
			</li>
<?php } ?>
		</ul>
	</div>
</div>

<script>
$(document).ready(function(){
	$('#slider_<?php echo $slidersCpt; ?>').sliker({
		'nbr_li': 2,
		'liquid': 0,
	});
});
</script>

<style>
	#slider_<?php echo $slidersCpt; ?> .sliker__item {
	width: 250px;
	}
</style>

<?php $ffx_example_code = ob_get_clean(); ?>
<?php echo $ffx_example_code; ?>
<pre>
<?php echo str_replace("<", "&lt;", "$ffx_example_code"); ?>
</pre>
<?php echo $slidersCpt++; ?>

<!--------------------------------------------------------------------------------->

</div><!-- \#wrapper -->

<script type="text/javascript" src="<?php echo $pathLinkFile; ?>/../../../sliker.js"></script>
<script type="text/javascript" src="<?php echo $pathLinkFile; ?>js/monjquery.js"></script>
</body>
</html>

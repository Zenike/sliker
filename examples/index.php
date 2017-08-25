<?php 
$pathLinkFile="./assets/";
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
</head>
<body>
<div id="wrapper">

<h1>
	<i class="fa fa-link"></i> SliKer
</h1>

<div id="slider_classique" class="sliker safeload vam" data-arrow="fa fa-caret" data-bullet="fa fa-star">
	<div class="conteneur_strict">
		<ul class="grand_slider">
			<?php for($i=1;$i<=10;$i++){ ?>
			<li class="<?php if($i==3){echo "selected";} ?>">
				<div class="block-3-2">
					<span>
						<img src="<?php echo $pathLinkFile; ?>img/examples/<?php echo $i; ?>.jpg">
					</span>
				</div>
			</li>
			<?php } ?>
		</ul>
	</div>
</div>

</div><!-- \#wrapper -->
<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<script type="text/javascript" src="<?php echo $pathLinkFile; ?>/../../../sliker.js"></script>
<script>
// menus code infos
$(document).ready(function(){
	$("pre").each(function(){
		$(this).append('<span>code <i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></span>');
	});
	$("blockquote").each(function(){
		$(this).append('<span>infos <i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></span>');
	});
});

$("pre, blockquote").on("click","span",function(){
	target = $(this).parents("pre, blockquote");

	if(target.is(".selected")){
		target.removeClass("selected");
	}else{
		target.addClass("selected");
	}
});
</script>
</body>
</html>
<script>
$(document).ready(function(){
	$('#slider_classique').sliker({
	'nbr_li':1,
	'vitesse_auto':3000,
	'vitesse': 500,
	'auto':0,
	'type':"none",
	'cible':"none",
	'isolement': 0,
	'pc_only':0,
	'loop':0,
	'liquide':1,
	'drag':0,
	'creer_afficheur': 0,
	'fading_mode': 1,
	'fading_type': 2,
	'buffering_nbr': 1,
	'fullscreen': 1,
	'bullets': 1,
	'bullets_limit': 20,
	'arrows': 1,
	});
});//doc ready
</script>
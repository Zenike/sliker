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
	
	<link href="<?php echo $pathLinkFile; ?>css/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link href="<?php echo $pathLinkFile; ?>img/favicon.png" rel="shortcut icon" type="image/png" />
</head>
<body>
<div id="wrapper">

<h1>
	<i class="fa fa-link"></i> SliKer
</h1>

<div id="slider_classique" class="sliker safeload">
	<div class="conteneur_strict">
		<ul class="grand_slider">
			<?php for($i=1;$i<=6;$i++){ ?>
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
	
	<a class="btn_left" href=""><span><i class="fa fa-chevron-left"></i></span></a>
	<a class="btn_right" href=""><span><i class="fa fa-chevron-right"></i></span></a>
	<a class="btn_fs" href=""><span><i class="fa fa-expand"></i></span></a>
</div>
<pre>
&ltdiv id="slider_classique" class="sliker">
	&ltdiv class="conteneur_strict">
		&ltul class="grand_slider">
			&lt?php for($i=1;$i&lt=6;$i++){ ?>
			&ltli class="&lt?php if($i==3){echo "selected";} ?>">
				&ltdiv class="illu_prop">
					&ltimg class="template" src="&lt?php echo $pathLinkFile; ?>img/ratio/3_2.png">
					&ltspan class="illu">
						&ltspan>
						&ltspan>
							&ltimg class="" src="&lt?php echo $pathLinkFile; ?>img/examples/&lt?php echo $i; ?>.jpg">
						&lt/span>
						&lt/span>
					&lt/span>
				&lt/div>
			&lt/li>
			&lt?php } ?>
		&lt/ul>
	&lt/div>
	
	&lta class="btn_left" href="">&ltspan>&lti class="fa fa-chevron-left">&lt/i>&lt/span>&lt/a>
	&lta class="btn_right" href="">&ltspan>&lti class="fa fa-chevron-right">&lt/i>&lt/span>&lt/a>
	&lta class="btn_fs" href="">&ltspan>&lti class="fa fa-expand">&lt/i>&lt/span>&lt/a>
&lt/div>

$('#slider_classique').slider_nike({
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
});
</pre>
<blockquote>
- mettre ".full" sur la balise "img" si on souhaite qu'elle prenne 100% du li, sinon elle prendra sa taille réelle<br />
<br />
- conseil: si les images sont de formats différents, utiliser un .illu_prop pour les encadrer (voir startpack).<br />
<br />
- départ sur un slide précis possible (comme ici) grace à la classe "selected" à mettre sur un "li".<br />
<br />
- pour masquer les puces, mettre la class "no_btn" sur la base du slider.<br />
<br />
- pour afficher les puces en dehors du slier (en dessous) plutot que dedans, cibler "ul.boutons" en css et le passer en "position: static"<br />
<br />
- mettre la classe "safeload" à la racine (.sliker) afin d'avoir un chargement moins saccadé dans le cas d'un slider élastique
<br />
<br />
LES VARIABLES:<br />
'nbr_li': indique combien de li passer à chaque action de slide (pas le nombre de li visibles !!!)<br />
'vitesse_auto': le temps entre deux défilements automatiques (en millisecondes)<br />
'vitesse': la vitesse de déplacement du slider en mouvement<br />
'auto': si le slider bouge de lui même (1) ou si il est totalement statique (0)<br />
'type': soit rien de spécial (none), soit le zoom d'un double slider (visualiseur) soit le menu (menu)<br />
'cible': dans le cas d'un double slider, donner l'id de son partenaire (ex: "#slider_articles")<br />
'isolement': si un fond noir apparait quand on active le slider (1 ou 0)<br />
'pc_only': si pc only est actif (1), ce slider disparait sur un périphérique mobile<br />
'loop': si le slider boucle (première image après la dernière, etc) (0 ou 1).<br />
'liquide': si les li prennent toute la largeur du slide (100%) (0 ou 1)<br />
'drag': si on peut slider en cliquer/glisser sur les photos (ne peut pas être désactivé sur mobile) (0 ou 1)<br />
'creer_afficheur': crée automatiquement une structure de zoom au dessus du slider (0 ou 1)<br />
'fading_mode': le défilement des slides se fait en fondu et plus en glissé (0 ou 1)<br />
<br />
<br />
VARIABLES LESS
<br />
Ces variables s'appliquent en css. Il faut cibler le slider dans le css normal (par son id par exemple) et lui appliquer un de ces mixins: 
<br />
<br />
.sliker_colors(@color,@bg);<br />
@color pour la couleur de fond (au repos) des puces et fleches.<br />
@bg pour la couleur active (survol) des puces et fleches.<br />
<br /><br />
.sliker_bullets(@size,@round);<br />
@size pour la taille (hauteur et largeur) de la puce.<br />
@round pour l'arrondi de la puce (ex:2px pour un carré légèrement arrondi)<br />
<br /><br />
.sliker_bullets_out(@spacing);<br />
@spacing pour modifier les marges (top et bot) des boutons<br />
- ce mixin sort les puces du slideret les positionnes après celui ci.<br />
Ecrire .sliker_bullets_out; sans option est donc tout à fait viable;
<br /><br />
.sliker_bullets_in(@spacing);<br />
! position par defaut !<br />
@spacing pour modifier la marge des boutons (séparation du bas du slider)<br />
- ce mixin rentre les puces dans le bas du slider, par dessus le contenu<br />
Ecrire .sliker_bullets_in; sans option est viable et appliquera la marge par defaut;
<br /><br />
.sliker_arrows_out(@spacing);<br />
@spacing pour modifier l'espacement entre les fleches et le bord du slider (sans compter le padding autour de l'icone)<br />
- ce mixin sort les fleches en dehors du slider<br />
Ecrire .sliker_arrows_out; utilsera un spacing de 0px et les fleches seront contre le slider.
<br /><br />
.sliker_arrows_in(@spacing);<br />
! position par defaut !<br />
@spacing pour modifier l'espacement entre les fleches et le bord du slider (sans compter le padding autour de l'icone)<br />
- ce mixin rentre les fleches dans le slider<br />
Ecrire .sliker_arrows_in; utilsera un spacing de 0px (par defaut) et les fleches seront contre le slider.
</blockquote>













<div id="slider_duo_top" class="sliker safeload">
	<div class="conteneur_strict">
		<ul class="grand_slider">
			<?php for($i=1;$i<=7;$i++){ ?>
			<li>
				<div class="block-3-2">
					<span>
						<img src="<?php echo $pathLinkFile; ?>img/examples/<?php echo $i; ?>.jpg">
					</span>
				</div>
			</li>
			<?php } ?>
		</ul>
	</div>
	
	<a class="btn_left" href=""><span><i class="fa fa-chevron-left"></i></span></a>
	<a class="btn_right" href=""><span><i class="fa fa-chevron-right"></i></span></a>
	<a class="btn_fs" href=""><span><i class="fa fa-expand"></i></span></a>
</div>
<div id="slider_duo_bottom" class="sliker">
	<div class="conteneur_strict">
		<ul class="grand_slider">
			<?php for($i=1;$i<=7;$i++){ ?>
			<li>
				<div class="block-3-2">
					<span>
						<img src="<?php echo $pathLinkFile; ?>img/examples/<?php echo $i; ?>.jpg">
					</span>
				</div>
			</li>
			<?php } ?>
		</ul>
	</div>
	
	<a class="btn_left" href=""><span><i class="fa fa-chevron-left"></i></span></a>
	<a class="btn_right" href=""><span><i class="fa fa-chevron-right"></i></span></a>
	<a class="btn_fs" href=""><span><i class="fa fa-expand"></i></span></a>
</div>
<pre>
$('#slider_duo_top').slider_nike({
'nbr_li':1,
'vitesse_auto':3000,
'vitesse': 500,
'auto':0,
'type':"visualiseur",
'cible':"#slider_duo_bottom",
'isolement': 1,
'pc_only':1,
'loop':1,
'liquide':1,
'drag':0,
'creer_afficheur': 0,
'fading_mode': 1,
});
$('#slider_duo_bottom').slider_nike({
'nbr_li':3,
'vitesse_auto':3000,
'vitesse': 500,
'auto':0,
'type':"menu",
'cible':"#slider_duo_top",
'isolement': 1,
'pc_only': 0,
'loop':1,
'liquide':0,
'drag':0,
'creer_afficheur': 1,
'fading_mode': 0,
});
</pre>









<div id="slider_long" class="sliker safeload">
	<div class="conteneur_strict">
		<ul class="grand_slider">
			<?php for($i=1;$i<=7;$i++){ ?>
			<li>
				<span class="mask"></span>
				<div class="block-3-2">
					<span>
						<img src="<?php echo $pathLinkFile; ?>img/examples/<?php echo $i; ?>.jpg">
					</span>
				</div>
			</li>
			<?php } ?>
		</ul>
	</div>
	
	<a class="btn_left" href=""><span><i class="fa fa-chevron-left"></i></span></a>
	<a class="btn_right" href=""><span><i class="fa fa-chevron-right"></i></span></a>
	<!--<a class="btn_fs" href=""><span><i class="fa fa-expand"></i></span></a>-->
</div>
<blockquote>
- Pour créer ce visuel, cibler en css le div ".conteneur_strict" et le rendre plus petit que 100% (valeur par défaut width:100%)<br />
<br />
- Pour l'effet "images inactives noircies", ajouter cette structure (&ltspan class="mask">&lt/span>) dans chaque li
</blockquote>






</div><!-- \#wrapper -->
<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<script type="text/javascript" src="<?php echo $pathLinkFile; ?>/../../../sliker.js"></script>
<script type="text/javascript" src="<?php echo $pathLinkFile; ?>js/startpack.js"></script>
<script>
$(document).ready(function() {
	$('#slider_classique').slider_nike({
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
	});

	$('#slider_long').slider_nike({
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
	'fading_mode': 0,
	});

	$('#slider_duo_top').slider_nike({
	'nbr_li':1,
	'vitesse_auto':3000,
	'vitesse': 500,
	'auto':0,
	'type':"visualiseur",
	'cible':"#slider_duo_bottom",
	'isolement': 1,
	'pc_only':1,
	'loop':1,
	'liquide':1,
	'drag':0,
	'creer_afficheur': 0,
	'fading_mode': 1,
	});

	$('#slider_duo_bottom').slider_nike({
	'nbr_li':3,
	'vitesse_auto':3000,
	'vitesse': 500,
	'auto':0,
	'type':"menu",
	'cible':"#slider_duo_top",
	'isolement': 1,
	'pc_only': 0,
	'loop':1,
	'liquide':0,
	'drag':0,
	'creer_afficheur': 1,
	'fading_mode': 0,
	});

	$("pre").each(function(){
		$(this).append('<span>code <i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></span>');
	});
	$("blockquote").each(function(){
		$(this).append('<span>infos <i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></span>');
	});
});//doc ready

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
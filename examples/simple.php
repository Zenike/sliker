<?php include './inc/header.php'; ?>

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

<?php include './inc/footer.php'; ?>
<script>
$(document).ready(function(){
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
	'buffering_nbr': 1,
	'fullscreen': 1,
	'bullets': 1,
	'bullets_limit': 20,
	});
});//doc ready
</script>
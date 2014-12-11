 <!--Presents the Audience's scores in progress bars -->
	<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="<?=$audienceScore?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$audienceScore?>%;">
    <span class="sr-only">60% Complete</span>
  </div>
</div>

<!--Presents the Critic's scores in progress bars -->
	<?php echo "Critic's Score:";
		echo $criticsScore; ?>
	<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="<?=$criticsScore?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$criticsScore?>%;">
    <span class="sr-only">60% Complete</span>
  </div>
</div>
<ul class="gridder">
	<?php
	for ($i=0; $i < count($var) ; $i++):
		$d=explode("||", $var[$i]);

		?>
		<li class="gridder-list" data-griddercontent="<?php echo '#gridder-content-'.$i?>">
			<img class="imagenes" src="<?php echo $d[0] ?>">
		</li>

		<?php
	endfor;
	?>	
</ul>

<?php 
	for ($i=0; $i < count($var); $i++):
		$d=explode("||", $var[$i]);
?>

<div id="<?php echo 'gridder-content-'.$i; ?>" class="gridder-content">
	<div class="row">
		<div class="col-sm-6">
			<br><br><br>
			<img class="imagenes" src="<?php echo $d[0]?>" class="img-responsive" />
		</div>
		<div>
			<h2 class="letra3"><br><?php echo $d[1]; ?></h2>
			<p class="letra4"><?php echo $d[2]; ?></p>
		</div>
	</div>
</div>

<?php 
	endfor;
?>
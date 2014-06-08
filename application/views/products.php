<div id="content" class="pageCenter">
	<div id="blockContainer" class="pageCenter">
		<div class="row pageCenter">
			<div class="column pageCenter">
		<?php
		//print_r($images);
			foreach($categories as $key=>$image)
			{
				list($width, $height) = getimagesize("photos/".$image->coverImage);
		?>
				<div class="mosaic-block fade" style="width: <?php echo $width; ?>px; height: 480px;">
					<a href="<?php echo $baseUrl; ?>products/details/<?php echo $image->id; ?>" class="mosaic-overlay">
						<div class="details">
							<h4><?php echo $image->name; ?></h4>
							<p><?php echo $image->description; ?></p>
						</div>
					</a>
					<div class="mosaic-backdrop">
						<img src="<?php echo $baseUrl; ?>photos/<?php echo $image->coverImage; ?>"/> 
						<div id="categoryTitle"> <?php echo $image->name; ?> </div> 
					</div>
				</div>
		<?php
			}
		?>
			</div>
		</div>
		<div class="row spacer">
		</div>
	</div>
</div>





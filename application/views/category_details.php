<div id="content" class="pageCenter">
	<div class="wrapper">
		<div class="connected-carousels">
			<div class="stage" style="width: 1000px">
				<div class="carousel carousel-stage" style="height: 450px;">
					<ul>
						<?php
							foreach($images as $key=>$image)
							{
								list($width, $height) = getimagesize("photos/w1000px/".$image->link);
						?>
								<li><img src="<?php echo $baseUrl; ?>photos/w1000px/<?php echo $image->link; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt=""></li>
						<?php
							}
						?>
					</ul>
				</div>
				<p class="photo-credits" style="color: #333333;">
					&copy; Lisa Hampton
				</p>
				<a href="#" class="prev prev-stage"><span>&lsaquo;</span></a>
				<a href="#" class="next next-stage"><span>&rsaquo;</span></a>
			</div>
		</div>
	</div>
</div>
<div class="row pageCenter">
	<div class="column box1">
		<div class="boxHeader"> <?php echo $categoryName; ?> </div>
		<div class="nano">
			<div class="nano-content">
				<div class="boxText"> <?php echo $categoryDescription; ?> </div>
			</div>
		</div>
	</div>
	<div class="column box2">
		<div class="boxHeader"> Producer </div>
		<div class="boxText"> Lisa Hampton </div>
	</div>
	<div class="column box2">
		<div class="boxHeader"> Designer </div>
		<div class="boxText"> Lisa Hampton </div>
	</div>
	<div class="column box1">
		<div class="boxHeader"> Gallery </div>
		<div class="boxText">
			<div class="navigation">
				<div class="carousel carousel-navigation">
					<ul>
						<?php
							foreach($images as $key=>$image)
							{
								list($width, $height) = getimagesize("photos/".$image->link);
						?>
								<img src="<?php echo $baseUrl; ?>photos/<?php echo $image->link; ?>" height="50" alt="">
						<?php
							}
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row spacer"></div>

<script>
	$(".nano").nanoScroller({ 
		sliderMinHeight: 40,
		sliderMaxHeight: 320,
		preventPageScrolling: true,
		disableResize: true
	});
</script>


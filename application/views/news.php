<div id="content" class="pageCenter">
	<div class="row pageCenter annRow">
	<?php
		foreach($announcements as $key=>$ann)
		{
			if(!(($key+1)%3))
			{
	?>
		<div class="column boxNews">
			<div class="boxPhoto"> <img src="photos/<?php echo $ann->coverImage; ?>"> </div>
			<div class="boxHeader"> <?php echo '<br><h3> '.$ann->name.'</h3><br><h5> '.date('jS F Y',$ann->time) . '</h5>'; ?>  </div>
			<div class="nano">
				<div class="nano-content">
					<div class="boxText"> 
						<?php echo $ann->description; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row pageCenter annRow">
	<?php
			}
			else
			{
	?>
		<div class="column boxNews">
			<div class="boxPhoto"> <img src="photos/<?php echo $ann->coverImage; ?>"> </div>
			<div class="boxHeader"> <?php echo '<br><h3> '.$ann->name.'</h3><br><h5> '.date('jS F Y',$ann->time) . '</h5>'; ?> </div>
			<div class="nano">
				<div class="nano-content">
					<div class="boxText"> 
						<?php echo $ann->description; ?>
					</div>
				</div>
			</div>
		</div>
	<?php
			}
		}
	?>	
	</div>
	<div class="row spacer"></div>
</div>

<script>
	$(".nano").nanoScroller({ 
		sliderMinHeight: 40,
		sliderMaxHeight: 320,
		preventPageScrolling: true,
		disableResize: true
	});
</script>

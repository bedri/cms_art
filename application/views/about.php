<div id="content" class="pageCenter">
	<div class="row pageCenter">
		<div class="column boxAboutPhoto">
			<div> 
				<div> <img class="aboutPhoto" src="photos/<?php echo $contentPhoto; ?>"> </div>
			</div>
		</div>
		<div class="column boxAboutText">
			<div class="nano">
				<div class="nano-content">
					<div class="aboutText"> <?php echo $contentDescription; ?> </div>
				</div>
			</div>
			<div class="column clearBoth">
				<div id="address" class="boxAbout floatLeft">
					<div class="boxHeader"> Address </div>
					<div class="boxText bold colorGray">
						Melody Street 23<br>
						23003 Gronway
					</div>
				</div>
				<div id="email" class="boxAbout floatLeft">
					<div class="boxHeader"> Email </div>
					<div class="boxText"> <a href="mailto:info@lisahampton.com" target="_blank">info@lisahampton.com</a> </div>
				</div>
			</div>
			<div class="column clearBoth">
				<div id="Phone" class="boxAbout floatLeft">
					<div class="boxHeader"> Phone </div>
					<div class="boxText bold colorGray">
						+90 533 767 07 00
					</div>
				</div>
				<div id="socialMedia" class="boxAbout floatLeft">
					<div class="boxHeader"> Social Media </div>
					<div class="boxText bold colorGray">
						<a href="http://www.facebook.com/lisahampton" target="_blank">  <img style="position:relative; top:3px;" src="<?php echo $baseUrl."images/facebook-logo-square-webtreatsetc-16x16.png"; ?>"> Facebook </a>
					</div>
					<div class="boxText bold colorGray">
						<a href="http://ca.linkedin.com/pub/lisa-hampton/25/4a/575" target="_blank">  <img style="position:relative; top:3px;" src="<?php echo $baseUrl."images/linkedin-logo-square-2-webtreatsetc-6.png"; ?>"> LinkedIn </a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row spacer"></div>
</div>

<script>
$(document).ready(function()
{
	$(".nano").nanoScroller({ 
		sliderMinHeight: 40,
		sliderMaxHeight: 320,
		preventPageScrolling: true,
		disableResize: true
	});
});
</script>
<div class="adminContentTitle">Photo List</div>
<div id="adminContent" class="floatLeft">
	<div class="adminContentItem">
		<div class="adminContentItemList floatLeft bold">
			photo
		</div>
		<div class="adminContentItemList floatLeft bold">
			action
		</div>
	</div>
	<?php
		foreach($images as $key=>$image)
		{
	?>
	<div class="adminContentItem clearBoth">
		<div id="image<?php echo $image->id; ?>" class="adminContentItemList floatLeft">
			<img src="<?php echo "/photos/".$image->link; ?>" height="50">
		</div>
		<div class="adminContentItemList floatLeft">
			<a id="updateButton<?php echo $image->id; ?>" href="imgup/<?php echo $image->id; ?>" class="button listButton"> Update </a>
			<a id="deleteButton<?php echo $image->id; ?>" href="#" class="button listButton"> Delete </a>
			<script>
				$("#deleteButton<?php echo $image->id; ?>").click(function() {
					if(confirm("Do you really want to delete this image?")) {
						var id= <?php echo $image->id; ?>;
						$.post('/admin/imgdel/',{"id":id},function(returned){
							if(returned.success) {
								console.log(returned.data);
								window.location='<?echo $baseUrl; ?>admin/imglist';
							}
							else {
								alert(returned.message);
							}
						},"json");
					}
					else {
						return false;
					}
				});
			</script>
		</div>
	</div>
	<?php
		}
	?>
</div>


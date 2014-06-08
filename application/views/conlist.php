<div class="adminContentTitle">Contents List</div>
<div id="adminContent" class="floatLeft">
	<div class="adminContentItem">
		<div class="adminContentItemList floatLeft bold">
			title
		</div>
		<div class="adminContentItemList floatLeft bold">
			photo
		</div>
		<div class="adminContentItemList floatLeft bold">
			date
		</div>
		<div class="adminContentItemList floatLeft bold">
			action
		</div>
	</div>
	<?php
		foreach($contents as $key=>$content)
		{
	?>
	<div class="adminContentItem clearBoth">
		<div id="name<?php echo $content->id; ?>" class="adminContentItemList floatLeft">
			<?php echo $content->name; ?>
		</div>
		<div id="image<?php echo $content->id; ?>" class="adminContentItemList floatLeft">
			<img src="<?php echo "/photos/".$content->coverImage; ?>" height="50">
		</div>
		<div id="rank<?php echo $content->id; ?>" class="adminContentItemList floatLeft">
			<?php echo date('jS F Y',$content->time); ?>
		</div>
		<div class="adminContentItemList floatLeft">
			<a id="updateButton<?php echo $content->id; ?>" href="conup/<?php echo $content->id; ?>" class="button listButton"> Update </a>
			<a id="deleteButton<?php echo $content->id; ?>" href="#" class="button listButton"> Delete </a>
			<script>
				$("#deleteButton<?php echo $content->id; ?>").click(function() {
					if(confirm("Do you really want to delete this content?")) {
						var id= <?php echo $content->id; ?>;
						$.post('/admin/condel/',{"id":id},function(returned){
							if(returned.success) {
								console.log(returned.data);
								window.location='<?echo $baseUrl; ?>admin/conlist';
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


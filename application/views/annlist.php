<div class="adminContentTitle">Announcement List</div>
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
		foreach($announcements as $key=>$announcement)
		{
	?>
	<div class="adminContentItem clearBoth">
		<div id="name<?php echo $announcement->id; ?>" class="adminContentItemList floatLeft">
			<?php echo $announcement->name; ?>
		</div>
		<div id="image<?php echo $announcement->id; ?>" class="adminContentItemList floatLeft">
			<img src="<?php echo "/photos/".$announcement->coverImage; ?>" height="50">
		</div>
		<div id="rank<?php echo $announcement->id; ?>" class="adminContentItemList floatLeft">
			<?php echo date('jS F Y',$announcement->time); ?>
		</div>
		<div class="adminContentItemList floatLeft">
			<a id="updateButton<?php echo $announcement->id; ?>" href="annup/<?php echo $announcement->id; ?>" class="button listButton"> Update </a>
			<a id="deleteButton<?php echo $announcement->id; ?>" href="#" class="button listButton"> Delete </a>
			<script>
				$("#deleteButton<?php echo $announcement->id; ?>").click(function() {
					if(confirm("Do you really want to delete this announcement?")) {
						var id= <?php echo $announcement->id; ?>;
						$.post('/admin/anndel/',{"id":id},function(returned){
							if(returned.success) {
								console.log(returned.data);
								window.location='<?echo $baseUrl; ?>admin/annlist';
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


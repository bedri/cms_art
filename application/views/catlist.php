<div class="adminContentTitle">Category List</div>
<div id="adminContent" class="floatLeft">
	<div class="adminContentItem">
		<div class="adminContentItemList floatLeft bold" style="width: 200px">
			name
		</div>
		<div class="adminContentItemList floatLeft bold">
			cover photo
		</div>
		<div class="adminContentItemList floatLeft bold">
			rank
		</div>
		<div class="adminContentItemList floatLeft bold">
			action
		</div>
	</div>
	<?php
		foreach($categories as $key=>$category)
		{
	?>
	<ul id="sortable">
		<li id="category<?php echo $category->id; ?>">
			<div class="adminContentItem clearBoth">
				<div id="name<?php echo $category->id; ?>" class="adminContentItemList floatLeft" style="width: 200px">
					<span> <img class="handle" src="https://aqumin.fogbugz.com/default.asp?pg=pgPluginStatic&ixPlugin=11&sFilename=img%2Fdrag-handle.png"> </span>
					<span> <?php echo $category->name; ?> </span>
				</div>
				<div id="image<?php echo $category->id; ?>" class="adminContentItemList floatLeft">
					<img src="<?php echo "/photos/".$category->coverImage; ?>" height="50">
				</div>
				<div id="rank<?php echo $category->id; ?>" class="adminContentItemList floatLeft">
					<?php echo $category->rank; ?>
				</div>
				<div class="adminContentItemList floatLeft">
					<a id="updateButton<?php echo $category->id; ?>" href="catup/<?php echo $category->id; ?>" class="button listButton"> Update </a>
					<a id="deleteButton<?php echo $category->id; ?>" href="#" class="button listButton"> Delete </a>
					<script>
						$("#deleteButton<?php echo $category->id; ?>").click(function() {
							if(confirm("Deleting a category will cause all the photos in this category will be deleted as well. Do you really want to delete this category?")) {
								var id= <?php echo $category->id; ?>;
								$.post('/admin/catdel/',{"id":id},function(returned){
									if(returned.success) {
										console.log(returned.data);
										window.location='<?echo $baseUrl; ?>admin/catlist';
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
		</li>
	<?php
		}
	?>
	</ul>
</div>
<script>
	$(document).ready(function(){
		$('#sortable').sortable({
			handle: ".handle",
			helper: "clone",
			update: function(event, ui) {
				var catOrder = $(this).sortable('toArray').toString();
				$.post('admin/catlist', { "catOrder": catOrder },function(returned) {
					if(returned.success) {
						console.log(returned.data);
					}
					else {
						alert(returned.message);
					}
				},"json");
			},
			placeholder: "placeholder"
		});
		$( "#sortable" ).disableSelection();
	});
</script>

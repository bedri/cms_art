<div id="content" class="pageCenter">
	<div id="blockContainer" class="pageCenter">
		<div class="row pageCenter">
			<div class="column pageCenter">
				<div id="adminMenu" class="floatLeft">
					<div class="adminMenuTitle">Category</div>
					<div class="adminMenuItem">
						<div id="categoryList" class="adminMenuItemList">
							<a href="<?php echo $baseUrl; ?>admin/catlist">Category List</a>
						</div>
						<div id="categoryAdd" class="adminMenuItemList">
							<a href="<?php echo $baseUrl; ?>admin/catadd">Add Category</a>
						</div>
					</div>
					<div class="adminMenuTitle">Photo</div>
					<div class="adminMenuItem">
						<div id="imageList" class="adminMenuItemList">
							<a href="<?php echo $baseUrl; ?>admin/imglist">Photo List</a>
						</div>
						<div id="imageAdd" class="adminMenuItemList">
							<a href="<?php echo $baseUrl; ?>admin/imgadd">Add Photo</a>
						</div>
					</div>
					<div class="adminMenuTitle">News</div>
					<div class="adminMenuItem">
						<div id="imageList" class="adminMenuItemList">
							<a href="<?php echo $baseUrl; ?>admin/annlist">News List</a>
						</div>
						<div id="imageAdd" class="adminMenuItemList">
							<a href="<?php echo $baseUrl; ?>admin/annadd">Add News</a>
						</div>
					</div>
					<div class="adminMenuTitle">Content</div>
					<div class="adminMenuItem">
						<div id="imageList" class="adminMenuItemList">
							<a href="<?php echo $baseUrl; ?>admin/conlist">Content List</a>
						</div>
						<div id="imageAdd" class="adminMenuItemList">
							<a href="<?php echo $baseUrl; ?>admin/conadd">Add Content</a>
						</div>
					</div>
				</div>
				<div id="adminContent" class="floatLeft">
					<?php require_once(strtolower($function).".php"); ?>
				</div>
			</div>
		</div>
		<div class="row spacer">
		</div>
	</div>
</div>





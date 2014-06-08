<div class="adminContentTitle">Update Category</div>
<div id="adminContent" class="floatLeft">
	<div class="adminContentItem">
		<div class="adminContentItemList floatLeft bold">
			Photo
		</div>
		<div class="adminContentItemList floatLeft">
			<div class="image"><img id="coverImage" src="<?php echo "/photos/".$coverImage; ?>" height="200"></div>
			<div class="image"><a id="updatePhotoButton" class="fancybox button" data-fancybox-type="iframe" href="<?php echo $baseUrl; ?>upload/form/category"> Update Photo </a></div>
		</div>
	</div>
	<div class="adminContentItem">
		<div class="adminContentItemList floatLeft bold">
			Category
		</div>
		<div class="adminContentItemList floatLeft">
			<?php
				echo form_dropdown('categoryId', $categories, $categoryId);
			?>
		</div>
	</div>
	<div class="adminContentItem clearBoth">
		<div class="adminContentItemList" style="width: 200px;">
			<div class="floatLeft"><button id="saveButton" class="button floatLeft">Save</button></div>
			<div class="floatLeft"><button id="cancelButton" class="button floatLeft">Cancel</button></div>
		</div>
	</div>
</div>

<script>
$(document).ready(function() {
	var coverImageOrig = $("#coverImage").attr('src').replace('/photos/','');
	$("#updatePhotoButton").click(function() {
		$("#updatePhotoButton").fancybox({
			maxWidth	: 530,
			maxHeight	: 230,
			fitToView	: false,
			width		: '70%',
			height		: '70%',
			autoSize	: false,
			closeClick	: false,
			openEffect	: 'none',
			closeEffect	: 'none'
		});
	});

	$("#saveButton").click(function() {
		var id= <?php echo $imgId; ?>;
		var categoryId = $("select[name=categoryId]").val();
		var coverImage = $("#coverImage").attr('src').replace('/photos/','');
		$.post('/admin/imgup/',{"id":id, "categoryId":categoryId, "coverImage":coverImage, "action":"update"},function(returned){
			if(returned.success) {
				console.log(returned.data);
				window.location='<?echo $baseUrl; ?>admin/imglist';
			}
			else {
				alert(returned.message);
			}
		},"json");
	});
	$("#cancelButton").click(function() {
		var id= <?php echo $imgId; ?>;
		var coverImage = $("#coverImage").attr('src').replace('/photos/','');
		$.post('/admin/imgup/',{"id":id, "coverImage":coverImage,"coverImageOrig":coverImageOrig, "action":"cancel"},function(returned){
			if(returned.success) {
				console.log(returned.data);
				window.location='<?echo $baseUrl; ?>admin/imglist';
			}
			else {
				alert(returned.message);
			}
		},"json");
	});
});
</script>
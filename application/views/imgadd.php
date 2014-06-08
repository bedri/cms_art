<div class="adminContentTitle">Add New Photo</div>
<div id="adminContent" class="floatLeft">
	<div class="adminContentItem">
		<div class="adminContentItemList floatLeft bold">
			Photo
		</div>
		<div class="adminContentItemList floatLeft">
			<div class="image"><img style="display: none;" id="coverImage" src="" height="200"></div>
			<div class="image"><a id="uploadPhotoButton" class="fancybox button" data-fancybox-type="iframe" href="<?php echo $baseUrl; ?>upload/form"> Upload Photo </a></div>
		</div>
	</div>
	<div class="adminContentItem">
		<div class="adminContentItemList floatLeft bold">
			Category
		</div>
		<div class="adminContentItemList floatLeft">
			<?php
				echo form_dropdown('categoryId', $categories);
			?>
		</div>
	</div>
	<div class="adminContentItem clearBoth">
		<div class="adminContentItemList" style="width: 750px;">
			<button id="saveButton" class="button floatLeft">Save</button>
			<button id="cancelButton" class="button floatLeft">Cancel</button>
		</div>
	</div>
</div>

<script>
$(document).ready(function() {
	$("#uploadPhotoButton").click(function() {
		$("#uploadPhotoButton").fancybox({
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
		var categoryId = $("select[name=categoryId]").val();
		var coverImage = $("#coverImage").attr('src').replace('/photos/','');
		$.post('/admin/imgadd',{"categoryId":categoryId, "coverImage":coverImage, "action": "save"},function(returned){
			if(returned.success) {
				window.location='<?echo $baseUrl; ?>admin/imglist';
			}
			else {
				alert(returned.message);
			}
		},"json");
	});
	$("#cancelButton").click(function() {
		var image = $("#coverImage").attr('src').replace('/photos/','');
		$.post('/admin/imgadd',{"image":image, "action":"cancel"},function(returned){
			if(returned.success) {
				window.location='<?echo $baseUrl; ?>admin/imglist';
			}
			else {
				alert(returned.message);
			}
		},"json");
	});
});
</script>
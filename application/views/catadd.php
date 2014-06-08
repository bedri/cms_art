<div class="adminContentTitle">Add New Category</div>
<div id="adminContent" class="floatLeft">
	<div class="adminContentItem">
		<div class="adminContentItemList floatLeft bold">
			Name
		</div>
		<div class="adminContentItemList floatLeft">
			<input class="input" style="width: 300px;" type="text" name="name" value="">
		</div>
	</div>
	<div class="adminContentItem">
		<div class="adminContentItemList floatLeft bold">
			Description
		</div>
		<div class="adminContentItemList floatLeft">
			<textarea class="textarea" style="width: 300px; height: 100px;" name="description"></textarea>
		</div>
	</div>
	<div class="adminContentItem">
		<div class="adminContentItemList floatLeft bold">
			Cover Image
		</div>
		<div class="adminContentItemList floatLeft">
			<div class="image"><img style="display: none;" id="coverImage" src="" height="200"></div>
			<div class="image"><a id="uploadPhotoButton" class="fancybox button" data-fancybox-type="iframe" href="<?php echo $baseUrl; ?>upload/form"> Upload Photo </a></div>
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
		var name = $("input[name=name]").val();
		var description = $("textarea[name=description]").val();
		var coverImage = $("#coverImage").attr('src').replace('/photos/','');
		$.post('/admin/catadd',{"name":name, "description":description, "coverImage":coverImage, "action": "save"},function(returned){
			if(returned.success) {
				window.location='<?echo $baseUrl; ?>admin/catlist';
			}
			else {
				alert(returned.message);
			}
		},"json");
	});
	$("#cancelButton").click(function() {
		var image = $("#coverImage").attr('src').replace('/photos/','');
		$.post('/admin/catadd',{"image":image, "action":"cancel"},function(returned){
			if(returned.success) {
				window.location='<?echo $baseUrl; ?>admin/catlist';
			}
			else {
				alert(returned.message);
			}
		},"json");
	});
});
</script>
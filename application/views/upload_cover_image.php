<style>
	form { display: block; margin: 20px auto; background: #eee; border-radius: 10px; padding: 15px }
	#progress { display: none; position:relative; width:400px; border: 1px solid #ddd; padding: 1px; border-radius: 3px; }
	#bar { background-color: #B4F5B4; width:0%; height:20px; border-radius: 3px; }
	#yuzde { position:absolute; display:inline-block; top:3px; left:48%; }
</style>
<?php
	$attributes = array('id' => 'uploadFile');
	echo form_open_multipart($baseUrl.'upload/save', $attributes);
?>
<!-- <form id="uploadFile" action="<?php echo $baseUrl; ?>upload/save" method="post" enctype="multipart/form-data"> -->
	<input class="input" style="width: 370px;" type="file" name="userfile">
	<input class="button" type="submit" value="Upload">
</form>

<div id="progress">
	<div id="bar"></div>
	<div id="percent">0%</div >
</div>

<br/>

<div id="message"></div>

<script>
//formid olarak kullandığımız formun id sini yazıyoruz 
$(document).ready(function()
{
 
	 $("#uploadFile").ajaxForm({
		beforeSend: function() 
		{
			$("#progress").show();
			//clear everything
			$("#bar").width('0%');
			$("#message").html("");
			$("#percent").html("0%");
		},
		uploadProgress: function(event, position, total, percentComplete) 
		{
			$("#bar").width(percentComplete+'%');
			$("#percent").html(percentComplete+'%');
		},
		success: function() 
		{
			$("#bar").width('100%');
			$("#percent").html('100%');
 
		},
		complete: function(response) 
		{
			var json = jQuery.parseJSON( response.responseText );
			//$("#message").html('<div><img src="<?php echo $baseUrl; ?>photos/' + json.filename + '"></div><div><font color="green">Image uploaded successfully</font></div>');
			parent.$("#coverImage").show();
			parent.$("#coverImage").attr('src','<?php echo $baseUrl; ?>photos/' + json.filename);
			parent.$.fancybox.close();
		},
		error: function()
		{
			$("#message").html("<font color='red'> There was an error uploading image. Please try again later. </font>");
 
		}
	});
 
});

</script>
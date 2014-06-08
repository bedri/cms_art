<div id="content" class="pageCenter">
	<div id="blockContainer" class="pageCenter">
		<style>
			form { display: block; margin: 20px auto; background: #eee; border-radius: 10px; padding: 15px }
		</style>
		<div class="adminContentTitle" style="width: 1000px;">User Login</div>
		<form id="loginForm" action="<?php echo $baseUrl; ?>user/login/check" method="post" enctype="multipart/form-data">
			<div class="bold">Username: &nbsp;&nbsp;&nbsp;&nbsp;<input class="input" type="text" name="username"></div>
			<div class="spacer10"></div>
			<div class="bold">Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="input" type="password" name="password"></div>
			<div class="spacer10"></div>
			<input class="button" type="submit" value="Login">
		</form>
		
		<script>
		//formid olarak kullandığımız formun id sini yazıyoruz 
		$(document).ready(function()
		{
		 
			 $("#loginForm").ajaxForm({
				beforeSend: function() 
				{
					$("#message").html("");
				},
				uploadProgress: function(event, position, total, percentComplete) 
				{
				},
				success: function() 
				{
		 
				},
				complete: function(response) 
				{
					console.log(response.responseText);
					var json = $.parseJSON(response.responseText);
					if(json.success) {
						window.location = '<?php echo $baseUrl; ?>admin/';
					}
					else {
						alert(json.message);
					}
				},
				error: function()
				{
					$("#message").html("<font color='red'> There was an error uploading image. Please try again later. </font>");
		 
				}
			});
			$("input[name=username]").focus();
		 
		});
		
		</script>
	</div>
</div>

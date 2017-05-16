<!doctype>
<html>
<head>
<title>Chat</title>
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<script type="text/javascript" src="jscolor.js"></script>
<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.js"></script>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script>
$(document).ready(function() {
	$.ajaxSetup(
        {
            cache: false,
            beforeSend: function() {
                $('#messages').hide();
                $('#messages').show();
				$("#messages").animate({"scrollTop": $('#messages')[0].scrollHeight}, "slow");
            },
            complete: function() {
                $('#messages').hide();
                $('#messages').show();
				$("#messages").animate({"scrollTop": $('#messages')[0].scrollHeight}, "slow");
            },
            success: function() {
                $('#messages').hide();
                $('#messages').show();
				$("#messages").animate({"scrollTop": $('#messages')[0].scrollHeight}, "slow");
            }
        });
        var $container = $("#messages");
        $container.load('ajaxload.php?id=<?php echo 'a' ?>');
        var refreshId = setInterval(function()
        {
            $container.load('ajaxload.php?id=<?php echo 'a' ?>');
        }, 3000);
	$("#userArea").submit(function() {
		
		$.post('ajaxPost.php', $('#userArea').serialize(), function(data) {
			$("#messages").append(data);
			$("#messages").animate({"scrollTop": $('#messages')[0].scrollHeight}, "slow");
			document.getElementById("output").value = "";
		});
		return false;
	});
});
</script>


</head>
<body>
<div id="chatwrapper">
<!--display-->
<!--http://www.youtube.com/watch?v=FyXeOX-uYMc-->
<div id="messages"></div>
<!--post-->
<form id="userArea">
<div id="usercolor">
<input type="text" name="user" placeholder="User" required="required" value="argie" id="text" style="margin-bottom: 5px;" />
<input name="text" class="color" id="text" maxlength="6" value="000000" />
</div>
<div id="messagesntry">
<textarea id="output" name="messages" placeholder="Message" /></textarea>
</div>
<div id="messagesubmit">
<input type="submit" value="Post message" id="submitmessage" />
</div>
</form>
</div>
</body>
</html>
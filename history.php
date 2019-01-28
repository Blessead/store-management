<?php
	
	include 'config.php';
	if(!($conn = mysql_connect($hostname_connect, $username_connect, $password_connect, $database_connect))) exit('Error connecting to database.');
	mysql_select_db($database_connect);
?>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Graduate' rel='stylesheet' type='text/css'>
		<![if !IE]>
		<link href='css/style.css' rel='stylesheet' type='text/css'>
		<![endif]>
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
		<script>
			function ajaxForQuery()
			{
				$.ajax({type:'POST', url: 'runsqlq.php', data:$('#medadmin').serialize(), success: function(response)
				{
					$('#medadmin').find('.outputsqlq').html(response);
				}
				});
				return false;
			}
		</script>
            <style>

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}

</style>

		<title>Medical Store Management</title>
	</head>

	<body>

		<form id="medadmin" style="height:680px;" onsubmit="return ajaxForQuery();">
		<?php
                 require_once('header.php');
                   
        ?>

			<label for="sqlq" style="font-size:25px;">Stock History (Issued or Received)</label>
			<br /><br />

			<label for="sqlq">Search:</label>
			<input type="text" name="sqlq" style="width:300px;" required/>
			<br />


			<input type="submit" name="submit" value="Submit" class="submit" id="runsqlq"/>
            <button style="float:right">Print</button>
            
            

			<div class="outputsqlq" style="border:2px solid black;"></div>
		</form>

	</body>
</html>

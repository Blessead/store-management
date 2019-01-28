<?php
/*	session_start();
	if(!isset($_SESSION['receptionist']))
	{
		header("Location: index.html");
		exit();
	}*/
	include 'config.php';
	if(!($conn = mysql_connect($hostname_connect, $username_connect, $password_connect, $database_connect))) exit('Error connecting to database.');
	mysql_select_db($database_connect);
?>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Graduate' rel='stylesheet' type='text/css'>
		<![if !IE]>
		<link href='css/style.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet"  href="w3.css">
		<![endif]>
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>

		<title>Medical Store Management</title>
	</head>
   
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
   


	<body>
  
        <form method ="Post" action = "insert.php" autocomplete="off" >

            <?php
                    require_once('header.php');
                    
            ?>
            <div  style=" background-color:#F8F8F8;padding-top:15px;margin-top:15px; font-size:18px;padding-left:15px;">
                    SUPPLIER'S INFO <br>

                    <table style="width:100%">
                        <tr>
                            <th><label for="fname">Supplier Name</label></th>
                            <th><label for="lname">Supplier Contact 1</label></th>		
                            <th><label for="lname">Supplier Contact 2</label></th>
                            
                        </tr>
                        
                        <tr>
                        <td><input style="width:85%" type="text" name ="sname"></td>
                        <td><input style="width:85%" type="text" name ="contact1"></td>
                        <td><input style="width:85%" type="text" name ="contact2"></td>
                        
                        </tr>

                        <tr>
                         <th><label for="country">Supplier Email</label></th>
                        <th><label for="country">Supplier Website</label></th>
                        </tr>
                       
                        <tr>
                        <td><input style="width:85%" type="text" name ="email"></td>
                        <td><input style="width:85%" type="text" name ="website"></td>
                        </tr>
                    </table>
                    <label for="fname">Supplier Description</label>
                    <input style="width:80%" type="text" name ="description">
                    <button name="SAdd" value="Add">Add</button>
                </div>
                
            </form>
            <button name = "" style=" margin-top:10px;float:right;margin-right:15%;"onclick="myFunction()" >VIEW INFO</button>
        <form >
        
            <?php
                // require_once('config.php');
                $result = $mysqli->query("SELECT* FROM supplier" );  
            ?>

		
			<div  style="border:2px solid black;display:none; overflow:auto;" id="data">
                <table style="width: 100%;"  class="w3-table-all w3-margin-top w3-hoverable" id="myTable1">
                    <tr style="font-size:18px;">

                        <th style="text-align: left;">SUPPLIER NAME</th>
                        <th style="text-align: left;">CONTACT1</th>
                        <th style="text-align: left;">CONTACT2</th>
                        <th style="text-align: left;">EMAIL</th>
                        <th style="text-align: left;">WEBSITE</th>
                        <th style="text-align: left;">DESCRIPTION</th>
                         <?php while ($row = mysqli_fetch_assoc($result)) {
                       
                        ?>
                    
                <tr>
                <td><?php echo $row['sname'];?></td>
                <td><?php echo $row['contact1'];?></td>
                <td><?php echo $row['contact2'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['website'];?></td>
                <td><?php echo $row['description'];?></td>
                </tr>

                 <?php }    mysqli_close($mysqli); ?>
                </table>


            </div>

         

            </div>
		</form>

         
    
    
    </body>
    <script>
                function myFunction() {
                    var x = document.getElementById("data");
                    if (x.style.display === "none") {
                        x.style.display = "block";
                    } else {
                        x.style.display = "none";
                    }
                }
               

    </script>
</html>

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
                    TRUCK INFO <br>

                    <table style="width:100%">
                        <tr>
                            <th><label for="fname">Truck Regn#</label></th>
                            <th><label for="lname">Truck Class</label></th>		
                            <th><label for="lname">Truck Type</label></th>
                            
                        </tr>
                        
                        <tr>
                        <td><input style="width:85%" type="text" name ="truckNo"></td>
                        <td><input style="width:85%" type="text" name ="tclass"></td>
                        <td><input style="width:85%" type="text" name ="ttype"></td>
                        
                        </tr>

                        <tr>
                         
                        <th><label for="country">Truck Make</label></th>
                        <th><label for="country">Truck Driver</label></th>
                        <th><label for="country">Date of Update</label></th>
                        </tr>
                       
                        <tr>
                        
                        <td><input style="width:85%" type="text" name ="tmake"></td>
                        <td><input style="width:85%" type="text" name ="driver"></td>
                        <td><input style="width:85%" type="date" value="dd-mm-2018" name ="date_of_update"></td>
                        </tr>
                    </table>
                    <label for="fname">Carriage Capacity</label><br>
                    <input style="width:80%" type="text" name ="tdescription">
                    <button name="TAdd" value="Add">Add</button>
                </div>
                
            </form>
            <button name = "" style=" margin-top:10px;float:right;margin-right:15%;"onclick="myFunction()" >VIEW INFO</button>
        <form >
        
            <?php
                // require_once('config.php');
                $result = $mysqli->query("SELECT* FROM truck" );  
            ?>

		
			<div  style="border:2px solid black;display:none; overflow:auto;" id="data">
                <table style="width: 100%;"  class="w3-table-all w3-margin-top w3-hoverable" id="myTable1">
                    <tr style="font-size:18px;">

                        <th style="text-align: left;">Regn#</th>
                        <th style="text-align: left;">CLASS</th>
                        <th style="text-align: left;">TYPE</th>
                        <th style="text-align: left;">MAKE</th>
                        <th style="text-align: left;">DRIVER</th>
                        <th style="text-align: left;">DATE OF UPDATE</th>
                        <th style="text-align: left;">CR-CAPACITY</th>
                         <?php while ($row = mysqli_fetch_assoc($result)) {
                       
                        ?>
                    
                <tr>
                <td><?php echo $row['truckNo'];?></td>
                <td><?php echo $row['tclass'];?></td>
                <td><?php echo $row['ttype'];?></td>
                <td><?php echo $row['tmake'];?></td>
                <td><?php echo $row['driver'];?></td>
                <td><?php echo $row['date_of_update'];?></td>
                <td><?php echo $row['tdescription'];?></td>
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

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
  
    <form id="medbuy" Method="POST" action = "insert.php" autocomplete="off" >

	 <?php
                 require_once('header.php');
                   
        ?>
   
        <div  style="height:60px; background-color:#F8F8F8;padding-top:15px;margin-top:15px; font-size:18px;padding-left:15px;">
                 Issueing form
        </div>
        <div  style="background-color:#F8F8F8;padding-top:15px;margin-top:15px; font-size:18px;">
            <div>
                    <table style="width:100%; padding-top:10px;padding-left:15px;padding-bottom:10px;text-alignment:center;border-style: outset;">
                            <tr >
                                <th ><label>Select Product</label></th>
                                <th><label>Select Category </label></th>
                                <th><label >Select Brand</label></th>
                                <th><label >Issued To</label></th>
                            </tr>
                            <tr>
                                <td ><input type="text" name="Iproduct" style="width:90%; " ></td>
                                <td><input type="text"  name="Icategory"style="width:90%; "></td>
                                <td><input type="text"  name="Ibrand" style="width:90%; "></td>
                                <td><input type="text"  name="IssuedTo"style="width:90%; "></td>
                     
                            </tr>
            
                    </table>
            </div>
            <div style="padding-left:20px;padding-bottom:10px;">
                <label style="display:block; padding-top:20px;">Product Quantity</label>
                <input style="width:30%; height:40px;" name="quantity" id="qty" value="0" onkeyup="getValues(1)">
				
                <label style="display:block;height:25px;">Rate</label>
                <input style="width:30%;" name="rate" id="rate" value="0" onkeyup="getValues(2)" >
				
                <label style="display: block;height:30px;">Total</label>
                <input  style="width:30%;" name="total" id="main" value="" ReadOnly>
				
                <label style="display: block;height:30px;" >Date of Issue</label>
                <input style="width:30%;" name="date_of_issue" type="date"><br>

                

            </div>
            <button name="IAdd" style="margin-left:20px;">Issue</button>
            
            
        </div>
        
        
        </div>
       
    
      </div>
    </form>
   <script language = "javascript">
	function getValues(val){
		var numVal1=document.getElementById("qty").value;
		var numVal2=document.getElementById("rate").value;
		var totalValue = numVal2 * numVal1;
		
		document.getElementById("main").value = totalValue;
		}
			
	          
	</script>
	</body>
</html>

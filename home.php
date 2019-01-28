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
        <link rel="stylesheet"  href="w3.css">
		<![endif]>
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>

		<title>Medical Store Management</title>
	</head>
   
    <style>

input[type=text], select {
    width: 100%;
    height:40px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 30%;
    height:100px;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size:18px;
}
input[type=title] {
    width: 100%;
    height:10px;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size:14px;
}
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
    background-color:rgb(0, 159, 0);
}

.active {
    background-color: #4CAF50;
}
a:link, a:visited {
   
    color: white;
    padding: 14px 25px;
    text-align: center;	
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: rgb(0, 159, 0);
}
.btn{
    width: 30%;
    height:100px;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size:18px;
    padding-top:50px;
    margin-left:12%;
}

</style>
   


	<body>
  

<form id="medbuy"  >
        <?php
                 require_once('header.php');
                   
        ?>
        <div class = "w3-row" >
        
            <div class ="w3-col m8" style="padding-top:50px" >
                <a class="btn"style="margin-left:12%;padding-top:7%" href="stock.php" >Stock</a>
                <a class="btn"style="float:right; margin-right:12%; padding-top:7%" href="issue.php" >Issue Stock</a>
                <a class="btn"style="margin-left:12%;padding-top:5%" href="#" >Stock Available</a>
                <a class="btn"style="float:right; margin-right:12%; padding-top:7%" href="history.php">Stock History</a>
                
             
            </div>
            <div class="w3-col m4" >
            <div style="border-radius: 5px;background-color: #f2f2f2;padding: 15px;}">
            <form action="http://www.w3schools.com/css/action_page.php">

                <input type="title" value="Search product in stock">
                <label for="fname">Category</label>
                <input type="text" id="fname" name="firstname">

                <label for="lname">Brand</label>
                <input type="text" id="lname" name="lastname">

                <label for="country">Product</label>
                <select id="country" name="country">
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
                </select>
            
                <input type="title" value="Submit">
            </form>
            </div>
                    <div style="border-radius: 5px;background-color: #f2f2f2;padding: 15px; margin-top:15px;display: }">
                        <input type="title" value="Statistics">
                        <label >Stock Available(Qty): </label><br>
                        <label >Stock Balance: </label><br>
                        <label >Stock Status: </label><br>
                        <label >Last date of update:</label><br>
                    </div>
            </div>
        
         </div>
    
    </div>

	
	

	</body>
</html>

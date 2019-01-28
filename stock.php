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
		<link href='css/style2.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet"  href="w3.css">
		<![endif]>
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

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
  

<form id="medbuy" Method = "POST" Action="insert.php" >
        <?php
                 require_once('header.php');
                   
        ?>
        <div  style="height:60px; background-color:#F8F8F8;padding-top:15px;margin-top:15px; font-size:18px;padding-left:15px;">
                 Stock form
        </div>
        <div  style="background-color:#F8F8F8;padding-top:15px;margin-top:15px; font-size:18px;">
            <div class="search-box">
                    <table style="width:100%; padding-top:10px;padding-left:15px;padding-bottom:10px;text-alignment:center;border-style: outset;">
                            <tr >
                                <th ><label for="fname">Select Product</label></th>
                                <th><label for="fname">Select Category </label></th>
                                <th><label for="fname">Select Brand</label></th>
                                <th><label for="fname">Select Supplier</label></th>
                            </tr>
                            <tr>
                                <td >
								<div class="search-box">
									<input name = "product" type = "text" autocomplete="off" placeholder="Select product..." />
									<div class="result"></div>
								</div>
								</td>
								
                                <td>
								<div class="search-box2">
									<input  name="category" type = "text1" autocomplete="off" placeholder="Select category..." />
									<div class="result"></div>
								</div>
								 </td>
								 
								 <td>
								<div class="search-box3">
									<input  name="brand"  autocomplete="off" placeholder="Select brand..." />
									<div class="result"></div>
								</div>
								</td>
								
								<td>
								<div class="search-box4">
									<input  name="supplier"  autocomplete="off" placeholder="Select supplier..." />
									<div class="result"></div>
								</div>
								</td>
							</tr>
            
                    </table>
            </div>
            <div style="padding-left:20px;padding-bottom:10px;" class="search-box">
                <label style="display:block; padding-top:20px;">Product Quantity</label>
                <input style="width:30%; height:40px;" name="quantity" type="number" id="one" value="0" onkeyup="getValues(1)" >
							
                <label style="display:block;height:25px;">Rate</label>
                <input style="width:30%;" name="rate"type="number" id="two" value="0" onkeyup="getValues(2)">
				
                <label style="display: block;height:30px;">Total</label>
                <input  style="width:30%;" name="total" id="main" value="" ReadOnly>
				
                <label style="display: block;height:30px;" >Date of Stock</label>
                <input style="width:30%;" type="date" name="date2"value="MM/DD/YYYY" ><br>

                

            </div>
            <button name="STAdd" style="margin-left:20px;">Add Stock</button>
            
            
        </div>
        
        
        </div>
       
    
    </div>
	
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
//selection product
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});

//selection of category
$(document).ready(function(){
    $('.search-box2 input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term2: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box2").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>

	
	

	</body>
</html>

<?php
	/*session_start();
	if(!isset($_SESSION['receptionist']))
	{
		header("Location: index.html");
		exit();
	}*/
   
  
?>
<html>
	<head>
		<link href='' rel='stylesheet' type='text/css'>
		<![if !IE]>
		<link href='css/style.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet"  href="w3.css">
		<![endif]>
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="jquery-1.7.2.min.js"></script>
	    <script type="text/javascript" src="functions.js"></script>

		<title>Medical Store Management</title>
	</head>
   
    <style>
    #myDIV {
    width: 100%;
    padding: 50px 0;
    text-align: center;
    background-color: lightblue;
    margin-top: 20px;
}

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


         <form method ="Post" action = "insert.php" >
         <?php
                 require_once('header.php');
                   
        ?>
        
            <div class = "w3-row" style=" background-color:#F8F8F8;padding-top:10px;margin-top:10px; font-size:18px;padding-left:15px;">
                <div class ="w3-col m10">
                <table style="width:100%">
                        <tr>
                            <th>Product Name</th>
                            <th>Category</th>		
                            <th>Brand</th>
                        </tr>
                        
                        <tr>
						
                        <td><input style="width:85%" type="text" name ="product"></td>
                        <td><input style="width:85%" type="text" name ="category"></td>
                        <td><input style="width:85%" type="text" name ="brand"></td>
                          
                        </tr>
                       
                        
                    </table>
               
                </div>
                <div class ="w3-col m2" style=" padding-top:10px;margin-top:10px; font-size:18px;padding-left:15px;">
                <button name="CAdd" value="Add">Add</button>
                </div>
                   
               
               
            </div>
        </form >
        <button style=" margin-top:10px;float:right;margin-right:15%;" onclick="myFunction()">VIEW</button>
        <form >
        
            <?php
                 require_once('config.php');
                    $result = $conn->query("SELECT* FROM category" );  
            ?>

		
			<div  style="border:2px solid black;display:none; overflow:auto;" id="database">
                <table class="w3-table-all w3-margin-top w3-hoverable" id="myTable1">
                    <tr style="font-size:18px">

                        <th style="">PRODUCT NAME</th>
                        <th style="">CATEGORY</th>
                        <th style="">BRAND</th>
                        <th></th>
                        <?php while ($row = mysqli_fetch_assoc($result)) {
                       
                        ?>
                    
                <tr>
                <td><?php echo $row['product'];?></td>
                <td><?php echo $row['category'];?></td>
                <td><?php echo $row['brand'];?></td>
                </tr>

                 <?php }    mysqli_close($conn); ?>
                </table>


            </div>

         

            </div>
		</form>

         
	</body>
    


    <script>
                function myFunction() {
                    var x = document.getElementById("database");
                    if (x.style.display === "none") {
                        x.style.display = "block";
                    } else {
                        x.style.display = "none";
                    }
                }
               

    </script>
</html>

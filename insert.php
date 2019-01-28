<?php
require_once('config.php'); 
//print_r($_POST);
$pdt  = $cat = $brand = "";
$sname  = $contact1 = $contact2 = $mail = $web = $describe =  "";
$tname = $class = $type = $make = $driver = $tdescribe = "";
$pname = $pcat = $pbrand = $issued = $qty = $rate = $total ="";



//adding new stock in the system
if (isset($_POST["STAdd"])){

  $pname = $_POST["product"];
  $pcat = $_POST["category"];
  $pbrand = $_POST["brand"];
  $suppplied = $_POST["supplier"];
  $qty = $_POST["quantity"];
  $rate = $_POST["rate"];
  $total = $_POST["total"];
  $default ="RECEIVED";
  
  $PUpdate = htmlentities($_POST["date2"]);
  $date = date('Y-m-d', strtotime( $PUpdate));
  
    $result = $conn->query("select PQty from stock where PName = '$pname' AND PCategory = '$pcat' AND PBrand = '$pbrand'" );
	if(mysqli_fetch_assoc($result)==0){
			$mysqli1 = "insert into stock (PName,PCategory,PBrand,Date_of_stock,PQty,Rate,Total,Supplier,Status) 
			values('$pname','$pcat','$pbrand','$date','$qty','$rate','$total','$suppplied','$default')";
			
			if($conn->query($mysqli1)){
				
				
				}
				else{
             // echo "success";
               echo "Error: " . $mysqli . "<br>" . $conn->error;
				}
        
	}
	else
	{
		while ($row = mysqli_fetch_assoc($result)){
		$SQty = $row['PQty'];
		//echo $SQty ;
		$NewSQty = $SQty + $qty;
	            }

		$sql= "UPDATE stock SET PQty = '$NewSQty' where PName = '$pname' AND PCategory = '$pcat' AND PBrand = '$pbrand' ";
		$conn->query($sql);
		
	}
	
  
    $mysqli1 = "insert into stock (PName,PCategory,PBrand,Date_of_stock,PQty,Rate,Total,Supplier,Status) 
    values('$pname','$pcat','$pbrand','$date','$qty','$rate','$total','$suppplied','$default')";
	
	$mysqli2 = "insert into shistory (Product,Category,Brand,Date,Qty,Rate,Total,Detail,Status)  
    values('$pname','$pcat','$pbrand','$date','$qty','$rate','$total','$suppplied','$default')";
	
	$result = $conn->query("select PQty from stock where PName = '$pname' AND PCategory = '$pcat' AND PBrand = '$pbrand'" );
	
	
		
     
    

  if ($conn->query($mysqli2) ) {

				header("Location: stock.php"); 

           } else{
             // echo "success";
               echo "Error: " . $mysqli . "<br>" . $conn->error;
    
        }
	}

//Issuing product 
if (isset($_POST["IAdd"])){

  $pname = $_POST["Iproduct"];
  $pcat = $_POST["Icategory"];
  $pbrand = $_POST["Ibrand"];
  $issued = $_POST["IssuedTo"];
  $qty = $_POST["quantity"];
  $rate = $_POST["rate"];
  $total = $_POST["total"];
  $default ="ISSUED";
  
  $PUpdate = htmlentities($_POST["date_of_issue"]);
  $date1 = date('Y-m-d', strtotime( $PUpdate));
  
	$result = $conn->query("select PQty from stock where PName = '$pname' AND PCategory = '$pcat' AND PBrand = '$pbrand'" );
	
	while ($row = mysqli_fetch_assoc($result)){
		$SQty = $row['PQty'];
		echo $SQty ;
		$NewSQty = $SQty - $qty;
	}
	//$pQty = "select PQty from stock where PName = '$pname' AND PCategory = '$pcat' AND PBrand = '$pbrand' ";
	//echo '$row';

		
		$sql= "UPDATE stock SET PQty = '$NewSQty' where PName = '$pname' AND PCategory = '$pcat' AND PBrand = '$pbrand' ";
		$conn->query($sql);
	
	$mysqli = "insert into issue (Iproduct,Icategory,Ibrand,IssuedTo,quantity,rate,total,date_of_issue,status,NewSQty) 
    values('$pname','$pcat','$pbrand','$issued','$qty','$rate','$total','$date1','$default','$NewSQty')";
  
   
	
	$mysqli3 = "insert into shistory (Product,Category,Brand,Date,Qty,Rate,Total,Detail,Status) 
    values('$pname','$pcat','$pbrand','$date1','$qty','$rate','$total','$issued','$default')";
        
    

  if ($conn->query($mysqli) AND $conn->query($mysqli3) ) {

				header("Location: issue.php"); 

           } else{
             // echo "success";
               echo "Error: " . $mysqli . "<br>" . $conn->error;
    
        }
	}

if (isset($_POST["SAdd"])){

  $sname = $_POST["sname"];
  $contact1 = $_POST["contact1"];
  $contact2 = $_POST["contact2"];
  $mail = $_POST["email"];
  $web = $_POST["website"];
  $describe = $_POST["description"];
    $mysqli=" insert into supplier(sname,contact1,contact2,email,website,description)value ('$sname','$contact1','$contact2','$mail','$web','$describe')";
    
   
  if ($conn->query($mysqli) === FALSE) {

    echo "Error: " . $mysqli . "<br>" . $conn->error;

           } 
           
    header("Location: supplier.php"); 
}

if (isset($_POST["TAdd"])){

  $tname = $_POST["truckNo"];
  $class = $_POST["tclass"];
  $type = $_POST["ttype"];
  $make = $_POST["tmake"];
  $tdriver = $_POST["driver"];
  $tdescribe = $_POST["tdescription"];

  $LastUpdate = htmlentities($_POST["date_of_update"]);
  $date = date('Y-m-d', strtotime( $LastUpdate));

  $mysqli=" insert into truck(truckNo,tclass,ttype,date_of_update,driver,tdescription) value ('$tname','$class','$type','$date','$tdriver','$tdescribe')";
  
 
  if ($conn->query($mysqli) === FALSE) {

  echo "Error: " . $mysqli . "<br>" . $conn->error;

         } 
         
         header("Location: truck.php");
}

if (isset($_POST["CAdd"])){

    $pdt = $_POST["product"];
    $cat = $_POST["category"];
    $brand = $_POST["brand"];
    $mysqli=" insert into category(product,category,brand) value ('$pdt','$cat','$brand')";
    
   
  if ($conn->query($mysqli) === FALSE) {

    echo "Error: " . $mysqli . "<br>" . $conn->error;

           } 
           
           header("Location: category.php");
}



//mysqli_close($conn);
?>

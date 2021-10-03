<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h2{background-color:black;
		color:white;}
</style>

</head>

<body>

<img src="fifa.jpg">


 <h2 style="text-align:center"> 
Succesful
</h2>


Your name is         :<?php echo $_GET["firstname"];  ?> <br>  
Your email is        :<?php echo $_GET["email"]; ?> <br>    
Your address is		 :<?php echo $_GET["address"]; ?> <br>   
Your city is		 :<?php echo $_GET["city"];  ?> <br> 	  
Your state  is       :<?php echo $_GET["state"]; ?> <br>        
Your Post code  is	 :<?php echo $_GET["zip"]; ?> <br>               
Your name on card is :<?php echo $_GET["cardname"]; ?> <br>     
Your Credit Card num :<?php echo $_GET["cardnumber"];  ?> <br>   
Exp month            :<?php echo $_GET["expmonth"]; ?><br>       
Exp Year		     :<?php echo $_GET["expyear"]; ?><br>        
Id        		     :<?php echo $_GET["games"]; ?> <br>           

<?php
 echo "Today is " . date("Y/m/d") . "<br>";  ?>
 
 
 <?php
  $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
 
 
 
 
$txt = $_GET["firstname"]."\n"; 
fwrite($myfile, $txt); 


$txt =  $_GET["email"]."\n"; 
fwrite($myfile, $txt); 

$txt =  $_GET["address"]."\n"; 
fwrite($myfile, $txt);

$txt =  $_GET["city"]."\n"; 
fwrite($myfile, $txt);

$txt =  $_GET["state"]."\n"; 
fwrite($myfile, $txt);

$txt =  $_GET["zip"]."\n"; 
fwrite($myfile, $txt);

$txt =  $_GET["cardname"]."\n"; 
fwrite($myfile, $txt);

$txt =  $_GET["expmonth"]."\n"; 
fwrite($myfile, $txt);

$txt =  $_GET["expyear"]."\n"; 
fwrite($myfile, $txt);

$txt =  $_GET["games"]."\n"; 
fwrite($myfile, $txt);


fclose($myfile);
?>


</body>
</html>
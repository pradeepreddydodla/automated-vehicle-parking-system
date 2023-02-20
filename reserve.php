<?php


$file = fopen("https://dl.dropboxusercontent.com/s/aqa1a2038qadnnf/output.txt", "r");


while (!feof($file)) 
{

$limit = fgets($file);


$s1=substr($limit,10,-22); 
$s2=substr($limit,15,-17); 
$s3=substr($limit,20,-12); 
$s4=substr($limit,25,-7); 
$s5=substr($limit,30,-2); 

 echo "<script type='text/javascript'>";
echo "function myFunction1() {";
echo  "document.getElementById('slot1').style.backgroundColor = 'red'";

echo "} </script>";




echo "<script type='text/javascript'>";
echo "function myText1() {";

echo "document.getElementById('slot11').innerHTML = 'Reserved!'";
echo "} </script>";



echo "<script type='text/javascript'>";
echo "function myFunction2() {";
echo  "document.getElementById('slot2').style.backgroundColor = 'red'";

echo "} </script>";




echo "<script type='text/javascript'>";
echo "function myText2() {";

echo "document.getElementById('slot22').innerHTML = 'Reserved!'";
echo "} </script>";









echo "<script type='text/javascript'>";
echo "function myFunction3() {";
echo  "document.getElementById('slot3').style.backgroundColor = 'red'";

echo "} </script>";




echo "<script type='text/javascript'>";
echo "function myText3() {";

echo "document.getElementById('slot33').innerHTML = 'Reserved!'";
echo "} </script>";










echo "<script type='text/javascript'>";
echo "function myFunction4() {";
echo  "document.getElementById('slot4').style.backgroundColor = 'red'";

echo "} </script>";




echo "<script type='text/javascript'>";
echo "function myText4() {";

echo "document.getElementById('slot44').innerHTML = 'Reserved!'";
echo "} </script>";









echo "<body bgcolor= pink>";

    echo "<br>";
	
	
    echo "<h3 align=center >SLOT BOOKING SYSTEM</h3>";
    echo "<p align='center'>For individual slot booking</p>";
	echo "<br><br>";
	
    if($s1==0)
     {
          echo '<p  STYLE="position:absolute; TOP:100px; LEFT:250px;border:2px solid green;border-width:2px;padding:5px 35px;">
          Slot-1</p>';
          echo "<br>";
          echo "<br>";
          
          echo '<p id ="slot1"   STYLE="position:absolute; TOP:130px; LEFT:250px; padding:30px 92.6px 90px 20px;background-color:green;">
          </p>';
          echo '<button  onclick="myFunction1();myText1();"  name="Reserve"  STYLE="position:absolute; TOP:280px; LEFT:250px; padding:3px 32.7px 9px 9px;"> 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reserve</button>';
          
          
          echo '<a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d902.9269327858889!2d79.15992168940744!3d12.970701472846358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDU4JzE0LjYiTiA3OcKwMDknMzYuMiJF!5e1!3m2!1sen!2sin!4v1521990860891" target="_new"><button  name="navigate"  STYLE="position:absolute; TOP:350px; LEFT:250px; padding:3px 30px 9px 9px;"> 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Navigate</button></a>';
          
          
          echo '<p id="slot11" STYLE="position:absolute; TOP:300px; LEFT:250px; padding:3px 32.7px 9px 26px;"></p>';
          
     }  
     else
    {
    echo '<p STYLE="position:absolute; TOP:100px; LEFT:250px;border:2px solid red;border-width:2px;padding:5px 35px;">
          Slot-1</p>';
          echo "<br>";
          echo "<br>";
          echo '<p STYLE="position:absolute; TOP:130px; LEFT:250px; padding:30px 92.6px 90px 20px;background-color:red;">
          </p>';
    }     
    
    if($s2==0)
    {
    echo '<p STYLE="position:absolute; TOP:100px; LEFT:450px;border:2px solid green;border-width:2px;padding:5px 35px;">
          Slot-2</p>';
          echo "<br>";
          echo "<br>";
          echo '<p id ="slot2" STYLE="position:absolute; TOP:130px; LEFT:450px; padding:30px 92.6px 90px 20px;background-color:green;">
          </p>';
          
          echo '<button  onclick="myFunction2();myText2();"  name="Reserve"  STYLE="position:absolute; TOP:280px; LEFT:450px; padding:3px 32.7px 9px 9px;"> 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reserve</button>';
          
          echo '<a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d933.4493893019179!2d79.1595149958095!3d12.970697396865752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDU4JzE0LjgiTiA3OcKwMDknMzYuMiJF!5e1!3m2!1sen!2sin!4v1521990943113" target="_new"><button  name="navigate"  STYLE="position:absolute; TOP:350px; LEFT:450px; padding:3px 30px 9px 9px;"> 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Navigate</button></a>';
          
          echo '<p id="slot22" STYLE="position:absolute; TOP:300px; LEFT:450px; padding:3px 32.7px 9px 26px;"></p>';
          
          
    }
    else
    {
    echo '<p STYLE="position:absolute; TOP:100px; LEFT:450px;border:2px solid red;border-width:2px;padding:5px 35px;">
          Slot-2</p>';
          echo "<br>";
          echo "<br>";
          echo '<p STYLE="position:absolute; TOP:130px; LEFT:450px; padding:30px 92.6px 90px 20px;background-color:red;">
          </p>';
    
    
    }
    
    
    
    
    if($s3==0)
    {
    echo '<p STYLE="position:absolute; TOP:100px; LEFT:650px;border:2px solid green;border-width:2px;padding:5px 35px;">
          Slot-3</p>';
          echo "<br>";
          echo "<br>";
          echo '<p id ="slot3" STYLE="position:absolute; TOP:130px; LEFT:650px; padding:30px 92.6px 90px 20px;background-color:green;">
          </p>';
          
          
          echo '<button  onclick="myFunction3();myText3();"  name="Reserve"  STYLE="position:absolute; TOP:280px; LEFT:650px; padding:3px 32.7px 9px 9px;"> 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reserve</button>';
          
          echo '<a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d905.1273391845298!2d79.15973001669151!3d12.970671396521944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDU4JzE0LjkiTiA3OcKwMDknMzYuMiJF!5e1!3m2!1sen!2sin!4v1521990998786"  target="_new"><button  name="navigate"  STYLE="position:absolute; TOP:350px; LEFT:650px; padding:3px 30px 9px 9px;"> 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Navigate</button></a>';
          
          echo '<p id="slot33" STYLE="position:absolute; TOP:300px; LEFT:650px; padding:3px 32.7px 9px 26px;"></p>';
          
          
    }
    else
    {
    echo '<p STYLE="position:absolute; TOP:100px; LEFT:650px;border:2px solid red;border-width:2px;padding:5px 35px;">
          Slot-3</p>';
          echo "<br>";
          echo "<br>";
          echo '<p STYLE="position:absolute; TOP:130px; LEFT:650px; padding:30px 92.6px 90px 20px;background-color:red;">
          </p>';
                    
                 
    
    }
    
    
    
    
    
    if($s4==0)
    {
    echo '<p STYLE="position:absolute; TOP:100px; LEFT:850px;border:2px solid green;border-width:2px;padding:5px 35px;">
          Slot-4</p>';
          echo "<br>";
          echo "<br>";
          echo '<p id ="slot4"   STYLE="position:absolute; TOP:130px; LEFT:850px; padding:30px 92.6px 90px 20px;background-color:green;">
          </p>';
          
          
          echo '<button  onclick="myFunction4();myText4();"  name="Reserve"  STYLE="position:absolute; TOP:280px; LEFT:850px; padding:3px 32.7px 9px 9px;"> 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reserve</button>';
          
          echo '<a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d922.3658701277526!2d79.1595002214163!3d12.97082282767459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDU4JzE0LjkiTiA3OcKwMDknMzYuMiJF!5e1!3m2!1sen!2sin!4v1521991056650" target="_new"><button  name="navigate"  STYLE="position:absolute; TOP:350px; LEFT:850px; padding:3px 30px 9px 9px;"> 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Navigate</button></a>';
          
          echo '<p id="slot44" STYLE="position:absolute; TOP:300px; LEFT:850px; padding:3px 32.7px 9px 26px;"></p>';
          
          
    }
    else
    {
    echo '<p STYLE="position:absolute; TOP:100px; LEFT:850px;border:2px solid red;border-width:2px;padding:5px 35px;">
          Slot-4</p>';
          echo "<br>";
          echo "<br>";
          echo '<p STYLE="position:absolute; TOP:130px; LEFT:850px; padding:30px 92.6px 90px 20px;background-color:red;">
          </p>';
    
    
    }
    
    
    
    
  
    
    
    }

fclose($file); 
 
    ?>
    
    
    <html>
    <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.btn {
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
}
.success {background-color: #4CAF50;} /* Green */
.success:hover {background-color: #46a049;}
</style>
</head>
    <body><br><br><br><br><br><br><br>
    <p align="center">For combined slot boooking, Please use the button below:</p>
    <div align="center">
    <a href="reserving.php" ><input type="submit" value="Reserve"  class="btn success" /></a>
    
</div><br>
<div align="center" >
<p align="center">To Preview the live image, Please use the button below:</p>
<a href="preview.php" ><input type="submit" value="Preview"  class="btn success" /></a>
 </div>   </body>
</html>    
    
   



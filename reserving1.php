<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

$s1 =  $_POST['slot1'];
$s2 =$_POST['slot2'];
$s3 =  $_POST['slot3'];
$s4 = $_POST['slot4'];





echo "<body bgcolor= pink>";

    echo "<br>";
	
	echo "<h3 align=center >VEHICLE PARKING SYSTEM</h3>";
	echo "<br>";
	
   if($s1==0)
     {
          echo '<p  STYLE="position:absolute; TOP:100px; LEFT:250px;border:2px solid green;border-width:2px;padding:5px 35px;">
          Slot-1</p>';
          echo "<br>";
          echo "<br>";
          
          echo '<p id ="slot1"   STYLE="position:absolute; TOP:130px; LEFT:250px; padding:30px 92.6px 90px 20px;background-color:green;">
          </p>';
         
          
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
    
    
    
    
    
    
    
echo "<br><br>";

echo "<h3 align=center >SUCCESSFULLY RESERVED !</h3>";
echo "<h3 align=center >THANK YOU :)</h3>";




}
?>    




<br><br>

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
    <body >
    <div align="center">
    <a href="index.html" ><input type="submit" value="Home"  class="btn success" /></a>
</div>
    </body>
</html> 
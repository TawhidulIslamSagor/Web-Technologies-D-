<?php
$isPost=false;
$username="";
if (isset($_POST["btnlogin"]))
{
	$isPost=true;
        if($_POST ["uname"]!="")
	    $username=$_POST["uname"];
}		
?>

<form action="#" method="post">

<?php
if ($isPost==true && $username=="")
	{
		echo "<span style='color:red;'><small>Required</small><span>";
	}
?>	

username:<br><input type="text" id="uname" name="uname"><br><br>
<?php
if ($isPost==true && $username=="")
	{
		echo "<span style='color:red;'><small>Required</small><span>";
	}
?>	

Password:<br><input type="password" id="pass" name="pass"><br><br>
<?php
if ($isPost==true && $username=="")
	{
		echo "<span style='color:red;'><small>Required</small><span>";
	}
?>	

Gender:<input type="radio" name="gender" value="male">Male
       <input type="radio" name="gender" value="female">Female
	   <input type="radio" name="gender" value="others">Others<br><br>
	   
<?php
if ($isPost==true && $username=="")
	{
		echo "<span style='color:red;'><small>Required</small><span>";
	}
?>	
	   
Department:<select name="dept">
           <option value="cse">CSE</option>
		   <option value="eee">EEE</option>
		   <option value="bba">BBA</option>
		   <option value="ipe">IPE</option>
		   <option value="english">English</option>
		   </select><br><br>

<?php
if ($isPost==true && $username=="")
	{
		echo "<span style='color:red;'><small>Required</small><span>";
	}
?>	
		   
Skills:<input type="checkbox" name="skills[]" value="c">C
       <input type="checkbox" name="skills[]" value="c++">C++
	   <input type="checkbox" name="skills[]" value="python">Python
	   <input type="checkbox" name="skills[]" value="java">Java
	   <input type="checkbox" name="skills[]" value="c#">C#<br><br>
<?php
if ($isPost==true && $username=="")
	{
		echo "<span style='color:red;'><small>Required</small><span>";
	}
?>	
	   
Address:<textarea name="address" rowspan="4" colspan="30">
        </textarea><br><br>  

<?php
if ($isPost==true && $username=="")
	{
		echo "<span style='color:red;'><small>Required</small><span>";
	}
?>	
		
<input type="submit" value="Log In" name="btnlogin">
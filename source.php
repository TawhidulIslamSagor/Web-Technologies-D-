<?php
echo "Welcome<br>";
echo "Here is your input data<br><br>";
echo "Username:";
echo $_POST["uname"]."<br>";
echo "Password:";
echo $_POST["pass"]."<br>";
echo "Gender:";
echo $_POST["gender"]."<br>";
echo "Department:";
echo $_POST["dept"]."<br>";
echo "Skills:";
foreach($_POST["skills"] as $b)
{
	echo $b."<br>";
}
echo "Address:";
echo $_POST["address"];


?>
<?php
echo $_POST["uname"];
if($uname=="")
{
    echo "Please Enter a Valid Name";

}
else{
    echo "Your user name is ".$_POST["uname"];
}
echo"<br>";

$pass==$_POST["password"];
if(strlen($pass)<8)
{
    echo "please enter a valid pass";
} 
else{
    echo "your password id valid";
}
echo"<br>";

if(isset($_POST["r1"]))
{
    echo "you have selected".$_POST["r1"];
}
else{
    echo "you have not selected any redio"
}
echo"<br>";


if(isset($_POST["c1"]) || isset($_POST["c2"]) )
{
    if(isset($_POST["c1"]) )
    {
        echo "you have picked one of the box ".$_POST["c1"];
    }
 echo"<br>";
    if(isset($_POST["c2"])
    {
        echo "you have picked one of the box ".$_POST["c2"]; 
    }
}
{
    echo "you have picked One of  box";
    
}
else{
    echo "you have not picked any box";
}




?>
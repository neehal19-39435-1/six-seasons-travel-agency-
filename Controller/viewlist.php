<!DOCTYPE html>
<html>
<head>
   <style>
    </style>
    <script src="../View/js/viewlist.js"></script>
<meta charset="utf-8">
<title>view list</title>
<link rel="stylesheet" href="../View/css/viewlist.css"></link>
</head>
<body>
<?php

include "../Model/dbConnect.php";
include "../Model/dbViewDtouristlist.php";


if(!empty($_GET["touristid"]))
{
    $del = delete($_GET["touristid"]);
    if($del)
    {
        $users = getAllUsers();
    }
    else
    {
        $users = getAllUsers();
    }
}

?>


<fieldset style="background-color: mistyrose;">

<p id="heading">VIEW TOURIST LIST</p></span>


<fieldset id="viewlistfs"> 
   <p id="viewlistpara"><u>DETAILS OF TOURISTS WHO HAVE ALREADY VISITED PLACES AND WHO ARE PRESENTLY VISITING:</u></p>

<div id="viewajax"></div>

</fieldset>
</fieldset>
<button onclick="view()">View</button>
<p style="color: blue; text-align: right;"><a href="../View/Tlist.php">Back</a></p>


</body>
</html>
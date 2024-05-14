<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="design_addpropertylist.css">
<title>Add Property</title>
</head>
<body>



<form action="../controller/add_property.php" method="post" align="center">
<img src="../../logos/logo.png" alt="logo" align="center">
    <fieldset align= "Center">
        <legend><h3>ADD PROPERTY</h3></legend>
  <table border="1" cellspacing="0" cellpadding="5" align="center">
    
    <tr>
        <td>Property Name : </td>
      <td><input type="text" id="" name="property_name" required></td>
    </tr>
    <tr>
        <td>Property Type : </td>
      <td><input type="text" id="type" name="type" required></td>
    </tr>
    <tr>
        <td>Property Location : </td>
      <td><input type="text" id="location" name="location" required></td>
    </tr>
    
    <tr>
        <td>Property Size : </td>
      <td><input type="text" id="size" name="size" required></td>
    </tr>
     <tr>
        <td>Property Room :</td>
      <td> <input type="number" id="room" name="room" required></td>
    </tr>
    <td>Property Price : </td>
      <td><input type="number" id="price" name="price" required></td>
    </tr>
    <tr>
     
    </tr>
  </table>
  <br><br>
  <td><input type="submit" name="submit" value="submit"></td>
  </fieldset>
</form>

</body>
</html>

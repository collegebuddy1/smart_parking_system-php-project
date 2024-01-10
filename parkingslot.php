<?php include "header.php"?>
<div class="container">

<html>
<head>
  <h1>Select Your Parking Slot</h1>
</head>
<Body>
  <form action="" method="post">
    <button type="button" park="block1">   Parking slot 1 </button>            <button type="button" park="block2">   Parking slot 2 </button><br />
    <button type="button" park="block3">   Parking slot 3 </button>            <button type="button" park="block4">   Parking slot 4 </button><br />
    <button type="button" park="block5">   Parking slot 5 </button>            <button type="button" park="block6">   Parking slot 6 </button>


  </form>
</div>
<? php
$button=$_POST['block1','block2','block3','block4','block5','block6']
echo "$button";
</Body>
</html>
<?php include 'footer.php' ?>

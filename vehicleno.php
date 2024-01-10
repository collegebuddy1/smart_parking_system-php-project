<?php  include "header.php"; ?>
<div class="container">

  <form action='parkingslot.php' method='post'>
    Enter your Vehicle no:<input type='text' name='vehicle' ><br >
    <input type='submit'  >
  </form>
</div>
<?php
 $new=$_POST['vehicle'];
echo $new;
?>
<?php  include 'footer.php'; ?>

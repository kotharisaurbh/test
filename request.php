<?php
header('Content-type: text/xml');
?>
<Response>
    <Dial callerId="+15703619011"><?php  echo $_POST['To'];?></Dial>
</Response>
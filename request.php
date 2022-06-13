<?php
header('Content-type: text/xml');
?>
<Response>
    <Dial callerId="+18158531305"><?php  echo $_POST['To'];?></Dial>
</Response>

<?php
if(isset($_GET["action"]) and $_GET["action"]=="getText"){
	header('Content-Type:text/html;charset=GB2312');
	print "Study of wireless-based software systems in design and engineering, underlying networks, infrastructures and frameworks, wireless security, mobile user security & privacy (i.e. biometric security), emergent mobile programming platforms and technologies (such as RFID/Barcode/NFC), mobile commerce and service application systems. Prerequisite: CMPE 220 or CMPE 202 or instructor consent.";
	exit();
}
?>
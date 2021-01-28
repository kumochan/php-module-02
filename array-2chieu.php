<?php
$cars = array
(
	array("Máy tính","DELL","Thinkpad","HP","Macbook"),
	array("Ổ cứng","SamSung","IBM","Senagate","DELL"),
	array("Điện thoại","OPPo","iPhone","Samsung","Xiaomi")
);
for ($row = 0; $row < 3; $row++) {
	echo "<ul>";
	for ($col = 0; $col < 4; $col++) {
		echo "<li>".$cars[$row][$col]."</li>";
	}
	echo "</ul>";
}
?>
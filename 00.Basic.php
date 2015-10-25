<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>If</title>
</head>
<body>
<p>My PHP Test</p>
<hr />
<?php
$weekday = date('w');
if ($weekday == 0 or $weekday == 6) {
	echo "It is on the weekend.";
} else {
	echo "It is on a weekday";
}
?>
<table width="200" border="1">
  <tr>
    <td>#</td>
    <td>sales</td>
    <td>total</td>
  </tr>
<?php
$tot=0;
for ($i=0;$i<10;$i++) {
	echo "<tr><td>$i</td>";
	$x=rand(1000,3000);
	$tot += $x;
    echo "<td>$x</td>";
    echo "<td>$tot</td>";
 	echo "</tr>";
	}
?>
</table>
</body>
</html>

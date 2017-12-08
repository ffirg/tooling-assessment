<?php
parse_str($_SERVER["QUERY_STRING"]);
$redirect="results.php?name=" . htmlentities($customerName) . "&region=$region&rhEmail=$rhEmail&d1=$d1&o1=$o1&d2=$d2&o2=$o2&d3=$d3&o3=$o3&d4=$d4&o4=$o4&d5=$d5&o5=$o5&d6=$d6&o6=$o6&d7=$d7&o7=$o7&d8=$d8&o8=$o8&d9=$d9&o9=$o9&d10=$d10&o10=$o10&d11=$d11&o11=$o11&status=Completed";
print "<meta http-equiv='refresh' content='0; url=" . $redirect . "' />";
?>

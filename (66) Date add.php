<!DOCTYPE html>
<html>
<body>
<?php
$date = date_create("2025-02-21");
date_add($date, date_interval_create_from_date_string("40 days"));
echo date_format($date, "Y-m-d");
echo"<br>This Program is Written by Raghavv Gupta 0221BCA032"
?>
</body>
</html>

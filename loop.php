<?php
$page_name = "Loop";
$header = <<<EOD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$page_name</title>
</head>
<body>\n
EOD;
$footer = <<<EOD
</body>
</html>
EOD;

echo $header;

for ($i=1; $i <= 6; $i++) { 
    echo "  <h$i>$page_name $i</h$i>\n";
}

echo "<table>";
for ($i=1; $i <= 6; $i++) { 
    echo "  <tr><td>1</td><td>2</td></tr>\n";
}
echo "</table>\n";

echo $footer;
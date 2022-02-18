<?php
// Connecting, selecting database
$dbconn = pg_connect("host=ec2-18-215-8-186.compute-1.amazonaws.com dbname=deuvp2rhk0qqne user=etwobxbazzsyzv password=e533543352eb48ef8570e20e053dcc70ac4e4b26eac13c4c584ca8528c9feabe");

// Performing SQL query
$query = 'SELECT * FROM account';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

// Printing results in HTML
echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);
?>

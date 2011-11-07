#!/usr/bin/php
<?php

$db = mysql_connect('localhost', 'root', '');
mysql_set_charset('utf8', $db); 

$sql = "select id from devel.countries";

$res = mysql_query($sql);
if (!$res) {
  die('Invalid query: ' . mysql_error());
}

while ($row = mysql_fetch_array($res, MYSQL_ASSOC)) {
  $sql2 = "UPDATE devel.countries
    SET members = (
      SELECT COUNT(id)
      FROM devel.members
      WHERE country_id = 9
    )
    WHERE id = 9";
  $res2 = mysql_query($sql2);
    if (!$res2) {
        die('Invalid query: ' . mysql_error());
    }


}
mysql_close($db);

#!/usr/bin/php
<?php

$db = mysql_connect('localhost', 'root', '');
mysql_set_charset('utf8',$db); 

$sql = "select frommember
  from hc.comments
  where frommember
  group by frommember";

$res = mysql_query($sql);
if (!$res) {
  die('Invalid query: ' . mysql_error());
}

while ($row = mysql_fetch_array($res, MYSQL_ASSOC)) {
  // list of members with comments / relationships
  // echo $row['frommember'] . "\n";
  $sql2 = "select frommember, tomember
    from hc.comments
    where tomember = {$row['frommember']}
    group by frommember";
    // echo $sql2; exit;

  $res2 = mysql_query($sql2);
  while ($row2 = mysql_fetch_array($res2, MYSQL_ASSOC)) {
    // echo "{$row2['frommember']} -> {$row2['tomember']}\n";
    $sql3 = "select bit_or(trust) as trust,
      bit_or(myguest) as guest,
      bit_or(myhost) as host
      from hc.comments
      where tomember = {$row2['tomember']}
      and
      frommember = {$row2['frommember']}";
      
    // echo  "$sql3\n";
    $res3 = mysql_query($sql3);
    while ($row3 = mysql_fetch_array($res3, MYSQL_ASSOC)) {
      $sql4 = "insert into devel.relationships
        values('','{$row2['frommember']}','{$row2['tomember']}',0,{$row3['trust']},{$row3['guest']},{$row3['host']},'',now())";
       $res4 = mysql_query($sql4); 
       if (!$res4) {
          die('Invalid query: ' . mysql_error());
       }
    }
  }
}
mysql_close($db);

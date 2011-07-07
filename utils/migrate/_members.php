#!/usr/bin/php
<?php

$db = mysql_connect('localhost', 'root', '');

mysql_set_charset('utf8',$db); 

$sql = " 
SELECT city_volunteer, 
       city, 
       region_volunteer, 
       region, 
       zip, 
       country_volunteer, 
       country, 
       username, 
       gender, 
       bday, 
       bmonth, 
       byear, 
       homepage, 
       photo, 
       homephone, 
       workphone, 
       mobilephone, 
       fax, 
       occupation, 
       updates, 
       secstreet, 
       seccity, 
       secregion, 
       seczip, 
       seccountry, 
       secphone, 
       secinfo, 
       languages, 
       hobbies, 
       organizations, 
       travels, 
       plans, 
       aboutmyself, 
       accom, 
       offershow, 
       offerdinner, 
       offerother, 
       besttimes, 
       publictrans, 
       bigcities, 
       attractions, 
       withgbfriend, 
       withgrandpa, 
       withpar, 
       withsibs, 
       withop, 
       withalone, 
       garden, 
       spacefloor, 
       matress, 
       sofa, 
       bed, 
       ownroom, 
       sleepother, 
       bringtent, 
       bringmat, 
       bringsleep, 
       numberguest, 
       staylength, 
       notifyshould, 
       notifymust, 
       callarrival, 
       callbetween1, 
       callbetween2, 
       guestgender, 
       smoking, 
       nodrugs, 
       noalc, 
       payphone, 
       payfood, 
       dodishes, 
       restriother, 
       pets, 
       othcom, 
       feedback, 
       terms, 
       category, 
       created, 
       updated, 
       accepted, 
       flags, 
       LEVEL, 
       hcnotes, 
       name, 
       street, 
       email, 
       password, 
       secemail, 
       namehide, 
       streethide, 
       lastlogin, 
       ip, 
       vol_teaser, 
       vol_contact_info, 
       vol_why, 
       vol_what, 
       vol_additional, 
       emailerror, 
       lastaccess, 
       latitude, 
       chat_msn, 
       chat_icq, 
       chat_yahoo, 
       chat_skype, 
       chat_others, 
       longitude, 
       chat_aol, 
       nbhost, 
       nbguest, 
       nbcomment, 
       visincity, 
       visinlocation, 
       nbtrust, 
       idcity, 
       nbpspcheck, 
       lang_signup, 
       lang_last, 
       nbvisit, 
       nbvisittoday, 
       myvisitidlist, 
       toberemind, 
       attractions_updated, 
       nbofremindreceivedsincelastlog, 
       nbofemailreceivedsincelastlog 
FROM  hc.members"; 

$res = mysql_query($sql);
if (!$res) {
  die('Invalid query: ' . mysql_error());
}

while ($row = mysql_fetch_array($res, MYSQL_ASSOC)) {

  // build birthday string
  $birthday = $row['byear'] . '-' .$row['bmonth'] . '-' . $row['bday']; 

  // lowecase status
  $status = strtolower($row['accepted']);
  $level = $row['LEVEL'];
 
  // translate gender
  if ($row['gender'] == 0) {
    $smoking = 'not_specified';
  }
  else if ($row['gender'] == 1) {
    $smoking = 'male';
  }
  else if ($row['gender'] == 2) {
    $smoking = 'female';
  }

  // build smoking
  if ($row['smoking'] == 1) {
    $smoking = 'allowed';
  }
  else if ($row['smoking'] == 2) {
    $smoking = 'outside';
  }
  else if ($row['smoking'] == 3) {
    $smoking = 'disallowed';
  }


$sql =
"INSERT
INTO
devel.members
values
('',
'{$row['country']}',
'{$row['idcity']}',
'{$row['region']}',
'{$row['zip']}',
'{$row['gender']}',
'{$row['username']}',
{$row['accepted']},
'{$row['city_volunteer']}',
'{$row['region_volunteer']}',
'{$row['country_volunteer']}',
'{$birthday}',
'{$row['homepage']}',
'{$row['photo']}',
'{$row['homephone']}',
'{$row['workphone']}',
'{$row['mobilephone']}',
'{$row['fax']}',
'{$row['occupation']}',
'{$row['updates']}',
'{$row['secstreet']}',
'{$row['seccity']}',
'{$row['secregion']}',
'{$row['seczip']}',
'{$row['seccountry']}',
'{$row['secphone']}',
'{$row['secinfo']}',
'{$row['languages']}',
'{$row['hobbies']}',
'{$row['organizations']}',
'{$row['travels']}', 
'{$row['plans']}', 
'{$row['aboutmyself']}', 
'{$row['accom']}', 
{$row['offershow']}, 
{$row['offerdinner']}, 
'{$row['offerother']}', 
'{$row['besttimes']}', 
'{$row['publictrans']}', 
'{$row['bigcities']}', 
'{$row['attractions']}', 
{$row['withgbfriend']}, 
{$row['withgrandpa']},
{$row['withpar']},
{$row['withsibs']},
{$row['withop']},
{$row['withalone']},
{$row['garden']},
{$row['spacefloor']},
{$row['matress']},
{$row['sofa']},
{$row['bed']},
{$row['ownroom']},
'{$row['sleepother']}',
{$row['bringtent']},
{$row['bringmat']},
{$row['bringsleep']},
'{$row['numberguest']}',
'{$row['staylength']}',
'{$row['notifyshould']}',
'{$row['notifymust']}',
{$row['callarrival']},
'{$row['callbetween1']}',
'{$row['callbetween2']}',
'$guestgender',
'$smoking',
{$row['nodrugs']},
{$row['noalc']},
{$row['payphone']},
{$row['payfood']},
{$row['dodishes']},
'{$row['restriother']}',
'{$row['pets']}',
'{$row['othcom']}',
'{$row['feedback']}',
{$row['terms']},
'{$category}',
'{$row['status']}',
'{$row['flags']}',
'{$level}',
'{$row['hcnotes']}',
'{$row['name']}',
'{$row['street']}',
'{$row['email']}',
'{$row['password']}',
'{$row['secemail']}',
{$row['namehide']},
{$row['streethide']},
'{$row['lastlogin']}',
'{$row['ip']}',
'{$row['vol_teaser']}',
'{$row['vol_contact_info']}',
'{$row['vol_why']}',
'{$row['vol_what']}',
'{$row['vol_additional']}',
'{$row['emailerror']}',
'{$row['lastaccess']}',
'{$row['latitude']}',
'{$row['longitude']}',
'{$row['chat_msn']}',
'{$row['chat_icq']}',
'{$row['chat_yahoo']}',
'{$row['chat_skype']}',
'{$row['chat_others']}',
'{$row['chat_aol']}',
'{$row['nbhost']}',
'{$row['nbguest']}',
'{$row['nbcomment']}',
{$row['visincity']},
{$row['visinlocation']},
'{$row['nbtrust']}',
'{$row['idcity']}',
'{$row['nbpspcheck']}',
'{$row['lang_signup']}',
'{$row['lang_last']}',
'{$row['nbvisit']}',
'{$row['nbvisittoday']}',
'{$row['myvisitidlist']}',
'{$row['nbofremindreceivedsincelastlog']}',
'{$row['nbofemailreceivedsincelastlog']}',
'{$row['toberemind']}',
'{$row['attractions_updated']}',
now(),
now());\n";

$res = mysql_query($sql, $db);
if (!$res) {
      echo "FAIL\n";
}


}

mysql_close($db);



/*
hobbies 	 => 	 sustainable lifestyle, Hospitality Club, indigenous people, Capoeira, languages, AFS, rainforest, Salsa, Reggaeton, climbing trees, sitting and watching the world from high-above..........
organizations 	 => 	 AFS, WWF, NABU, ZERI, attac, Greenpeace
travels 	 => 	 Europe, Central America, Cuba, México, USA, Brasil, Indonesia, Malaysia, Singapore, China, transsiberian rail, Turkey, Morocco, Tunisia, DR Congo
plans 	 => 	 Indonesia, Thailand, Shanghai EXPO 2010?, Venezuela, Brazil, Bolivia, Japan, Arabian countries, Madagascar, .....????
aboutmyself 	 => 	 I\'ve just finished a first draft of a Local Volunteer Handbook. If you\'re a LV, please have a look and give me feedback!
http://www.slideshare.net/kjell79/hc-local-volunteer-handbook-draft-april-2010
accom 	 => 	 3
offershow 	 => 	 False
offerdinner 	 => 	 False
offerother 	 => 	 depends on what you need - just ask!
besttimes 	 => 	 in the morning, after 6 p.m. and on some weekends when I am in town
publictrans 	 => 	 Mexico City has everything.
bigcities 	 => 	 bigger?
attractions 	 => 	 
withgbfriend 	 => 	 False
withgrandpa 	 => 	 False
withpar 	 => 	 False
withsibs 	 => 	 False
withop 	 => 	 True
withalone 	 => 	 False
garden 	 => 	 False
spacefloor 	 => 	 False
matress 	 => 	 False
sofa 	 => 	 False
bed 	 => 	 False
ownroom 	 => 	 False
sleepother 	 => 	 
bringtent 	 => 	 False
bringmat 	 => 	 False
bringsleep 	 => 	 False
numberguest 	 => 	 0
staylength 	 => 	 
notifyshould 	 => 	 14
notifymust 	 => 	 2
callarrival 	 => 	 False
callbetween1 	 => 	 
callbetween2 	 => 	 
guestgender 	 => 	 3
smoking 	 => 	 2
nodrugs 	 => 	 False
noalc 	 => 	 False
payphone 	 => 	 False
payfood 	 => 	 False
dodishes 	 => 	 False
restriother 	 => 	 
pets 	 => 	 
othcom 	 => 	 I am working on Local Volunteer issues in HC. If you have any comments about particular Local Volunteers in HC, the job in general or would like to help as Local Volunteer, please get in touch!
feedback 	 => 	 
terms 	 => 	 False
category 	 => 	 0
created 	 => 	 2000-08-10 18:51:32
updated 	 => 	 2010-04-20 05:13:11
accepted 	 => 	 True
flags 	 => 	 
LEVEL 	 => 	 1
hcnotes 	 => 	 
name 	 => 	 Kjell Kühne
street 	 => 	 S3oRUm9rXWF5fiViNEBmK2QBb3RqfXUlPUdqYm9p
email 	 => 	 EmluZG4uFHRzYmplcktvZWJtFyNraQ==
password 	 => 	 aaHZ/r2qyHPyw
secemail 	 => 	 EmluZG43XxNUfWsiHW0=
namehide 	 => 	 False
streethide 	 => 	 True
lastlogin 	 => 	 2007-11-04 00:50:37
ip 	 => 	 213.16.171.53
vol_teaser 	 => 	 
vol_contact_info 	 => 	 
vol_why 	 => 	 
vol_what 	 => 	 
vol_additional 	 => 	 
emailerror 	 => 	 
lastaccess 	 => 	 2007-05-21 21:41:51
latitude 	 => 	 16.7273
chat_msn 	 => 	 
chat_icq 	 => 	 
chat_yahoo 	 => 	 
chat_skype 	 => 	 kjell79
chat_others 	 => 	 
longitude 	 => 	 -92.643
chat_aol 	 => 	 
nbhost 	 => 	 0
nbguest 	 => 	 0
nbcomment 	 => 	 132
visincity 	 => 	 False
visinlocation 	 => 	 True
nbtrust 	 => 	 0
idcity 	 => 	 7252
nbpspcheck 	 => 	 5
lang_signup 	 => 	 
lang_last 	 => 	 eng
nbvisit 	 => 	 5188
nbvisittoday 	 => 	 0
myvisitidlist 	 => 	 
toberemind 	 => 	 2007-03-29 23:59:32
attractions_updated 	 => 	 0000-00-00 00:00:00
nbofremindreceivedsincelastlog 	 => 	 0
nbofemailreceivedsincelastlog 	 => 	 0
 */

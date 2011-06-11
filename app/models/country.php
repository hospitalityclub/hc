<?
class Country extends AppModel {
  var $table = 'countries';
  var $hasMany = 'Region';
  // var $primaryKey = 'ID';
}
?>

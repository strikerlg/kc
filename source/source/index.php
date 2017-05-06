<?php 
require_once(dirname(__FILE__) . '/conf/config.php');

$dal = new DAL();

$makes = array('Ford','Chevy','Honda');

foreach ($makes as $make){
  $results = $dal->get_models_by_make_name($make);
  echo "<h1>Models by $make</h1>";
  if ($results){
  	echo "<ul>";
  	foreach ($results as $result){
  		echo "<li>$result->make $result->name (Database ID: $result->id)</li>";
  	}
  	echo "</ul>";
  }
  else{
  	echo "<p>Sorry, we have no information regarding that manufacturer.</p>";
  }
}
?>
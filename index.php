<?
include "vendor/autoload.php";

use Twitter\Search\Search;

$search = new Search();
$search->setToken("Consumer KeyXXX","Consumer Secret");
$value = ["q" => "restconf"];
echo "<pre>";
print_r($search->search($value));
echo "</pre>";
?>


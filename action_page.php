
<?php 
require 'db.php';
$keyword = $_POST["keyword"];
 echo $keyword. "<br>";
insert_keyword($keyword);
echo "지금까지 입력된 검색어<br>";
select_keyword();
?>
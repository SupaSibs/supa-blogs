<?php 
class MyDB extends SQLite3 {
      function __construct() {
         $this->open('./db/posts.db');
      }
   }
   $db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "Opened successfully\n";
   }
$code = $_POST["code"];
$sql =<<<EOF
INSERT INTO CODE (CODE)
    VALUES ({$code})
EOF;

   $ret = $db->exec($sql);
   if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      echo "Records created successfully\n";
   }
   $db->close();
?>

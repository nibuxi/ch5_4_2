<?php
spl_autoload_register(
  function($typeName){
      $file = realpath(__DIR__).'/'.$typeName.'.class.php';
      if(!file_exists($file)) {
          $file = realpath(__DIR__).'/'.$typeName.'.interface.php';
      }
      if(file_exists($file)){
          require_once($file);
          if(class_exists($typeName,false)){
              return true;
          }
          return false;
      }
      return false;
  });
function test1(ifly $animal){
    if($animal instanceof ifly)
        $animal->fly();
}
function test2(idive $animal){
    if($animal instanceof idive)
        $animal->dive();
}
header("Content-Type:text/html;charset=utf-8");
$eagle=new Eagle();test1($eagle);
$duck=new Duck();
test2($duck);
?>
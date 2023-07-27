<?php
use AramHamo\MvcCore\Migration;
use AramHamo\MvcCore\Schema;
$GLOBALS['tableName'] = "repos";
$table = new class {
  static function up(){
    $s = new Schema;
    $m = new Migration;
    $m->id();
    $m->text("name")->unique("name");
    $m->text("description");

    $s->create($GLOBALS['tableName'],$m->table,$m->options);
  }
  static function down(){
    $s = new Schema;
    $s->dropIfExists($GLOBALS['tableName']);
  }
};

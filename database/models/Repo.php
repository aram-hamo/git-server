<?php declare(strict_types=1);
namespace AramHamo\Mvc\Models;
use AramHamo\MvcCore\Model;

class Repo extends Model{
  public String $_tableName = "repos";
  public String $name;
  public String $description;
}

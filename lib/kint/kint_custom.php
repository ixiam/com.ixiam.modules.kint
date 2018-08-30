<?php

// Call d() and die()
function dd($v){
  d($v);
  die();
}

// Call s() and die()
function sd($v){
  s($v);
  die();
}

// Call d() and return value
function dr($v)
{
  d($v);
  return $v;
}

// Call s() and return value
function sr($v)
{
  s($v);
  return $v;
}

// Call prin with sql format
function q($v)
{
  require_once(__DIR__.'/../sql-formatter/SqlFormatter.php');
  echo SqlFormatter::format($v);
}

// Call prin with sql format
function qd($v)
{
  require_once(__DIR__.'/../sql-formatter/SqlFormatter.php');
  echo SqlFormatter::format($v);
  die();
}

Kint::$aliases[] = 'dd';
Kint::$aliases[] = 'sd';
Kint::$aliases[] = 'dr';
Kint::$aliases[] = 'sr';
Kint::$aliases[] = 'q';
Kint::$aliases[] = 'qd';

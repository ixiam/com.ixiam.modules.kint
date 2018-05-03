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

Kint::$aliases[] = 'dd';
Kint::$aliases[] = 'sd';
Kint::$aliases[] = 'dr';
Kint::$aliases[] = 'sr';

<?php
function isEmpty($arr){
  foreach ($arr as $value) {
    if($value === "") {
     return true;
    }
  }
  return false;
}
<?php

class Functions
{
  public function strrev_enc($str)
  {
    $str = iconv('utf-8', 'windows-1251', $str);
    $str = strrev($str);
    $str = iconv('windows-1251', 'utf-8', $str);
    
    return $str;
  }

  public function sentence_case($string) {
    $sentences = preg_split('/([.?!]+)/', $string, -1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_DELIM_CAPTURE); 
    $new_string = ''; 
    foreach ($sentences as $key => $sentence) { 
        $new_string .= ($key & 1) == 0? 
            mb_ucfirst(strtolower(trim($sentence))) : 
            $sentence.' '; 
    } 

    return trim($new_string); 
  } 
}
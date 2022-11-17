<?php

class Main {

  public function revertCharacters($string)
  {
      $str = mb_strtolower($string);

      $words =  preg_split('/(\?|\.|!|\s)/', $str,NULL,PREG_SPLIT_DELIM_CAPTURE);

      $words = array_map('Functions::strrev_enc', $words);

      $result = implode('', $words);

      function mb_ucfirst($str, $charset = ''){
          if($charset == '') $charset = mb_internal_encoding();
          $letter = mb_strtoupper(mb_substr($str, 0, 1, $charset), $charset);
          $suffix = mb_substr($str, 1, mb_strlen($str, $charset) - 1, $charset);
          return $letter.$suffix;
      }

      $str = Functions::sentence_case($result);

      return $str;
  }
}
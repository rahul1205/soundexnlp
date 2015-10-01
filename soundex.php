<?php
class Soundex{

public static function code(&$string){

$array=str_split($string);
$firstletter=$array[0];

for($i=0;$i<strlen($string);$i++){

  switch($array[$i]){

    case'a':
    case'e':
    case'i':
    case'o':
    case'u':
    case'y':
    case'h':
    case'w':{$array[$i]='0'; break;}

    case'b':
    case'f':
    case'p':
    case'v':{$array[$i]='1'; break;}

    case'c':
    case'g':
    case'j':
    case'k':
    case'q':
    case's':
    case'x':
    case'z':{$array[$i]='2'; break;}

    case'd':
    case't':{$array[$i]='3'; break;}

    case'l':{$array[$i]='4'; break;}

    case'm':
    case'n':{$array[$i]='5'; break;}

    case'r':{$array[$i]='6'; break;}

  }

}

$newstring=$firstletter."";
for($i=1;$i<strlen($string);$i++){

  $newstring .= $array[$i];
}

  return ($newstring);


}

}                                                                                 //end of class

$str1='abcdef';                                                                   //change string here
$str1array=str_split($str1);
$str2='abcdgh';                                                                   //change srings here
$str2array=str_split($str2);

$object=new Soundex();
$result1=$object->code($str1);
$result2=$object->code($str2);
print_r('<br>'.$result1);
print_r('<br>'.$result2);

$stringmatch=similar_text($str1,$str2,$percent1);                                 //generates number of equal bits in string
$codematch=similar_text($result1,$result2,$percent2);                             //generates number of equal bits in code

if($percent2==100)                                                                //string matching begins
{echo '<br>strings matched';}

elseif((strlen($str1)==strlen($str2)) && ($stringmatch==strlen($str1) || $stringmatch==(strlen($str1)-1) || $stringmatch==(strlen($str1)-2)))
{echo '<br>strings maybe matching';}

else
{echo '<br>strings not matching';}





?>


<?php

header( 'Content-Type: text/html; charset=utf-8' );
include 'global.php';
$hindi='नुपूर';
print_r(mb_strlen($hindi,'UTF-8'));
print_r(str_split_unicode($hindi,1));

class Soundex{

public static function code(&$string){
$array=str_split_unicode($string,1);
$firstletter=$array[0];


for($i=0;$i<mb_strlen($string,'UTF-8');$i++){
  switch($array[$i]){

                  case 'ं':
    	            case 'ः':
    	            case 'ऄ':
    	            case 'ऍ':
    	            case '़':
    	            case 'ऽ':
    	            case '्':
    	            case 'ॎ':
    	            case 'ॏ':
    	            case 'ॐ':
    	            case '॑':
    	            case '॒':
    	            case '॓':
    	            case '॔':
    	            case 'ॕ':
    	            case 'ॖ':
    	            case 'क़':
    	            case 'ख़':
    	            case 'ग़':
    	            case 'ज़':
    	            case 'ड़':
    	            case 'ढ़':
    	            case 'फ़':
    	            case 'य़':
    	            case '।':
    	            case '॥':
    	            case '॰':
    	            case 'ॱ':
    	            case 'ॲ':
    	            case 'ॳ':
    	            case 'ॴ':
    	            case 'ॵ':
    	            case 'ॶ':
    	            case 'ॷ':
    	            case 'ॸ':
    	            case 'ॹ':{ $array[$i] = '0'; break; }


    	            case 'अ':
    	            case 'आ':
    	            case 'ा':{ $array[$i] = 'A'; break; }


    	            case 'इ':
    	            case 'ई':
    	            case 'ि':
    	            case 'ी':{ $array[$i] = 'B'; break; }


    	            case 'उ':
    	            case 'ऊ':
    	            case 'ु':
    	            case 'ू':{ $array[$i] = 'C'; break; }


    	            case 'ऎ':
    	            case 'ए':
    	            case 'ऐ':
    	            case 'ॆ':
    	            case 'े':
    	            case 'ै':
    	            case 'ॉ':{ $array[$i] = 'D'; break; }


    	            case 'ऑ':
    	            case 'ऒ':
    	            case 'ओ':
    	            case 'औ':
    	            case 'ॊ':
    	            case 'ो':
    	            case 'ौ':
    	            case 'ॅ':
    	            case 'ॗ':{ $array[$i] = 'E'; break; }


    	            case 'क':
    	            case 'ख':
    	            case 'ग':
    	            case 'घ':{ $array[$i] = 'F'; break; }


    	            case 'ङ':
    	            case 'ञ':{ $array[$i] = 'G'; break; }


    	            case 'च':
    	            case 'छ':
    	            case 'ज':
    	            case 'झ':{ $array[$i] = 'H'; break; }


    	            case 'ट':
    	            case 'ठ':
    	            case 'ड':
    	            case 'ढ':{ $array[$i] = 'I'; break; }


    	            case 'ण':
    	            case 'ॺ':
    	            case 'ॻ':{ $array[$i] = 'J'; break; }


    	            case 'त':
    	            case 'थ':
    	            case 'द':
    	            case 'ध':{ $array[$i] = 'K'; break; }


    	            case 'ऩ':{ $array[$i] = 'L'; break; }


    	            case 'फ':
    	            case 'ब':
    	            case 'प':
    	            case 'भ':{ $array[$i] = 'M'; break; }


    	            case 'म':{ $array[$i] = 'N'; break; }


    	            case 'य':{ $array[$i] = 'O'; break; }


    	            case 'ऱ':
    	            case 'ृ':
    	            case 'ॠ':
    	            case 'ॽ':
    	            case 'ॾ':
    	            case 'ऋ':
    	            case 'र':
    	            case 'ॄ':{ $array[$i] = 'P'; break; }


    	            case 'ल':
    	            case 'ळ':
    	            case 'ऴ':
    	            case 'ॡ':
    	            case 'ॢ':
    	            case 'ॼ':
    	            case 'ऌ':
    	            case 'ॣ':{ $array[$i] = 'Q'; break; }


    	            case 'व':{ $array[$i] = 'R'; break; }


    	            case 'श':
    	            case 'ष':
    	            case 'स':{ $array[$i] = 'S'; break; }


    	            case 'ह':{ $array[$i] = 'T'; break; }


    	            case '0':{ $array[$i] = '0'; break; }
    	            case '1':{ $array[$i] = '1'; break; }
    	            case '2':{ $array[$i] = '2'; break; }
    	            case '3':{ $array[$i] = '3'; break; }
    	            case '4':{ $array[$i] = '4'; break; }
    	            case '5':{ $array[$i] = '5'; break; }
    	            case '6':{ $array[$i] = '6'; break; }
    	            case '7':{ $array[$i] = '7'; break; }
    	            case '8':{ $array[$i] = '8'; break; }
    	            case '9':{ $array[$i] = '9'; break; }
  }
}


$newstring = $firstletter ."";


for($i=1;$i<mb_strlen($string,'UTF-8');$i++){
  $newstring .= $array[$i];
}


  return ($newstring);

}

}                                                                                 //end of class


$str1='नुपुर';                                                                      //change string here
$str1array=str_split_unicode($str1,1);
$str2='नुपूर';                                                                      //change srings here
$str2array=str_split_unicode($str2,1);

$object=new Soundex();
$result1=$object->code($str1);
$result2=$object->code($str2);

print_r('<br>'.$result1);
print_r('<br>'.$result2);


$stringmatch=similar_text($str1,$str2,$percent1);                                 //generates number of equal bits in string
$codematch=similar_text($result1,$result2,$percent2);                             //generates number of equal bits in code


if($percent2==100)                                                                //string matching begins
{echo '<br>strings matched';}
elseif((mb_strlen($str1,'UTF-8')==mb_strlen($str2,'UTF-8')) && ($stringmatch==strlen($str1) || $stringmatch==(strlen($str1)-1) || $stringmatch==(strlen($str1)-2)))
{echo '<br>strings maybe matching';}
else
{echo '<br>strings not matching';}
?>

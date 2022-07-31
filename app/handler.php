<?php
function printAlphabetA(){ 
    
    echo "<pre>";
    for ($row = 0; $row <= 10; $row++) {
        for ($column = 0; $column <= 10; $column++) {
            if ((($column == 1 or $column == 10) and $row != 0) or (($row == 0 or $row == 5) and ($column > 1 and $column < 10))) {
                echo "*";
            } else {
                echo "&nbsp;";
            }
        }
        echo "<br>";
    }
    echo "</pre>";
}

function getRepresentationArray(){
    $arra = array("uglify-js"=> "1.3.4", "jshint"=> "0.9.1", "recess"=> "1.1.8" ,"connect"=> "2.1.3", "hogan.js"=>"2.0.0"); 
    $myarray = array('red', 'green', 'white');
    var_dump(json_encode($arra));
    echo "<br>";
    var_dump(json_encode($myarray));
}

function missingNumber($list){
        $new_array = range(min($list), max($list));
        return array_diff($new_array, $list);
}

function three_Sum_zero($arr)
{
$count = count($arr) - 2;
$result=[];
for ($x = 0; $x < $count; $x++) 
{
    if ($arr[$x] + $arr[$x+1] + $arr[$x+2] == 0)
    {
        array_push($result, "{$arr[$x]} + {$arr[$x+1]} + {$arr[$x+2]} = 0");
    }
}
return $result;
}

function my_sqrt($n){
    $num = sqrt($n);
    // $num = $n**(1/2);
    return $num;
}
//7.
function single_number($arr)
{
  $result = 0;
  
       for($i=0; $i<sizeof($arr); $i++)
       {
          $result =  $result ^ $arr[$i];   
       }
    return $result;
}


//10. 
function add_digits($num){
      if ( $num > 0)
      {
      return ($num - 1) % 9 + 1;
      }
      else
      {
          return 0;
      }
}





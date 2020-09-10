<?php
    function CountDuplicateNumber($numArray){
        $countArray =[];

        foreach ($numArray as $value ){
            if (isset($countArray[$value])){
                $countArray[$value]++;
            }else {
                $countArray[$value] = 1;
            }
        }

        return $countArray;
    }
    function ReadTxtFile($file){
      $temp= preg_replace('/[^0-9]/',',', file_get_contents('input.txt'));
      return  CountDuplicateNumber(explode(',',$temp));
    }
    $data=  ReadTxtFile('input.txt');
    echo "so lap lai tren 3 lan : ";
    foreach ($data as $key => $value){
        if ($value >=3 && $key != ''){
            echo $key." ";
        }
    }
    echo "\n";
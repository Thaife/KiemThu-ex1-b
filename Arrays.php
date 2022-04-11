<?php

class Arrays {
    private $arrayA = array("dog","cat","rat","fox","frog", "dinosaur","cow","bull");
    private $arrayB= array("dog", "dog", "cat","dog","frog","rat","turtle","fox","fox","man","man","frog","man");
            
    function compare()
    {
        for ($indexA =0; $indexA<count($this->arrayA);$indexA++){
            $counter = 0;
            for($indexB=0; $indexB<count($this->arrayB);$indexB++){
                if($this->arrayA[$indexA] == $this->arrayB[$indexB]){
                    $counter++;
                }
            }// end for
            if($counter > 0){
                echo($this->arrayA[$indexA]."  ".$counter."<br>");
            }

        }// end for
    }//end compare()
}

$a = new Arrays();
$a->compare();


        
    

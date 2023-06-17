<?php

/** Given an array of intergers, return the indices of the two numbers that add up to a given target */

class ProblemSolved01
{
  public function index(){
    $result = $this->twoSum([1,3,5,7,9,2],11);
    print_r($result);
  }

  /**
   * @param Integer[] $nums
   * @param Integer $target
   * @return Integer[]
   */
  public function twoSum(array $nums, int $target){
    $data = [];
    for($p=0;$p<count($nums);$p++){
        if(isset($data[$nums[$p]])){
            return [$data[$nums[$p]],$p];
        }
        else{
            $numberToFind = $target-$nums[$p];
            $data[$numberToFind] = $p;
        }
    }
    return null;
  }

}

$problemSolved01 = new ProblemSolved01();
$problemSolved01->index();
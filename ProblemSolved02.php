<?php

/**
 * You are given an integer array height of length n.
 * There are n vertical lines drawn such that the two endpoints of the ith line are (i, 0) and (i, height[i]).
 * Find two lines that together with the x-axis form a container, such that the container contains the most water.
 * Return the maximum amount of water a container can store. 
 **/

class ProblemSolved02
{
  public function index(){
    $result = $this->maxArea([2,3,4,5,18,17,6]);
    echo $result;
  }

  /**
   * @param Integer[] $height
   * @return Integer $maxArea
   */
  public function maxArea(array $height = null){
    $maxArea = 0;
    $p1 = 0;
    $p2 = count($height)-1;
    while ($p1 < $p2) {
      $width   = min($height[$p1],$height[$p2]);
      $lheight  = $p2-$p1;
      $area    = $width*$lheight;
      $maxArea = max($maxArea,$area);
      if($height[$p1] <= $height[$p2]){
        $p1++;
      }
      else{
        $p2--;
      }
    }
    return $maxArea;
  }

}

$problemSolved02 = new ProblemSolved02();
$problemSolved02->index();
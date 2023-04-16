<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $shape=$_POST["shape"];
  switch($shape){
    case "triangle":
      $width=$_POST["width"];
      $height=$_POST["height"];
      $area=$width*$height/2;
      echo "삼각형의 면적은 ".$area."입니다.";
      break;
    case "rectangle":
      $width=$_POST["width"];
      $height=$_POST["height"];
      $area=$width*$height;
      echo "직사각형의 면적은 ".$area."입니다.";
      break;
    case "circle":
      $radius=$_POST["radius"];
      $area=pi()*$radius*$radius;
      echo "원의 면적은 ".$area."입니다.";
      break;
    case "cuboid":
      $width=$_POST["width"];
      $length=$_POST["length"];
      $height=$_POST["height"];
      $volume=$width*$length*$height;
      echo "직육면체의 체적은 ".$volume."입니다.";
      break;
    case "cylinder":
      $radius=$_POST["radius"];
      $height=$_POST["height"];
      $volume=pi()*$radius*$radius*$height;
      echo "원통의 체적은 ".$volume."입니다.";
      break;
    case "sphere":
      $radius=$_POST["radius"];
      $volume=4/3*pi()*$radius*$radius*$radius;
      echo "구의 체적은 ".$volume."입니다.";
      break;
    default:
      echo "잘못된 입력입니다.";
  }
}
?>
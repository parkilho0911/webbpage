<!DOCTYPE HTML>
<html>
<body>

<h2>도형 면적/체적 계산기</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="shape">도형을 선택하세요:</label>
  <select id="shape" name="shape">
    <option value="triangle">삼각형</option>
    <option value="rectangle">직사각형</option>
    <option value="circle">원</option>
    <option value="cuboid">직육면체</option>
    <option value="cylinder">원통</option>
    <option value="sphere">구</option>
  </select><br>

  <div id="triangle">
    <label for="width">밑변:</label>
    <input type="number" id="width" name="width"><br>
    <label for="height">높이:</label>
    <input type="number" id="height" name="height"><br>
  </div>

  <div id="rectangle">
    <label for="width">가로:</label>
    <input type="number" id="width" name="width"><br>
    <label for="height">세로:</label>
    <input type="number" id="height" name="height"><br>
  </div>

  <div id="circle">
    <label for="radius">반지름:</label>
    <input type="number" id="radius" name="radius"><br>
  </div>

  <div id="cuboid">
    <label for="width">가로:</label>
    <input type="number" id="width" name="width"><br>
    <label for="length">세로:</label>
    <input type="number" id="length" name="length"><br>
    <label for="height">높이:</label>
    <input type="number" id="height" name="height"><br>
  </div>

  <div id="cylinder">
    <label for="radius">반지름:</label>
    <input type="number" id="radius" name="radius"><br>
    <label for="height">높이:</label>
    <input type="number" id="height" name="height"><br>
  </div>

  <div id="sphere">
    <label for="radius">반지름:</label>
    <input type="number" id="radius" name="radius"><br>
  </div>

  <input type="submit" value="계산">
</form>

</body>
</html>
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
<?php
    $btnsubmit = $_POST['btnsubmit'];

    if(isset($btnsubmit)){
        $fnum = $_POST['fnum'];
        $snum = $_POST['snum'];
        $operator = $_POST['operator'];

        if($operator == "add"){
          $add = $fnum + $snum;
          $answer = $fnum . " + " . $snum . " = " . $add;
        }elseif($operator == "subtract"){
          $subtract = $fnum - $snum;
          $answer = $fnum . " - " . $snum . " = " . $subtract;
        }elseif($operator == "multiply"){
          $multiply = $fnum * $snum;
          $answer = $fnum . " x " . $snum . " = " . $multiply;
        }elseif($operator == "divide"){
          $divide = $fnum / $snum;
          $answer = $fnum . " / " . $snum . " = " . $divide;
        }else{
          $answer = "You have not chosen an operator!";
        }
    }
?>
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <form method="POST" action="index.php">
      <input type="text" name="fnum" placeholder="First Number"/>
      <select name="operator">
        <option value="none">Select operator</option>
        <option value="add">Addition</option>
        <option value="subtract">Subtract</option>
        <option value="multiply">Multiply</option>
        <option value="division">Division</option>
      </select>
      <input type="text" name="snum" placeholder="Second Number"/>
      <input type="submit" name="btnsubmit" value="Calculate"/>
    </form>
  </body>
</html>

<?php
  if(isset($answer)){
    echo $answer;  
  }
?>

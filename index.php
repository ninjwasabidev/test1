<?php

if(isset($_POST['submit1'])) {
    $countErr=$faceErr="";
    $count =$_POST['dice_number'];
    $face=$_POST['dice_face'];
    if ($face<1){
        $faceErr ="Please fill number greather than zero";
    }
    if($count<1){
        $countErr ="Please fill number greather than zero";
    }
    $point=0;
    $d_face="";
    $dice_face ="";
    for($i=0 ;$i<$count ;$i++){
        $d_face[$i]=rand(1,$face);
        $point = $point+$d_face[$i];
      
    }

    // echo "$d_face";
    // echo "<br>";
    // echo "<br>";
    // echo "$point";
    // echo "<br>";
    // echo "<br>";

    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color: #FF0000;
        }
    </style>
</head>
<body>
    <h2>Dice Roll</h2>
    <form action="" method="post">
        <label for="">Please select the sides of the dice</label>
        <input type="number" name="dice_face">
        <span class="error">*<?php echo $faceErr;?></span>
        <br><br>
        <label for="" >Please fill the number of dice </label>
        <input type="number" name="dice_number">
        <span class="error">*<?php echo $countErr;?></span>
        <br><br>
        <button type="submit" value="submit1" name="submit1">Roll the dice</button>
        <br><br>
        
        <label for="">Summation of dice point is <?php if(isset($_POST['submit1'])) {echo "$point";} ?></label>
        <br><br>
        <label>The face of the dice is 
            <br>
            <?php
            if(isset($_POST['submit1'])){
                for($i=0 ;$i<$count ;$i++){
                    echo "d{$d_face[$i]}";
                    echo ",";
                }
            }
            ?>
        </label>
    </form>
</body>
</html>
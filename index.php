<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP02</title>
</head>
<body>
    <?php
    $score = 49;
    echo "<H1>1.จงเขียนโปรแกรมด้วย php ที่รับคะแนนของนักเรียนที่กำหนดตัวเลขคงที่ แล้วคำนวณเกรดของนักเรียนตามเกณฑ์ดังนี้:</H1>
    ";
    echo "<br>ผลลัพธ์:";

    if ($score>=80) {//score>=80เป็นเท็จ
       echo "grade A";
      } elseif ($score>=70){//score>=70เป็นเท็จ
        
        echo "grade B";
        
      }elseif ($score >=60) {//score>=60เป็นเท็จ
        # code...
        echo "grade C";
      }elseif ($score >=50) {//score>=50เป็นเท็จ
        # code...
        echo " grade D";
      }
       else {
        echo "grade F";
      }
    echo "<br><H1>2.ประยุกต์จากโจทย์ข้อ 1 โดยเปลี่ยนจากนักเรียนเป็น หอพักระดับ 1 ถึง 5 ดาว 
    (ใช้สัญลักษณ์ black star)</H1>";
    echo "<br>ผลลัพธ์:";
    $price = 500;

    if ($price>=15000) {//500>=15000เป็นเท็จ
       
        echo " ☆ ☆ ☆ ☆ ☆";
    }elseif ($price>=10000) {//500>=10000เป็นเท็จ
        
        echo " ☆ ☆ ☆ ☆";
    }
    elseif ($price>=5000) {//500>=5000 เป็นเท็จ
        
        echo " ☆ ☆ ☆";
    }   
    elseif ($price>=3000) {//500>=3000เป็นเท็จ
      
        echo " ☆ ☆";
        
    } 
    else {
        
        echo "☆";
    }
    
    ?>




</body>
</html>
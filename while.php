<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>งานที่1 ปัญญากร รัตนมณี BIT.2/5 เลขที่12</h1>
    
    <a href="index.php">For Loop</a>

    <form action="">
        <label for="">เลขแม่สูตรคูณ</label> <br>
        <input type="number" name="num" id="">

        <input type="submit" value="คำนวณ">
    </form>

    <?php
    $i = 1;
    while ($i <= 3) {
    echo $i;
    $i++;
    }
    echo "<br>";

    $i = 5;
    while ($i >=1){
    echo $i;
    $i--;
    }
    echo "<br>";

    $data = ["A","B","C"];
    $i = 0;
    while ($i < count($data)) {
    echo $data[$i];
    $i++;
    }
    ?>

    

</body>
</html>



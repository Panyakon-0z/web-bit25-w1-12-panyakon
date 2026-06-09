<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>งานที่1 ปัญญากร รัตนมณี BIT.2/5 เลขที่12</h1>
    
    <a href="index.php">Index</a>

    <form action="">
        <label for="">เลขแม่สูตรคูณ</label> <br>
        <input type="number" name="num" id="">

        <input type="submit" value="คำนวณ">
    </form>

    <?php
    for ($i = 1; $i <= 3; $i++) {
        echo $i;
    }
    echo "<br>";

    for ($i = 5; $i >= 1; $i--) {
        echo $i;
    }
    echo "<br>";

    for ($i = 0; $i <= 10; $i += 2) {
        echo $i;
    }
    
    ?>

</body>
</html>



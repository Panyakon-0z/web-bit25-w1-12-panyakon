<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>งานที่ 1 - สูตรคูณ (ปัญญากร)</title>
    <style>
        body {background-color: #f0f2f5;padding: 40px 20px;display: flex;justify-content: center;align-items: center;min-height: 100vh;box-sizing: border-box;}
        .container {background-color: #ffffff;border-radius: 12px;box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);padding: 30px;width: 100%;max-width: 500px;border: 1px solid #e1e8ed;}
        h1 {font-size: 1.25rem;color: #2c3e50;background-color: #eef2f7;padding: 15px;border-radius: 8px;text-align: center;margin-bottom: 20px;}
        .nav-link {display: inline-block;margin-bottom: 20px;color: #007bff;text-decoration: none;font-weight: 600;transition: color 0.2s;}
        .nav-link:hover {color: #0056b3;text-decoration: underline;}
        form {background-color: #f8f9fa;padding: 20px;border-radius: 8px;border: 1px solid #dee2e6;margin-bottom: 20px;}
        label {font-weight: 600;color: #495057;display: block;margin-bottom: 8px;}
        input[type="number"] {width: 100%;padding: 10px 12px;border: 1px solid #ced4da;border-radius: 6px;margin-bottom: 15px;box-sizing: border-box;font-size: 1rem;transition: border-color 0.2s, box-shadow 0.2s;}
        input[type="number"]:focus {border-color: #80bdff;outline: 0;box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);}
        input[type="submit"] {width: 100%;background-color: #007bff;color: white;border: none;padding: 12px;border-radius: 6px;font-size: 1rem;font-weight: 600;cursor: pointer;transition: background-color 0.2s;}
        input[type="submit"]:hover {background-color: #0056b3;}
        .result-box {background-color: #f1f8ff;border: 1px dashed #b4d5ff;border-radius: 8px;padding: 20px;font-family: 'Courier New', Courier, monospace;font-size: 1.2rem;line-height: 1.8;color: #004085;text-align: center;}
        .result-title {font-family: sans-serif;font-size: 1.2rem;color: #0056b3;margin-bottom: 15px;font-weight: bold;border-bottom: 2px solid #b4d5ff;padding-bottom: 8px;}
    </style>
</head>
<body>

    <div class="container">
        
        <h1>งานที่ 1 ปัญญากร รัตนมณี BIT.2/5 เลขที่ 12</h1>
        
        <a href="index.php" class="nav-link">← ไปที่ For Loop</a>

        <form action="" method="GET">
            <label for="num">เลขแม่สูตรคูณ</label>
            <input type="number" name="num" id="num" placeholder="กรอกแม่สูตรคูณที่ต้องการ..." required>
            <input type="submit" value="คำนวณ">
        </form>

        <?php
        
            if (isset($_GET["num"]) && $_GET["num"] !== "") {
                $num = $_GET["num"];
                
                echo '<div class="result-box">';
                echo '<div class="result-title">สูตรคูณแม่ ' . htmlspecialchars($num) . '</div>';

                $i = 1;
                while ($i <= 12) {
                    echo $num . " x " . $i . " = " . ($num * $i) . "<br>";
                    $i++;
                }

                echo '</div>';
            }
        
        ?>

    </div>

</body>
</html>
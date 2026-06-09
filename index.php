<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>งานที่ 1 - สูตรคูณ (ปัญญากร)</title>
    <style>
        /* ตั้งค่าพื้นหลังและฟอนต์โดยรวม */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            color: #333;
            margin: 0;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            box-sizing: border-box;
        }

        /* กล่องข้อความหลัก (Card) */
        .container {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            padding: 30px;
            width: 100%;
            max-width: 500px;
            border: 1px solid #e1e8ed;
        }

        /* ส่วนหัวข้อชื่อ-นามสกุล */
        h1 {
            font-size: 1.25rem;
            color: #2c3e50;
            background-color: #eef2f7;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            margin-top: 0;
            margin-bottom: 20px;
            border-left: 5px solid #007bff;
        }

        /* ลิงก์เมนู */
        .nav-link {
            display: inline-block;
            margin-bottom: 20px;
            color: #007bff;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.2s;
        }
        .nav-link:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        /* การจัดฟอร์ม */
        form {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #dee2e6;
            margin-bottom: 20px;
        }

        label {
            font-weight: 600;
            color: #495057;
            display: block;
            margin-bottom: 8px;
        }

        /* ช่องกรอกตัวเลข */
        input[type="number"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ced4da;
            border-radius: 6px;
            margin-bottom: 15px;
            box-sizing: border-box;
            font-size: 1rem;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        input[type="number"]:focus {
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        /* ปุ่มคำนวณ */
        input[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* กล่องแสดงผลลัพธ์แม่สูตรคูณ */
        .result-box {
            background-color: #f1f8ff;
            border: 1px dashed #b4d5ff;
            border-radius: 8px;
            padding: 20px;
            font-family: 'Courier New', Courier, monospace;
            font-size: 1.2rem;
            line-height: 1.8;
            color: #004085;
            text-align: center; /* จัดให้สูตรคูณอยู่ตรงกลางสวยๆ */
        }
        .result-title {
            font-family: sans-serif;
            font-size: 1.2rem;
            color: #0056b3;
            margin-bottom: 15px;
            font-weight: bold;
            border-bottom: 2px solid #b4d5ff;
            padding-bottom: 8px;
        }
    </style>
</head>
<body>

    <div class="container">
        
        <h1>งานที่ 1 ปัญญากร รัตนมณี BIT.2/5 เลขที่ 12</h1>
        
        <a href="for.php" class="nav-link">← ไปที่ While Loop</a>

        <form action="" method="GET">
            <label for="num">เลขแม่สูตรคูณ</label>
            <input type="number" name="num" id="num" placeholder="กรอกแม่สูตรคูณที่ต้องการ..." required>
            <input type="submit" value="คำนวณ">
        </form>

        <?php
            // ตรวจสอบว่ามีการส่งค่า num มาและค่าต้องไม่ว่างเปล่า
            if (isset($_GET["num"]) && $_GET["num"] !== "") {
                $num = $_GET["num"];
                
                // เปิดกล่องดีไซน์ผลลัพธ์
                echo '<div class="result-box">';
                echo '<div class="result-title">สูตรคูณแม่ ' . htmlspecialchars($num) . '</div>';

                // วนลูปแสดงสูตรคูณแม่ 1 - 12
                for ($i = 1; $i <= 12; $i++) {
                    echo htmlspecialchars($num) . " x " . $i . " = " . ($num * $i) . "<br>";
                }

                // ปิดกล่องดีไซน์ผลลัพธ์
                echo '</div>';
            }
        ?>

    </div>

</body>
</html>
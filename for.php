<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>งานที่ 1 - ปัญญากร รัตนมณี</title>
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
        }

        /* ลิงก์ Index */
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

        /* กล่องแสดงผลลัพธ์ PHP */
        .result-box {
            background-color: #f1f8ff;
            border: 1px dashed #b4d5ff;
            border-radius: 8px;
            padding: 15px;
            font-family: 'Courier New', Courier, monospace;
            font-size: 1.1rem;
            line-height: 1.6;
            color: #004085;
        }
        .result-title {
            font-family: sans-serif;
            font-size: 0.9rem;
            color: #6c757d;
            margin-bottom: 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="container">
        
        <h1>งานที่ 1 ปัญญากร รัตนมณี BIT.2/5 เลขที่ 12</h1>
        
        <a href="index.php" class="nav-link">← กลับไปที่ Index</a>

        <form action="" method="GET">
            <label Amphorn for="num">เลขแม่สูตรคูณ</label>
            <input type="number" name="num" id="num" placeholder="กรอกตัวเลขที่นี่...">
            <input type="submit" value="คำนวณ">
        </form>

        <div class="result-box">
            <div class="result-title">ผลลัพธ์การรัน Loop:</div>
            <?php
            // ลูปที่ 1
            for ($i = 1; $i <= 3; $i++) {
                echo $i . " ";
            }
            echo "<br>";

            // ลูปที่ 2
            for ($i = 5; $i >= 1; $i--) {
                echo $i . " ";
            }
            echo "<br>";

            // ลูปที่ 3
            for ($i = 0; $i <= 10; $i += 2) {
                echo $i . " ";
            }
            ?>
        </div>

    </div>

</body>
</html>
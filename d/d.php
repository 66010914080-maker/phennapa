<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>เพ็ญนภา เรืองชม (ตุ๊กตั๊ก)</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-4">
<div class="container">
    <div class="card shadow-lg p-4 rounded-4">
        <h1 class="mb-4 text-primary text-center">ฟอร์มสมัครสมาชิก <br> เพ็ญนภา เรืองชม (ตุ๊กตั๊ก) - ChatGPT </h1>

        <form method="post" action="" class="row g-3">
            <div class="col-md-6">
                <label class="form-label">ชื่อ-สกุล</label>
                <input type="text" name="fullname" class="form-control" required autofocus>
            </div>

            <div class="col-md-6">
                <label class="form-label">เบอร์โทร</label>
                <input type="text" name="phone" class="form-control" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">ความสูง (ซม.)</label>
                <input type="number" name="height" min="100" max="220" class="form-control" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">สีที่ชอบ</label>
                <input type="color" name="color" class="form-control form-control-color">
            </div>

            <div class="col-md-4">
                <label class="form-label">สาขาวิชา</label>
                <select name="major" class="form-select">
                    <option value="การบัญชี">การบัญชี</option>
                    <option value="การจัดการ">การจัดการ</option>
                    <option value="การตลาด">การตลาด</option>
                    <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                </select>
            </div>

            <div class="col-12 mt-3 text-center">
                <button type="submit" name="Submit" class="btn btn-success px-4">สมัครสมาชิก</button>
                <button type="reset" class="btn btn-secondary px-4">Reset</button>
                <button type="button" class="btn btn-primary px-4" onClick="window.location='https://www.msu.ac.th';">Go to MSU</button>
                <button type="button" class="btn btn-warning px-4" onClick="window.print();">พิมพ์</button>
            </div>
        </form>

        <hr class="my-4">

        <?php
        if (isset($_POST['Submit'])){
            $fullname = $_POST['fullname'];
            $phone = $_POST['phone'];
            $height = $_POST['height'];
            $color = $_POST['color'];
            $major = $_POST['major'];

            echo "<div class='alert alert-info'>";
            echo "<strong>ข้อมูลที่ส่งมา:</strong><br>";
            echo "ชื่อ-สกุล: $fullname<br>";
            echo "เบอร์โทร: $phone<br>";
            echo "ความสูง: $height ซม.<br>";
            echo "สีที่ชอบ: $color <div style='width:40px;height:20px;background:$color;display:inline-block;border:1px solid #000;'></div><br>";
            echo "สาขาวิชา: $major<br>";
            echo "</div>";
        }
        ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

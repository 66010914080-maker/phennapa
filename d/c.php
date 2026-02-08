<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>เพ็ญนภา เรืองชม (ตุ๊กตั๊ก)</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    /* เพิ่มสไตล์เพิ่มเติมหากต้องการให้ div สีที่ชอบแสดงผลชัดเจนขึ้น */
    .color-box {
        width: 25px;
        height: 25px;
        border: 1px solid #ccc;
        display: inline-block;
        vertical-align: middle;
        margin-left: 5px;
    }
</style>
</head>

<body>
<div class="container mt-5">
    <h1 class="mb-4">ฟอร์มสมัครสมาชิก <br> เพ็ญนภา เรืองชม (ตุ๊กตั๊ก) - Gemini</h1>
    
    <form method="post" action="">

        <div class="mb-3">
            <label for="fullname" class="form-label">ชื่อ-สกุล <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="fullname" name="fullname" required autofocus>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">เบอร์โทร <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>

        <div class="mb-3">
            <label for="height" class="form-label">ความสูง (ซม.) <span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="height" name="height" min="100" max="220" required>
        </div>

        <div class="mb-3">
            <label for="color" class="form-label d-block">สีที่ชอบ</label>
            <input type="color" class="form-control form-control-color" id="color" name="color" value="#000000" title="เลือกสี">
        </div>

        <div class="mb-3">
            <label for="major" class="form-label">สาขาวิชา</label>
            <select class="form-select" id="major" name="major">
                <option value="การบัญชี">การบัญชี</option>
                <option value="การจัดการ">การจัดการ</option>
                <option value="การตลาด">การตลาด</option>
                <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
            </select>
        </div>

        <div class="mt-4 mb-5">
            <button type="submit" name="Submit" class="btn btn-primary me-2">
                <i class="bi bi-box-arrow-in-right"></i> สมัครสมาชิก
            </button>
            <button type="reset" class="btn btn-secondary me-2">
                <i class="bi bi-x-circle"></i> Reset
            </button>
            <button type="button" onClick="window.location='https://www.msu.ac.th';" class="btn btn-info text-white me-2">
                Go to MSU
            </button>
            <button type="button" onClick="window.print();" class="btn btn-warning me-2">
                <i class="bi bi-printer"></i> พิมพ์
            </button>
        </div>

    </form>
    
    <hr class="my-5">

    <div class="mt-4 p-4 bg-light rounded shadow-sm">
        <h2 class="mb-3">ข้อมูลที่ส่ง:</h2>
        <?php
        if (isset($_POST['Submit'])){
            $fullname = $_POST['fullname'];
            $phone = $_POST['phone'];
            $height = $_POST['height'];
            $color = $_POST['color'];
            $major = $_POST['major'];
            
            echo "<p><strong>ชื่อ-สกุล:</strong> ".$fullname."</p>";
            echo "<p><strong>เบอร์โทร:</strong> ".$phone."</p>";
            echo "<p><strong>ความสูง:</strong> ".$height." ซม.</p>";
            // แสดงสีที่ชอบอย่างชัดเจน
            echo "<p><strong>สีที่ชอบ:</strong> ".$color." <span class='color-box' style='background-color:{$color}'></span></p>";
            echo "<p><strong>สาขาวิชา:</strong> ".$major."</p>";
        }
        ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
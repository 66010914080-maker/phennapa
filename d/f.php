<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ฟอร์มรับสมัครงาน - เพ็ญนภา เรืองชม (ตุ๊กตั๊ก)</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> <style>
    /* สไตล์เพิ่มเติมสำหรับ textarea ในกรณีที่ต้องการให้มันสูงขึ้น */
    .form-control-lg-height {
        min-height: 120px;
    }
    .result-box {
        white-space: pre-wrap; /* เพื่อให้ขึ้นบรรทัดใหม่ในส่วนแสดงผล */
        font-family: monospace; /* ใช้ font ที่เหมาะสมกับการแสดงข้อมูล */
        background-color: #f7f7f7;
        padding: 15px;
        border-radius: 8px;
        border: 1px solid #ddd;
    }
    .result-box strong {
        color: #0d6efd; /* สีน้ำเงินสำหรับหัวข้อ */
    }
</style>
</head>

<body>
<div class="container mt-5 mb-5">
    
    <header class="text-center mb-4">
        <h1 class="display-6">เพ็ญนภา เรืองชม (ตุ๊กตั๊ก) <br> สมัครงานกับ บริษัท New Tech จำกัด</h1>
        <p class="lead text-muted">กรุณากรอกข้อมูลเพื่อเข้าร่วมทีมงานแห่งอนาคต</p>
    </header>

    <div class="card shadow-lg p-4">
        <div class="card-body">
            
            <form method="post" action="">
                
                <h3 class="card-title mb-4 border-bottom pb-2 text-primary"><i class="bi bi-person-badge me-2"></i>ข้อมูลส่วนตัว</h3>
                
                <div class="mb-3">
                    <label for="job_position" class="form-label fw-bold">1. ตำแหน่งที่ต้องการสมัคร <span class="text-danger">*</span></label>
                    <select class="form-select" id="job_position" name="job_position" required>
                        <option value="" disabled selected>--- เลือกตำแหน่ง ---</option>
                        <option value="นักพัฒนาซอฟต์แวร์ (Software Developer)">นักพัฒนาซอฟต์แวร์ (Software Developer)</option>
                        <option value="ผู้ดูแลระบบเครือข่าย (Network Administrator)">ผู้ดูแลระบบเครือข่าย (Network Administrator)</option>
                        <option value="นักวิเคราะห์ข้อมูล (Data Analyst)">นักวิเคราะห์ข้อมูล (Data Analyst)</option>
                        <option value="เจ้าหน้าที่ฝ่ายบุคคล (HR Officer)">เจ้าหน้าที่ฝ่ายบุคคล (HR Officer)</option>
                    </select>
                </div>
                
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="title" class="form-label">2. คำนำหน้าชื่อ <span class="text-danger">*</span></label>
                        <select class="form-select" id="title" name="title" required>
                            <option value="นาย">นาย</option>
                            <option value="นาง">นาง</option>
                            <option value="นางสาว">นางสาว</option>
                        </select>
                    </div>
                    <div class="col-md-9 mb-3">
                        <label for="fullname" class="form-label">ชื่อ-สกุล <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="fullname" name="fullname" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="birthdate" class="form-label">3. วันเดือนปีเกิด <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="birthdate" name="birthdate" required>
                </div>

                <h3 class="card-title mb-4 border-bottom pb-2 text-primary mt-5"><i class="bi bi-mortarboard-fill me-2"></i>ข้อมูลการศึกษาและประสบการณ์</h3>

                <div class="mb-3">
                    <label for="education" class="form-label fw-bold">4. ระดับการศึกษาสูงสุด <span class="text-danger">*</span></label>
                    <select class="form-select" id="education" name="education" required>
                        <option value="" disabled selected>--- เลือกวุฒิการศึกษา ---</option>
                        <option value="ปวช. หรือเทียบเท่า">ปวช. หรือเทียบเท่า</option>
                        <option value="ปวส. หรือเทียบเท่า">ปวส. หรือเทียบเท่า</option>
                        <option value="ปริญญาตรี">ปริญญาตรี</option>
                        <option value="ปริญญาโท">ปริญญาโท</option>
                        <option value="ปริญญาเอก">ปริญญาเอก</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="skills" class="form-label fw-bold">5. ความสามารถพิเศษ (เช่น ภาษา, โปรแกรม, ทักษะเฉพาะด้าน)</label>
                    <textarea class="form-control form-control-lg-height" id="skills" name="skills" rows="3" placeholder="ระบุความสามารถพิเศษที่เกี่ยวข้องกับตำแหน่งงาน"></textarea>
                </div>

                <div class="mb-3">
                    <label for="experience" class="form-label fw-bold">6. ประสบการณ์ทำงาน (ระบุตำแหน่ง, บริษัท, ระยะเวลา)</label>
                    <textarea class="form-control form-control-lg-height" id="experience" name="experience" rows="5" placeholder="อธิบายประสบการณ์ทำงานโดยย่อ"></textarea>
                </div>

                <div class="mt-4 text-center">
                    <button type="submit" name="Submit" class="btn btn-success btn-lg me-3">
                        <i class="bi bi-send-fill me-1"></i> ส่งใบสมัคร
                    </button>
                    <button type="reset" class="btn btn-outline-secondary btn-lg">
                        <i class="bi bi-x-circle me-1"></i> ล้างข้อมูล
                    </button>
                </div>
            </form>
            
        </div>
    </div>
    
    <hr class="my-5">

    ## 📄 ข้อมูลใบสมัครที่ถูกส่ง (PHP Output)
    <div class="p-4 bg-light rounded shadow-sm">
        <?php
        if (isset($_POST['Submit'])){
            // ดึงข้อมูลจากฟอร์ม
            $job_position = $_POST['job_position'] ?? ' - ';
            $title = $_POST['title'] ?? ' - ';
            $fullname = $_POST['fullname'] ?? ' - ';
            $birthdate = $_POST['birthdate'] ?? ' - ';
            $education = $_POST['education'] ?? ' - ';
            $skills = $_POST['skills'] ?? ' - ';
            $experience = $_POST['experience'] ?? ' - ';
            
            // ตรวจสอบว่ามีข้อมูลถูกส่งมาครบถ้วนตามที่ต้องการหรือไม่ (อย่างน้อยฟิลด์ที่ required)
            if(empty($_POST['job_position']) || empty($_POST['fullname']) || empty($_POST['birthdate']) || empty($_POST['education'])) {
                echo "<h4>⚠️ กรุณากรอกข้อมูลในช่องที่มีเครื่องหมาย <span class='text-danger'>*</span> ให้ครบถ้วน</h4>";
            } else {
                // แสดงผลข้อมูลที่ได้รับ
                echo "<h4>✅ ข้อมูลที่ได้รับจากใบสมัคร:</h4>";
                echo "<div class='result-box'>";
                echo "<strong>ตำแหน่งที่ต้องการสมัคร:</strong> " . htmlspecialchars($job_position) . "<br>";
                echo "<strong>ชื่อ-สกุล:</strong> " . htmlspecialchars($title) . " " . htmlspecialchars($fullname) . "<br>";
                echo "<strong>วันเดือนปีเกิด:</strong> " . htmlspecialchars($birthdate) . "<br>";
                echo "<strong>ระดับการศึกษาสูงสุด:</strong> " . htmlspecialchars($education) . "<br><br>";
                
                echo "<strong>ความสามารถพิเศษ:</strong><br>";
                echo empty($skills) ? " - ไม่ระบุ -" : htmlspecialchars($skills) . "<br><br>";
                
                echo "<strong>ประสบการณ์ทำงาน:</strong><br>";
                echo empty($experience) ? " - ไม่ระบุ -" : htmlspecialchars($experience);
                echo "</div>";
            }
        } else {
            echo "<h4>💡 ข้อมูลที่ส่งจะแสดงที่นี่ หลังจากกดปุ่ม 'ส่งใบสมัคร'</h4>";
        }
        ?>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
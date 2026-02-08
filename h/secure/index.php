<?php
	session_start();
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login: เพ็ญนภา เรืองชม(ตุ๊กตั๊ก)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            /* ใช้สี Lime จางๆ แบบ Gradient เพื่อความสบายตา */
            background: linear-gradient(135deg, #f9fdf4 0%, #f0f9e1 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }
        .login-card {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            border: none;
            border-radius: 20px;
            background-color: #ffffff;
            /* เงาสี Lime อ่อนๆ */
            box-shadow: 0 15px 35px rgba(164, 202, 58, 0.15);
        }
        .btn-lime {
            background-color: #bef264; /* สี Lime อ่อน */
            color: #365314; /* ตัวอักษรสีเขียวเข้มเพื่อให้ตัดกันและอ่านง่าย */
            border: none;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        .btn-lime:hover {
            background-color: #a3e635;
            color: #1a2e05;
            transform: translateY(-1px);
        }
        .form-control:focus {
            border-color: #bef264;
            box-shadow: 0 0 0 0.25 redrem rgba(190, 242, 100, 0.25);
        }
        .brand-text {
            color: #65a30d; /* Lime เข้มขึ้นมานิดหน่อยสำหรับหัวข้อ */
        }
    </style>
</head>

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-8 col-md-6 col-lg-4">
            <div class="card login-card text-center">
                <div class="card-body p-0">
                    <div class="mb-4">
                        <h2 class="fw-bold brand-text">เข้าสู่ระบบ</h2>
                        <p class="text-muted small">คุณเพ็ญนภา เรืองชม (ตุ๊กตั๊ก)</p>
                    </div>
                    
                    <form method="post" action="">
                        <div class="mb-3 text-start">
                            <label class="form-label text-secondary small">ชื่อผู้ใช้งาน</label>
                            <input type="text" name="auser" class="form-control form-control-lg shadow-sm" style="font-size: 1rem;" placeholder="Username" autofocus required>
                        </div>
                        <div class="mb-4 text-start">
                            <label class="form-label text-secondary small">รหัสผ่าน</label>
                            <input type="password" name="apwd" class="form-control form-control-lg shadow-sm" style="font-size: 1rem;" placeholder="Password" required>
                        </div>
                        <div class="d-grid shadow-sm">
                            <button type="submit" name="Submit" class="btn btn-lime btn-lg">
                                เข้าสู่ระบบ
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <p class="text-center mt-4 text-secondary small" style="opacity: 0.7;">&copy; 2026 Admin Management System</p>
        </div>
    </div>
</div>

<?php
if(isset($_POST['Submit'])) {
    include_once("connectdb.php");
    
    $user = $_POST['auser'];
    $pwd = $_POST['apwd'];

    // ป้องกัน SQL Injection
    $sql = "SELECT a_id, a_name, a_password FROM admin WHERE a_username = ? LIMIT 1";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $user);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if($data = mysqli_fetch_array($result)){
        // ตรวจสอบรหัสผ่าน (รองรับทั้งแบบ Hash และ Plain Text หากยังไม่ได้เปลี่ยน)
        // แนะนำให้ใช้ password_verify($pwd, $data['a_password']) ในอนาคต
        if ($pwd === $data['a_password'] || password_verify($pwd, $data['a_password'])) {
            $_SESSION['aid'] = $data['a_id'];
            $_SESSION['aname'] = $data['a_name'];
            
            echo "<script>window.location='index2.php';</script>";
        } else {
            echo "<script>alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');</script>";
        }
    } else {
        echo "<script>alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');</script>";
    }
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
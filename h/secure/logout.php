<?php
    session_start();
    // ทำลาย Session ทั้งหมด
    session_unset();
    session_destroy();
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>กำลังออกจากระบบ...</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f7fee7; /* สี Lime อ่อนมาก */
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }
        .logout-card {
            background: white;
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(163, 230, 53, 0.15);
            text-align: center;
            max-width: 350px;
            width: 90%;
        }
        .loader {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #bef264; /* สี Lime */
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
            margin: 0 auto 1.5rem;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .status-text {
            color: #365314;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="logout-card">
    <div class="loader"></div>
    <h5 class="status-text mb-2">กำลังออกจากระบบ</h5>
    <p class="text-muted small mb-0">ขอบคุณที่ใช้บริการ ระบบกำลังพาท่านกลับหน้าหลัก...</p>
</div>

<script>
    // หน่วงเวลา 1.5 วินาทีเพื่อให้ดูนุ่มนวลก่อน Redirect
    setTimeout(function() {
        window.location.href = 'index.php';
    }, 1500);
</script>

</body>
</html>
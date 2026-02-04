<?php
	include_once("check_login.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - ระบบจัดการหลังบ้าน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #fafd6f2; /* พื้นหลังเขียวอ่อนมากๆ */
        }
        /* Sidebar โทนสว่าง */
        .sidebar {
            min-height: 100vh;
            background-color: #ffffff;
            border-right: 1px solid #e9f5db;
        }
        .sidebar-header {
            padding: 2rem 1.5rem;
            background-color: #f7fee7;
        }
        .sidebar a {
            color: #4d7c0f;
            text-decoration: none;
            padding: 12px 20px;
            display: block;
            margin: 4px 15px;
            border-radius: 10px;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background-color: #ecfccb;
            color: #365314;
        }
        .sidebar a.active {
            background-color: #bef264;
            color: #365314;
            font-weight: bold;
        }
        .main-content {
            padding: 30px;
            background-color: #f9fafb;
        }
        .card-stat {
            border: none;
            border-radius: 15px;
            background-color: #ffffff;
            border-bottom: 4px solid #bef264; /* เส้นใต้สี Lime */
            box-shadow: 0 4px 12px rgba(163, 230, 53, 0.08);
        }
        .user-badge {
            background: #f7fee7;
            padding: 6px 16px;
            border-radius: 50px;
            border: 1px solid #d9f99d;
            color: #3f6212;
        }
        .logout-link {
            color: #b91c1c !important;
        }
        .logout-link:hover {
            background-color: #fee2e2 !important;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse p-0 shadow-sm">
            <div class="sidebar-header text-center mb-3">
                <div class="avatar-placeholder mb-2">
                    <i class="bi bi-person-badge fs-1 text-lime-600" style="color: #65a30d;"></i>
                </div>
                <h5 class="fw-bold mb-0" style="color: #3f6212;">Admin System</h5>
                <small class="text-muted">Management Panel</small>
            </div>
            
            <div class="nav flex-column">
                <a href="index2.php" class="active"><i class="bi bi-grid-1x2-fill me-2"></i> หน้าหลัก</a>
                <a href="products.php"><i class="bi bi-box-seam me-2"></i> จัดการสินค้า</a>
                <a href="orders.php"><i class="bi bi-receipt me-2"></i> จัดการออเดอร์</a>
                <a href="customers.php"><i class="bi bi-people me-2"></i> จัดการลูกค้า</a>
                <hr class="mx-4 my-3" style="color: #d9f99d;">
                <a href="logout.php" class="logout-link"><i class="bi bi-power me-2"></i> ออกจากระบบ</a>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4">
                <h2 class="fw-bold" style="color: #365314;">Dashboard</h2>
                <div class="user-badge shadow-sm">
                    <i class="bi bi-check-circle-fill me-2 text-success"></i>
                    ออนไลน์: <strong><?php echo $_SESSION['aname']; ?></strong>
                </div>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card card-stat p-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted mb-1 small">สินค้าในระบบ</h6>
                                <h3 class="fw-bold mb-0">128</h3>
                            </div>
                            <div class="bg-lime-100 p-2 rounded" style="background-color: #f7fee7;">
                                <i class="bi bi-box text-success fs-4"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card card-stat p-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted mb-1 small">ออเดอร์ใหม่</h6>
                                <h3 class="fw-bold mb-0">12</h3>
                            </div>
                            <div class="bg-lime-100 p-2 rounded" style="background-color: #f7fee7;">
                                <i class="bi bi-cart-plus text-success fs-4"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 rounded-4 overflow-hidden shadow-sm">
                <div class="card-body p-5" style="background: linear-gradient(to right, #ffffff, #f7fee7);">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h3 class="fw-bold" style="color: #365314;">ยินดีต้อนรับกลับมา, คุณ <?php echo $_SESSION['aname']; ?>!</h3>
                            <p class="text-secondary">ระบบจัดการข้อมูลหลังบ้านพร้อมใช้งานแล้ว คุณสามารถเลือกเมนูจัดการสินค้า ออเดอร์ หรือตรวจสอบรายชื่อลูกค้าได้จากแถบเมนูด้านซ้าย</p>
                        </div>
                        <div class="col-md-4 text-center d-none d-md-block">
                            <i class="bi bi-emoji-smile" style="font-size: 5rem; color: #bef264;"></i>
                        </div>
                    </div>
                </div>
            </div>
            
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
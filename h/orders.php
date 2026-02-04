<?php
	include_once("check_login.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการออเดอร์ - Soft Lime Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f9fafb;
        }
        /* Sidebar Styles */
        .sidebar {
            min-height: 100vh;
            background-color: #ffffff;
            border-right: 1px solid #e9f5db;
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
        .sidebar a:hover, .sidebar a.active {
            background-color: #ecfccb;
            color: #365314;
        }
        .sidebar a.active { font-weight: bold; }

        /* Content Styles */
        .main-content { padding: 30px; }
        
        /* สรุปยอดด้านบน */
        .stat-card {
            border: none;
            border-radius: 15px;
            background-color: #ffffff;
            border-left: 5px solid #bef264;
            box-shadow: 0 4px 12px rgba(163, 230, 53, 0.08);
        }

        .table-container {
            background: white;
            border-radius: 15px;
            border: 1px solid #ecfccb;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(163, 230, 53, 0.05);
        }
        .table thead {
            background-color: #f7fee7;
        }
        .table thead th {
            color: #4d7c0f;
            border-bottom: 2px solid #d9f99d;
            padding: 15px;
        }

        /* สถานะออเดอร์แบบพาสเทล */
        .badge-waiting { background-color: #fef9c3; color: #854d0e; border: 1px solid #fde047; }
        .badge-paid { background-color: #ecfccb; color: #365314; border: 1px solid #bef264; }
        .badge-shipped { background-color: #dcfce7; color: #166534; border: 1px solid #86efac; }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse p-0 shadow-sm position-fixed">
            <div class="p-4 text-center" style="background-color: #f7fee7;">
                <h5 class="fw-bold mb-0" style="color: #3f6212;">Admin Panel</h5>
            </div>
            <div class="nav flex-column mt-3">
                <a href="index2.php"><i class="bi bi-grid-1x2 me-2"></i> หน้าหลัก</a>
                <a href="products.php"><i class="bi bi-box-seam me-2"></i> จัดการสินค้า</a>
                <a href="orders.php" class="active"><i class="bi bi-receipt-cutoff me-2"></i> จัดการออเดอร์</a>
                <a href="customers.php"><i class="bi bi-people me-2"></i> จัดการลูกค้า</a>
                <hr class="mx-4 my-3">
                <a href="logout.php" class="text-danger"><i class="bi bi-power me-2"></i> ออกจากระบบ</a>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 main-content">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="fw-bold mb-0" style="color: #365314;">จัดการออเดอร์</h2>
                    <p class="text-muted small mb-0">ติดตามสถานะการสั่งซื้อและการชำระเงินของลูกค้า</p>
                </div>
                <div class="user-badge bg-white py-1 px-3 rounded-pill border shadow-sm text-dark small">
                    <i class="bi bi-person-circle text-lime-500" style="color: #84cc16;"></i> <?php echo $_SESSION['aname']; ?>
                </div>
            </div>

            <div class="row g-3 mb-4">
                <div class="col-6 col-md-3">
                    <div class="card stat-card p-3">
                        <small class="text-muted">ทั้งหมด</small>
                        <h4 class="fw-bold mb-0">48</h4>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card stat-card p-3" style="border-left-color: #fde047;">
                        <small class="text-muted">รอตรวจสอบ</small>
                        <h4 class="fw-bold mb-0">5</h4>
                    </div>
                </div>
            </div>

            <div class="table-container shadow-sm">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0 text-center">
                        <thead>
                            <tr>
                                <th class="text-start ps-4">เลขที่ออเดอร์</th>
                                <th class="text-start">ลูกค้า</th>
                                <th>วันที่</th>
                                <th>ยอดสุทธิ</th>
                                <th>สถานะ</th>
                                <th>จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-start ps-4">
                                    <span class="fw-bold" style="color: #4d7c0f;">#ORD-2026-001</span>
                                </td>
                                <td class="text-start">คุณสมชาย ใจดี</td>
                                <td>03/02/2026</td>
                                <td class="fw-bold">฿1,250.00</td>
                                <td>
                                    <span class="badge badge-waiting px-3 py-2 rounded-pill small">รอตรวจสอบ</span>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="order_view.php?id=1" class="btn btn-sm btn-outline-success border-0 rounded-circle me-1" title="ดูรายละเอียด">
                                            <i class="bi bi-eye-fill fs-5"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-dark border-0 rounded-circle" title="พิมพ์ใบเสร็จ">
                                            <i class="bi bi-printer fs-5"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start ps-4">
                                    <span class="fw-bold" style="color: #4d7c0f;">#ORD-2026-002</span>
                                </td>
                                <td class="text-start">คุณวิภา เรียนรู้</td>
                                <td>03/02/2026</td>
                                <td class="fw-bold">฿450.00</td>
                                <td>
                                    <span class="badge badge-paid px-3 py-2 rounded-pill small">ชำระเงินแล้ว</span>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="order_view.php?id=2" class="btn btn-sm btn-outline-success border-0 rounded-circle me-1">
                                            <i class="bi bi-eye-fill fs-5"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-dark border-0 rounded-circle">
                                            <i class="bi bi-printer fs-5"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
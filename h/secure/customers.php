<?php
	include_once("check_login.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการลูกค้า - Soft Lime Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f9fafb;
        }
        /* Sidebar (คงเดิมเพื่อให้เข้าชุดกัน) */
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

        .main-content { padding: 30px; }

        /* การตกแต่งตารางลูกค้า */
        .table-container {
            background: white;
            border-radius: 20px;
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
            font-weight: 600;
        }
        
        /* วงกลมสัญลักษณ์ชื่อลูกค้า (Avatar) */
        .avatar-circle {
            width: 42px;
            height: 42px;
            background-color: #f0fdf4;
            color: #65a30d;
            border: 1px solid #dcfce7;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 0.9rem;
        }

        .search-box {
            border-radius: 50px;
            border: 1px solid #d9f99d;
            padding-left: 20px;
        }
        .search-box:focus {
            box-shadow: 0 0 0 0.25rem rgba(190, 242, 100, 0.2);
            border-color: #bef264;
        }
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
                <a href="orders.php"><i class="bi bi-receipt me-2"></i> จัดการออเดอร์</a>
                <a href="customers.php" class="active"><i class="bi bi-people-fill me-2"></i> จัดการลูกค้า</a>
                <hr class="mx-4 my-3">
                <a href="logout.php" class="text-danger"><i class="bi bi-power me-2"></i> ออกจากระบบ</a>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 main-content">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="fw-bold mb-0" style="color: #365314;">จัดการข้อมูลลูกค้า</h2>
                    <p class="text-muted small mb-0">ตรวจสอบรายชื่อและประวัติการสั่งซื้อสมาชิก</p>
                </div>
                <div class="input-group w-25 shadow-sm rounded-pill">
                    <span class="input-group-text bg-white border-end-0 rounded-start-pill"><i class="bi bi-search text-lime-600"></i></span>
                    <input type="text" class="form-control border-start-0 rounded-end-pill search-box" placeholder="ค้นหาลูกค้า...">
                </div>
            </div>

            <div class="table-container">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead>
                            <tr>
                                <th class="ps-4" style="width: 80px;">สมาชิก</th>
                                <th>ชื่อ-นามสกุล</th>
                                <th>ข้อมูลติดต่อ</th>
                                <th>วันที่ลงทะเบียน</th>
                                <th class="text-center">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4">
                                    <div class="avatar-circle shadow-sm">สม</div>
                                </td>
                                <td>
                                    <div class="fw-bold text-dark">คุณสมชาย ใจดี</div>
                                    <small class="text-muted">CUST-69001</small>
                                </td>
                                <td>
                                    <div class="small"><i class="bi bi-telephone me-1 text-success"></i> 081-XXX-XXXX</div>
                                    <div class="small text-muted"><i class="bi bi-envelope me-1"></i> somchai@example.com</div>
                                </td>
                                <td>01 ก.พ. 2026</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="customer_details.php?id=1" class="btn btn-sm btn-outline-success border-0 rounded-circle me-1" title="ดูประวัติ">
                                            <i class="bi bi-person-lines-fill fs-5"></i>
                                        </a>
                                        <button class="btn btn-sm btn-outline-danger border-0 rounded-circle" title="ระงับบัญชี">
                                            <i class="bi bi-person-x-fill fs-5"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                    </table>
                </div>
            </div>

            <footer class="mt-5 text-center text-muted small pb-4">
                ล็อกอินโดย: <span class="fw-bold" style="color: #65a30d;"><?php echo $_SESSION['aname']; ?></span>
            </footer>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
	include_once("check_login.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการสินค้า - Soft Lime Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f9fafb;
        }
        /* Sidebar Styles (คงชุดเดิมเพื่อให้เข้ากัน) */
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
        
        .btn-lime-add {
            background-color: #bef264;
            color: #365314;
            border: none;
            font-weight: 600;
        }
        .btn-lime-add:hover {
            background-color: #a3e635;
            color: #1a2e05;
        }

        .table-container {
            background: white;
            border-radius: 15px;
            border: 1px solid #ecfccb;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(163, 230, 53, 0.05);
        }
        .table thead {
            background-color: #f7fee7; /* หัวตารางสี Lime อ่อนมาก */
        }
        .table thead th {
            color: #4d7c0f;
            border-bottom: 2px solid #d9f99d;
            font-weight: 600;
            padding: 15px;
        }
        .img-product {
            width: 45px;
            height: 45px;
            object-fit: cover;
            border-radius: 10px;
            border: 1px solid #f0fdf4;
        }
        .badge-stock {
            background-color: #f0fdf4;
            color: #166534;
            border: 1px solid #dcfce7;
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
                <a href="products.php" class="active"><i class="bi bi-box-seam-fill me-2"></i> จัดการสินค้า</a>
                <a href="orders.php"><i class="bi bi-receipt me-2"></i> จัดการออเดอร์</a>
                <a href="customers.php"><i class="bi bi-people me-2"></i> จัดการลูกค้า</a>
                <hr class="mx-4 my-3">
                <a href="logout.php" class="text-danger"><i class="bi bi-power me-2"></i> ออกจากระบบ</a>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 main-content">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="fw-bold mb-0" style="color: #365314;">จัดการสินค้า</h2>
                    <p class="text-muted small mb-0">เพิ่ม แก้ไข หรือลบข้อมูลสินค้าในร้านของคุณ</p>
                </div>
                <a href="product_add.php" class="btn btn-lime-add px-4 py-2 rounded-pill shadow-sm">
                    <i class="bi bi-plus-lg me-1"></i> เพิ่มสินค้าใหม่
                </a>
            </div>

            <div class="table-container shadow-sm">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead>
                            <tr>
                                <th class="ps-4">ภาพ</th>
                                <th>ชื่อสินค้า / รหัส</th>
                                <th>หมวดหมู่</th>
                                <th>ราคา</th>
                                <th>สต็อก</th>
                                <th class="text-center">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4">
                                    <img src="https://via.placeholder.com/100" class="img-product" alt="product">
                                </td>
                                <td>
                                    <div class="fw-bold text-dark">เสื้อยืด Oversize สีเขียวมิ้นต์</div>
                                    <div class="text-muted small">ID: P-202601</div>
                                </td>
                                <td><span class="text-secondary">เสื้อผ้าบุรุษ</span></td>
                                <td class="fw-bold text-dark">฿350.00</td>
                                <td>
                                    <span class="badge badge-stock px-3 py-2 rounded-pill">คงเหลือ 24</span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="edit_product.php?id=1" class="btn btn-sm btn-outline-success border-0 rounded-circle me-1">
                                            <i class="bi bi-pencil-square fs-5"></i>
                                        </a>
                                        <button class="btn btn-sm btn-outline-danger border-0 rounded-circle" onclick="return confirm('คุณต้องการลบสินค้านี้ใช่หรือไม่?')">
                                            <i class="bi bi-trash3 fs-5"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                    </table>
                </div>
            </div>
            
            <footer class="mt-5 text-center text-muted small pb-4">
                ผู้ดูแลระบบ: <span class="fw-bold" style="color: #65a30d;"><?php echo $_SESSION['aname']; ?></span>
            </footer>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เพ็ญนภา เรืองชม (ตุ๊กตั๊ก)</title>
</head>

<body>
<h1>เพ็ญนภา เรืองชม (ตุ๊กตั๊ก)</h1>

<table border="1">
<tr>
    <th>ประเทศ</th>
    <th>ยอดขาย</th>
</tr>
<?php
	include_once("connectdb.php");
	$sql = "SELECT `p_country`, SUM(`p_amount`) AS total FROM `popsupermarket`GROUP BY `p_country`";
	$rs = mysqli_query($conn,$sql);
	while ($data = mysqli_fetch_array($rs)){
?>
<tr>
    <td><?php echo $data['p_country'];?></td>
    <td align="right"><?php echo number_format($data['total'],0);?></td>
</tr>
<?php } ?>

</table>
<hr>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div style="width: 40%; margin: auto;">
    <canvas id="myBarChart"></canvas>
    <br><br>
    <canvas id="myPieChart"></canvas>
</div>

<?php
    // แก้ไข: เปลี่ยนจาก [] เป็น array() เพื่อป้องกัน Error ใน PHP เวอร์ชันเก่า
    $countries = array(); 
    $totals = array();
    
    // ดึงข้อมูลจากฐานข้อมูลมาเก็บไว้ในตัวแปร Array
    $rs2 = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($rs2)) {
        $countries[] = $row['p_country'];
        $totals[] = $row['total'];
    }
?>

<script>
    // ส่งข้อมูลจาก PHP ไปยัง JavaScript ด้วย json_encode
    const labels = <?php echo json_encode($countries); ?>;
    const dataValues = <?php echo json_encode($totals); ?>;

    // 1. สร้าง Bar Chart
    const ctxBar = document.getElementById('myBarChart').getContext('2d');
    new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'ยอดขายรายประเทศ',
                data: dataValues,
                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: { y: { beginAtZero: true } }
        }
    });

    // 2. สร้าง Pie Chart
    const ctxPie = document.getElementById('myPieChart').getContext('2d');
    new Chart(ctxPie, {
        type: 'pie',
        data: {
            labels: labels,
            datasets: [{
                data: dataValues,
                backgroundColor: [
                    '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40'
                ]
            }]
        }
    });
</script>
</body>
</html>
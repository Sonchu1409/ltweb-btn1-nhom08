<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

$hoTen = "LE VAN MANH"; 
$soThich = "bóng đá, đọc sách, lập trình web";
$ngayGioTao = date('H:i:s d/m/Y');
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang giới thiệu</title>
</head>
<body>

    <h2>Tôi là <?php echo $hoTen; ?></h2>
    <p>Sở thích: <?php echo $soThich; ?></p>
    <p>Trang được tạo lúc: <?php echo $ngayGioTao; ?></p>

</body>
</html>
<?php
$hoten   = "Nguyễn Sơn Chu";
$lop     = "24CNTT2";                     // Thay lại đúng tên lớp nếu khác
$sothich = "bóng đá, đọc sách, lập trình web";
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Giới thiệu bản thân</title>
</head>
<body>
    <h1>Tôi là <?php echo $hoten; ?> - lớp <?php echo $lop; ?></h1>
    <p>Sở thích: <?php echo $sothich; ?></p>
    <p>Trang được tạo lúc: <?php echo date("H:i:s d/m/Y"); ?></p>
</body>
</html>
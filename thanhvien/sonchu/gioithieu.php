<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu bản thân</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 40px;
            display: flex;
            justify-content: center;
        }
        .profile-card {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }
        h2 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
            margin-top: 0;
        }
        .info-item {
            margin: 14px 0;
            font-size: 16px;
            color: #333;
        }
        .label {
            font-weight: bold;
            color: #555;
            display: inline-block;
            width: 140px;
        }
        .time-box {
            margin-top: 20px;
            padding: 12px;
            background-color: #e8f4fd;
            border-left: 4px solid #3498db;
            color: #1d6fa5;
            font-size: 15px;
        }
    </style>
</head>
<body>

<?php
// Thiết lập múi giờ Việt Nam
date_default_timezone_set('Asia/Ho_Chi_Minh');

// Khai báo các biến thông tin cá nhân
$ho_ten = "Nguyễn Sơn Chu";
$ma_sv = "3120224020";
$lop = "CNTT";
$chuyen_nganh = "Khoa học máy tính";
$so_thich = "Lập trình, nghiên cứu công nghệ";

// Sử dụng hàm date() để lấy ngày giờ hiện tại trên máy chủ
$thoi_gian_server = date("d/m/Y - H:i:s");
?>

<div class="profile-card">
    <h2>THÔNG TIN CÁ NHÂN</h2>
    <div class="info-item"><span class="label">Họ và tên:</span> <strong><?php echo $ho_ten; ?></strong></div>
    <div class="info-item"><span class="label">Mã sinh viên:</span> <?php echo $ma_sv; ?></div>
    <div class="info-item"><span class="label">Lớp:</span> <?php echo $lop; ?></div>
    <div class="info-item"><span class="label">Chuyên ngành:</span> <?php echo $chuyen_nganh; ?></div>
    <div class="info-item"><span class="label">Sở thích:</span> <?php echo $so_thich; ?></div>
    
    <div class="time-box">
        <strong>Thời gian trên Server:</strong> <?php echo $thoi_gian_server; ?>
    </div>
</div>

</body>
</html>
<?php
$serverName = "minhhoa"; // Địa chỉ máy chủ SQL Server
$database = "quanlybandongho"; // Tên database
$username = "sa"; // Tên tài khoản SQL Server
$password = "123"; // Mật khẩu

try {
    // Kết nối tới SQL Server bằng PDO
    $conn = new PDO("sqlsrv:Server=$serverName;Database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die("Kết nối không thành công: " . $e->getMessage());
}

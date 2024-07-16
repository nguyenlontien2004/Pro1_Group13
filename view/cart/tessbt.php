<?php
// Kết nối Cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=duan0", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Lấy ProductID từ URL hoặc một nguồn khác
$id_sp = isset($_GET['id_sp']) ? $_GET['id_sp'] : null;

// Truy vấn thông tin chi tiết sản phẩm với biến thể size, tên size và số lượng
$query = "SELECT sanpham.ten_sp, bienthesize2.size, bienthesize2.soluong
          FROM sanpham
          INNER JOIN bienthesize2 ON sanpham.id_sp = bienthesize2.id_sp
          WHERE sanpham.id_sp = :id_sp";

$stmt = $conn->prepare($query);
$stmt->bindParam(':id_sp', $id_sp, PDO::PARAM_INT);
$stmt->execute();

// Lấy kết quả và hiển thị thông tin chi tiết sản phẩm
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($rows) > 0) {
    echo "<h1>Chi tiết sản phẩm</h1>";
    echo "<table border='1'>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Biến thể size</th>
                <th>Số lượng</th>
            </tr>";

    foreach ($rows as $row) {
        echo "<tr>
                <td>{$row['ten_sp']}</td>
                <td>{$row['size']}</td>
                <td>{$row['soluong']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "Không tìm thấy thông tin sản phẩm.";
}

// Đóng kết nối
$conn = null;

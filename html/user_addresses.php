<?php
session_start();
include_once '../admin/config.php';
include_once '../html/cart.php';

// Kiểm tra xem người dùng đã đăng nhập chưa
if (isset($_SESSION['user_id'])) {
    $cart = new Cart($_SESSION['user_id'], $conn);
} else {
    echo "User is not logged in.";
    exit;
}

$user_id = $_SESSION['user_id']; // Lấy user_id từ session

// Truy vấn thông tin địa chỉ của người dùng
$sql = "SELECT name, phone, address, city, note FROM user_addresses WHERE user_id = ? LIMIT 1";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);  // Bind tham số user_id (kiểu integer)
$stmt->execute();
$result = $stmt->get_result();

// Kiểm tra xem có kết quả từ cơ sở dữ liệu không
if ($result->num_rows > 0) {
    $address = $result->fetch_assoc();  // Lấy thông tin địa chỉ của người dùng
} else {
    echo "No address found.";
    exit;  // Nếu không có địa chỉ, dừng việc thực thi mã
}

// Hiển thị thông tin người nhận
echo "<p>Họ và tên: " . (isset($address['name']) ? $address['name'] : 'Chưa có thông tin') . "</p>";
echo "<p>Số điện thoại: " . (isset($address['phone']) ? $address['phone'] : 'Chưa có thông tin') . "</p>";
echo "<p>Địa chỉ: " . (isset($address['address']) ? $address['address'] : 'Chưa có thông tin') . ", " . (isset($address['city']) ? $address['city'] : 'Chưa có thông tin') . "</p>";
if (!empty($address['note'])) {
    echo "<p>Ghi chú: {$address['note']}</p>";
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý đơn hàng</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            height: 100vh;
            background-color: #343a40;
            color: white;
            position: fixed;
            width: 250px;
            top: 0;
            left: 0;
            overflow-y: auto;
        }
        .sidebar h2 {
            padding: 15px;
            font-size: 1.5rem;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
        }
        .sidebar a:hover {
            background-color: #495057;
            color: white;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        .list-group-item {
            background-color: #343a40;
            border: none;
        }
        .list-group-item a {
            color: white;
        }
        .list-group-item a:hover {
            background-color: #495057;
            color: white;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h2 class="text-center">Bảng điều khiển Admin</h2>
        <ul class="list-group">
            <li class="list-group-item bg-dark"><a href="index.php">Trang chủ</a></li>
            <li class="list-group-item bg-dark"><a href="manage_products.php">Quản lý sản phẩm</a></li>
            <li class="list-group-item bg-dark"><a href="manage_orders.php">Quản lý đơn hàng</a></li>
            <li class="list-group-item bg-dark"><a href="manage_users.php">Quản lý người dùng</a></li>
            <li class="list-group-item bg-dark"><a href="manage_categories.php">Quản lý danh mục</a></li>
            <li class="list-group-item bg-dark"><a href="manage_coupons.php">Mã giảm giá</a></li>
            <li class="list-group-item bg-dark"><a href="#">Đăng xuất</a></li>
        </ul>
    </div>

    <div class="content">
        <h1>Quản lý đơn hàng</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên người dùng</th>
                    <th>Tổng tiền</th>
                    <th>Ngày đặt hàng</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Nguyễn Văn A</td>
                    <td>1.000.000 VNĐ</td>
                    <td>01/11/2024</td>
                    <td>Đang xử lý</td>
                    <td>
                        <button class="btn btn-info btn-sm">Chi tiết</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Trần Thị B</td>
                    <td>500.000 VNĐ</td>
                    <td>02/11/2024</td>
                    <td>Hoàn tất</td>
                    <td>
                        <button class="btn btn-info btn-sm">Chi tiết</button>
                    </td>
                </tr>
                <!-- Thêm các đơn hàng khác ở đây -->
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
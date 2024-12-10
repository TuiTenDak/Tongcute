<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý thông tin bệnh nhân</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <style>
        .table-responsive {
            margin-top: 20px;
        }
        
        .badge-status {
            font-weight: bold;
        }
        
        .badge-danger {
            background-color: #f44336;
            color: white;
        }
        
        .badge-success {
            background-color: #4caf50;
            color: white;
        }
        
        .hidden {
            display: none;
        }
        
        .dropdown-menu {
            min-width: 200px;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <h1 class="text-center">Quản lý thông tin bệnh nhân</h1>

        <div class="table-responsive">
            <table class="table table-bordered" id="appointmentTable">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Khách hàng</th>
                        <th>Điện thoại</th>
                        <th>Ngày sinh</th>
                        <th>Giới tính</th>
                        <th>Địa chỉ</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Tòng cute</td>
                        <td>0982954794</td>
                        <td>30/10/2024</td>
                        <td>
                            <span class="badge badge-danger">Nam</span>
                        </td>
                        <td>Quảng Ninh</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                <button class="btn btn-light btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="BacSiDD.php?page=medical_records">Xem hồ sơ bệnh án</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addNutritionMenuModal">Thêm thực đơn dinh dưỡng cho bệnh nhân</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Lê Thị Hương</td>
                        <td>0499751594</td>
                        <td>30/10/2024</td>
                        <td>
                            <span class="badge badge-success">Nữ</span>
                        </td>
                        <td>Bắc Kinh</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                <button class="btn btn-light btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Xem hồ sơ bệnh án</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addNutritionMenuModal">Thêm thực đơn dinh dưỡng</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-between mt-3">
            <div>
                <span id="pageInfo">Trang 1/1</span>
            </div>
            <div>
                <nav aria-label="Page navigation" id="pagination">
                    <ul class="pagination">
                        <li class="page-item disabled"><a class="page-link" href="#" onclick="changePage(-1)">«</a></li>
                        <li class="page-item active"><a class="page-link" href="#" onclick="changePage(0)">1</a></li>
                        <li class="page-item"><a class="page-link" href="#" onclick="changePage(1)">»</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Nutrition Menu Modal -->
    <div class="modal fade" id="addNutritionMenuModal" tabindex="-1" role="dialog" aria-labelledby="addNutritionMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNutritionMenuModalLabel">Thêm thực đơn dinh dưỡng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form nội dung thêm thực đơn -->
                    <form>
                        <div class="form-group">
                            <label for="menuName">Mã thực đơn</label>
                            <input type="text" class="form-control" id="menuName" placeholder="Nhập tên thực đơn">
                        </div>
                        <div class="form-group">
                            <label for="menuDescription">Mô tả</label>
                            <textarea class="form-control" id="menuDescription" rows="3" placeholder="Nhập mô tả thực đơn"></textarea>
                        </div>
                        <!-- Thêm các trường nhập khác nếu cần -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary">Lưu thực đơn</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        let currentPage = 0;
        const rowsPerPage = 5;
        const rows = document.querySelectorAll("#appointmentTable tbody tr");
        const totalPages = Math.ceil(rows.length / rowsPerPage);

        function changePage(direction) {
            currentPage += direction;

            if (currentPage < 0) {
                currentPage = 0;
            } else if (currentPage >= totalPages) {
                currentPage = totalPages - 1;
            }

            displayRows();
        }

        function displayRows() {
            const start = currentPage * rowsPerPage;
            const end = start + rowsPerPage;

            rows.forEach((row, index) => {
                row.classList.add('hidden');
                if (index >= start && index < end) {
                    row.classList.remove('hidden');
                }
            });

            document.getElementById("pageInfo").innerText = `Trang ${currentPage + 1}/${totalPages}`;
            document.querySelector('.page-item.active').classList.remove('active');
            document.querySelectorAll('.page-item')[1 + currentPage].classList.add('active');

            document.querySelector('.page-item.disabled').classList.toggle('disabled', currentPage === 0);
            document.querySelectorAll('.page-item')[2].classList.toggle('disabled', currentPage === totalPages - 1);
        }

        displayRows();
    </script>
</body>

</html>

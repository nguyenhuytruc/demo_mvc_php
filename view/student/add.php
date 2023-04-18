<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Học Sinh</title>
</head>
<body>
    <div class="themhocsinh">
        <a href="index.php?controller=student&action=list">Danh sách</a>
        <h3>Thêm mới học sinh</h3>
        <form action="", method="POST">
            <table>
                <tr>
                    <td>Tên học sinh:</td>
                    <td><input type="text" name="full_name" placeholder="Nhập tên"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" placeholder="Nhập email"></td>
                </tr>
                <tr>
                    <td>Số điện thoại:</td>
                    <td><input type="number" name="phone" placeholder="Nhập số điện thoại"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="add_student" value="Thêm mới"></td>
                </tr>
            </table>
        </form>
        <?php
            if (isset($success) && in_array('add_success', $success)) {
                echo "<p style='color: green'>Thêm mới thành công!</p>";
            }
        ?>
    </div>
</body>
</html>
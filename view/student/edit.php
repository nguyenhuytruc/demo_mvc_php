<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Học Sinh</title>
</head>
<body>
    <div class="themhocsinh">
        <a href="index.php?controller=student&action=list">Danh sách</a>
        <h3>Sửa học sinh</h3>
        <form action="", method="POST">
            <table>
                <tr>
                    <td>Tên học sinh:</td>
                    <td><input type="text" name="full_name" value="<?php echo $dataId['full_name']; ?>"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" value="<?php echo $dataId['email']; ?>"></td>
                </tr>
                <tr>
                    <td>Số điện thoại:</td>
                    <td><input type="number" name="phone" value="<?php echo $dataId['phone']; ?>"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="update_student" value="Cập nhập"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
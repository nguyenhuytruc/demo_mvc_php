<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách</title>
</head>
<body>
    <div>
        <form action="" method="GET">
        <table>
            <input type="hidden" name="controller" value="student">
            <tr>
            <td><input type="text" placeholder="Nhập tên học sinh" name="key"></td>
            <td><input type="submit" value="Tìm kiếm"></td>
            </tr>
        </table>
        <input type="hidden" name="action" value="search">
        </form>
    </div>
    <a href="index.php?controller=student&action=add">Thêm mới</a>
    <div>
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên học sinh</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $stt = 1;
                    foreach($data as $value){
                ?>
                <tr>
                    <td><?php echo $stt; ?></td>
                    <td><?php echo $value['full_name']; ?></td>
                    <td><?php echo $value['email']; ?></td>
                    <td><?php echo $value['phone']; ?></td>
                    <td>
                        <a href="index.php?controller=student&action=edit&id=<?php echo $value['id']; ?>">Sửa</a>
                        <a onclick="return confirm('Bạn có chắc muốn xóa học sinh này?')" href="index.php?controller=student&action=delete&id=<?php echo $value['id']; ?>">Xóa</a>
                    </td>
                </tr>
                <?php
                    $stt++;
                            }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thành viên</title>
</head>
<body>
    <div class="dangkythanhvien">
        <div class="header">
            <h3>Sửa thành viên</h3>
            <a href="index.php?action=list" class="list-btn">Danh sách</a>
        </div>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Tên thành viên:</td>
                    <td><input type="text" name="name" placeholder="Tên" value="<?php echo $dataID['name']; ?>"></td>
                </tr>
                <tr>
                    <td>Năm sinh:</td>
                    <td><input type="text" name="birthday" placeholder="Năm sinh" value="<?php echo $dataID['birthday']; ?>"></td>
                </tr>
                <tr>
                    <td>Quê quán:</td>
                    <td><input type="text" name="country" placeholder="Quê quán" value="<?php echo $dataID['country']; ?>"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input class="submit-btn" type="submit" value="Cập nhật" name="update_member"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
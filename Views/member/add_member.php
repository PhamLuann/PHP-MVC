<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Them thanh vien</title>
</head>
<body>
    <div class="dangkythanhvien">
        <div class="header">
            <h3>Thêm mới thành viên</h3>
            <a href="index.php?action=list" class="list-btn">Danh sách</a>
        </div>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Tên thành viên:</td>
                    <td><input type="text" name="name" placeholder="Tên"></td>
                </tr>
                <tr>
                    <td>Năm sinh:</td>
                    <td><input type="text" name="birthday" placeholder="Năm sinh"></td>
                </tr>
                <tr>
                    <td>Quê quán:</td>
                    <td><input type="text" name="country" placeholder="Quê quán"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input class="submit-btn" type="submit" value="Thêm" name="add_member"></td>
                </tr>
            </table>
        </form>
            <?php
                if(isset($success) && in_array('success', $success)){
                    echo '<script>alert("Them thanh cong")</script>';
                }
            ?>
    </div>
</body>
</html>
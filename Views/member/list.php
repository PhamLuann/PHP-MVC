<div class="list">
    <div class="header">
            <h3>Quản lí thành viên</h3>
            <a href="index.php?action=add" class="list-btn">Thêm thành viên</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Năm sinh</th>
                <th>Quê quán</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $stt = 1;
                foreach($datas as $data){

                
            ?>
            <tr>
                <td><?php echo $stt ?></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['birthday']; ?></td>
                <td><?php echo $data['country']; ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?php echo $data['id']; ?>">Edit</a>
                    <a href="index.php?action=delete&id=<?php echo $data['id']; ?>" title="Delete"
                    onclick="return confirm('Xóa thành viên <?php echo $data['name']; ?>?')">delete</a>
                </td>
            </tr>

            <?php
                $stt++;
                }
            ?>
        </tbody>
    </table>
</div>
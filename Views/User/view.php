<table class="table" border="1">
    <a href="?url=add-user">ADD</a>
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">STT</th>
        <th scope="col">Tên</th>
        <th scope="col">Tuổi</th>
        <th scope="col">Địa chỉ</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;  ?>
    <?php foreach($ttuser as $value) : ?>
    <tr>
        <th scope="row"></th></th>
        <td><?= $i ?></td>
        <td><?= $value['name'] ?></td>
        <td><?= $value['age'] ?></td>
        <td><?= $value['adress'] ?></td>
        <td>
            <a href="?url=edit-user&id=<?=$value['id']?>">Sua</a>
            <a href="?url=delete-user&id=<?=$value['id']?>" onclick="return confirm('Xóa sản phẩm')")">Xoa</a>
        </td>
    </tr>
    </tbody>
    <?php $i++ ?>
    <?php endforeach ?>
    </tbody>
</table>
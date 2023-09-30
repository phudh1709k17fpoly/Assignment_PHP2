<table class="table" border="1">
  <a href="?url=add-ct">ADD</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">STT</th>
      <th scope="col">Name</th>
      <th scope="col">price</th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1; ?>
    <?php foreach($customer as $value) : ?>
    <tr>
        <th scope="row"></th></th>
      <td><?= $i ?></td>
      <td><?= $value['ten'] ?></td>
      <td><?= $value['tuoi'] ?></td>
      <td>
        <a href="?url=edit-ct&id=<?=$value['id']?>">Sua</a>
        <a href="?url=delete-ct&id=<?=$value['id']?>" onclick="return confirm('Xóa sản phẩm')")">Xoa</a>
      </td>
    </tr>
  </tbody>
    <?php $i++ ?>
    <?php endforeach ?>
  </tbody>
</table>
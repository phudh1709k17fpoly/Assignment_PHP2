<form action="?url=edit-user&id=<?= $publicOne['id'] ?>" method="post">
  <a href="?url=user">Quay Lai</a>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Teen</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ten" value="<?= $publicOne['name'] ?>">
      <h6 style="color: red"><?php if(isset($error['ten'])){
              echo $error['ten'];
          } ?></h6>
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tuoi</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tuoi" value="<?= $publicOne['age'] ?>">
    <h6 style="color: red"><?php if(isset($error['tuoi'])){
            echo $error['tuoi'];
        } ?></h6>
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="diachi" value="<?= $publicOne['adress'] ?>">
    <h6 style="color: red"><?php if(isset($error['diachi'])){
            echo $error['diachi'];
        } ?></h6>
</div>
<input type="submit" name="updateUser" value="Gui">
<h6 style="color: green"><?php if(isset($success)){
        echo $success;
    } ?></h6>
</form>
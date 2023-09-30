
<form action="?url=add-user" method="post">
  <a href="?url=user">Quay Lai</a>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Teen</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ten" value="<?php echo isset($_POST['ten']) ? $_POST['ten'] : '';?>">
      <h6 style="color: red"><?php if(isset($error['ten'])){
              echo $error['ten'];
          } ?></h6>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tuoi</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tuoi" value="<?php echo isset($_POST['tuoi']) ? $_POST['tuoi'] : '';?>">
      <h6 style="color: red"><?php if(isset($error['tuoi'])){
              echo $error['tuoi'];
          } ?></h6>
  </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="diachi" value="<?php echo isset($_POST['diachi']) ? $_POST['diachi'] : '';?>">
        <h6 style="color: red"><?php if(isset($error['diachi'])){
                echo $error['diachi'];
            } ?></h6>
    </div>
<input type="submit" name="submitUser" value="Gui">
    <h6 style="color: green"><?php if(isset($success)){
            echo $success;
        } ?></h6>
</form>
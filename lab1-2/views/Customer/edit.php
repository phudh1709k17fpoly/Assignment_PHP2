
<form action="?url=edit-ct&id=<?=$ctmer['id']?>" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Teen </label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ten" value="<?=$ctmer['ten']?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tuoi</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tuoi" value="<?=$ctmer['tuoi']?>">
  </div>
  <h5><?php if(!empty($error['ct'])){
    echo $error['ct'];
  }?></h5>
 <input type="submit" name="submit" value="Gui">
</form>
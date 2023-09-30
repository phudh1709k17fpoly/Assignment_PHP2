<form action="?url=add-ct" method="post">
  <a href="?">Quay Lai</a>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Teen </label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ten">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tuoi</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tuoi">
  </div>
  <h5 style="color: red"><?php if(isset($error['ct'])){
      echo $error['ct'];
      } ?></h5>
 <input type="submit" name="submit" value="Gui">
</form>
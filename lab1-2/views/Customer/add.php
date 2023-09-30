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
  <h5><?php if(isset($product)){
      echo $product[0];
      } ?></h5>
 <input type="submit" name="submit" value="Gui">
</form>
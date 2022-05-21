<?php if(!empty($errors)): ?>
    <div class="alert alert-danger">
        <?php foreach($errors as $error): ?>
            <div><?php echo $error ?></div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    <form action=""  method="POST" enctype="multipart/form-data">
        <?php if($product['product_main_image']): ?>
            <img src="<?php echo $product["product_main_image"] ?>" alt="" class="edit-img">
                <?php endif; ?>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Image</label>
    <br>
    <input type="file" name="img">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Title</label>
    <input type="text" value="<?php echo $title?>" name="title" class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Description</label>
    <textarea class="form-control" name="description"><?php echo $description?></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Price</label>
    <input type="number" step=".01" value="<?php echo $price?>" class="form-control" name="price">
  </div>
  <div class="mb-3">
  <label for="CatId">Category ID</label>
      <select value="<?php $category ?>" name="category" id="CatId">
        <option value="1">Dog</option>
        <option value="2">Cat</option>
        <option value="3">Dog Food</option>
        <option value="4">Cat Food</option>
        <option value="5">Fish</option>
        
      </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
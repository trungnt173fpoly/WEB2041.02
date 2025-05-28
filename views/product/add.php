    <?php 
    include_once 'views/head.php';
    ?>
        <main class="col-md-10 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Products</h2>
        <div>
          <button class="btn btn-primary">+ Add product</button>
        </div>
      </div>

      <!-- Product Form 1 -->
      <form class="product-form">
        <div class="text-center mb-3">
          <img src="https://via.placeholder.com/80" alt="Product">
        </div>
        <div class="mb-3">
          <label class="form-label">Product Name</label>
          <input type="text" class="form-control" value="Fitbit Sense Advanced Smartwatch">
        </div>
        <div class="mb-3">
          <label class="form-label">Price</label>
          <input type="text" class="form-control" value="$39">
        </div>
        <div class="mb-3">
          <label class="form-label">Category</label>
          <input type="text" class="form-control" value="Plants">
        </div>
        <div class="mb-3">
          <label class="form-label">Vendor</label>
          <input type="text" class="form-control" value="Blue Olive Plant Sellers, Inc">
        </div>
        <div class="mb-3">
          <label class="form-label">Tags</label><br>
          <span class="tag">HEALTH</span>
          <span class="tag">EXERCISE</span>
          <span class="tag">DISCIPLINE</span>
        </div>
        <div class="mb-3">
          <label class="form-label">Published On</label>
          <input type="text" class="form-control" value="Nov 12, 10:45 PM">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
      </form>

      <!-- Product Form 2 -->
      <form class="product-form">
        <div class="text-center mb-3">
          <img src="https://via.placeholder.com/80" alt="Product">
        </div>
        <div class="mb-3">
          <label class="form-label">Product Name</label>
          <input type="text" class="form-control" value="iPhone 13 Pro Max 128GB">
        </div>
        <div class="mb-3">
          <label class="form-label">Price</label>
          <input type="text" class="form-control" value="$87">
        </div>
        <div class="mb-3">
          <label class="form-label">Category</label>
          <input type="text" class="form-control" value="Furniture">
        </div>
        <div class="mb-3">
          <label class="form-label">Vendor</label>
          <input type="text" class="form-control" value="Beatrice Furnitures">
        </div>
        <div class="mb-3">
          <label class="form-label">Tags</label><br>
          <span class="tag">CAMERA</span>
          <span class="tag">CLASS</span>
          <span class="tag">DISCIPLINE</span>
        </div>
        <div class="mb-3">
          <label class="form-label">Published On</label>
          <input type="text" class="form-control" value="Nov 11, 7:36 PM">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
      </form>

    </main>
    <?php 
    include_once 'views/footer.php';
    ?>
    <?php 
    include_once 'views/head.php';
    ?>
    <!-- Main content -->
    <main class="col-md-10 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Products</h2>
        <div>
          <button class="btn btn-primary">+ Add product</button>
        </div>
      </div>

      <!-- Product Table -->
      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead class="table-light">
            <tr>
              <th>Product Name</th>
              <th>Price</th>
              <th>Image</th>
              <th>Quantity</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              foreach($products as $product){
            ?>
            <tr>
              <td><?php echo $product->name ?></td>
              <td><?php echo $product->price ?></td>
              <td><img src="https://via.placeholder.com/40" class="rounded" alt="Product"></td>
              <td>
                <?php echo $product->quantity ?>
              </td>
              <td>
                <button>Sửa</button>
                <button>Xóa</button>
              </td>
            </tr>
            <?php 
              }
            ?>
            <!-- More rows here -->
          </tbody>
        </table>
      </div>
    </main>
    <?php 
    include_once 'views/footer.php';
    ?>
 
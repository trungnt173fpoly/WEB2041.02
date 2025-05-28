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
              <th></th>
              <th>Product Name</th>
              <th>Price</th>
              <th>Image</th>
              <th>Quantity</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><img src="https://via.placeholder.com/40" class="rounded" alt="Product"></td>
              <td>Fitbit Sense Advanced Smartwatch</td>
              <td>$39</td>
              <td>Plants</td>
              <td>
                <span class="tag">HEALTH</span>
                <span class="tag">EXERCISE</span>
                <span class="tag">DISCIPLINE</span>
              </td>
              <td>Blue Olive Plant Sellers, Inc</td>
              <td>Nov 12, 10:45 PM</td>
            </tr>
            <tr>
              <td><img src="https://via.placeholder.com/40" class="rounded" alt="Product"></td>
              <td>iPhone 13 Pro Max 128GB</td>
              <td>$87</td>
              <td>Furniture</td>
              <td>
                <span class="tag">CAMERA</span>
                <span class="tag">CLASS</span>
                <span class="tag">DISCIPLINE</span>
              </td>
              <td>Beatrice Furnitures</td>
              <td>Nov 11, 7:36 PM</td>
            </tr>
            <!-- More rows here -->
          </tbody>
        </table>
      </div>
    </main>
    <?php 
    include_once 'views/footer.php';
    ?>
 
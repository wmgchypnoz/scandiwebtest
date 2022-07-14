<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./styles.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
  <script src="./main.js" defer></script>
  <title>Product List</title>
</head>

<body>
  <header>
    <h1>Product List</h1>
    <div class="btn-section">
      <a href="./add-product.html"><button id="addBtn">ADD</button></a>
      <button id="delete-product-btn">MASS DELETE</button>
    </div>
  </header>
  <section class="main">
    <ul id="product-list">

      <?php
      $host = "192.168.0.100";
      $dbname = "wmgchypn_product";
      $username = "wmgchypn_product";
      $password = "1234";

      $conn = mysqli_connect(
        hostname: $host,
        username: $username,
        password: $password,
        database: $dbname
      );

      if (mysqli_connect_errno()) {
        die("Connection error: " . mysqli_connect_error());
      }

      $query = 'SELECT `sku`, `name`, `price`, `size`, `height`, `width`, `length`, `weight` FROM `product` ORDER BY `SKU` ASC';

      $result = mysqli_query($conn, $query);

      while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>";
        echo "<pre>" . implode("\n", $row) . "</pre>";
        echo "</li>";
      }
      ?>

    </ul>
  </section>
</body>

</html>
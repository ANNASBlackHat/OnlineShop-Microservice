<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>UNIQ Online Shop</title>
  </head>
  <body>
    <h1>Welcome to the best online market service</h1>
    <i>Please choose the menu </i>
    <ul>
      <?php
        $json = file_get_contents('http://product-service');
        $obj = json_decode($json);

        $products = $obj->product;
        foreach ($products as $product) {
          echo "<li>$product</li>";
        }
       ?>
    </ul>

  </body>
</html>

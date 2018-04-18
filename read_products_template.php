<?php
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    extract($row);


    //create the box
    echo "<div class='col-md-4 m-b-20px'>";

    //make id accessible for JS
    echo "<div class='product-id display-none'>{$id}</div>";

    echo "<a href='products.php?id={$id}' class='product-link'</a>";
    //select and show first product image
    $product_image->product_id=$id;
    $stmt_product_image=$product_image->readFirst();

    while ($row_product_image = $stmt_product_image->fetch(PDO::FETCH_ASSOC)){
        echo "<div class='m-b-10px'>";
        echo "<img src='uploads/images/{$row_product_image['name']}' class='w-100-pct'/>";
        echo "</div>";

    }

    //product name

    echo "<div class='product-name m-b-10px'>{$name}</div>";

}




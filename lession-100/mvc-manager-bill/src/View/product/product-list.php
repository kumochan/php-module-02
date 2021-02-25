<table class="table-list">
    <tr>
        <th>STT</th>
        <th>Product Code</th>
        <th>Product name</th>
        <th>Input Price</th>
        <th>Sale Price</th>
    </tr>


    <?php foreach ($products as $key => $product): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td>
                <a href="index.php?page=product-list&id=<?php echo $product['product_id'] ?>">
                    <?php echo 'DH-' . $product['product_id'] ?>
                </a>
            </td>
            <td><?php echo $product['name'] ?></td>
            <td><?php echo $product['price_input'] ?></td>
            <td><?php echo $product['price_sale'] ?></td>
        </tr>
    <?php endforeach; ?>

</table>
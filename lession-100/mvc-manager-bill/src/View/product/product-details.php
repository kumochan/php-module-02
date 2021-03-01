<h2>Detail product: <?php echo $product[0]['product_code']  ?></h2>
<h4>Product Informations: </h4>
<table class="table-list">
    <tr>
        <th>Product name</th>
        <td><?php echo $product[0]['product_name'] ?></td>
    </tr>
    <tr>
        <th>Product category</th>
        <td><?php echo $product[0]['category'] ?></td>
    </tr>
    <tr>
        <th>Product list_price</th>
        <td><?php echo $product[0]['list_price'] ?></td>
    </tr>

</table>

<div class="status-bill">
    <form method="post">
        Supplier company:
        <tr>
            <select>
                <?php foreach ($supplier_names as $name) : ?>
                    <option <?php if ($name == $product[0]['company']) : ?> selected <?php endif; ?> value="<?php echo $name; ?>">
                        <?php echo $name ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </tr>




        <input type="submit" value="Update status" />
    </form>
</div>
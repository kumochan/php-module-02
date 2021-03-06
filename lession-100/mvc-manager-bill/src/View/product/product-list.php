<main class="flex-shrink-0">
    <div class="container">
        <!-- <h1 class="mt-5">Sticky footer with fixed navbar</h1> -->
        <button class="btn btn-default" style="margin-top: 70px;">
            <a href="index.php?page=product-create">
                them san pham
            </a>
        </button>
        <table class="table table-striped table-hover">
            <tr>
                <th>STT</th>
                <th>Product Identity</th>
                <th>Product Code</th>
                <th>Product name</th>
                <th>Standard code</th>
                <th>Quantity per unit</th>
                <th>Supplier company</th>
                <th>Supplier first name</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($products as $key => $product) : ?>
                <tr>
                    <td class="text-center"><?php echo ++$key ?></td>
                    <td>
                        <a href="index.php?page=product-details&id=<?php echo $product['id'] ?>">
                            <?php echo 'DH-' . $product['id'] ?>
                        </a>
                    </td>
                    <td><?php echo $product['product_code'] ?></td>
                    <td><?php echo $product['product_name'] ?></td>
                    <td><?php echo $product['standard_cost'] ?></td>
                    <td><?php echo $product['quantity_per_unit'] ?></td>
                    <td><?php echo $product['company'] ?></td>
                    <td><?php echo $product['first_name'] ?></td>
                    <td class="text-danger">Delete | <span class="text-warning">Edit</span></td>
                </tr>
            <?php endforeach; ?>

        </table>
    </div>
</main>
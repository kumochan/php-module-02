<table class="table-list">
    <tr>
        <th>STT</th>
        <th>Order code</th>
        <th>Order date</th>
        <th>Status</th>
    </tr>


    <?php foreach ($bills as $key => $bill): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td>
                <a href="index.php?page=show-bill&id=<?php echo $bill['orderNumber'] ?>">
                    <?php echo 'DH-' . $bill['orderNumber'] ?>
                </a>
            </td>
            <td><?php echo $bill['orderDate'] ?></td>
            <td><?php echo $bill['status'] ?></td>
        </tr>
    <?php endforeach; ?>

</table>
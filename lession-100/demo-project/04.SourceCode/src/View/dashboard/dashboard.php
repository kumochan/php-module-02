<table class="table-list">
    <tr>
        <th>STT</th>
        <th>Category</th>
        <th>Total</th>
    </tr>


    <?php foreach ($profits as $key => $profit): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $profit['name'] ?></td>
            <td><?php echo $profit['total'] ?></td>
        </tr>
    <?php endforeach; ?>

</table>
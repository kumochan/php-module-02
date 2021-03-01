<table class="table-list">
    <tr>
        <th>STT</th>
        <th>Year</th>
        <th>Profit</th>
    </tr>


    <?php foreach ($profits as $key => $profit): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $profit['year'] ?></td>
            <td><?php echo $profit['total'] ?></td>
        </tr>
    <?php endforeach; ?>

</table>
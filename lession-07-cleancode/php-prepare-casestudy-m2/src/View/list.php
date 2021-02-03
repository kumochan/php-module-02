<h2>Danh sách khách hàng</h2>
<!-- <a href="./index.php?page=add">Thêm mới</a> -->
<table class="table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Full Name</th>
        <th>Age</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($customers as $key => $customer) { ?>
            <tr>
                <td><?php echo $key; ?></td>
                <td><?php echo "<br />"; print_r($customer['full_name']); ?></td>
                <td><?php echo "<br />"; print_r($customer['age']); ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php
//echo $customers['Nam'];
print_r($customers['Nam']['age']);
//print_r($customers);
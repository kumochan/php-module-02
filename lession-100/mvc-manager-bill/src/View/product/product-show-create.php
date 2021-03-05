<div class="container" style="margin-top: 70px;">
    <main>
        <div class="row g-3">
            <div class="col-md-12 col-lg-12">
                <h4 class="mb-3">Create product</h4>
                <form class="needs-validation" novalidate="" method="POST">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="product_code" class="form-label">Product code</label>
                            <input type="text" class="form-control" id="product_code" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="product_name" class="form-label">Product name</label>
                            <input type="text" class="form-control" id="product_name" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="list_price" class="form-label">List price</label>
                            <input type="text" class="form-control" id="list_price" placeholder="" value="" required="">
                        </div>
                        <div class="col-md-3">
                            <label for="discontinued" class="form-label">Discontinued</label>
                            <input type="text" class="form-control" id="discontinued" placeholder="" value="0" required="">
                        </div>
                        <div class="col-md-3 col-md-offset-3">
                            <label for="standard_cost" class="form-label">Standard code</label>
                            <input type="text" class="form-control" id="standard_cost" placeholder="" value="" required="">
                        </div>
                        <div class="col-md-6">

                            <label for="supplier_id" class="form-label">Supplier</label>
                            <select class="form-select" id="supplier_id" name="supplier_id" required="">
                                <option value="">-----</option>
                                <?php
                                foreach ($suppliers as $key => $supplier) : ?>
                                    <option value="$supplier['id']"><?php echo $supplier['first_name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                    </div>
                    <hr class="my-4">
                    <button class="btn btn-primary btn-lg" type="submit">Create product</button>
                </form>
            </div>
        </div>
    </main>
</div>
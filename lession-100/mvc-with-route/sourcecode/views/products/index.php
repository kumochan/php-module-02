<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row bg-title">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title">Product</h4> </div>
				<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <!-- <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro
                        </a> -->
                        <ol class="breadcrumb">
                        	<li><a href="#">Dashboard</a></li>
                        	<li class="active">Product list</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                	<div class="col-sm-12">
                		<div class="white-box">
                			<!-- <h3 class="box-title">Basic Table</h3> -->
                			<!-- <p class="text-muted">Add class <code>.table</code></p> -->
                			<div class="table-responsive">
                				<table class="table">
                					<thead>
                						<tr>
                							<th>#</th>
                							<th>Product ID</th>
                							<th>Product Name</th>
                							<th>Quantity Per Unit</th>
                							<th>Action</th>
                						</tr>
                					</thead>
                					<tbody>
                						<?php foreach ($products as $product) { ?>
                							<tr>
                								<td>1</td>
                								<td><?php echo $product->productId ?></td>
                								<td><?php echo $product->productName ?></td>
                								<td><?php echo $product->quantityPerUnit ?></td>
                								<td>
                									<button class="btn btn-success">Add</button>
                									<button class="btn btn-danger">Delete</button>
                									<button class="btn btn-warning">Edit</button>
                								</td>
                							</tr>
                						<?php } ?>
                					</tbody>
                				</table>
                			</div>
                		</div>
                	</div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com</footer>
        </div>
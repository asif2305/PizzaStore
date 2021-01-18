<?php require 'header.php'?>
<?php 
include('response.php');
$newObj = new DbQuery();
$emps = $newObj->getSupplierList();
?>


<section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

    <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">

                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">Baker</h1>
                    <!--  <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span></p> -->
                </div>

            </div>
        </div>
    </div>
</section>


<div class="container">
    <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
        <form>
            <table class="table">
                <thead>
                    <div class="col-md-0 col-sm-12 text-left ftco-animate">
                        <h3 class="mb-3 mt-5 bread">Recently Order Pizza</h3>
                        <!--  <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span></p> -->
                    </div>
                    <tr class="text-light">
                        <th scope="col">Order No</th>
                        <th scope="col">Pizza Name</th>
                        <th scope="col">Ingredients</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Process State</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="text-light">
                    <?php foreach($emps as $key => $emp) :?>
                    <tr>
                        <td><?php echo $emp['OrderId'] ?></td>
                        <td><?php echo $emp['PizzaName'] ?></td>
                        <td><?php echo $emp['IngredientIdWithConcat'] ?></td>
                        <td><?php echo $emp['CustomerName'] ?></td>
                        <td><?php echo $emp['StatusName'] ?></td>
                        <td>
                            <div class="btn-group" data-toggle="buttons">
                                <a href="baker.php?editID=<?php echo $emp['OrderId'] ?>" target="_blank"
                                    class="btn btn-warning btn-xs">Edit</a>
                                <a href="#" target="_blank" class="btn btn-danger btn-xs">Delete</a>
                                <a href="#" target="_blank" class="btn btn-primary btn-xs">View</a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </form>
    </div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <h2 class="text-dark">Add Supplier Data </h2>

                    <div class="form-group">
                        <label for="Supplier ID">Supplier Id</label>
                        <input type="text" class="" id="supplierId" name="supplierId" placeholder="Supplier Id">

                    </div>
                    <div class="form-group">
                        <label for="Supplier Name">Supplier Name</label>
                        <input type="text" class="" id="suppliername" name="suppliername" placeholder="Supplier Name">

                    </div>
                    <div class="form-group">
                        <label for="Supplier Name">Supplier Address</label>
                        <input type="text" class=" text-dark" id="supplieraddress" name="supplieraddress"
                            placeholder="Supplier Address">

                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save Data</button>
                </div>
            </form>
        </div>

    </div>
</div>

<div class="container">
    <div class="col-md-0 col-sm-12 text-left ftco-animate">
        <h3 class="mb-3 mt-5 bread text-dark">Add Supplier</h3>
        <!--  <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span></p> -->
    </div>
    <div class="jumbotron">
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Add Supplier
                </button>
            </div>
        </div>

    </div>
</div>

<?php require 'footer.php'?>
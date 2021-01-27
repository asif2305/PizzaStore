<div class="modal fade" id="ingredientModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">Add Ingredient</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="insertSupplier.php" method="POST">
                <div class="modal-body">

                    <div class="form-row">
                        <div class="form-group col-md-4" style="display:none">
                            <label for="Supplier ID ">Ingredint Id</label>
                            <input type="text" class="form-control" id="ingredientId" name="ingredientId" readonly
                                placeholder="Ingredient Id">

                        </div>
                        <div class="form-group col-md-4">
                            <label for="Ingredient Name">Ingredient Name</label>
                            <input type="text" class="form-control" id="ingredientname" name="ingredientname"
                                placeholder="Ingredient Name">

                        </div>
                        <div class="form-group col-md-4">
                            <label for="Buying Price">Buying Price</label>
                            <input type="number" class="form-control text-dark" id="buyingPrice" name="buyingPrice"
                                placeholder="Buying Price" min="0">

                        </div>
                        <div class="form-group col-md-4">
                            <label for="Buying Price">Selling Price</label>
                            <input type="number" class="form-control text-dark" id="sellingPrice" name="sellingPrice"
                                placeholder="Selling Price" min="0">

                        </div>
                        <div class="form-group col-md-4">
                            <label for="Buying Quantity">Buying Quantity</label>
                            <input type="number" class="form-control text-dark" id="buyingQuantity"
                                name="buyingQuantity" placeholder="Buying Quantity" min="0">

                        </div>
                        <div class="form-group col-md-4">
                            <label for="Available Quantity">Available Quantity</label>
                            <input type="number" class="form-control text-dark" id="availableQuantity"
                                name="availableQuantity" placeholder="Available Quantity" min="0">

                        </div>
                        <div class="form-group col-md-4">
                            <label for="Ingredient_visibility">Visibility list:</label>
                            <select class="form-control" id="Ingredient_visibility" name="Ingredient_visibility">
                                <option value="1">True</option>
                                <option value="0">False</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="Province">Regional Province:</label>
                            <select class="form-control" id="Province" name="Province">
                                <?php if(is_array($province)){?>
                                <?php foreach($province as $key => $province) :?>
                                <option value=<?php echo $province['ProvinceId']?>>
                                    <?php echo $province['ProvinceName'] ?>
                                </option>

                                <?php endforeach; ?>
                                <?php }?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="SupplierData">Supplier:</label>
                            <select class="form-control" id="SupplierData" name="SupplierData">
                                <?php if(is_array($emps)){?>
                                <?php foreach($emps as $key => $emps) :?>
                                <option value=<?php echo $emps['SupplierId']?>> <?php echo $emps['Name'] ?>
                                </option>

                                <?php endforeach; ?>
                                <?php }?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="BakerData">Baker:</label>

                            <?php if(is_array($pizza_baker)){?>
                            <?php foreach($pizza_baker as $key => $pizza_baker) :?>
                            <input type="text" class="form-control text-dark" id="bakerData" name="bakerData"
                                value="<?php echo $pizza_baker['FirstName']; ?><?php echo " "?><?php echo $pizza_baker['LastName']; ?>">
                            <input type="hidden" id="bakerid" name="bakerid" value=<?php echo $pizza_baker['UserId'];?>>

                            <?php endforeach; ?>
                            <?php }?>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="Ingredient_Insert_data" class="btn btn-primary">Save Data</button>
                </div>
            </form>
        </div>

    </div>
</div>
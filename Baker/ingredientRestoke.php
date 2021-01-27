<div class="modal fade" id="ingredientRestokeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">Restoke Ingredient</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="insertSupplier.php" method="POST">
                <div class="modal-body">

                    <div class="form-row">
                        <div class="form-group">

                            <input type="text" style="display:none" id="RestokeingredientId" name="RestokeingredientId">
                            <input type="text" style="display:none" id="RestockPrice_Id" name="RestockPrice_Id">
                            <input type="text" style="display:none" id="RestokeItemId" name="RestokeItemId">

                        </div>
                        <div class="form-group col-md-4">
                            <label for="Ingredient Name">Ingredient Name</label>
                            <input type="text" class="form-control" id="Restockingredientname"
                                name="Restockingredientname" placeholder="Ingredient Name" readonly>

                        </div>
                        <div class="form-group  col-md-4">
                            <label for="Buying Price">Buying Price</label>
                            <input type="number" class="form-control text-dark" id="RestockbuyingPrice"
                                name="RestockbuyingPrice" placeholder="Buying Price" min="0">

                        </div>
                        <div class="form-group  col-md-4">
                            <label for="Buying Price">Selling Price</label>
                            <input type="number" class="form-control text-dark" id="RestocksellingPrice"
                                name="RestocksellingPrice" placeholder="Selling Price" min="0">

                        </div>
                        <div class="form-group  col-md-4">
                            <label for="Buying Quantity">Buying Quantity</label>
                            <input type="number" class="form-control text-dark" id="RestockbuyingQuantity"
                                name="RestockbuyingQuantity" placeholder="Buying Quantity" min="0">

                        </div>
                        <div class="form-group  col-md-4">
                            <label for="Available Quantity">Available Quantity</label>
                            <input type="number" class="form-control text-dark" id="RestokeavailableQuantity"
                                name="RestokeavailableQuantity" placeholder="Available Quantity" readonly>

                        </div>
                        <div class="form-group  col-md-4">
                            <label for="Ingredient_visibility">Visibility list:</label>
                            <select class="form-control" id="RestokeIngredient_visibility"
                                name="RestokeIngredient_visibility" readonly>
                                <option value="1">True</option>
                                <option value="0">False</option>
                            </select>
                        </div>
                        <div class="form-group  col-md-4">
                            <label for="Province">Regional Province:</label>
                            <select class="form-control" id="RestokeProvince_Id" name="RestokeProvince_Id" disabled>
                                <?php  $province=$newObj->getProvinceList();?>
                                <?php if(is_array($province)){?>
                                <?php foreach($province as $key => $province) :?>
                                <option value=<?php echo $province['ProvinceId']?>>
                                    <?php echo $province['ProvinceName'] ?>
                                </option>

                                <?php endforeach; ?>
                                <?php }?>
                            </select>
                        </div>
                        <div class="form-group  col-md-4">
                            <label for="RestockSupplierData">Supplier:</label>
                            <select class="form-control" id="RestokeSupplierData" name="RestokeSupplierData" disabled>
                                <?php $emps = $newObj->getSupplierList();?>
                                <?php if(is_array($emps)){?>
                                <?php foreach($emps as $key => $emps) :?>
                                <option value=<?php echo $emps['SupplierId']?>> <?php echo $emps['Name'] ?>
                                </option>

                                <?php endforeach; ?>
                                <?php }?>
                            </select>
                        </div>
                        <div class="form-group  col-md-4">
                            <label for="Baker Name">Baker Name</label>
                            <input type="text" class="form-control text-dark" id="RestokeBakerName"
                                name="RestokeBakerName" readonly>

                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="Ingredient_Restock_data" class="btn btn-primary">Restoke Data</button>
                </div>
            </form>
        </div>

    </div>
</div>
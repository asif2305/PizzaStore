<div class="modal fade" id="ingredientEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">Edit Ingredient</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="insertSupplier.php" method="POST">
                <div class="modal-body">

                    <div class="form-row">
                        <div class="form-group">

                            <input type="text" style="display:none" id="EditingredientId" name="EditingredientId">
                            <input type="text" style="display:none" id="EditPrice_Id" name="EditPrice_Id">
                            <input type="text" style="display:none" id="ItemId" name="ItemId">

                        </div>
                        <div class="form-group col-md-4">
                            <label for="Ingredient Name">Ingredient Name</label>
                            <input type="text" class="form-control" id="Editingredientname" name="Editingredientname"
                                placeholder="Ingredient Name">

                        </div>
                        <div class="form-group  col-md-4">
                            <label for="Buying Price">Buying Price</label>
                            <input type="number" class="form-control text-dark" id="EditbuyingPrice"
                                name="EditbuyingPrice" placeholder="Buying Price" min="0">

                        </div>
                        <div class="form-group  col-md-4">
                            <label for="Buying Price">Selling Price</label>
                            <input type="number" class="form-control text-dark" id="EditsellingPrice"
                                name="EditsellingPrice" placeholder="Selling Price" min="0">

                        </div>
                        <div class="form-group  col-md-4">
                            <label for="Buying Quantity">Buying Quantity</label>
                            <input type="number" class="form-control text-dark" id="EditbuyingQuantity"
                                name="EditbuyingQuantity" placeholder="Buying Quantity" min="0">

                        </div>
                        <div class="form-group  col-md-4">
                            <label for="Available Quantity">Available Quantity</label>
                            <input type="number" class="form-control text-dark" id="EditavailableQuantity"
                                name="EditavailableQuantity" placeholder="Available Quantity" min="0">

                        </div>
                        <div class="form-group  col-md-4">
                            <label for="Ingredient_visibility">Visibility list:</label>
                            <select class="form-control" id="EditIngredient_visibility"
                                name="EditIngredient_visibility">
                                <option value="1">True</option>
                                <option value="0">False</option>
                            </select>
                        </div>
                        <div class="form-group  col-md-4">
                            <label for="Province">Regional Province:</label>
                            <select class="form-control" id="EditProvince_Id" name="EditProvince_Id">
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
                            <label for="EditSupplierData">Supplier:</label>
                            <select class="form-control" id="EditSupplierData" name="EditSupplierData" readonly>
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
                            <input type="text" class="form-control text-dark" id="BakerName" name="BakerName" readonly>

                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="Ingredient_Edit_data" class="btn btn-primary">Update Data</button>
                </div>
            </form>
        </div>

    </div>
</div>
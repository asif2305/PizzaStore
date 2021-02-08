<div class="modal fade" id="OrderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">Place Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="insertSupplier.php" method="POST">
                <div class="modal-body">
                    <div class="form-row">
                        <?php if(is_array($pizza_baker)){?>
                        <?php foreach($pizza_baker as $key => $pizza_baker) :?>
                        <input type="hidden" id="bakerid" name="bakerid" value=<?php echo $pizza_baker['UserId'];?>>
                        <input type="hidden" id="OrderStatudId" name="OrderStatudId" value="0">

                        <?php endforeach; ?>
                        <?php }?>
                        <div class="form-group  col-md-6">
                            <label for="Supplier ID">Customer Name</label>
                            <input type="text" class="form-control" id="customerName" name="customerName"
                                placeholder="Customer Name" required>

                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="Supplier Name">Customer Email</label>
                            <input type="text" class="form-control" id="customerEmail" name="customerEmail"
                                placeholder="Cusotmer Email" required>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="Customer Phone">Customer Phone</label>
                            <input type="tel" class="form-control text-dark" id="customerPhone" name="customerPhone"
                                placeholder="Customer Phone" required>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="Customer Address">Customer Address</label>
                            <input type="text" class="form-control text-dark" id="customerAddress"
                                name="customerAddress" placeholder="Customer Address" required>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="Ingredient List ">Ingredient List:</label>
                            <select class="form-control" id="IngredientList" name="IngredientList[]" multiple="multiple"
                                required>

                                <?php if(is_array($IngredientListData)){?>
                                <?php foreach($IngredientListData as $key => $IngredientListData) :?>
                                <option value=<?php echo $IngredientListData['IngredientId']?>>
                                    <?php echo $IngredientListData['Name']?>, <span style="color:green">From(</span>
                                    <?php echo $IngredientListData['ProvinceName']?><span style="color:green">)</span>,
                                    Price(
                                    <?php echo $IngredientListData['PricePerUnit']?>)
                                </option>

                                <?php endforeach; ?>
                                <?php }?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Base Pizza">Base Pizza</label>
                            <select class="form-control" id="BasePriceId" name="BasePriceId" class="selectpicker"
                                required>

                                <?php if(is_array($PizzaSizeList)){?>
                                <option value="">Select a Base Pizza</option>
                                <?php foreach($PizzaSizeList as $key => $PizzaSizeList) :?>
                                <option value=<?php echo $PizzaSizeList['SizeId']?>>
                                    <span style="color:green"> <?php echo $PizzaSizeList['BasePizzaName']?> ->
                                        Size -> <?php echo $PizzaSizeList['PizzaSize']?>
                                        Price ->
                                        <?php echo $PizzaSizeList['BasePrice']?></span>
                                </option>

                                <?php endforeach; ?>
                                <?php }?>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="insert_Order_data" class="btn btn-primary">Save Data</button>
                </div>
            </form>
        </div>

    </div>
</div>
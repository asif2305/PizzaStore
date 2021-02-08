<div>

    <div class="card mb-4">
        <div class="card-title text-center">
            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#ingredientModal">
                Add Ingredient
            </button>
        </div>
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Ingredient List
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>Ingredient Name</th>
                            <th>Regional Province</th>
                            <th>Supplier Name</th>
                            <th>Buying Price</th>
                            <th>Buying Quantity</th>
                            <th>Selling Price</th>
                            <th>Available Quantity</th>
                            <th>Visibility</th>
                            <th>Operations</th>
                        </tr>
                    </thead>

                    <tfoot class="text-center">
                        <tr>
                            <th>Ingredient Name</th>
                            <th>Regional Province</th>
                            <th>Supplier Name</th>
                            <th>Buying Price</th>
                            <th>Buying Quantity</th>
                            <th>Selling Price</th>
                            <th>Available Quantity</th>
                            <th>Visibility</th>
                            <th>Operations</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <?php if(is_array($ingredientList)){?>
                        <?php foreach($ingredientList as $key => $ingredientList) :?>
                        <tr>
                            <td style="display:none"><?php echo $ingredientList['IngredientId'] ?></td>
                            <td style="display:none"><?php echo $ingredientList['Price_Id'] ?></td>
                            <td style="display:none"><?php echo $ingredientList['ProvinceId'] ?></td>
                            <td style="display:none"><?php echo $ingredientList['BakerName'] ?></td>
                            <td style="display:none"><?php echo $ingredientList['SupplierId'] ?></td>


                            <td><?php echo $ingredientList['IngredientName'] ?></td>
                            <td><?php echo $ingredientList['ProvinceName'] ?></td>
                            <td><?php echo $ingredientList['SupplierName'] ?></td>
                            <td><?php echo $ingredientList['Buying_Price'] ?></td>
                            <td><?php echo $ingredientList['Buying_Quantity'] ?></td>
                            <td><?php echo $ingredientList['Selling_Price'] ?></td>
                            <td><?php echo $ingredientList['Available_Quantity'] ?></td>
                            <td style="display:none"><?php echo $ingredientList['Visibility'] ?></td>
                            <td>
                                <?php if($ingredientList['Visibility']=="1"):{?>
                                <div class="btn-group" data-toggle="buttons">
                                    <button type="button"
                                        class="btn btn-success btn-xs ShowOrHideIngredient">Show</button>
                                    <?php } else: {?>
                                    <div class="btn-group" data-toggle="buttons">
                                        <button type="button"
                                            class="btn btn-warning btn-xs ShowOrHideIngredient">Hide</button>
                                        <?php } endif?>
                            </td>
                            <td style="display:none"><?php echo $ingredientList['ItemId'] ?></td>
                            <td style="display:none"><?php echo $ingredientList['SupplierVisibility'] ?></td>
                            <td>
                                <div class="btn-group" data-toggle="buttons">
                                    <button type="button" class="btn btn-warning btn-xs editIngredient"><i
                                            class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-primary btn-xs restokeIngredient"><i
                                            class="fas fa-adjust"></i></button>
                                    <button type="button" class="btn btn-danger btn-xs deleteIngredient"><i
                                            class="fas fa-delete"></i></button>

                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php }?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div>

    <div class="card mb-4">
        <div class="card-title text-center">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#OrderModal">
                Place an Order
            </button>
        </div>
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Order List

        </div>

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>Order ID</th>
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Ingredient Name</th>
                            <th>Pizza Name</th>
                            <th>Pizza Size</th>
                            <th>Order Status</th>
                            <th>Ordered Time</th>
                            <th>Operations</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>Order ID</th>
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Ingredient Name</th>
                            <th>Pizza Name</th>
                            <th>Pizza Size</th>
                            <th>Order Status</th>
                            <th>Ordered Time</th>
                            <th>Operations</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        <?php if(is_array($OrderDataList)){?>
                        <?php foreach($OrderDataList as $key => $OrderDataList) :?>
                        <tr class="text-center">
                            <td style="display:none"><?php echo $OrderDataList['ingredientids'] ?></td>
                            <td style="display:none"><?php echo $OrderDataList['UserId'] ?></td>

                            <td><?php echo $OrderDataList['OrderId'] ?></td>
                            <td><?php echo $OrderDataList['CustomerName'] ?></td>
                            <td><?php echo $OrderDataList['Email'] ?></td>
                            <td><?php echo $OrderDataList['ingredientnames'] ?></td>

                            <td><?php echo $OrderDataList['BasePizzaName'] ?></td>
                            <td><?php echo $OrderDataList['PizzaSize'] ?></td>
                            <td style="display:none"><?php echo $OrderDataList['SizeId'] ?></td>
                            <?php if($OrderDataList['StatusId']==0):{?>
                            <td><span class="btn-danger"><?php echo $OrderDataList['StatusName'] ?></span></td>
                            <?php } else: {?>
                            <td><span class="btn-success"><?php echo $OrderDataList['StatusName'] ?></span></td>
                            <?php } endif?>
                            <td><?php echo $OrderDataList['date_trunc'] ?></td>
                            <td style="display:none"><?php echo $OrderDataList['baseprice'] ?></td>

                            <td>
                                <div class="btn-group" data-toggle="buttons">
                                    <button type="button" class="btn btn-danger btn-xs editExistingOrder"><i
                                            class="fas fa-create"></i> Place an
                                        Existing Order</button>

                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php }?>


                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
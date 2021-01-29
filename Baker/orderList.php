<div>

    <div class="card mb-4">

        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Order List

        </div>

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Ingredient Name</th>
                            <th>Order Status</th>
                            <th>Pizza Name</th>
                            <th>Pizza Size</th>
                            <th>Operations</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Ingredient Name</th>
                            <th>Order Status</th>
                            <th>Pizza Name</th>
                            <th>Pizza Size</th>
                            <th>Operations</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        <?php if(is_array($OrderDataList)){?>
                        <?php foreach($OrderDataList as $key => $OrderDataList) :?>
                        <tr>
                            <td style="display:none"><?php echo $OrderDataList['ingredientids'] ?></td>
                            <td style="display:none"><?php echo $OrderDataList['UserId'] ?></td>



                            <td><?php echo $OrderDataList['OrderId'] ?></td>
                            <td><?php echo $OrderDataList['CustomerName'] ?></td>
                            <td><?php echo $OrderDataList['Email'] ?></td>
                            <td><?php echo $OrderDataList['ingredientnames'] ?></td>
                            <td><?php echo $OrderDataList['StatusName'] ?></td>
                            <td><?php echo $OrderDataList['PizzaName'] ?></td>
                            <td><?php echo $OrderDataList['PizzaSize'] ?></td>

                            <td>
                                <div class="btn-group" data-toggle="buttons">
                                    <button type="button" class="btn btn-danger btn-xs processOrder"><i
                                            class="fas fa-create"></i> Complete Order</button>

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
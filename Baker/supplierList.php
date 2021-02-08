<div>

    <div class="card mb-4">
        <div class="card-title text-center">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#supplierModal">
                Add Supplier
            </button>
        </div>
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Supplier List

        </div>

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>Supplier ID</th>
                            <th>Supplier Name</th>
                            <th>Address</th>
                            <th>Identification Number</th>
                            <th>Visibility</th>
                            <th>Operations</th>


                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>Supplier ID</th>
                            <th>Supplier Name</th>
                            <th>Address</th>
                            <th>Identification Number</th>
                            <th>Visibility</th>
                            <th>Operations</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <?php if(is_array($emps)):{?>
                        <?php foreach($emps as $key => $emp) :?>
                        <tr>
                            <td><?php echo $emp['SupplierId'] ?></td>
                            <td><?php echo $emp['Name'] ?></td>
                            <td><?php echo $emp['Address'] ?></td>
                            <td><?php echo $emp['IdentificationNumber'] ?></td>
                            <td style="display:none"><?php echo $emp['Visibility'] ?></td>
                            <td>
                                <?php if($emp['Visibility']=="1"):{?>
                                <div class="btn-group" data-toggle="buttons">
                                    <button type="button"
                                        class="btn btn-success btn-xs ShowOrHideSupplier">Show</button>
                                    <?php } else: {?>
                                    <div class="btn-group" data-toggle="buttons">
                                        <button type="button"
                                            class="btn btn-warning btn-xs ShowOrHideSupplier">Hide</button>
                                        <?php } endif?>
                            </td>
                            <td>
                                <div class="btn-group" data-toggle="buttons">
                                    <button type="button" class="btn btn-warning btn-xs editSupplier"><i
                                            class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger btn-xs deleteSupplier"><i
                                            class="fas fa-delete"></i></button>

                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php } endif?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
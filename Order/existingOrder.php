<div class="modal fade" id="existingOrderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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

                        <input type="hidden" id="existingbakerid" name="existingbakerid">
                        <input type="hidden" id="existingOrderStatudId" name="existingOrderStatudId" value="0">
                        <input type="hidden" id="existingIngredientListID" name="existingIngredientListID">
                        <input type="hidden" id="existingSizeId" name="existingSizeId">


                        <div class="form-group  col-md-6">
                            <label for="Supplier ID">Customer Name</label>
                            <input type="text" class="form-control" id="existingcustomerName"
                                name="existingcustomerName" placeholder="Customer Name" required>

                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="Supplier Name">Customer Email</label>
                            <input type="text" class="form-control" id="existingcustomerEmail"
                                name="existingcustomerEmail" placeholder="Customer Email" required>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="Customer Phone">Customer Phone</label>
                            <input type="number" class="form-control text-dark" id="existingcustomerPhone"
                                name="existingcustomerPhone" placeholder="Customer Phone" required>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="Customer Address">Customer Address</label>
                            <input type="text" class="form-control text-dark" id="existingcustomerAddress"
                                name="existingcustomerAddress" placeholder="Customer Address" required>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="Ingredient List ">Ingredient Name:</label>
                            <input type="text" class="form-control text-dark" id="existingIngredientList"
                                name="existingIngredientList" disabled>

                        </div>

                        <div class="form-group col-md-6">
                            <label for="Supplier Name">Base Pizza</label>
                            <input type="text" class="form-control text-dark" id="existingsize" name="existingsize"
                                readonly="readonly">

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="existing_Order_data" class="btn btn-primary">Save Data</button>
                </div>
            </form>
        </div>

    </div>
</div>
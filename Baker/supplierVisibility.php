<div class="modal fade" id="ShowOrHideSupplierModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">Supplier is hidden!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="insertSupplier.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" id="ShowHidesupplierId" name="ShowHidesupplierId">
                    <h4>Do you want to Change the Visibility of Supplier ??</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                    <button type="submit" name="Supplier_Visibility_Status_data" class="btn btn-primary">Yes !! Change
                        Visibility.</button>
                </div>
            </form>
        </div>

    </div>
</div>
<!-- This supplierEdit.php is developed by Asif Ahmed and Matrikel-Nr:509701 -->
<div class="modal fade" id="supplierEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">Edit Supplier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="insertSupplier.php" method="POST">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Supplier ID">Supplier Id</label>
                            <input type="text" class="form-control" id="EditsupplierId" name="EditsupplierId" readonly
                                placeholder="Supplier Id">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="Supplier Name">Supplier Name</label>
                            <input type="text" class="form-control" id="Editsuppliername" name="Editsuppliername"
                                placeholder="Supplier Name">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="Supplier Name">Supplier Address</label>
                            <input type="text" class="form-control text-dark" id="Editsupplieraddress"
                                name="Editsupplieraddress" placeholder="Supplier Address">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="Supplier Name">Supplier Identification No</label>
                            <input type="text" class="form-control text-dark" id="Editsupplieridentificationno"
                                name="Editsupplieridentificationno" placeholder="Supplier Identification No">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="Visibility">Visibility list:</label>
                            <select class="form-control" id="Editvisibility" name="Editvisibility">
                                <option value="1">True</option>
                                <option value="0">False</option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="update_data" class="btn btn-primary">Update
                        Data</button>
                </div>
            </form>
        </div>

    </div>
</div>
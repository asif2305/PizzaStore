<!-- This ingredientDelete.php is developed by Asif Ahmed and Matrikel-Nr:509701 -->
<div class="modal fade" id="deleteIngredientModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">Delete Ingredient</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="insertSupplier.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" id="deletesupplierItemId" name="deletesupplierItemId">
                    <input type="hidden" id="deleteIngredientId" name="deleteIngredientId">
                    <input type="hidden" id="deletePriceId" name="deletePriceId">
                    <h4>Do you want to Delete this Data ??</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                    <button type="submit" name="delete_Ingredient_data" class="btn btn-primary">Yes !! Delete
                        it.</button>
                </div>
            </form>
        </div>
    </div>
</div>
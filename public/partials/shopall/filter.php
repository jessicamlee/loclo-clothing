<div class="filter-field">
    <div id="filter-btn" class="filter-btn is-flex">
        <p>Filter</p>
        <span class="material-symbols-outlined">filter_list</span>
    </div>
    <div id="filter-container" class="filter-container">
        <ul class="filter-list">
            <li>
                <input id="checkbox" type="checkbox" class="js-filter-products f0" value="1" name="product_cat[]" <?php if($product_cat == 1) {  echo 'checked'; } ?> />
                <label for="f0">Tops</label>
            </li>
            <li>
                <input id="checkbox" type="checkbox" class="js-filter-products f1" value="2" name="product_cat[]" <?php if($product_cat == 2) { echo 'checked'; } ?> />
                <label for="f1">Dresses</label>
            </li>
        </ul>
    </div>
</div>
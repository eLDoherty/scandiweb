<section class="section-form container">
    <form action="<?php echo BASEURL; ?>/addproduct/insert" method="POST" id="product_form">
        <div class="input-wrapper">
            <label for="sku">SKU</label>
            <input type="text" name="sku" id="sku" required>
        </div>
        <div class="input-wrapper">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
        </div>  
        <div class="input-wrapper">
            <label for="price">Price ($)</label>
            <input type="number" step="0.01" name="price" id="price" required> 
        </div>
        <div class="input-wrapper">
            <label for="productType">Type</label>
            <select name="productType" id="productType">
                <option value="">Choose Type</option>
                <option value="book">Book</option>
                <option value="dvd">DVD</option>
                <option value="furniture">Furniture</option>
            </select>
        </div>
        <div class="atrribute wrapper__dvd">
        <div class="input-wrapper">
            <label for="dvd">Size (MB)</label>
            <input type="number" step="0.01" name="size" id="size"> 
        </div>
        </div>
        <div class="atrribute wrapper__furniture">
        <div class="input-wrapper">
            <label for="height">Height (CM)</label>
            <input type="number" step="0.01" name="height" id="height"> 
        </div>
        <div class="input-wrapper">
            <label for="width">Width (CM)</label>
            <input type="number" step="0.01" name="width" id="width"> 
        </div>
        <div class="input-wrapper">
            <label for="length">Length (CM)</label>
            <input type="number" step="0.01" name="length" id="length"> 
        </div>
        </div>
        <div class="atrribute wrapper__book">
        <div class="input-wrapper">
            <label for="weight">Weight (KG)</label>
            <input type="number" step="0.01" name="weight" id="weight"> 
        </div>
        </div>
    </form>
</section>
<script src="<?php echo BASEURL; ?>/js/addProduct.js"></script>
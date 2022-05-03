

<?php $__env->startSection('content'); ?>

<form action="<?php echo e(route ('products.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
<div class="row">
    <div class="col-md-4"> 
Product Add 
</div>
<div class="col-md-8" style="text-align: right;"> 
<input type="submit" value="save"> 
 
<input type="button" value="cancel" onclick="document.location.href='<?php echo e(route ('products.index')); ?>'">
 
</div>
</div>
<hr>
<br>
<script>
    function productTypeSwitcher(value) {
        if(value == 1) { 
            $('#dvd').show(); 
            $('#furniture').hide(); 
            $('#book').hide(); 
        } 
        if(value == 2) { 
            $('#furniture').show(); 
            $('#dvd').hide(); 
            $('#book').hide(); 
        } if(value == 3) { 
            $('#book').show(); 
            $('#furniture').hide(); 
            $('#dvd').hide(); 
        }
    }
</script>

    <div class="row">
        <div class="col-md-2">
            SKU
        </div>
        <div class="col-md-10">
            <input type="text" class="form-control" id="sku" name="sku" value="<?php echo e(old('sku')); ?>">
            <?php if($errors->has('sku')): ?> <div style="color: red;"> <?php echo e($errors->first('sku')); ?> </div> <?php endif; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
        Name
        </div>
        <div class="col-md-10">
            <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name')); ?>">
            <?php if($errors->has('name')): ?> <div style="color: red;"> <?php echo e($errors->first('name')); ?> </div> <?php endif; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
        Price
        </div>
        <div class="col-md-10">
            <input type="text" class="form-control" id="price" name="price" value="<?php echo e(old('price')); ?>">
            <?php if($errors->has('price')): ?> <div style="color: red;"> <?php echo e($errors->first('price')); ?> </div> <?php endif; ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
        Type Switcher
        </div>
        <div class="col-md-10">
        <select class="form-control" id="productType" name="productType" onchange="productTypeSwitcher(this.value)">
            <option value="1" <?php echo e((old('productType') == 1 ? 'selected' : '')); ?>>DVD</option>
            <option value="2" <?php echo e((old('productType') == 2 ? 'selected' : '')); ?>>Furniture</option>
            <option value="3" <?php echo e((old('productType') == 3 ? 'selected' : '')); ?>>Book</option>
        </select> 
        </div>
    </div> 
    <?php echo $__env->make('products/inc/book', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('products/inc/dvd', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('products/inc/furniture', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</form>

<script>
    productTypeSwitcher(<?php echo e(old('productType')); ?>);
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\onlineshop\resources\views/products/add.blade.php ENDPATH**/ ?>
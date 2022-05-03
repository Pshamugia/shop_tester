

<?php $__env->startSection('content'); ?>
<form method="post" action="<?php echo e(route('products.delete')); ?>">
    <?php echo csrf_field(); ?>
<div class="row">
    <div class="col-md-4"> 
Product Add 
</div>
<div class="col-md-8" style="text-align: right;"> 
<input type="button" value="ADD" onclick="document.location.href='<?php echo e(route('products.add')); ?>'">
 
<input type="submit" value="MASS DELETE">
 
</div>
</div>
<hr>
 

<div class="row">

    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-4">
        
        <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <div> <input type="checkbox" name="ids[]" value="<?php echo e($product->id); ?>"> </div>
            <div class="card-text"> <?php echo e($product->name); ?> </div>
            <div class="card-text"> <?php echo e($product->sku); ?> </div>
            <div class="card-text"> <?php echo e($product->price); ?> </div>
            <?php $__currentLoopData = $product->options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($option->name); ?>: <?php echo e($option->value); ?><br>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\onlineshop\resources\views/products/index.blade.php ENDPATH**/ ?>
<div id="dvd"> 
    <div class="row">
        <div class="col-md-2">
        Size (MB)
        </div>
        <div class="col-md-10">
            <input type="text" class="form-control" id="size" name="size" value="<?php echo e(old('size')); ?>">
            <?php if($errors->has('size')): ?> <div style="color: red;"> <?php echo e($errors->first('size')); ?> </div> <?php endif; ?>
        </div>
    </div>

    Please, provide size
</div><?php /**PATH C:\xampp\htdocs\onlineshop\resources\views/products/inc/dvd.blade.php ENDPATH**/ ?>
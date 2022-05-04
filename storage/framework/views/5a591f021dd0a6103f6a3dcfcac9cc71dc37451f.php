<div id="furniture" style="display: none;"> 
    <div class="row">
        <div class="col-md-2">
       Height (CM)
        </div>
        <div class="col-md-10">
            <input type="text" class="form-control" id="height" name="height" value="<?php echo e(old('height')); ?>">
            <?php if($errors->has('height')): ?> <div style="color: red;"> <?php echo e($errors->first('height')); ?> </div> <?php endif; ?>

        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
       Width (CM)
        </div>
        <div class="col-md-10">
            <input type="text" class="form-control" id="width" name="width" value="<?php echo e(old('width')); ?>">
            <?php if($errors->has('width')): ?> <div style="color: red;"> <?php echo e($errors->first('width')); ?> </div> <?php endif; ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
       Lenght (CM)
        </div>
        <div class="col-md-10">
            <input type="text" class="form-control" id="length" name="length" value="<?php echo e(old('length')); ?>">
            <?php if($errors->has('length')): ?> <div style="color: red;"> <?php echo e($errors->first('length')); ?> </div> <?php endif; ?>

        </div>
    </div>

    Please, provide dimensions in HxWxL format
</div><?php /**PATH C:\xampp\htdocs\onlineshop\resources\views/products/inc/furniture.blade.php ENDPATH**/ ?>
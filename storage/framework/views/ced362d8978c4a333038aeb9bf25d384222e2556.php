<div id="book" style="display: none;"> 
<div class="row">
        <div class="col-md-2">
       Weight (KG)
        </div>
        <div class="col-md-10">
            <input type="text" class="form-control" id="weight" name="weight" value="<?php echo e(old('weight')); ?>">
            <?php if($errors->has('weight')): ?> <div style="color: red;"> <?php echo e($errors->first('weight')); ?> </div> <?php endif; ?>
        </div>
    </div>

    Please, provide weight
</div><?php /**PATH C:\xampp\htdocs\onlineshop\resources\views/products/inc/book.blade.php ENDPATH**/ ?>
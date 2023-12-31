<div class="tab-pane fade" id="socialNetwork" role="tabpanel" aria-labelledby="socialNetwork-tab">
    <h3 class="fz-20-b-22-black pb-20 m-0">Social Network</h3>
    <!-- Form -->
    <div class="px-30 py-30 box-shadow-5 bg-white bd-1 bd-r-5">
        <form action="<?php echo e(route('update.settings', auth()->user()->id)); ?>" method="post" class="d-flex flex-column g-20">
            <?php echo csrf_field(); ?>

            
            <input type="hidden" name="update" value="social">

            <?php
                $social_media = json_decode($creator->social_accounts);
            ?>

            <?php $__currentLoopData = $social_media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="input-wrap">
                    <label for="eInputInstagram" class="eForm-label text-capitalize"><?php echo e($key); ?></label>
                    <input type="text" class="form-control eForm-control" id="eInputInstagram"
                        name="<?php echo e($key); ?>"
                        <?php if($name != ''): ?> value="<?php echo e($name); ?>" aria-label="<?php echo e($name); ?>" 
                        <?php else: ?> placeholder="http//www" aria-label="http//www" <?php endif; ?> />
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <!-- Form Button -->
            <div class="d-flex justify-content-center gap-3 mt-10">
                <a href="#" class="btn-cancel">Cancel</a>
                <button type="submit" class="btn-save border-0">Save</button>
            </div>
        </form>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\projects\test sociopro\Sociopro\resources\views/frontend/paid_content/social_tab.blade.php ENDPATH**/ ?>
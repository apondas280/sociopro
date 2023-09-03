<form action="<?php echo e(route('make.order', $payment_gateway->identifier)); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <input type="hidden" name="amount" value="<?php echo e($payment_details['items'][0]['price']); ?>" required>
    <input type="hidden" name="user" value="<?php echo e(auth()->user()->id); ?>" required>
    <input type="submit" value="Pay by Paytm" class="btn btn-primary">
</form>
<?php /**PATH C:\xampp\htdocs\lastCheck\Sociopro\resources\views/payment/paytm/index.blade.php ENDPATH**/ ?>
<form action="<?php echo e(route('razorpay.order', $payment_gateway->identifier)); ?>" method="post">
    <?php echo csrf_field(); ?>

    <input type="hidden" name="price" value="<?php echo e($payment_details['items'][0]['price']); ?>">
    <button type="submit" class="btn btn-primary">Pay by Razorpay</button>
</form>
<?php /**PATH C:\xampp\htdocs\lastCheck\Sociopro\resources\views/payment/razorpay/index.blade.php ENDPATH**/ ?>
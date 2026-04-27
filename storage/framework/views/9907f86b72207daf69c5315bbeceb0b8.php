

<?php $__env->startSection('content'); ?>
<div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl mt-10 p-8">
    <div class="md:flex-col flex items-center">
        <div class="md:shrink-0">
            <div class="h-24 w-24 bg-blue-500 rounded-full flex items-center justify-center text-white text-3xl font-bold">
                <?php echo e(strtoupper(substr($username, 0, 1))); ?>

            </div>
        </div>
        <div class="p-8">
            <div class="flex items-center justify-center uppercase tracking-wide text-sm text-blue-500 font-bold"><?php echo e(strtoupper($role)); ?> Profile</div>
            <h1 class="flex items-center justify-center text-2xl leading-tight font-bold text-black uppercase">I'm <?php echo e($username); ?></h1>
            <?php if($role == 'user'): ?>
            <div class="mt-4 p-4 bg-blue-50 text-blue-700 rounded-lg text-sm">
                Lovely Customer. You have access to view our menu and place orders. Enjoy exploring our delicious offerings! 🍰🍪🍩
            </div>
            <?php endif; ?>
            <?php if($role == 'admin'): ?>
            <div class="mt-4 p-4 bg-blue-50 text-blue-700 rounded-lg text-sm">
                Lovely Administrator. You have full access to manage our menu and orders. Enjoy your administrative privileges! 🍰🍪🍩
            </div>
            <?php endif; ?>
        </div>
    </div>
        <div class="flex items-center justify-center space-x-4">
            <form action="<?php echo e(route('logout')); ?>" method="POST" class="inline">
                <?php echo csrf_field(); ?>
                <button type="submit" 
                        class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg text-sm font-bold transition-colors flex items-center justify-center shadow-md">
                    Log Out
                </button>
            </form>
        </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Admin\UTS-PWEB\resources\views/profile.blade.php ENDPATH**/ ?>
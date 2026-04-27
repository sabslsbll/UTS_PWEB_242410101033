

<?php $__env->startSection('content'); ?>
<div class="bg-white p-6 rounded-lg shadow-lg">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-blue-600">Pengelolaan Menu Tycake</h2>
        <span class="px-4 py-1 bg-blue-100 text-blue-600 rounded-full text-sm font-semibold">
            Mode: <?php echo e(ucfirst($role)); ?>

        </span>
    </div>

    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-blue-500 text-white">
                <th class="p-3 rounded-tl-lg">Nama Menu</th>
                <th class="p-3">Harga</th>
                <?php if($role == 'admin'): ?>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="border-b hover:bg-gray-50 transition">
                <td class="p-3 font-medium"><?php echo e($menu['nama']); ?></td>
                <td class="p-3 text-green-600 font-bold"><?php echo e($menu['harga']); ?></td>
                
                <?php if($role == 'admin'): ?>
                
                <?php endif; ?>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <?php if($role == 'user'): ?>
    <div class="mt-4 p-4 bg-blue-50 text-blue-700 rounded-lg text-sm">
        ℹ️ Anda login sebagai <strong>User</strong>. Anda hanya diperbolehkan melihat daftar menu tanpa izin mengubah data.
    </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Admin\UTS-PWEB\resources\views/pengelolaan.blade.php ENDPATH**/ ?>
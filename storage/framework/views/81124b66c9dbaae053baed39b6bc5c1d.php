<?php $__env->startSection('title', 'Manage Crop Details'); ?>
<?php $__env->startSection('page_title', 'Crop Details & Profiles'); ?>

<?php $__env->startSection('content'); ?>
<div class="space-y-6">

    <?php if(session('success')): ?>
        <div class="p-4 rounded-xl bg-amber-50 text-amber-800 border border-amber-200 text-sm font-semibold flex items-center justify-between">
            <span><i class="fa-solid fa-circle-check mr-2"></i> <?php echo e(session('success')); ?></span>
        </div>
    <?php endif; ?>

    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
        <div>
            <h2 class="text-xl font-bold text-gray-900">Crop Details Directory</h2>
            <p class="text-xs text-gray-500 mt-1">Manage crop profiles, varieties, soil parameters, climate & nutritional values.</p>
        </div>
        <a href="<?php echo e(route('admin.crop-details.create')); ?>" class="px-4 py-2.5 rounded-xl bg-amber-600 hover:bg-amber-700 text-white font-semibold text-sm transition-all shadow-sm flex items-center gap-2">
            <i class="fa-solid fa-plus"></i>
            <span>Add New Crop</span>
        </a>
    </div>

    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-gray-600">
                <thead class="bg-gray-50 text-xs font-semibold text-gray-500 uppercase border-b border-gray-100">
                    <tr>
                        <th class="px-6 py-3.5">Crop Name</th>
                        <th class="px-6 py-3.5">Category</th>
                        <th class="px-6 py-3.5">Scientific Name</th>
                        <th class="px-6 py-3.5">Harvest Days</th>
                        <th class="px-6 py-3.5 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <?php $__empty_1 = true; $__currentLoopData = $crops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="hover:bg-gray-50/80 transition-colors">
                            <td class="px-6 py-4 font-semibold text-gray-900">
                                <?php echo e($crop->name); ?>

                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex px-2.5 py-1 rounded-full text-xs font-semibold bg-amber-50 text-amber-800 border border-amber-100">
                                    <?php echo e($crop->category); ?>

                                </span>
                            </td>
                            <td class="px-6 py-4 text-xs italic text-gray-500">
                                <?php echo e($crop->scientific_name ?? 'N/A'); ?>

                            </td>
                            <td class="px-6 py-4 text-xs font-medium text-gray-600">
                                <?php echo e($crop->harvest_days ?? 'N/A'); ?>

                            </td>
                            <td class="px-6 py-4 text-right space-x-2">
                                <a href="<?php echo e(route('admin.crop-details.edit', $crop->id)); ?>" class="text-xs font-semibold text-indigo-600 hover:text-indigo-900 bg-indigo-50 px-3 py-1.5 rounded-lg border border-indigo-100 inline-block">
                                    Edit
                                </a>
                                <form action="<?php echo e(route('admin.crop-details.destroy', $crop->id)); ?>" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this crop profile?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="text-xs font-semibold text-rose-600 hover:text-rose-900 bg-rose-50 px-3 py-1.5 rounded-lg border border-rose-100">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="5" class="px-6 py-12 text-center text-gray-400">
                                No crop details found.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <?php if($crops->hasPages()): ?>
            <div class="px-6 py-4 border-t border-gray-100">
                <?php echo e($crops->links()); ?>

            </div>
        <?php endif; ?>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\NSDA\agri-hub\resources\views/admin/crop_details/index.blade.php ENDPATH**/ ?>
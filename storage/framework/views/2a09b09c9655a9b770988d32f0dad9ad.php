<?php $__env->startSection('title', 'Agricultural Information Hub - Admin Dashboard'); ?>
<?php $__env->startSection('page_title', 'Agri-Hub Overview & Statistics'); ?>

<?php $__env->startSection('content'); ?>
<div class="space-y-6">

    <!-- Top Metric Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <!-- Metric Card 1: Farming Guides -->
        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
            <div>
                <div class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Farming Guides</div>
                <div class="text-3xl font-bold text-gray-900 mt-1"><?php echo e($stats['farming_guides']); ?></div>
                <div class="text-xs text-emerald-600 font-medium mt-2">Active Tutorials</div>
            </div>
            <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-xl font-bold">
                <i class="fa-solid fa-book-open-reader"></i>
            </div>
        </div>

        <!-- Metric Card 2: Crop Details -->
        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
            <div>
                <div class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Crop Details</div>
                <div class="text-3xl font-bold text-gray-900 mt-1"><?php echo e($stats['crop_details']); ?></div>
                <div class="text-xs text-amber-600 font-medium mt-2">Crop Profiles</div>
            </div>
            <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-xl font-bold">
                <i class="fa-solid fa-wheat-awn"></i>
            </div>
        </div>

        <!-- Metric Card 3: Pest Control Strategies -->
        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
            <div>
                <div class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Pest Control (IPM)</div>
                <div class="text-3xl font-bold text-gray-900 mt-1"><?php echo e($stats['pest_controls']); ?></div>
                <div class="text-xs text-rose-600 font-medium mt-2">Eco Protection Plans</div>
            </div>
            <div class="w-12 h-12 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center text-xl font-bold">
                <i class="fa-solid fa-bugs"></i>
            </div>
        </div>

        <!-- Metric Card 4: Farmer Inquiries -->
        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
            <div>
                <div class="text-xs font-semibold text-gray-500 uppercase tracking-wider">Unread Inquiries</div>
                <div class="text-3xl font-bold text-gray-900 mt-1"><?php echo e($stats['unread_messages']); ?></div>
                <div class="text-xs text-indigo-600 font-medium mt-2">Pending Expert Advice</div>
            </div>
            <div class="w-12 h-12 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center text-xl font-bold">
                <i class="fa-solid fa-envelope-open-text"></i>
            </div>
        </div>

    </div>

    <!-- Main Content Split Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!-- Recent Farmer Inquiries Table (2 Cols) -->
        <div class="lg:col-span-2 bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
            <div class="p-6 border-b border-gray-100 flex items-center justify-between">
                <div>
                    <h3 class="font-bold text-gray-900 text-lg">Recent Farmer Inquiries & Attachments</h3>
                    <p class="text-xs text-gray-500">Inquiries submitted by farmers requesting agricultural expert guidance</p>
                </div>
                <a href="<?php echo e(route('admin.messages.index')); ?>" class="text-xs font-semibold text-emerald-600 hover:underline">
                    View All Inquiries &rarr;
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-gray-600">
                    <thead class="bg-gray-50 text-xs font-semibold text-gray-500 uppercase border-b border-gray-100">
                        <tr>
                            <th class="px-6 py-3">Farmer</th>
                            <th class="px-6 py-3">Subject / Issue</th>
                            <th class="px-6 py-3">Attachment</th>
                            <th class="px-6 py-3 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <?php $__empty_1 = true; $__currentLoopData = $recentMessages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr class="hover:bg-gray-50/80 transition-colors <?php echo e(!$msg->is_read ? 'font-semibold bg-emerald-50/30' : ''); ?>">
                                <td class="px-6 py-4">
                                    <div class="text-gray-900 font-medium"><?php echo e($msg->name); ?></div>
                                    <div class="text-xs text-gray-400 font-normal"><?php echo e($msg->email); ?></div>
                                </td>
                                <td class="px-6 py-4 max-w-xs truncate"><?php echo e($msg->subject); ?></td>
                                <td class="px-6 py-4">
                                    <?php if($msg->attachment): ?>
                                        <span class="inline-flex items-center gap-1 text-xs text-emerald-700 bg-emerald-50 px-2 py-1 rounded font-medium">
                                            <i class="fa-solid fa-paperclip"></i> Attached
                                        </span>
                                    <?php else: ?>
                                        <span class="text-xs text-gray-400">None</span>
                                    <?php endif; ?>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="<?php echo e(route('admin.messages.show', $msg->id)); ?>" class="text-xs text-emerald-600 hover:text-emerald-900 font-semibold">
                                        View Details
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="4" class="px-6 py-8 text-center text-gray-400 text-sm">
                                    No farmer inquiries received yet.
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Quick Actions Side Panel (1 Col) -->
        <div class="space-y-6">
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                <h3 class="font-bold text-gray-900 text-lg mb-4">Quick Management Actions</h3>
                <div class="space-y-3">
                    <a href="<?php echo e(route('admin.farming-guides.create')); ?>" class="w-full flex items-center justify-between p-3.5 rounded-xl bg-emerald-50 hover:bg-emerald-100 text-emerald-800 font-semibold text-sm transition-colors">
                        <span><i class="fa-solid fa-plus me-2"></i> Add Farming Guide</span>
                        <i class="fa-solid fa-chevron-right text-xs"></i>
                    </a>
                    <a href="<?php echo e(route('admin.crop-details.create')); ?>" class="w-full flex items-center justify-between p-3.5 rounded-xl bg-amber-50 hover:bg-amber-100 text-amber-800 font-semibold text-sm transition-colors">
                        <span><i class="fa-solid fa-plus me-2"></i> Add Crop Profile</span>
                        <i class="fa-solid fa-chevron-right text-xs"></i>
                    </a>
                    <a href="<?php echo e(route('admin.pest-controls.create')); ?>" class="w-full flex items-center justify-between p-3.5 rounded-xl bg-rose-50 hover:bg-rose-100 text-rose-800 font-semibold text-sm transition-colors">
                        <span><i class="fa-solid fa-plus me-2"></i> Add Pest Control Strategy</span>
                        <i class="fa-solid fa-chevron-right text-xs"></i>
                    </a>
                    <a href="<?php echo e(route('admin.blogs.create')); ?>" class="w-full flex items-center justify-between p-3.5 rounded-xl bg-blue-50 hover:bg-blue-100 text-blue-800 font-semibold text-sm transition-colors">
                        <span><i class="fa-solid fa-newspaper me-2"></i> Publish Agri News Article</span>
                        <i class="fa-solid fa-chevron-right text-xs"></i>
                    </a>
                    <a href="<?php echo e(route('admin.messages.index')); ?>" class="w-full flex items-center justify-between p-3.5 rounded-xl bg-indigo-50 hover:bg-indigo-100 text-indigo-800 font-semibold text-sm transition-colors">
                        <span><i class="fa-solid fa-inbox me-2"></i> Review Farmer Inquiries</span>
                        <i class="fa-solid fa-chevron-right text-xs"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\NSDA\agri-hub\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>
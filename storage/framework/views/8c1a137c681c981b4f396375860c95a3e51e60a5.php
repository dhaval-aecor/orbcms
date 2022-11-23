
<script>
    $(document).ready(function() {
        $('.collapse', '.js-form-entry-<?php echo e($id); ?>').on('shown.bs.collapse', function () {
            $('.js-form-entry-<?php echo e($id); ?>').prop('disabled',true).removeAttr('data-bs-toggle');
        });
    });
</script>

<div class="js-form-entry-<?php echo e($id); ?> card mb-3 not-collapsed-border collapsed card-order-holder card-bubble <?php if ($is_read): ?>bg-silver<?php else: ?>card-success<?php endif; ?>"
     data-bs-toggle="collapse" data-bs-target="#notif-entry-item-<?php echo e($id); ?>" aria-expanded="false"
     aria-controls="collapseExample">
    <div class="card-body">
        <?php if(!empty($module_name) && $module_name == 'admin/notifications'): ?>
            <div class="row align-items-center mb-3">
                <div class="col text-start text-left">
                    <span class="text-primary text-break-line-2"><?php _e("New form entry"); ?></span>
                </div>
            </div>
        <?php endif; ?>

            <div class="row align-items-center" data-bs-toggle="collapse" data-bs-target="#notif-entry-item-<?php echo e($id); ?>" >
            <div class="col" style="max-width:55px;">
                <i class="mdi mdi-email text-primary mdi-24px"></i>
            </div>
            <div class="col-10 col-sm item-id"><span class="text-primary">#<?php echo e($id); ?></span>
            </div>

            <div class="col-6 col-sm">
                <?php echo e(date('M d, Y', strtotime($created_at))); ?>

                <small class="text-muted"><?php echo e(date('h:s', strtotime($created_at))); ?>h</small>
            </div>

            <div class="col-6 col-sm"><?php echo e($ago); ?></div>
        </div>

        <div class="collapse" id="notif-entry-item-<?php echo e($id); ?>">
            <hr class="thin"/>
            <div class="row">
                <?php if(!empty($vals)): ?>
                    <?php $__currentLoopData = $vals->split(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6">
                            <h6><?php echo $loop->iteration == 1 ? '<strong>Fields</strong>' : ''; ?></h6>
                            <?php if(!empty($row)): ?>
                                <?php $__currentLoopData = $row; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <?php
                                        if (empty($val)) {
                                            continue;
                                        }
                                    ?>

                                    <?php if(!is_array($val)): ?>
                                        <div>
                                            <small class="text-muted"><?php echo e(str_replace('_', ' ', $key)); ?>:</small>
                                            <p><?php echo e($val); ?></p>
                                        </div>
                                    <?php else: ?>
                                        <?php if($key == 'uploads'): ?>
                                        <?php echo $__env->make('form::admin.notifications.uploads_listing_partial', $val, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php else: ?>
                                            <small class="text-muted"><?php echo e(str_replace('_', ' ', $key)); ?>:</small>
                                            <?php $__currentLoopData = $val; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valInner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <p><?php echo e($valInner); ?> <br /> </p>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\cms_web\src\MicroweberPackages\Form/resources/views/admin/notifications/new_form_entry.blade.php ENDPATH**/ ?>
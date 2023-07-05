

<?php $__env->startSection('title'); ?>
    view appointments
<?php $__env->stopSection(); ?>


<?php $__env->startSection('cont'); ?>
    <br>
    <br>
    <div class=" container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(_('All Appointments')); ?></div>
                    <div class="card-body">
                        <table class="table table-responsive table-strioe">
                            <thead>
                                <tr>
                                    <td>SL</td>
                                    <td>Customer Name</td>

                                    <td>Number</td>
                                    <td>Email</td>
                                    <td>Topic</td>
                                    <td>Appointment Date</td>
                                    <td>Appointment Date</td>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $appnts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(++$key); ?></td>
                                        <td><?php echo e($row->name); ?></td>
                                        <td><?php echo e($row->number); ?></td>
                                        <td><?php echo e($row->email); ?></td>
                                        <td><?php echo e($row->topic); ?></td>
                                        <td><?php echo e($row->app_date); ?></td>
                                        <td><?php echo e($row->app_time); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('appnts.delete', $row->id)); ?>" class="btn btn-sm btn-danger">Delete</a>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-file\resources\views/appoints/index.blade.php ENDPATH**/ ?>
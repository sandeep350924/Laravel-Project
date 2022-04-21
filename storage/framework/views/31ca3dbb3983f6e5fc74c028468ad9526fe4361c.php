

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    appointments(<?php echo e($bookings->count()); ?>)
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Date</th>
                                <th scope="col">User</th>
                                <th scope="col">Time</th>
                                <th scope="col">Doctor</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td scope="row"><?php echo e($key+1); ?></td>
                                <td><?php echo e($booking->date); ?></td>
                                <td><?php echo e($booking->user->name); ?></td>
                                <td><?php echo e($booking->time); ?></td>
                                <td><?php echo e($booking->doctor->name); ?></td>
                                <td>
                                    <?php if($booking->status==0): ?>
                                        <button class="btn btn-primary">
                                            Pending
                                        </button>
                                    <?php else: ?>
                                        <button class="btn btn-success">
                                            Checked
                                        </button>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <td>There is no appointments today!</td>
                            <?php endif; ?>
                        </tbody>
                    </table>    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doctor\resources\views/patientlist/index.blade.php ENDPATH**/ ?>
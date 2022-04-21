

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Your appointments(<?php echo e($appointments->count()); ?>)
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Doctor</th>
                                <th scope="col">Time</th>
                                <th scope="col">Date for</th>
                                <th scope="col">Çreated on date</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td scope="row"><?php echo e($key+1); ?></td>
                                <td><?php echo e($appointment->doctor->name); ?></td>
                                <td><?php echo e($appointment->time); ?></td>
                                <td><?php echo e($appointment->date); ?></td>
                                <td><?php echo e($appointment->created_at); ?></td>
                                <td>
                                    <?php if($appointment->status==0): ?>
                                        <button class="btn btn-primary">
                                            Not visited
                                        </button>
                                    <?php else: ?>
                                        <button class="btn btn-success">
                                            Checked
                                        </button>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <td>You have no appointments</td>
                            <?php endif; ?>
                        </tbody>
                    </table>    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doctor\resources\views/booking/index.blade.php ENDPATH**/ ?>


<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    appointments(<?php echo e($bookings->count()); ?>)
                </div>
                <form action="<?php echo e(route('patient')); ?>" method="GET">
                    <div class="card-header">
                        <h4>Filter : </h4>
                        <div class="row">
                            <div class="col-md-10">
                                <input type="text" class="form-control datetimepicker-input" id="datepicker" data-toggle="datetimepicker" data-target="#datepicker" name="date">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">
                                    Search
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Date</th>
                                <th scope="col">User</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Time</th>
                                <th scope="col">Doctor</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td scope="row"><?php echo e($key+1); ?></td>
                                <td><img src="/profile/<?php echo e($booking->user->image); ?>" width="80" style="border-radius:50%;"></td>
                                <td><?php echo e($booking->date); ?></td>
                                <td><?php echo e($booking->user->name); ?></td>
                                <td><?php echo e($booking->user->email); ?></td>
                                <td><?php echo e($booking->user->phone_number); ?></td>
                                <td><?php echo e($booking->user->gender); ?></td>
                                <td><?php echo e($booking->time); ?></td>
                                <td><?php echo e($booking->doctor->name); ?></td>
                                <td>
                                    <?php if($booking->status==0): ?>
                                        <a href="<?php echo e(route('update.status',[$booking->id])); ?>"><button class="btn btn-primary">
                                            Pending
                                        </button></a>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('update.status',[$booking->id])); ?>"><button class="btn btn-success">
                                            Checked
                                        </button></a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <td>There are no appointments today!</td>
                            <?php endif; ?>
                        </tbody>
                    </table>    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doctor\resources\views/admin/patientlist/index.blade.php ENDPATH**/ ?>
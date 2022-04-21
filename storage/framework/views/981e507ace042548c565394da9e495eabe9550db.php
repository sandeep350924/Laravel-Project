

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">Doctor Information</h4>
                    <img src="<?php echo e(asset('images')); ?>/<?php echo e($user->image); ?>" width="100px" style="border-radius:50%;">
                    <br>
                    <br>
                    <p class="lead">Name : <?php echo e(ucfirst($user->name)); ?></p>
                    <p class="lead">Degree : <?php echo e($user->education); ?></p>
                    <p class="lead">Department : <?php echo e($user->department); ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="alert alert-danger">
                <?php echo e($error); ?>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if(Session::has('errmessage')): ?>
                <div class="alert alert-danger">
                    <?php echo e(Session::get('errmessage')); ?>

                </div>
            <?php endif; ?>

            <?php if(Session::has('message')): ?>
                <div class="alert alert-success">
                    <?php echo e(Session::get('message')); ?>

                </div>
            <?php endif; ?>
            <form action="<?php echo e(route('booking.appointment')); ?>" method="POST"><?php echo csrf_field(); ?>
            <div class="card">
                <div class="card-header lead"><?php echo e($date); ?></div>

                <div class="card-body">
                    <div class="row">
                        <?php $__currentLoopData = $times; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3">
                            <label class="btn btn-outline-primary">
                                <input type="radio" name="time" value="<?php echo e($time->time); ?>">
                                <span>
                                    <?php echo e($time->time); ?>

                                </span>
                            </label>
                        </div>
                        <input type="hidden" name="doctorId" value="<?php echo e($doctor_id); ?>">
                        <input type="hidden" name="appointmentId" value="<?php echo e($time->appointment_id); ?>">
                        <input type="hidden" name="date" value="<?php echo e($date); ?>">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <?php if(Auth::check()): ?>
                <button type="submit" class="btn btn-success" style="width:100%0">
                    Book Appointment
                </button>
                <?php else: ?> 
                <p>Please login to make an appointment</p>
                <a href="/register">Register</a>
                <a href="/login">Login</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doctor\resources\views/appointment.blade.php ENDPATH**/ ?>
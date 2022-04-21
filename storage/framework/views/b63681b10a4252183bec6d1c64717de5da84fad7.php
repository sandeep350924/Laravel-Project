<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="/banner/pexels-pixabay-40568.jpg" class="img-fluid" style="border: 2px solid #ccc;border-radius: 10px;"  >
        </div>
        <div class="col-md-6">
            <h2>Create an account & Book your appointment</h2>
                <p>
                    Becoming a doctor is an enormous commitment because it takes years of dedicated studying and clinical preparation before you can practise as a doctor. As a doctor, you interact with patients, diagnose their problems and prescribe medicines to restore their physical and mental well-being. If you have a passion for becoming a doctor, understanding this job role can help you make an informed decision. In this article, we answer “What does a doctor do?”, explore their average salary, understand their workplace and work environment and learn the qualification and skills required to become a successful doctor.
                </p>
                <p>
                    If you are considering a career in health care, you may ask yourself, "What does a doctor do?". Doctors diagnose disease, provide treatment, counsel patients with injuries, diseases or illnesses. The specific duties depend upon the speciality you pursue in your MBBS. Some doctors work in cardiology, whereas others may work in surgery, neurology, pulmonology or rheumatology. 
                </p>
                <div class="mt-5">
                    <a href="<?php echo e(url('/register')); ?>"><button class="btn btn-success">
                        Resister as Patient
                    </button></a>
                    <a href="<?php echo e(url('/login')); ?>"><button class="btn btn-secondary">
                        Login
                    </button></a>
                </div>
        </div>
    </div>
    <hr>
<!-- search doctor -->
<form action="<?php echo e(url('/')); ?>" method="GET">    <div class="card">
        <div class="card-body">
            <div class="card-header">
                Find Doctors
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <input type="text" name="data" class="form-control" id="datepicker">
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary" type="submit">
                            Find Doctors
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


    <!-- display doctors -->
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                Doctors
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Book an appointment</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <img src="<?php echo e(asset('images')); ?>/<?php echo e($doctor->doctor->image); ?>" width="50px" style="border-radius:70%;">
                            </td>
                            <td>
                                <?php echo e($doctor->doctor->name); ?>

                            </td>
                            <td>
                                <?php echo e($doctor->doctor->department); ?>

                            </td>
                            <td>
                                <a href="<?php echo e(route('create.appointment',[$doctor->user_id,$doctor->date])); ?>"><button class="btn btn-success">
                                    Book Appointment
                                </button></a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <td>No doctors avilable today</td>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doctor\resources\views/welcome.blade.php ENDPATH**/ ?>
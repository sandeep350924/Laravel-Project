Dear <?php echo e($mailData['name']); ?>,
<p>Thank you for booking your appointment with medicalsupport</p>
<p>The details of your appointment are below : </p>
Time & Date : <?php echo e($mailData['time']); ?>, <?php echo e($mailData['date']); ?><br>
with : Dr. <?php echo e($mailData['doctorName']); ?><br>

where : 1st post office, Mumbai<br>
Contact : (91) 9876543210<?php /**PATH C:\xampp\htdocs\doctor\resources\views/email/appointment.blade.php ENDPATH**/ ?>
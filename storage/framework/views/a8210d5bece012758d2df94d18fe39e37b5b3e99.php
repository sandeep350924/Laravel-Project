<div class="page-wrap">
    <div class="app-sidebar colored">
        <div class="sidebar-header">
            <a class="header-brand" href="index.html">
            <div class="logo-img">
                               
            </div>
            <span class="text">Hospital</span>
            </a>
            <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
            <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
        </div>        
        <div class="sidebar-content">
            <div class="nav-container">
                <nav id="main-menu-navigation" class="navigation-main">
                    <div class="nav-lavel">Navigation</div>
                        <div class="nav-item active">
                            <a href="<?php echo e(url('dashboard')); ?>"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                        </div>
                        <?php if(auth()->check()&&auth()->user()->role->name === 'admin'): ?>
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Doctor</span><span class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="<?php echo e(route('doctor.create')); ?>" class="menu-item">Create</a>
                                <a href="<?php echo e(route('doctor.index')); ?>" class="menu-item">View</a>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if(auth()->check()&&auth()->user()->role->name === 'doctor'): ?>
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Appointment Time</span> <span class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="<?php echo e(route('appointment.create')); ?>" class="menu-item">Create</a>
                                <a href="<?php echo e(route('appointment.index')); ?>" class="menu-item">Check</a>
                            </div>
                        </div> 
                        <?php endif; ?>
                        <?php if(auth()->check()&&auth()->user()->role->name === 'admin'): ?>
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Patient Appointment</span> <span class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="<?php echo e(route('patient')); ?>" class="menu-item">Today Appointment</a>
                                <!-- <a href="<?php echo e(route('all.appointments')); ?>" class="menu-item">All Time Appointment</a> -->
                            </div>
                        </div> 
                        <?php endif; ?>  
                        <div class="nav-item active">
                            <a onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" href="<?php echo e(route('logout')); ?>"><i class="ik ik-power dropdown-icon"></i><span>Logout</span></a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                </nav>    
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\doctor\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand text-center">Sistem Informasi Managemen Order Iklan Radio Rhema</a>
                
            </div>
            

            <!-- <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>main/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul> -->
            

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <h4>
                            <?php echo $username .' - '.$leveluser; ?>
                            </h4>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>main"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
						<?php if ($leveluser == 'marketing' || $leveluser == 'superadmin') { ?>
						<!-- <li>
                            <a href="<?php echo base_url(); ?>marketing"><i class="fa fa-maxcdn fa-fw"></i> Marketing</a>
                        </li> -->
                        <li>
                            <a href="#"><i class="fa fa-maxcdn fa-fw"></i> Marketing<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="<?php echo base_url(); ?>marketing"><i class="fa fa-book fa-fw"></i> Order Marketing</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>marketing/user"><i class="fa  fa-user-md fa-fw"></i> Users</a>
                                </li>
                            </ul>
                        </li>
						<?php }  if ($leveluser == 'keuangan' || $leveluser == 'superadmin') { ?>
						<li>
                            <a href="<?php echo base_url(); ?>keuangan"><i class="fa fa-briefcase fa-fw"></i> Admin/Keuangan</a>
                        </li>
						<?php }  if ($leveluser == 'produksi' || $leveluser == 'superadmin') { ?>
						<li>
                            <a href="<?php echo base_url(); ?>produksi"><i class="fa fa-play-circle fa-fw"></i> Produksi</a>
                        </li>
						<?php }  if ($leveluser == 'penyiaran' || $leveluser == 'superadmin') { ?>
						<li>
                            <a href="<?php echo base_url(); ?>penyiaran"><i class="fa fa-bullhorn fa-fw"></i> Penyiaran</a>
                        </li>
						<?php }  if ($leveluser == 'klien' || $leveluser == 'superadmin') { ?>
						<li>
                            <a href="<?php echo base_url(); ?>klien"><i class="fa fa-user fa-fw"></i> Klien</a>
                        </li>
						<?php } if ($leveluser == 'superadmin') { ?>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Setting<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="<?php echo base_url(); ?>user">Users</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>status">Status</a>
                                </li>
                            </ul>
                        </li>
                        <?php } ?>
                        <li>
                            <a href="<?php echo base_url(); ?>main/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

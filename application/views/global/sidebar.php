        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" class="text-center" href="index.html">Sistem Informasi Managemen Order Iklan Radio Rhema</a>
                
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
						<li>
                            <a href="<?php echo base_url(); ?>marketing"><i class="fa fa-briefcase fa-fw"></i> Marketing</a>
                        </li>
						<?php } else if ($leveluser == 'keuangan' || $leveluser == 'superadmin') { ?>
						<li>
                            <a href="<?php echo base_url(); ?>keuangan"><i class="fa fa-dashboard fa-fw"></i> Admin/Keuangan</a>
                        </li>
						<?php } else if ($leveluser == 'produksi' || $leveluser == 'superadmin') { ?>
						<li>
                            <a href="<?php echo base_url(); ?>produksi"><i class="fa fa-dashboard fa-fw"></i> Produksi</a>
                        </li>
						<?php } else if ($leveluser == 'penyiaran' || $leveluser == 'superadmin') { ?>
						<li>
                            <a href="<?php echo base_url(); ?>penyiaran"><i class="fa fa-dashboard fa-fw"></i> Penyiaran</a>
                        </li>
						<?php } else if ($leveluser == 'klien' || $leveluser == 'superadmin') { ?>
						<li>
                            <a href="<?php echo base_url(); ?>klien"><i class="fa fa-dashboard fa-fw"></i> Klien</a>
                        </li>
						<?php } ?>
                        <li>
                            <a href="<?php echo base_url(); ?>main/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
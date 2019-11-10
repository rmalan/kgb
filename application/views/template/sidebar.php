            <div class="main-container">
                <div class="sidebar">
                    <nav class="sidebar-nav">
                        <ul class="nav">
                            <li class="nav-title">Menu</li>

                            <li class="nav-item">
                                <a href="<?php echo site_url('dashboard'); ?>" class="nav-link">
                                    <i class="icon icon-speedometer"></i> Dashboard
                                </a>
                            </li>

                            <?php if($this->session->userdata('level') === '7' || $this->session->userdata('level') === '11'): ?>
                                <li class="nav-item nav-dropdown">
                                    <a href="#" class="nav-link nav-dropdown-toggle">
                                        <i class="icon icon-people"></i> Nominatif <i class="fa fa-caret-left"></i>
                                    </a>

                                    <ul class="nav-dropdown-items">
                                        <li class="nav-item">
                                            <a href="<?php echo site_url('daftar-nominatif'); ?>" class="nav-link">
                                                <i class="icon icon-user-following"></i> Daftar Nominatif
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="<?php echo site_url('nominatif-manual'); ?>" class="nav-link">
                                                <i class="icon icon-user-follow"></i> Nominatif Manual
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="<?php echo site_url('nominatif-tertunda'); ?>" class="nav-link">
                                                <i class="icon icon-user-unfollow"></i> Nominatif Tertunda
                                            </a>
                                        </li>
                                    </ul>
                                </li>                            
                            <?php endif; ?>                            

                            <li class="nav-item">
                                <a href="<?php echo site_url('riwayat-kgb'); ?>" class="nav-link">
                                    <i class="icon icon-info"></i> Riwayat KGB
                                </a>
                            </li>   

                            <?php if($this->session->userdata('level') === '1'): ?>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('riwayat-proses'); ?>" class="nav-link">
                                        <i class="icon icon-graph"></i> Riwayat Proses KGB
                                    </a>
                                </li>
                            <?php endif;?>

                            <?php if($this->session->userdata('level') === '9'): ?>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('riwayat-proses/pegawai/' .$this->session->userdata('nip')); ?>" class="nav-link">
                                        <i class="icon icon-graph"></i> Riwayat Proses KGB
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if($this->session->userdata('level') === '7' || $this->session->userdata('level') === '11'): ?>
                                <li class="nav-item nav-dropdown">
                                    <a href="#" class="nav-link nav-dropdown-toggle">
                                        <i class="icon icon-options-vertical"></i> Master <i class="fa fa-caret-left"></i>
                                    </a>

                                    <ul class="nav-dropdown-items">
                                        <li class="nav-item">
                                            <a href="<?php echo site_url('konfigurasi-sk'); ?>" class="nav-link">
                                                <i class="icon icon-settings"></i> Konfigurasi SK
                                            </a>
                                        </li>
                                    </ul>

                                    <ul class="nav-dropdown-items">
                                        <li class="nav-item">
                                            <a href="<?php echo site_url('gaji-pokok'); ?>" class="nav-link">
                                                <i class="icon icon-layers"></i> Gaji Pokok
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            <?php endif; ?>

                            <?php if($this->session->userdata('level') === '7' || $this->session->userdata('level') === '11'): ?>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('laporan'); ?>" class="nav-link">
                                        <i class="icon icon-book-open"></i> Laporan
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>                        
                    </nav>
                </div>
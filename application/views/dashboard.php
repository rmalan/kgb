<div class="row">
    <div class="col-md-12">    
        <div class="alert alert-dismissible alert-success">Halo <?php echo $this->session->userdata('nama')." ".$this->session->userdata('nama_belakang'); ?>. Selamat datang di salah satu Layanan Elektronis Kepegawaian (LEni) Badan Kepegawaian Daerah (BKD) Provinsi Bengkulu, <b>e-KGB</b>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>    
    </div>
    <!-- Tampil di Operator BKD -->
    <?php if($this->session->userdata('level') === '11'): ?>    
    <div class="col-md-4">
        <div class="card p-4">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <a href="<?php echo site_url('dashboard/pegawai'); ?>">
                        <span class="h4 d-block font-weight-normal mb-2"><?php echo $asn; ?></span>
                        <span class="font-weight-light">Jumlah Pegawai</span>
                    </a>
                </div>

                <div class="h2 text-muted">
                    <a href="<?php echo site_url('dashboard/pegawai'); ?>">
                        <i class="icon icon-people"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>    

    <div class="col-md-4">
        <div class="card p-4">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <a href="<?php echo site_url('daftar-nominatif'); ?>">
                        <span class="h4 d-block font-weight-normal mb-2"><?php echo $daftarNominatif; ?></span>
                        <span class="font-weight-light">Daftar Nominatif</span>
                    </a>
                </div>

                <div class="h2 text-muted">
                    <a href="<?php echo site_url('daftar-nominatif'); ?>">
                        <i class="icon icon-user-following"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-4">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <a href="<?php echo site_url('nominatif-tertunda'); ?>">
                        <span class="h4 d-block font-weight-normal mb-2"><?php echo $nominatifTertunda; ?></span>
                        <span class="font-weight-light">Nominatif Tertunda</span>
                    </a>
                </div>

                <div class="h2 text-muted">
                    <a href="<?php echo site_url('nominatif-tertunda'); ?>">
                        <i class="icon icon-user-unfollow"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>    
    <?php endif; ?>

    <!-- Tampil di TU OPD -->
    <?php if($this->session->userdata('level') === '7'): ?>
    <div class="col-md-4">
        <div class="card p-4">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <a href="<?php echo site_url('dashboard/pegawai'); ?>">
                        <span class="h4 d-block font-weight-normal mb-2"><?php echo $asn_opd; ?></span>
                        <span class="font-weight-light">Jumlah Pegawai</span>
                    </a>
                </div>

                <div class="h2 text-muted">
                    <a href="<?php echo site_url('dashboard/pegawai'); ?>">
                        <i class="icon icon-people"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-4">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <a href="<?php echo site_url('daftar-nominatif'); ?>">
                        <span class="h4 d-block font-weight-normal mb-2"><?php echo $daftarNominatif_opd; ?></span>
                        <span class="font-weight-light">Daftar Nominatif</span>
                    </a>
                </div>

                <div class="h2 text-muted">
                    <a href="<?php echo site_url('daftar-nominatif'); ?>">
                        <i class="icon icon-user-following"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-4">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <a href="<?php echo site_url('nominatif-tertunda'); ?>">
                        <span class="h4 d-block font-weight-normal mb-2"><?php echo $nominatifTertunda_opd; ?></span>
                        <span class="font-weight-light">Nominatif Tertunda</span>
                    </a>
                </div>

                <div class="h2 text-muted">
                    <a href="<?php echo site_url('nominatif-tertunda'); ?>">
                        <i class="icon icon-user-unfollow"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>
<div class="col-md-12">
    <form id="konfigurasi-sk" method="post" action="" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header bg-light">
                Konfigurasi SK
            </div>

            <div class="card-body">
                <div class="row mb-5">
                    <div class="col-md-4 mb-4">
                        <div>Contoh Pratinjau SK</div>
                        <div class="text-muted small">Form yang diisi di bawah ini akan terlihat seperti gambar disamping.</div>
                    </div>

                    <div class="col-md-8">
                        <img src="<?php echo base_url('assets/images/kop_surat.png'); ?>" width="100%"/>
                        <img src="<?php echo base_url('assets/images/ttd_surat.png'); ?>" width="100%"/>
                    </div>
                </div>

                <hr>

                <div class="row mt-5">
                    <div class="col-md-4 mb-4">
                        <div>Konfigurasi SK</div>
                        <div class="text-muted small">Konfigurasi SK berfungsi untuk menampilkan data pada kop surat saat mencetak SK KGB</div>
                    </div>                    

                    <div class="col-md-8">      
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="userfile">Logo</label>
                                    <input type="file" name="logo" class="file" style="display: none;">
                                    <div class="input-group col-xs-12">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                                        <input type="hidden" name="id" value="<?php echo $config->config_id; ?>" />
                                        <input type="hidden" name="kode_skpd" value="<?php echo $config->config_skpd; ?>" />
                                        <input type="text" name="logo_lama" class="form-control input-lg" value="<?php echo $config->config_logo; ?>" readonly placeholder="Unggah Logo">
                                        <span class="input-group-btn">
                                        <button class="browse btn btn-secondary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Telusuri</button>
                                        </span>
                                    </div>
                                </div>     
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label">Kop bagian atas</label>
                                    <input name="kop_atas" class="form-control" value="<?php echo $config->config_kop_atas; ?>" placeholder="Masukkan nama daerah" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label">Kop bagian bawah</label>
                                    <input name="kop_bawah" class="form-control" value="<?php echo $config->config_kop_bawah; ?>" placeholder="Masukkan nama instansi" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="form-control-label">Alamat</label>
                                    <input name="alamat" class="form-control" value="<?php echo $config->config_alamat; ?>" placeholder="Masukkan alamat instansi" required>
                                </div>
                            </div>                                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Telp. </label>
                                    <input name="telp" class="form-control" value="<?php echo $config->config_telp; ?>" placeholder="Masukkan nomor telp. instansi" >
                                </div>
                            </div>
                        </div>    

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Website</label>
                                    <input name="web" class="form-control" value="<?php echo $config->config_web; ?>" placeholder="Masukkan alamat website instansi" >
                                </div>
                            </div>                    
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Email</label>
                                    <input name="email" class="form-control" value="<?php echo $config->config_email; ?>" placeholder="Masukkan alamat email instansi" >
                                </div>
                            </div>
                        </div>  

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label">Atas Nama</label>
                                    <input name="ttd_satu" class="form-control" value="<?php echo $config->config_ttd_satu; ?>" placeholder="Misalkan : a. n GUBERNUR BENGKULU" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label">Tanda Tangan</label>
                                    <input name="ttd_dua" class="form-control" value="<?php echo $config->config_ttd_dua; ?>" placeholder="Masukkan jabatan yang melakukan tanda tangan" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label">NIP Pejabat</label>
                                    <input id="nip" name="nip" class="form-control" value="<?php echo $config->config_nip_pejabat; ?>" placeholder="Masukkan nip pejabat" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label">Nama Pejabat</label>
                                    <input name="nama_pejabat" class="form-control" placeholder="" readonly>
                                </div>
                            </div>
                        </div>                   
                    </div>
                </div>
            </div>
            
            <div class="card-footer bg-light text-right">
                <a href="<?php echo site_url('konfigurasi-sk'); ?>" class="btn btn-secondary">Kembali</a>
                <button type="submit" value="true" name="submit" class="btn btn-primary">Perbaharui</button>
            </div>
        </div>
    </form>
</div>
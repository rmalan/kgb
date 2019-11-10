<div class="col-md-12">
    <div class="card">
        <div class="card-header bg-light">
            Form KGB
        </div>
        <div class="card-body">        
            <form class="row" id="form-kgb" method="post" action="">            
                <div class="col-md-6">                    
                    <div class="form-group">
                        <label for="nip" class="form-control-label">NIP :</label>
                        <input id="nip" name="nip" class="form-control" value="<?php echo $kgb->riwayatkgb_nip; ?>" readonly/>
                    </div>
                    <div class="form-group">
                        <label for="nama" class="form-control-label">Nama :</label>                        
                        <input id="nama" class="form-control" value="<?php echo $kgb->asn_nama; ?>" readonly/>
                        <input name="id" class="form-control-label" value="<?php echo $kgb->riwayatkgb_id; ?>" type="hidden" />
                    </div>
                    <div class="form-group">
                        <label for="pangol" class="form-control-label">Pangkat/Golong :</label>
                        <input id="pangol" class="form-control" value="<?php $gol = $kgb->asn_gol_akhir; echo $kgb->pangkat_nama." (".$gol.")"; ?>" readonly/>                        
                    </div>
                    <div class="form-group">
                        <label for="skpd" class="form-control-label">SKPD :</label>
                        <input id="skpd" class="form-control" value="<?php echo $kgb->skpd_nama; ?>" readonly/>                                                
                    </div>
                </div>                
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Gaji Lama</label>
                                <input type="text" id="gajilamaduit" class="form-control" placeholder="Masukkan jumlah gaji lama"  value="<?php echo $kgb->riwayatkgb_gaji_baru; ?>" maxlength="9" onchange="todesimal(this.value)" onkeyup="todesimal(this.value)" onkeypress="return onlyNumbers();">
                                <input type="hidden" id="gajilama" name="gaji_lama" class="form-control" readonly>
                            </div>
                        </div>                
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Gaji Baru</label>
                                <input type="text" id="gajibaruduit" class="form-control" placeholder="Masukkan jumlah gaji baru"  value="<?php $gol = $kgb->asn_gol_akhir; $masker_baru = $kgb->riwayatkgb_masa_kerja; $masker_baru2 = $masker_baru + 2; $query = $this->db->query("select gaji_pokok from ref_gaji where gaji_gol = '$gol' and gaji_masker = '$masker_baru2'")->row()->gaji_pokok; echo $query; ?>" maxlength="9" onchange="todesimal(this.value)" onkeyup="todesimal(this.value)" onkeypress="return onlyNumbers();">
                                <input type="hidden" id="gajibaru" name="gaji_baru" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="placeholder-input" class="form-control-label">Masa Kerja Lama (Tahun)</label>
                                <input id="placeholder-input" type="number" name="masker_lama" class="form-control" placeholder="Misalkan : 10" value="<?php echo $kgb->riwayatkgb_masa_kerja; ?>"/>
                            </div>                            
                        </div>                    
                        <div class="col-md-6">                            
                            <div class="form-group">
                                <label for="placeholder-input" class="form-control-label">Masa Kerja Baru (Tahun)</label>
                                <input id="placeholder-input" type="number" name="masker_baru" class="form-control" placeholder="Misalkan : 10" value="<?php $masker_baru = $kgb->riwayatkgb_masa_kerja; $masker_baru2 = $masker_baru + 2; echo $masker_baru2; ?>"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="datepicker" class="form-control-label">TMT KGB Lama</label>
                                <input id="datepicker" class="form-control" type="date" value="<?php $date = date_create($kgb->riwayatkgb_tmt); echo date_format($date,"Y-m-d"); ?>"/>                        
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="datepicker" class="form-control-label">TMT KGB Baru</label>
                                <input id="datepicker" name="tmt_baru" class="form-control" type="date" value="<?php $date = date_create($kgb->riwayatkgb_tmt); date_add($date,date_interval_create_from_date_string("2 years")); echo date_format($date,"Y-m-d"); ?>"/>                        
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="datepicker" class="form-control-label">KGB Selanjutnya</label>
                        <input id="datepicker" class="form-control" type="date" value="<?php $date = date_create($kgb->riwayatkgb_tmt); date_add($date,date_interval_create_from_date_string("4 years")); echo date_format($date,"Y-m-d"); ?>"/>                        
                    </div>
                </div>                  
                <div class="col-md-12">
                    <hr>
                </div>                                 
                <div class="col-md-12">                    
                    <p>Berdasarkan :</p>
                </div>                                    
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="dasar" class="form-control-label">Surat</label>
                        <input id="dasar" name="surat" class="form-control" value="<?php echo $kgb->riwayatkgb_surat; ?>"/>
                    </div>                            
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nosurat" class="form-control-label">Nomor Surat</label>
                        <input id="nosurat" name="no_surat" class="form-control" type="text" placeholder="Masukkan nomor surat" value="<?php echo $kgb->riwayatkgb_no_surat; ?>"/>
                    </div>                                                                                    
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="tglsurat" class="form-control-label">Tanggal Surat</label>
                        <input id="tglsurat" name="tgl_surat" class="form-control" type="date" value="<?php echo $kgb->riwayatkgb_tgl_surat; ?>"/>
                    </div>
                </div>                
                <div class="col-md-12">
                    <hr>
                </div>
                <div class="col-md-12 row align-items-center justify-content-center">                        
                    <button type="submit" name="submit" value="<?php echo $kgb->riwayatkgb_nip; ?>" class="btn btn-primary"><i class="fa fa-sync"></i> &nbsp; Proses KGB</button>                    
                </div>                                
            </form>                                    
        </div>
    </div>
</div>
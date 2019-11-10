<div class="col-md-12">
    <div class="card">
        <div class="card-header bg-light">
            Nominatif Manual
        </div>
        <div class="card-body">        								
            <form class="row" id="tambah-nominatif-form" method="post" action="">            
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-control-label">NIP</label>
                        <input name="nip" class="form-control" value="<?php echo $row->riwayatkgb_nip; ?>" readonly/>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Nama</label>
                        <input name="nama" class="form-control" value="<?php echo $row->asn_nama; ?>" readonly/>
                        <input name="id" class="form-control-label" value="<?php echo $row->riwayatkgb_id; ?>" type="hidden" />
                    </div>                                                            
                    <div class="form-group">
                        <label for="pangolasn" class="form-control-label">Pangkat/Golong :</label>
                        <input id="pangolasn" name="pangol" class="form-control" value="<?php $gol = $row->asn_gol_akhir; echo $row->pangkat_nama." (".$gol.")"; ?>" readonly/>                        
                    </div>
                    <div class="form-group">
                        <label for="skpdasn" class="form-control-label">SKPD :</label>
                        <input id="skpdasn" name="skpd" class="form-control" value="<?php echo $row->skpd_nama; ?>" readonly/>                                                
                    </div>
                </div>                
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-control-label">Masa Kerja (Tahun)</label>
                        <input type="number" name="masa_kerja" class="form-control" placeholder="Misalkan : 10" value="<?php echo $row->riwayatkgb_masa_kerja; ?>" readonly/>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Gaji Lama</label>
                                <input type="text" id="gajilamaduit" class="form-control" placeholder="Masukkan jumlah gaji lama"  value="<?php echo $row->riwayatkgb_gaji_lama; ?>" maxlength="9" onchange="todesimal(this.value)" onkeyup="todesimal(this.value)" onkeypress="return onlyNumbers();" readonly>
                                <input type="hidden" id="gajilama" name="gaji_lama" class="form-control" readonly>
                            </div>
                        </div>                
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Gaji Baru</label>
                                <input type="text" id="gajibaruduit" class="form-control" placeholder="Masukkan jumlah gaji baru"  value="<?php echo $row->riwayatkgb_gaji_baru; ?>" maxlength="9" onchange="todesimal(this.value)" onkeyup="todesimal(this.value)" onkeypress="return onlyNumbers();" readonly>
                                <input type="hidden" id="gajibaru" name="gaji_baru" class="form-control" readonly>
                            </div>
                        </div>
                    </div>                    
                    <div class="form-group">
                        <label for="datepicker" class="form-control-label">TMT</label>
                        <input id="datepicker" name="tmt" class="form-control" type="date" value="<?php echo $row->riwayatkgb_tmt; ?>" readonly/>                        
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
                        <input id="dasar" name="surat" class="form-control" type="text" placeholder="Masukkan jenis surat" value="<?php echo $row->riwayatkgb_surat; ?>" readonly/>
                    </div>                            
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nosurat" class="form-control-label">Nomor Surat</label>
                        <input id="nosurat" name="no_surat" class="form-control" type="text" placeholder="Masukkan nomor surat" value="<?php echo $row->riwayatkgb_no_surat; ?>" readonly/>
                    </div>                                                                                    
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="tglsurat" class="form-control-label">Tanggal Surat</label>
                        <input id="tglsurat" name="tgl_surat" class="form-control" type="date" value="<?php echo $row->riwayatkgb_tgl_surat; ?>" readonly/>
                    </div>
                </div>    
                <div class="col-md-12">  
                    <hr>                  
                    <div>
                        <p>Kelengkapan berkas :</p>
                    </div>                    
                    <div class="row">
                        <div class="col-md-3">
                            <div class="toggle-switch" data-ts-color="success">
                                <label for="spskpd" class="ts-label">Surat Pengantar SKPD</label>
                                <input id="spskpd" type="checkbox" hidden="hidden">
                                <label for="spskpd" class="ts-helper"></label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="toggle-switch" data-ts-color="success">
                                <label for="skp" class="ts-label">SKP terkakhir</label>
                                <input id="skp" type="checkbox" hidden="hidden">
                                <label for="skp" class="ts-helper"></label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="toggle-switch" data-ts-color="success">
                                <label for="kgb" class="ts-label">SK KGB terakhir</label>
                                <input id="kgb" type="checkbox" hidden="hidden">
                                <label for="kgb" class="ts-helper"></label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="toggle-switch" data-ts-color="success">
                                <label for="skpangkat" class="ts-label">SK pangkat terakhir</label>
                                <input id="skpangkat" type="checkbox" hidden="hidden">
                                <label for="skpangkat" class="ts-helper"></label>
                            </div>
                        </div>
                    </div>
                </div>                       
                <div class="col-md-12">
                    <hr>
                </div>
                <div class="col-md-12 row align-items-center justify-content-center">                                                                
                    <button type="submit" name="submit" value="tambah_nominatif" class="btn btn-primary">
                        <i class="fa fa-sync"></i> &nbsp; Tambah Nominatif
                    </button>                    
                </div>                
            </form>                                    
        </div>
    </div>
</div>
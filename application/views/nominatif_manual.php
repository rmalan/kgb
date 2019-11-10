<?php if($message = $this->session->flashdata('message')): ?>    
    <div class="col-md-12">    
    <div class="alert alert-dismissible alert-<?php echo ($message['status']) ? 'success' : 'danger'; ?>"><?php echo $message['message']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>    
</div>
<?php endif; ?>

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
                        <select id="nip" name="nip" class="form-control">                            
                            <option value=""> -- Pilih NIP Pegawai -- </option>
                            <!-- Tampil di Operator BKD -->
                            <?php if($this->session->userdata('level') === '11'): ?>
                            <?php $no = 0; foreach ($nominatifmanual as $row): ?>
                                <option value="<?php echo $row->asn_nip; ?>"><?php echo $row->asn_nip; ?></option>                            
                            <?php endforeach; ?>
                            <?php endif; ?>
                            <!-- Tampil di TU OPD -->
                            <?php if($this->session->userdata('level') === '7'): ?>
                            <?php $no = 0; foreach ($nominatifmanual_opd as $row): ?>
                                <option value="<?php echo $row->asn_nip; ?>"><?php echo $row->asn_nip; ?></option>                            
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>                    
                    <div class="form-group">
                        <label for="namaasn" class="form-control-label">Nama :</label>
                        <input id="namaasn" name="nama" class="form-control" value="" readonly/>
                    </div>                    
                    <div class="form-group">
                        <label for="pangolasn" class="form-control-label">Pangkat/Golong :</label>
                        <input id="pangolasn" name="pangol" class="form-control" value="" readonly/>                        
                    </div>
                    <div class="form-group">
                        <label for="skpdasn" class="form-control-label">SKPD :</label>
                        <input id="skpdasn" name="skpd" class="form-control" value="" readonly/>                                                
                    </div>
                </div>                
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-control-label">Masa Kerja (Tahun)</label>
                        <input type="number" name="masa_kerja" class="form-control" placeholder="Misalkan : 10" value=""/>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Gaji Lama</label>
                                <input type="text" id="gajilamaduit" class="form-control" placeholder="Masukkan jumlah gaji lama" maxlength="9" onchange="todesimal(this.value)" onkeyup="todesimal(this.value)" onkeypress="return onlyNumbers();">
                                <input type="hidden" class="form-control" id="gajilama" name="gaji_lama" readonly>                        
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Gaji Baru</label>
                                <input type="text" id="gajibaruduit" class="form-control" placeholder="Masukkan jumlah gaji baru" maxlength="9" onchange="todesimal(this.value)" onkeyup="todesimal(this.value)" onkeypress="return onlyNumbers();">
                                <input type="hidden" class="form-control" id="gajibaru" name="gaji_baru" readonly>                        
                            </div>
                        </div>
                    </div>                    
                    <div class="form-group">
                        <label for="datepicker" class="form-control-label">TMT KGB</label>
                        <input id="datepicker" name="tmt" class="form-control" type="date" value=""/>                        
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
                        <input id="dasar" name="surat" class="form-control" type="text" placeholder="Masukkan jenis surat" value=""/>
                    </div>                            
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nosurat" class="form-control-label">Nomor Surat</label>
                        <input id="nosurat" name="no_surat" class="form-control" type="text" placeholder="Masukkan nomor surat" value=""/>
                    </div>                                                                                    
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="tglsurat" class="form-control-label">Tanggal Surat</label>
                        <input id="tglsurat" name="tgl_surat" class="form-control" type="date" value=""/>
                    </div>
                </div>    
                <div class="col-md-12">  
                    <hr>                  
                    <div>
                        <p>Kelengkapan berkas :</p>
                    </div>                    
                    <div class="row">
                        <div class="col-md-3">
                            <input type="checkbox" name="spskpd" value="Y"> Surat Pengantar SKPD<br>
                        </div>
                        <div class="col-md-3">
                            <input type="checkbox" name="skp" value="Y"> SKP terakhir<br>
                        </div>
                        <div class="col-md-3">
                            <input type="checkbox" name="skkgb" value="Y"> SK KGB terakhir<br>
                        </div>
                        <div class="col-md-3">
                            <input type="checkbox" name="skpangkat" value="Y"> SK pangkat terakhir<br>
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
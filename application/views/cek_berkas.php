<div class="col-md-12">
    <div class="card">
        <div class="card-header bg-light">
            Cek Berkas KGB
        </div>
        <div class="card-body">        
            <form class="row" id="berkas-kgb" method="post" action="">            
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama" class="form-control-label">Nama :</label>                        
                        <input id="nama" class="form-control" value="<?php echo $nominatif_tertunda->asn_nama; ?>" readonly/>
                        <input name="id" class="form-control-label" value="<?php echo $nominatif_tertunda->riwayatkgb_id; ?>" type="hidden" />
                    </div>
                    <div class="form-group">
                        <label for="nip" class="form-control-label">NIP :</label>
                        <input id="nip" name="nip" class="form-control" value="<?php echo $nominatif_tertunda->riwayatkgb_nip; ?>" readonly/>
                    </div>
                    <div class="form-group">
                        <label for="pangol" class="form-control-label">Pangkat/Golong :</label>
                        <input id="pangol" class="form-control" value="<?php $gol = $nominatif_tertunda->asn_gol_akhir; echo $nominatif_tertunda->pangkat_nama." (".$gol.")"; ?>" readonly/>                        
                    </div>
                    <div class="form-group">
                        <label for="skpd" class="form-control-label">SKPD :</label>
                        <input id="skpd" class="form-control" value="<?php echo $nominatif_tertunda->skpd_nama; ?>" readonly/>                                                
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
                    <button type="submit" name="submit" value="<?php echo $nominatif_tertunda->riwayatkgb_id; ?>" class="btn btn-primary"><i class="far fa-check-circle"></i> &nbsp; Berkas KGB Lengkap</button>                                        
                </div>                
            </form>                                    
        </div>
    </div>
</div>
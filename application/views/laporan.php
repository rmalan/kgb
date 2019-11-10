<div class="col-md-12">
    <div class="card">
        <div class="card-header bg-light">
            Laporan
        </div>
        <div class="card-body">            
            <form id="laporan" method="post" action="<?php echo site_url('laporan/cetak') ?>">            
                <div class="form-group row">
                    <div class="col-md-2"></div>
                    <label for="tahun" class="col-sm-1 mt-2 form-control-label">Tahun</label>
                    <div class="col-md-5">
                        <select id="tahun" name="tahun" class="form-control">                                    
                            <option value=""> -- Pilih Tahun Periode -- </option>
                            <?php date_default_timezone_set("Asia/Jakarta"); $skrg = date("Y"); for($i = 0; $i < 5; $i++): ?>
                                <option value="<?php echo $skrg - $i; ?>"><?php echo $skrg - $i; ?></option>                            
                            <?php endfor; ?>
                        </select>
                    </div>                    
                    <div class="col-md-2">
                        <button type="submit" value="true" class="btn btn-secondary"><i class="fas fa-print"></i> &nbsp; Cetak</button>
                    </div>
                    <div class="col-md-2"></div>
                </div>                                
            </form>
        </div>
    </div>
</div>
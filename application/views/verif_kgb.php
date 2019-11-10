<div class="col-12">
    <div class="card">
        <div class="card-body p-0">
            <div class="row p-5">
                <div class="col-md-6">
                    <img src="<?php echo base_url('assets/images/bengkulu_coa.png'); ?>" height="100">
                </div>

                <div class="col-md-6 text-right">
                    <p class="font-weight-bold mb-1">Kenaikan Gaji Berkala</p>
                    <p class="text-muted"><?php $skrg = date("Y-m-d"); echo longdate_indo($skrg); ?></p>
                </div>
            </div>

            <hr>

            <div class="row pb-5 p-5">
                <div class="col-md-7">                    
                    <p class="font-weight-bold mb-4">Data ASN</p>
                    <div class="row">
                        <div class="col-md-4">
                            <input name="id" class="form-control-label" value="<?php echo $kgb->riwayatkgb_id_sblm; ?>" type="hidden" />
                            <p class="mb-1"><span class="text-muted">NIP</span></p>
                            <p class="mb-1"><span class="text-muted">Nama</span></p>                                
                            <p class="mb-1"><span class="text-muted">Pangkat/Golongan</span></p>
                            <p class="mb-1"><span class="text-muted">SKPD</span></p>
                        </div>
                        <div class="col-md-8">
                            <p class="mb-1">: <?php echo $kgb->riwayatkgb_nip; ?></p>
                            <p class="mb-1">: <?php echo $kgb->asn_nama; ?></p>                            
                            <p class="mb-1">: <?php $gol = $kgb->asn_gol_akhir; echo $kgb->pangkat_nama." (".$gol.")"; ?></p>
                            <p class="mb-1">: <?php echo $kgb->skpd_nama; ?></p>                    
                        </div>
                    </div>                    
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4">
                    <p class="font-weight-bold mb-4">Berdasarkan</p>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="mb-1"><span class="text-muted">Surat</span></p>    
                            <p class="mb-1"><span class="text-muted">Nomor Surat</span></p>                            
                            <p class="mb-1"><span class="text-muted">Tanggal Surat</span></p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-1">: <?php echo $kgb->riwayatkgb_surat; ?></p>
                            <p class="mb-1">: <?php echo $kgb->riwayatkgb_no_surat; ?></p>
                            <p class="mb-1">: <?php $tgl = date_create($kgb->riwayatkgb_tgl_surat); echo date_format($tgl,"d/m/Y"); ?></p>                    
                        </div>
                    </div> 
                </div>
            </div>

            <div class="row p-5">
                <div class="col-md-12">
                    <p class="font-weight-bold mb-4">Ditetapkan</p>
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="border-right text-uppercase small font-weight-bold">Keterangan</th>
                            <th class="border-right text-uppercase small font-weight-bold">KGB Lama</th>
                            <th class="text-uppercase small font-weight-bold">KGB Baru</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="border-right text-uppercase small font-weight-bold">TMT KGB</td>     
                            <td class="border-right">
                                <?php 
                                    $date = date_create($kgb->riwayatkgb_tmt);
                                    date_sub($date,date_interval_create_from_date_string("2 years"));
                                    echo date_format($date,"d/m/Y");
                                ?>
                            </td>                       
                            <td><?php echo shortdate_indo($kgb->riwayatkgb_tmt); ?></td>
                        </tr>
                        <tr>
                            <td class="border-right text-uppercase small font-weight-bold">Pangkat/Golongan</td>     
                            <td class="border-right"><?php $gol = $kgb->asn_gol_akhir; echo $kgb->pangkat_nama." (".$gol.")"; ?></td>                       
                            <td><?php $gol = $kgb->asn_gol_akhir; echo $kgb->pangkat_nama." (".$gol.")"; ?></td>
                        </tr>
                        <tr>
                            <td class="border-right text-uppercase small font-weight-bold">Masa Kerja</td>     
                            <td class="border-right"><?php echo $kgb->riwayatkgb_masa_kerja - 2; ?></td>
                            <td><?php echo $kgb->riwayatkgb_masa_kerja; ?></td>                            
                        </tr>
                        <tr>
                            <td class="border-right border-bottom text-uppercase small font-weight-bold">Gaji</td>     
                            <td class="border-right border-bottom">Rp. <?php echo number_format($kgb->riwayatkgb_gaji_lama, 2, ',', '.'); ?></tdclass>
                            <td class="border-bottom">Rp. <?php echo number_format($kgb->riwayatkgb_gaji_baru, 2, ',', '.'); ?></td>                            
                        </tr>                        
                        </tbody>
                    </table>                          
                </div>                                                    	                
            </div> 
            <div class="row pl-5">
                <div class="col-md-12">
                    <p class="mb-1"><span class="text-muted">*Sebelum mencetak SK pastikan bahwa Anda telah melakukan konfigurasi sk di menu <b>Master > Konfigurasi SK</b></span></p>     
                </div>
            </div>
            <hr>
            <div class="d-flex flex-row-reverse">
                <div class="py-3 px-5 text-center">
                    <div class="mb-2">Cetak SK</div>
                    <div class="h2 font-weight-light"><a href="<?php echo site_url('naik-gaji/cetak/'.$kgb->riwayatkgb_id_sblm); ?>" target="_blank" class="btn btn-secondary"><i class="fas fa-print"></i></i> &nbsp; Cetak</a></div>
                </div>
                <div class="py-3 px-5 text-center">
                    <div class="mb-2">Kembali ke Daftar Nominatif</div>
                    <div class="h2 font-weight-light"><a href="<?php echo site_url('daftar-nominatif'); ?>" class="btn btn-success"><i class="fas fa-list-ul"></i> &nbsp; Selesai</a></div>
                </div>                
            </div>
        </div>
    </div>
</div>
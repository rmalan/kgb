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
            Nominatif Tertunda
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIP</th>                            
                            <th>SKPD</th>                            
                            <th>TMT KGB</th>                            
                            <th>KGB Selanjutnya</th>                            
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Tampil di Operator BKD -->
                        <?php if($this->session->userdata('level') === '11'): ?>
                        <?php $no = 0; foreach($nominatif_tertunda as $row): ?>
                        <tr>
                            <td><?php echo ++$no; ?></td>
                            <td><?php echo $row->asn_nama; ?></td>
                            <td><?php echo $row->asn_nip; ?></td>                            
                            <td><?php echo $row->skpd_nama; ?></td>
                            <td><?php echo shortdate_indo($row->riwayatkgb_tmt); ?></td>                                                        
                            <td>
                                <?php 
                                    $date = date_create($row->riwayatkgb_tmt);
                                    date_add($date,date_interval_create_from_date_string("2 years"));
                                    echo date_format($date,"d/m/Y");
                                ?>
                            </td>
                            <td>                                
                                <a href="<?php echo site_url('nominatif-tertunda/cek-berkas/' . $row->riwayatkgb_id); ?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Cek Berkas KGB"><i class="fas fa-file"></i></a>
                                <a href="<?php echo site_url('riwayat-proses/pegawai/' .$row->asn_nip); ?>" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Riwayat Proses KGB"><i class="fas fa-history"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                        <!-- Tampil di TU OPD -->
                        <?php if($this->session->userdata('level') === '7'): ?>
                        <?php $no = 0; foreach($nominatiftertunda_opd as $row): ?>
                        <tr>
                            <td><?php echo ++$no; ?></td>
                            <td><?php echo $row->asn_nama; ?></td>
                            <td><?php echo $row->asn_nip; ?></td>                            
                            <td><?php echo $row->skpd_nama; ?></td>
                            <td><?php echo shortdate_indo($row->riwayatkgb_tmt); ?></td>                                                        
                            <td>
                                <?php 
                                    $date = date_create($row->riwayatkgb_tmt);
                                    date_add($date,date_interval_create_from_date_string("2 years"));
                                    echo date_format($date,"d/m/Y");
                                ?>
                            </td>
                            <td>                                
                                <a href="<?php echo site_url('nominatif-tertunda/cek-berkas/' . $row->riwayatkgb_id); ?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Cek Berkas KGB"><i class="far fa-file"></i></a>
                                <a href="<?php echo site_url('riwayat-proses/pegawai/' .$row->asn_nip); ?>" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Riwayat Proses KGB"><i class="fas fa-history"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
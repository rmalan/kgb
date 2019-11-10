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
            Konfigurasi SK
        </div>

        <div class="card-body">
            <div style="padding-bottom :15px; ">
                <a href="<?php echo site_url('konfigurasi-sk/tambah'); ?>" class="btn btn-primary">                    
                    <i class="fas fa-plus-circle"></i> &nbsp; Tambah                    
                </a>                      
            </div>
            <div class="table-responsive">
                <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode SKPD</th>                                                 
                            <th>Kop Surat Atas</th>
                            <th>Kop Surat Bawah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Tampil di Operator BKD -->
                        <?php if($this->session->userdata('level') === '11'): ?>
                        <?php $no = 0; foreach($config as $row): ?>
                        <tr>
                            <td><?php echo ++$no; ?></td>
                            <td><center><?php echo $row->config_skpd; ?></center></td>                                                        
                            <td><?php echo $row->config_kop_atas; ?></td>
                            <td><?php echo $row->config_kop_bawah; ?></td>
                            <td>
                                <a href="<?php echo site_url('konfigurasi-sk/ubah/'. $row->config_id); ?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fas fa-edit"></i></i></a>
                                <a href="<?php echo site_url('konfigurasi-sk/pratinjau/'. $row->config_id); ?>" target="_blank" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Pratinjau Cetak"><i class="fas fa-print"></i></a>
                                <a href="<?php echo site_url('konfigurasi-sk/hapus/'. $row->config_id); ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-trash"></i></i></a>
                            </td>
                        </tr>                    
                        <?php endforeach; ?>
                        <?php endif; ?>
                        <!-- Tampil di TU OPD -->
                        <?php if($this->session->userdata('level') === '7'): ?>
                        <?php $no = 0; foreach($config_opd as $row): ?>
                        <tr>
                            <td><?php echo ++$no; ?></td>
                            <td><center><?php echo $row->config_skpd; ?></center></td>                            
                            <td><?php echo $row->config_kop_atas; ?></td>
                            <td><?php echo $row->config_kop_bawah; ?></td>
                            <td>
                                <a href="<?php echo site_url('konfigurasi-sk/ubah/'. $row->config_id); ?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fas fa-edit"></i></i></a>
                                <a href="<?php echo site_url('konfigurasi-sk/pratinjau/'. $row->config_id); ?>" target="_blank" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Pratinjau Cetak"><i class="fas fa-print"></i></a>
                                <a href="<?php echo site_url('konfigurasi-sk/hapus/'. $row->config_id); ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus" onclick="return confirm('Yakin akan menghapus data ini?')"><i class="fas fa-trash"></i></a>
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
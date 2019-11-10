<div class="col-md-12">
    <div class="card">
        <div class="card-header bg-light">
            Aparatur Sipil Negara
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>                            
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Pangkat/Golongan</th>
                            <th>SKPD</th>                                                        
                        </tr>
                    </thead>
                    <tbody>       
                        <!-- Tampil di Operator BKD -->
                        <?php if($this->session->userdata('level') === '11'): ?>    
                        <?php $no = 0; foreach($asn as $row): ?>
                        <tr>
                            <td><?php echo ++$no; ?></td>
                            <td><?php echo $row->asn_nip; ?></td>
                            <td><?php echo $row->asn_nama; ?></td>
                            <td><?php echo $row->pangkat_nama." (".$row->asn_gol_akhir.")"; ?></td>
                            <td><?php echo $row->skpd_nama; ?></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                        <!-- Tampil di Operator BKD -->
                        <?php if($this->session->userdata('level') === '7'): ?>    
                        <?php $no = 0; foreach($asn_opd as $row): ?>
                        <tr>
                            <td><?php echo ++$no; ?></td>
                            <td><?php echo $row->asn_nip; ?></td>
                            <td><?php echo $row->asn_nama; ?></td>
                            <td><?php echo $row->pangkat_nama." (".$row->asn_gol_akhir.")"; ?></td>
                            <td><?php echo $row->skpd_nama; ?></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
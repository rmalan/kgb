<div class="col-md-12">
    <div class="card">
        <div class="card-header bg-light">
            Riwayat Proses KGB
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIP</th>                                                        
                            <th>Tanggal</th>                            
                            <th>Status</th>
                            <th>Operator</th>
                        </tr>
                    </thead>
                    <tbody>                    
                        <?php $no = 0; foreach($riwayat_proses as $row): ?>
                        <tr>
                            <td><?php echo ++$no; ?></td>
                            <td><?php echo $row->asn_nama; ?></td>
                            <td><?php echo $row->asn_nip; ?></td>                                                        
                            <td><?php echo shortdate_indo($row->kgbproses_tgl); ?></td>                            
                            <td><?php echo $row->riwayatproses_nama; ?></td>
                            <td><?php echo $row->kgbproses_operator; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
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
            Gaji Pokok
        </div>

        <div class="card-body">            
            <div class="table-responsive" >
                <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th><center>No</center></th>
                            <th><center>Golongan</center></th>                            
                            <th><center>Masa Kerja</center></th>
                            <th><center>Gaji Pokok</center></th>
                            <th><center>Aksi</center></th>
                        </tr>
                    </thead>
                    <tbody>                        
                        <?php $no = 0; foreach($gajiPokok as $row): ?>
                        <tr>
                            <td><center><?php echo ++$no; ?></center></td>
                            <td><center><?php echo $row->gaji_gol; ?></center></td>                            
                            <td><center><?php echo $row->gaji_masker; ?> Tahun</center></td>
                            <td>Rp. <?php echo number_format($row->gaji_pokok, 2, ',', '.'); ?></td>
                            <td><center>
                                <a 
                                    href = "javascript:;"
                                    data-id = "<?php echo $row->gaji_id; ?>"
                                    data-golongan = "<?php echo $row->gaji_gol; ?>"
                                    data-masker = "<?php echo $row->gaji_masker; ?>"
                                    data-gaji = "<?php echo $row->gaji_pokok ?>"
                                    data-toggle="modal" data-target="#modal">
                                    <button class="btn btn-primary" data-target="#ubah" data-toggle="modal" data-placement="top" title="Ubah"><i class="fas fa-edit"></i></button>                                                              
                                </a>                                
                            </center></td>
                        </tr>                    
                        <?php endforeach; ?>                                                
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary border-0">
                <h5 class="modal-title text-white">Ubah Gaji Pokok</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>  
            <form id="ubah-gaji-form" method="post" action="">                    
            <div class="modal-body">             
                <div class="col-md-12">   
                    <div class="form-group">
                        <label class="form-control-label">Gologan</label>
                        <input type="hidden" id="id" name="id" value=""/>
                        <input id="golongan" name="golongan" class="form-control" value="" readonly/>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Masa Kerja (Tahun)</label>
                        <input id="masker" name="masa_kerja" class="form-control" value="" readonly/>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Gaji Pokok</label>
                        <input id="gaji" name="gaji_pokok" class="form-control" value=""/>                        
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Batal</button>
                <button type="submit" name="submit" value='.$row->gaji_id.' class="btn btn-primary">Perbaharui</button>
            </div>            
            </form>
        </div>
    </div>
</div>
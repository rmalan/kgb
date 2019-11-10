<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $pageTitle; ?> | e-KGB - Leni BKD</title>
        <!-- CSS -->
        <style type="text/css">
            table {
                width: 100%;
                border: 1px solid #C6C6C6;
                border-collapse: collapse;                
            }
            table, td, th {
                padding: 5px;
                border: 1px solid #C6C6C6;
            }
        </style>
    </head>
    <body>        
        <h3><p align="center">
            e-KGB<br/>Layanan Elektronis Kepegawaian<br/>Badan Kepegawaian Daerah Provinsi Bengkulu
        </p></h3>        
        Nominatif KGB tahun <?php echo $tahun; ?>
        <table>    
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Pangkat/Golongan</th>
                    <th>SKPD</th>
                    <th>TMT</th>
                    <!--
                    <th>KGB Selanjutnya</th>
                    -->
                </tr>
            </thead>
            <tbody>
                <!-- Tampil di Operator BKD -->
                <?php if($this->session->userdata('level') === '11'): ?>
                <?php $no = 0; foreach($daftarNominatif as $row): ?>
                <tr>
                    <td align="center"><?php echo ++$no; ?></td>
                    <td><?php echo $row->asn_nama; ?></td>
                    <td><?php echo $row->asn_nip; ?></td>
                    <td><?php echo $row->pangkat_nama." (".$row->asn_gol_akhir.")"; ?></td>
                    <td><?php echo $row->skpd_nama; ?></td>                            
                    <td><?php echo shortdate_indo($row->riwayatkgb_tmt); ?></td>
                    <!--
                    <td>
                        <?php 
                            $date = date_create($row->riwayatkgb_tmt);
                            date_add($date,date_interval_create_from_date_string("2 years"));
                            echo date_format($date,"d/m/Y");
                        ?>
                    </td>
                    -->
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
                <!-- Tampil di OPD -->
                <?php if($this->session->userdata('level') === '7'): ?>
                <?php $no = 0; foreach($daftarNominatif_opd as $row): ?>
                <tr>
                    <td align="center"><?php echo ++$no; ?></td>
                    <td><?php echo $row->asn_nama; ?></td>
                    <td><?php echo $row->asn_nip; ?></td>
                    <td><?php echo $row->pangkat_nama." (".$row->asn_gol_akhir.")"; ?></td>
                    <td><?php echo $row->skpd_nama; ?></td>                            
                    <td><?php echo shortdate_indo($row->riwayatkgb_tmt); ?></td>
                    <!--
                    <td>
                        <?php 
                            $date = date_create($row->riwayatkgb_tmt);
                            date_add($date,date_interval_create_from_date_string("2 years"));
                            echo date_format($date,"d/m/Y");
                        ?>
                    </td>
                    -->
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <br/><br/>
        Nominatif KGB yang telah terlewat
        <table>    
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Pangkat/Golongan</th>
                    <th>SKPD</th>
                    <th>TMT</th>
                    <!--
                    <th>KGB Selanjutnya</th>
                    -->
                </tr>
            </thead>
            <tbody>
                <!-- Tampil di Operator BKD -->
                <?php if($this->session->userdata('level') === '11'): ?>
                <?php $no = 0; foreach($daftarNominatifLewat as $row): ?>
                <tr>
                    <td align="center"><?php echo ++$no; ?></td>
                    <td><?php echo $row->asn_nama; ?></td>
                    <td><?php echo $row->asn_nip; ?></td>
                    <td><?php echo $row->pangkat_nama." (".$row->asn_gol_akhir.")"; ?></td>
                    <td><?php echo $row->skpd_nama; ?></td>                            
                    <td><?php echo shortdate_indo($row->riwayatkgb_tmt); ?></td>
                    <!--
                    <td>
                        <?php 
                            $date = date_create($row->riwayatkgb_tmt);
                            date_add($date,date_interval_create_from_date_string("2 years"));
                            echo date_format($date,"d/m/Y");
                        ?>
                    </td>
                    -->
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
                <!-- Tampil di OPD -->
                <?php if($this->session->userdata('level') === '7'): ?>
                <?php $no = 0; foreach($daftarNominatifLewat_opd as $row): ?>
                <tr>
                    <td align="center"><?php echo ++$no; ?></td>
                    <td><?php echo $row->asn_nama; ?></td>
                    <td><?php echo $row->asn_nip; ?></td>
                    <td><?php echo $row->pangkat_nama." (".$row->asn_gol_akhir.")"; ?></td>
                    <td><?php echo $row->skpd_nama; ?></td>                            
                    <td><?php echo shortdate_indo($row->riwayatkgb_tmt); ?></td>
                    <!--
                    <td>
                        <?php 
                            $date = date_create($row->riwayatkgb_tmt);
                            date_add($date,date_interval_create_from_date_string("2 years"));
                            echo date_format($date,"d/m/Y");
                        ?>
                    </td>
                    -->
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <br/><br/>
        Pegawai yang melakukan KGB tahun <?php echo $tahun; ?>
        <table>    
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Pangkat/Golongan</th>
                    <th>SKPD</th>
                    <th>TMT</th>                    
                    <th>KGB Selanjutnya</th>                    
                </tr>
            </thead>
            <tbody>
                <!-- Tampil di Operator BKD -->
                <?php if($this->session->userdata('level') === '11'): ?>
                <?php $no = 0; foreach($kgb as $row): ?>
                <tr>
                    <td align="center"><?php echo ++$no; ?></td>
                    <td><?php echo $row->asn_nama; ?></td>
                    <td><?php echo $row->asn_nip; ?></td>
                    <td><?php echo $row->pangkat_nama." (".$row->asn_gol_akhir.")"; ?></td>
                    <td><?php echo $row->skpd_nama; ?></td>                            
                    <td><?php echo shortdate_indo($row->riwayatkgb_tmt); ?></td>                    
                    <td>
                        <?php 
                            $date = date_create($row->riwayatkgb_tmt);
                            date_add($date,date_interval_create_from_date_string("2 years"));
                            echo date_format($date,"d/m/Y");
                        ?>
                    </td>                    
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
                <!-- Tampil di Operator OPD -->
                <?php if($this->session->userdata('level') === '7'): ?>
                <?php $no = 0; foreach($kgb_opd as $row): ?>
                <tr>
                    <td align="center"><?php echo ++$no; ?></td>
                    <td><?php echo $row->asn_nama; ?></td>
                    <td><?php echo $row->asn_nip; ?></td>
                    <td><?php echo $row->pangkat_nama." (".$row->asn_gol_akhir.")"; ?></td>
                    <td><?php echo $row->skpd_nama; ?></td>                            
                    <td><?php echo shortdate_indo($row->riwayatkgb_tmt); ?></td>                    
                    <td>
                        <?php 
                            $date = date_create($row->riwayatkgb_tmt);
                            date_add($date,date_interval_create_from_date_string("2 years"));
                            echo date_format($date,"d/m/Y");
                        ?>
                    </td>                    
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>        
    </body>
</html>
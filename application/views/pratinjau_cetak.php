<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $pageTitle; ?> | e-KGB - Leni BKD</title>
    </head>
    <body>
        <table width="100%">
            <tr>
                <td width=40 align="center"><img src="<?php echo base_url('assets/images/logo/' .$config->config_logo); ?>" width="10%"></td>
                <td align="center">
                    <b><font style=font-size:12pt face="Times New Roman" color=#000000><?php echo $config->config_kop_atas; ?></font></b><br/>
                    <b><font style=font-size:14pt face="Times New Roman" color=#000000><?php echo $config->config_kop_bawah; ?></font></b><br/>
                    <font style=font-size:8pt face="Times New Roman" color=#000000><?php echo $config->config_alamat; ?>  Telp. <?php echo $config->config_telp; ?></font><br/>
                    <font style=font-size:8pt face="Times New Roman" color=#000000>Website : <?php echo $config->config_web; ?>; e-mail : <?php echo $config->config_email; ?></font><br/>
                    <font style=font-size:12pt FACE="Times New Roman" COLOR=#000000>B E N G K  U L U</font>
                </td>                
            </tr>
        </table>
        <hr>        
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <table border=0 cellspacing=0 cellpadding=0 >
            <tr height=17 >
                <td width=430  align=left > <br></td>
                <td width=270  align=center  bgcolor=#ffffff ><font style=font-size:10pt face="arial narrow" color=#000000>a.n. <?php echo $config->config_ttd_satu; ?></font></td>
            </tr>
        </table>
        <table border=0 cellspacing=0 cellpadding=0 >
            <tr height=17 >
                <td width=430  align=left > <br></td>
                <td width=270  align=center  bgcolor=#ffffff ><font style=font-size:10pt face="arial narrow" color=#000000> <?php echo $config->config_ttd_dua; ?></font></td>
            </tr>
        </table>        
        <br/><br/><br/>
        <table border=0 cellspacing=0 cellpadding=0 >
            <tr height=17 >
                <td width=430  align=left > <br></td>
                <td width=270  align=center  bgcolor=#ffffff ><b><u><font style=font-size:10pt face="times new roman" color=#000000><?php echo $config->asn_nama; ?></font></b></u></td>
            </tr>
        </table>
        <table border=0 cellspacing=0 cellpadding=0 >
            <tr height=17 >
                <td width=430  align=left > <br></td>
                <td width=270  align=center  bgcolor=#ffffff ><font style=font-size:10pt face="times new roman" color=#000000><?php echo $config->pangkat_nama; ?></font></td>
            </tr>
        </table>
        <table border=0 cellspacing=0 cellpadding=0 >
            <tr height=17 >
                <td width=430  align=left > <br></td>
                <td width=270  align=center  bgcolor=#ffffff ><font style=font-size:10pt face="times new roman" color=#000000>  NIP. <?php echo $config->config_nip_pejabat; ?></font></td>
            </tr>
        </table>
    </body>
</html>
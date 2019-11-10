        <!-- JS  -->
        <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>        
        <script src="<?php echo base_url('assets/vendor/popper.js/popper.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>                     
        <script src="<?php echo base_url('assets/vendor/datatables/datatables.js'); ?>"></script>
        <script src="<?php echo base_url('assets/vendor/mask/jquery.mask.js'); ?>"></script>
        <script src="<?php echo base_url('assets/vendor/mask/jquery.maskMoney.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/vendor/chart.js/chart.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/carbon.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/demo.js'); ?>"></script>
        <script>
            $(document).ready(function() {
                // Datatable
                $('#myTable').DataTable();

                // Tooltip
                $('[data-toggle="tooltip"]').tooltip();

                // Modal Berkas KGB - Daftar Nominatif
                $('#modal').on('show.bs.modal', function(event) {
                    var div = $(event.relatedTarget)
                    var modal = $(this)
                    
                    modal.find('#id').attr("value",div.data('id'));
                    modal.find('#nama').attr("value",div.data('nama'));
                    modal.find('#nip').attr("value",div.data('nip'));
                    modal.find('#skpd').attr("value",div.data('skpd'));
                });

                // Modal Gaji Pokok
                $('#modal').on('show.bs.modal', function(event) {
                    var div = $(event.relatedTarget)
                    var modal = $(this)
                    
                    modal.find('#id').attr("value",div.data('id'));
                    modal.find('#golongan').attr("value",div.data('golongan'));
                    modal.find('#masker').attr("value",div.data('masker'));
                    modal.find('#gaji').attr("value",div.data('gaji'));
                });

                // Modal Riwayat KGB/Pegawai
                $('#modal').on('show.bs.modal', function(event) {
                    var div = $(event.relatedTarget)
                    var modal = $(this)
                    
                    modal.find('#id').attr("value",div.data('id'));
                    modal.find('#nama').attr("value",div.data('nama'));
                    modal.find('#nip').attr("value",div.data('nip'));
                    modal.find('#pangol').attr("value",div.data('pangol'));
                    modal.find('#skpd').attr("value",div.data('skpd'));
                    modal.find('#gajilama').attr("value",div.data('gajilama'));
                    modal.find('#gajibaru').attr("value",div.data('gajibaru'));
                    modal.find('#masker').attr("value",div.data('masker'));
                    modal.find('#tmt').attr("value",div.data('tmt'));
                    modal.find('#surat').attr("value",div.data('surat'));
                    modal.find('#nosurat').attr("value",div.data('nosurat'));
                    modal.find('#tglsurat').attr("value",div.data('tglsurat'));
                });

                // Form input duit
                $('#gajilamaduit').mask('000.000.000', {reverse: true});
                var gajilamaduit = $("#gajilamaduit").val();
                var gajilama = gajilamaduit.replace(/[^0-9]/g, '');
                $("#gajilama").val(gajilama);

                $('#gajibaruduit').mask('000.000.000', {reverse: true});
                var gajibaruduit = $("#gajibaruduit").val();
                var gajibaru = gajibaruduit.replace(/[^0-9]/g, '');
                $("#gajibaru").val(gajibaru);

                // Pejabat SKPD - Konfigurasi SK
                $('#kodeskpd').on('change',function(){            
                    var kodeskpd=$(this).val();
                    $.ajax({
                        type : "POST",
                        url  : "<?php echo base_url('konfigurasi-sk/getPejabat')?>",
                        dataType : "JSON",
                        data : {kodeskpd: kodeskpd},
                        cache:false,
                        success: function(data){
                            $.each(data,function(kodeskpd, namaskpd, nipkepala, namapejabat){
                                $('[name="ttd_dua"]').val(data.namaskpd);
                                $('[name="nip"]').val(data.nipkepala);                           
                                $('[name="nama_pejabat"]').val(data.namapejabat);                        
                            });                            
                        }
                    });
                    return false;
                });

                // Nama Pejabat - Konfigurasi SK
                $('#nip').on('input',function(){            
                    var nip=$(this).val();
                    $.ajax({
                        type : "POST",
                        url  : "<?php echo base_url('nominatif-manual/getAsn')?>",
                        dataType : "JSON",
                        data : {nip: nip},
                        cache:false,
                        success: function(data){
                            $.each(data,function(nip, nama){
                                $('[name="nama_pejabat"]').val(data.nama);                        
                            });                            
                        }
                    });
                    return false;
                });

                // ASN - Nominatif Manual
                $('#nip').on('change',function(){            
                    var nip=$(this).val();
                    $.ajax({
                        type : "POST",
                        url  : "<?php echo base_url('nominatif-manual/getAsn')?>",
                        dataType : "JSON",
                        data : {nip: nip},
                        cache:false,
                        success: function(data){
                            $.each(data,function(nip, nama, pangol, skpd){
                                $('[name="nama"]').val(data.nama);
                                $('[name="pangol"]').val(data.pangol);
                                $('[name="skpd"]').val(data.skpd);                        
                            });                    
                        }
                    });
                    return false;
                });
            });

            // Function form input duit
            function onlyNumbers(evt){
                var e = event || evt;
                var charCode = e.which || e.keyCode;        
                if (charCode > 31 && (charCode < 48 || charCode > 57))
                    return false;
                    return true; 
            };                        
            function todesimal(){
                $("#gajilamaduit").maskMoney({thousands:'.',precision:0});
                var gajilamaduit = $("#gajilamaduit").val();
                var gajilama = gajilamaduit.replace(/[^0-9]/g, '');
                $("#gajilama").val(gajilama);
                $("#gajibaruduit").maskMoney({thousands:'.',precision:0});
                var gajibaruduit = $("#gajibaruduit").val();
                var gajibaru = gajibaruduit.replace(/[^0-9]/g, '');
                $("#gajibaru").val(gajibaru);
            };

            // Upload Logo
            $(document).on('click', '.browse', function(){
                var file = $(this).parent().parent().parent().find('.file');
                file.trigger('click');
            });
            $(document).on('change', '.file', function(){
                $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
            });
        </script>
    </body>
</html>
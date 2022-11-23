    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script> 
    
    <!-- Sweet Alert Plugin Js -->
    <script src="plugins/sweetalert/sweetalert.min.js"></script>   

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="plugins/dropzone/dropzone.js"></script>

    <!-- Light Gallery Plugin Js -->
    <script src="plugins/light-gallery/js/lightgallery-all.js"></script>

    <!-- Multi Select Plugin Js -->
    <script src="plugins/multi-select/js/jquery.multi-select.js"></script>    

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/medias/image-gallery.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>



    <!-- Moment Plugin Js -->
    <script src="plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
   


    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
 


<script type="text/javascript" src="js/jui/jquery-ui.min.js"></script>
<script>
$(document).ready(function(){
            
                var config = {
                    source: 'get_kecamatan.php',                 
                    select: function(event, ui){
                        $('#nama_kecamatan1').val(ui.item.nama_kecamatan);
                        $('#id_kecamatan1').val(ui.item.id_kecamatan);
                        
 // Mengisi Text Box dengan id=nama dengan value nama data json
                        
                    },
                    minLength: 1
                };
                $('#nama_kecamatan1').autocomplete(config);
            });
   
</script>

<script>
$(document).ready(function(){
            
                var config = {
                    source: 'get_sektor.php',                 
                    select: function(event, ui){
                        $('#jenis_sektor1').val(ui.item.jenis_sektor);
                        $('#id_jenis1').val(ui.item.id_jenis);
                        
 // Mengisi Text Box dengan id=nama dengan value nama data json
                        
                    },
                    minLength: 1
                };
                $('#jenis_sektor1').autocomplete(config);
            });
   
</script>

<script>
$(document).ready(function(){
            
                var config = {
                    source: 'get_satuan_luas.php',                 
                    select: function(event, ui){
                        $('#nama_satuan1').val(ui.item.nama_satuan);
                        $('#id_satuan1').val(ui.item.id_satuan);
                        
 // Mengisi Text Box dengan id=nama dengan value nama data json
                        
                    },
                    minLength: 1
                };
                $('#nama_satuan1').autocomplete(config);
            });
   
</script>

<script>
$(document).ready(function(){
            
                var config = {
                    source: 'get_keterangan.php',                 
                    select: function(event, ui){
                        $('#nama_keterangan1').val(ui.item.nama_keterangan);
                        $('#id_keterangan1').val(ui.item.id_keterangan);
                        
 // Mengisi Text Box dengan id=nama dengan value nama data json
                        
                    },
                    minLength: 1
                };
                $('#nama_keterangan1').autocomplete(config);
            });
   
</script>

<script>
$(document).ready(function(){
            
                var config = {
                    source: 'get_periode.php',                 
                    select: function(event, ui){
                        $('#nama_periode1').val(ui.item.nama_periode);
                        $('#id_periode1').val(ui.item.id_periode);
                        
 // Mengisi Text Box dengan id=nama dengan value nama data json
                        
                    },
                    minLength: 1
                };
                $('#nama_periode1').autocomplete(config);
            });
   
</script>

<script>
$(document).ready(function(){
            
                var config = {
                    source: 'get_satuan_produksi.php',                 
                    select: function(event, ui){
                        $('#nama_satuan2').val(ui.item.nama_satuan);
                        $('#id_satuan2').val(ui.item.id_satuan);
                        
 // Mengisi Text Box dengan id=nama dengan value nama data json
                        
                    },
                    minLength: 1
                };
                $('#nama_satuan2').autocomplete(config);
            });
   
</script>

<script>
$(document).ready(function(){
            
                var config = {
                    source: 'get_satuan_produksi.php',                 
                    select: function(event, ui){
                        $('#nama_satuan3').val(ui.item.nama_satuan);
                        $('#id_satuan3').val(ui.item.id_satuan);
                        
 // Mengisi Text Box dengan id=nama dengan value nama data json
                        
                    },
                    minLength: 1
                };
                $('#nama_satuan3').autocomplete(config);
            });
   
</script>
<script>
$(document).ready(function(){
            
                var config = {
                    source: 'get_satuan_produksi.php',                 
                    select: function(event, ui){
                        $('#nama_satuan4').val(ui.item.nama_satuan);
                        $('#id_satuan4').val(ui.item.id_satuan);
                        
 // Mengisi Text Box dengan id=nama dengan value nama data json
                        
                    },
                    minLength: 1
                };
                $('#nama_satuan4').autocomplete(config);
            });
   
</script>
<script>
$(document).ready(function(){
            
                var config = {
                    source: 'get_satuan_produksi.php',                 
                    select: function(event, ui){
                        $('#nama_satuan5').val(ui.item.nama_satuan);
                        $('#id_satuan5').val(ui.item.id_satuan);
                        
 // Mengisi Text Box dengan id=nama dengan value nama data json
                        
                    },
                    minLength: 1
                };
                $('#nama_satuan5').autocomplete(config);
            });
   
</script>
<script>
$(document).ready(function(){
            
                var config = {
                    source: 'get_satuan_produksi.php',                 
                    select: function(event, ui){
                        $('#nama_satuan6').val(ui.item.nama_satuan);
                        $('#id_satuan6').val(ui.item.id_satuan);
                        
 // Mengisi Text Box dengan id=nama dengan value nama data json
                        
                    },
                    minLength: 1
                };
                $('#nama_satuan6').autocomplete(config);
            });
   
</script>
<script>
$(document).ready(function(){
            
                var config = {
                    source: 'get_satuan_produksi.php',                 
                    select: function(event, ui){
                        $('#nama_satuan7').val(ui.item.nama_satuan);
                        $('#id_satuan7').val(ui.item.id_satuan);
                        
 // Mengisi Text Box dengan id=nama dengan value nama data json
                        
                    },
                    minLength: 1
                };
                $('#nama_satuan7').autocomplete(config);
            });
   
</script>
<script>
$(document).ready(function(){
            
                var config = {
                    source: 'get_satuan_produksi.php',                 
                    select: function(event, ui){
                        $('#nama_satuan8').val(ui.item.nama_satuan);
                        $('#id_satuan8').val(ui.item.id_satuan);
                        
 // Mengisi Text Box dengan id=nama dengan value nama data json
                        
                    },
                    minLength: 1
                };
                $('#nama_satuan8').autocomplete(config);
            });
   
</script>
<script>
$(document).ready(function(){
            
                var config = {
                    source: 'get_satuan_produksi.php',                 
                    select: function(event, ui){
                        $('#nama_satuan9').val(ui.item.nama_satuan);
                        $('#id_satuan9').val(ui.item.id_satuan);
                        
 // Mengisi Text Box dengan id=nama dengan value nama data json
                        
                    },
                    minLength: 1
                };
                $('#nama_satuan9').autocomplete(config);
            });
   
</script>
<script>
$(document).ready(function(){
            
                var config = {
                    source: 'get_satuan_produksi.php',                 
                    select: function(event, ui){
                        $('#nama_satuan10').val(ui.item.nama_satuan);
                        $('#id_satuan10').val(ui.item.id_satuan);
                        
 // Mengisi Text Box dengan id=nama dengan value nama data json
                        
                    },
                    minLength: 1
                };
                $('#nama_satuan10').autocomplete(config);
            });
   
</script>
<script>
$(document).ready(function(){
            
                var config = {
                    source: 'get_peluang.php',                 
                    select: function(event, ui){
                        $('#nama_peluang1').val(ui.item.nama_peluang);
                        $('#id_peluang1').val(ui.item.id_peluang);
                        
 // Mengisi Text Box dengan id=nama dengan value nama data json
                        
                    },
                    minLength: 1
                };
                $('#nama_peluang1').autocomplete(config);
            });
   
</script>
<script>
$(document).ready(function(){
            
                var config = {
                    source: 'get_pertanian.php',                 
                    select: function(event, ui){
                        $('#detail_sektor1').val(ui.item.detail_sektor);
                        $('#id_detail_sektor1').val(ui.item.id_detail_sektor);
                        
 // Mengisi Text Box dengan id=nama dengan value nama data json
                        
                    },
                    minLength: 1
                };
                $('#detail_sektor1').autocomplete(config);
            });
   
</script>
<script>
$(document).ready(function(){
            
                var config = {
                    source: 'get_lahan.php',                 
                    select: function(event, ui){
                        $('#nama_lahan1').val(ui.item.nama_lahan);
                        $('#jenis_lahan1').val(ui.item.jenis_lahan);
                        
 // Mengisi Text Box dengan id=nama dengan value nama data json
                        
                    },
                    minLength: 1
                };
                $('#nama_lahan1').autocomplete(config);
            });
   
</script>

<script>
$(document).ready(function(){
            
                var config = {
                    source: 'get_keterangan_admin.php',                 
                    select: function(event, ui){
                        $('#keterangan_admin1').val(ui.item.keterangan);
                        $('#id1').val(ui.item.id);
                        
 // Mengisi Text Box dengan id=nama dengan value nama data json
                        
                    },
                    minLength: 1
                };
                $('#keterangan_admin1').autocomplete(config);
            });
   
</script>

<script type="text/javascript">
        $(document).ready(function()
        {
            $('#date').bootstrapMaterialDatePicker
            ({
                time: false,
                clearButton: true
            });

            $('#date2').bootstrapMaterialDatePicker
            ({
                time: false,
                clearButton: true
            });

            $('#time').bootstrapMaterialDatePicker
            ({
                date: false,
                shortTime: false,
                format: 'HH:mm'
            });

            $('#date-format').bootstrapMaterialDatePicker
            ({
                format: 'dddd DD MMMM YYYY - HH:mm'
            });
            $('#date-fr').bootstrapMaterialDatePicker
            ({
                format: 'DD/MM/YYYY HH:mm',
                lang: 'fr',
                weekStart: 1, 
                cancelText : 'ANNULER',
                nowButton : true,
                switchOnClick : true
            });

            $('#date-end').bootstrapMaterialDatePicker
            ({
                weekStart: 0, format: 'DD/MM/YYYY HH:mm'
            });
            $('#date-start').bootstrapMaterialDatePicker
            ({
                weekStart: 0, format: 'DD/MM/YYYY HH:mm', shortTime : true
            }).on('change', function(e, date)
            {
                $('#date-end').bootstrapMaterialDatePicker('setMinDate', date);
            });

            $('#min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });

            $.material.init()
        });
        </script>
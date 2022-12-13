<!-- BEGIN: Page Vendor JS-->
<script src="<?= base_url()?>assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
<script src="<?= base_url()?>assets/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="<?= base_url()?>assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
<script src="<?= base_url()?>assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Dropify JS -->
<script src="<?= base_url()?>assets/dropify/dist/js/dropify.js" charset="utf-8"></script>
<!-- END: Dropify JS -->
<!-- SCRIPT QR -->
<script src="<?= base_url()?>assets/js/html5-qrcode.min.js"></script>
<script>
function docReady(fn) {
    // see if DOM is already available
    if (document.readyState === "complete" ||
        document.readyState === "interactive") {
        // call on next available tick
        setTimeout(fn, 1);
    } else {
        document.addEventListener("DOMContentLoaded", fn);
    }
}

docReady(function() {
    var resultContainer = document.getElementById('qr-reader-results');
    var lastResult, countResults = 0;

    function onScanSuccess(decodedText, decodedResult) {
        if (decodedText !== lastResult) {
            ++countResults;
            lastResult = decodedText;
            // Handle on success condition with the decoded message.
            console.log(`Scan result ${decodedText}`);
            get_by_phone(decodedText);
        }
    }

    $("#phone").on('change',()=>{
      get_by_phone($("#phone").val());
    })

    function get_by_phone(decodedText) {
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": "<?= base_url()?>dashboard/data_sedekah/get_user_by_phone/"+decodedText,
            "method": "GET",

        }

        $.ajax(settings).done(function(response) {
            var obj=JSON.parse(response);
            if(obj.status=='success'){
              $("#lesswaster").val(obj.data.name);
              $("#institute").val(obj.data.institute);
              $("#users_id").val(obj.data.id);
              console.log(obj.data.name)
            }else{
              alert("Data lesswaster tidak dikenal");
              $("#lesswaster").val('');
              $("#institute").val('');
              $("#users_id").val('');
            }
        });
    }

    var html5QrcodeScanner = new Html5QrcodeScanner(
        "qr-reader", {
            fps: 10,
            qrbox: 250
        });
    html5QrcodeScanner.render(onScanSuccess);
});
</script>

<script type="text/javascript">
var drEvent = $('.dropify').dropify();
var initFiles = null;

drEvent.on('dropify.beforeClear', function(event, element) {
    // console.log(element);
    initFiles = element.file.name;
    return confirm('Do you really want to delete ' + element.file.name + ' ?');
});
drEvent.on('dropify.afterClear', function(event, element) {
    console.log(element);
    if (element.file.name == null) {
        $("#deleteFiles").val(initFiles);
    } else {
        console.log('not deleted');
    }
    alert('File deleted');
});
</script>
<!-- Get phone -->
<script>
$(document).ready(() => {



});
</script>
<!-- Datatable -->
<script src="<?= base_url()?>assets/js/scripts/datatables/datatable.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.crudtable').DataTable({
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo base_url()?>dashboard/Data_sedekah/ajax_list",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [{
            "targets": [0], //first column / numbering column
            "orderable": false, //set not orderable
        }, ],
    });

});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $(".crudtable").on("click", ".modalDelete",
        function() { //event khusus untuk table datatables setelah pagination suka error
            var id = $(this).attr('value');
            $("#modalMsg").html("Apakah Anda Yakin Ingin Menghapus? " + id);
            $("#modalHref").attr("href",
                "<?php echo base_url().$module?>/<?php echo $controller; ?>/delete/" + id);
        });
});
</script>
<script src="<?= base_url()?>assets/summernote/summernote.js" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.summernote').summernote({
        height: 300
    });
});
</script>
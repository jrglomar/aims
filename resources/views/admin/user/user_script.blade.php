<script>
    $(document).ready(function() {

        // GLOBAL VARIABLE
        var APP_URL = {!! json_encode(url('/')) !!}
        // END OF GLOBAL VARIABLE

        // DATA TABLES FUNCTION
        function dataTable() {
            dataTable = $('#dataTable').DataTable()
        }
        // END OF DATATABLE FUNCTION

        dataTable()

    });
</script>

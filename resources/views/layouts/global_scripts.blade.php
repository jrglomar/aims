<script>
    function swalAlert(icon, text) {
        Swal.fire({
            icon: icon,
            text: text
        })
    };

    function notification(type, name) {
        if (type == 'success') {
            return toastr[type](`${name} added successfully.`)
        } else if (type == 'info') {
            return toastr[type](`${name} updated sucessfully.`)
        } else if (type == 'error') {
            return toastr[type](`${name} removed.`)
        } else if (type == 'custom') {
            return toastr['success'](`${name}`)
        }
    }

    // FUNCTION TO RESET FORM WHEN CANCEL BUTTON CLICKED
    $("#create_cancel_btn").on('click', function() {
        $("#createForm").trigger("reset")
        $("#create_card").collapse("hide")
        // $('#createForm').parsley().reset();
        $('#agenda').summernote('reset');
        $('#description').summernote('reset');
        $('#degree').val('').trigger("change");
        $('#activity_type_id').val('').trigger("change");
    });

    // FOR AJAX BUTTON
    // FOR DISABLING SUBMIT BUTTON ON CREATE FORM
    $(document).ajaxStart(function() {
        $("#create_btn").prop('disabled', true);
    }).ajaxStop(function() {
        $("#create_btn").prop('disabled', false);
    });

    // FOR DISABLING BUTTON BLOCK (TIME IN, TIME OUT, UPLOAD) BUTTON ON FACULTY VIEW ACTIVITIES
    $(document).ajaxStart(function() {
        $(".button-block").prop('disabled', true);
    }).ajaxStop(function() {
        $(".button-block").prop('disabled', false);
    });

    // FOR DISABLING ADD REQUIRED DOCUMENT BUTTON ON BIN DETAILS
    $(document).ajaxStart(function() {
        $("#btnAddRequiredDocu").prop('disabled', true);
    }).ajaxStop(function() {
        $("#btnAddRequiredDocu").prop('disabled', false);
    });

    // FOR DISABLING UPDATE CHANGES BUTTON ON UPDATE FORM
    $(document).ajaxStart(function() {
        $(".btnUpdate").prop('disabled', true);
    }).ajaxStop(function() {
        $(".btnUpdate").prop('disabled', false);
    });
    // END FOR AJAX BUTTON
</script>

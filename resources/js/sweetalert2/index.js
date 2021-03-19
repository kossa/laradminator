import * as $ from 'jquery';
import Swal from 'sweetalert2';

export default (function () {
    window.Swal = Swal

    $(document).on('click', "form.delete button", function(e) {
        var _this = $(this);
        e.preventDefault();
        Swal.fire({
            icon: 'error',
            title: 'Are you sure?', // Opération Dangereuse
            text: 'Are you sure to continue ?', // Êtes-vous sûr de continuer ?
            showCancelButton: true,
            confirmButtonColor: 'null',
            cancelButtonColor: 'null',
            confirmButtonText: 'Yeah, sure!', // Oui, sûr
            cancelButtonText: 'Cancel', // Annuler
            customClass: {
                confirmButton: 'btn btn-lg btn-danger mx-1',
                cancelButton: 'btn btn-lg btn-primary mx-1'
            },
            buttonsStyling: false
        }).then(res => {
            if (res.value) {
                _this.closest("form").submit();
            }
        });
    });
}())

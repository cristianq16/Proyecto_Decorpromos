$(function () {
    'use strict'

    $('#eModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var title = button.data('mytitle') // Extract info from data-* attributes
        var description = button.data('mydescription')
        var destacado_id = button.data('destacadoid')
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        // modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body #titulo').val(title)
        modal.find('.modal-body #descripcion').val(description)
        modal.find('.modal-body #destacado_id').val(destacado_id)
    });
    $('#deleteModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var delete_id = button.data('deleteid') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        // modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-content #delete_id').val(delete_id)
    });

    $('.sidebar-menu .destacados').on('click', function(){
        $('.destacados').addClass('active');
        $('.cotizaciones').removeClass('active');
    });

    $('.cotizaciones').on('click', function () {
        $('.cotizaciones').addClass('active');
        $('.destacados').removeClass('active');
    });

});
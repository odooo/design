$('.transfertCommission_new').on('click', function (e) {
    e.preventDefault();

    var $modal = $('#pleaseWaitDialog');
    var $transfertCommissionForm = $('#new-transfertCommission-modal');
    // Block screen
    $modal.modal('show');

    // Ajax request for get new transfertCommission form
    $.ajax({
        url: $(this).attr('href'),
        type: 'GET',
        success: function () {
            // Permit
             $modal.modal('hide');
             $transfertCommissionForm.modal('show');
        }
    })
});

$('.transfertCommission_new_popup_submit').on('click', function (e) {
    e.preventDefault();
    // Get form to submit
    var $form = $('form[name = "tontinebundle_transfertCommission"]');
    // Block btn action for future click
     $(this).button('loading');
    // Submit form
    $.ajax({
        type: $form.attr('method'),
        url:  Routing.generate('tontine_transfertcommissions_new'),
        data: $form.serialize()
    })
    .done(function (data) {
        if(!data.success){
            console.log(JSON.stringify(data.errors));
        }else{
            // Redirect to Home page
            window.location.href = Routing.generate('tontine_transfertcommissions_index');
        }
    }).fail(function (jqXHR, textStatus, errorThrown) {
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
    });
});

$('.transfertCommission_edit').on('click', function (e) {
    e.preventDefault();
    //Get record to edit
    var $id = $(this).data('rec');
    var $modal = $('#pleaseWaitDialog');
    var $transfertCommissionForm = $('#edit-modal');
    // Block screen
    $modal.modal('show');

    // Ajax request for get edit transfertCommission form
    $.ajax({
        url:  Routing.generate('tontine_transfertcommissions_edit_form', {'id' : $id }),
        type: 'GET',
        success: function (html) {
            // Permit
            $modal.modal('hide');
            // All popup title
            $transfertCommissionForm.find('.modal-title').html('Edit Transfertcommission');
            // add content to display
            $transfertCommissionForm.find('.modal-body').html(html);


            // Add submit link to finish
            var $submit = $("<input type='button' class ='transfertCommission_edit_popup_submit btn btn-primary' value='Valider' />").on('click', function (e) {
                e.preventDefault();
                // Get form to submit
                var $form = $('form[name = "tontinebundle_transfertCommission"]');
                // Block btn action for future click
                 $(this).button('loading');
                // Submit form
                $.ajax({
                    type: $form.attr('method'),
                    url:  Routing.generate('tontine_transfertcommissions_edit', {'id' : $id }),
                    data: $form.serialize()
                })
                .done(function (data) {
                    if(!data.success){
                        console.log(JSON.stringify(data.errors));
                    }else{
                        // Redirect to Home page
                        window.location.href = Routing.generate('tontine_transfertcommissions_index');
                    }
                }).fail(function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                    console.log(textStatus);
                    console.log(errorThrown);
                });
            });

            // Append it
            $transfertCommissionForm.find('.modal-footer').append($submit);
            // Display
            $transfertCommissionForm.modal('show');
        }
    })
});

$('.transfertCommission_show').on('click', function (e) {
    e.preventDefault();
    //Get record to edit
    var $id = $(this).data('rec');
    var $modal = $('#pleaseWaitDialog');
    var $transfertCommissionForm = $('#preview-modal');
    // Block screen
    $modal.modal('show');

    // Ajax request for get preview transfertCommission form
    $.ajax({
        url:  Routing.generate('tontine_transfertcommissions_preview', {'id' : $id }),
        type: 'GET',
        success: function (html) {
            // Permit
            $modal.modal('hide');
            // All popup title
            $transfertCommissionForm.find('.modal-title').html('Details Transfertcommission');
            // add content to display
            $transfertCommissionForm.find('.modal-body').html(html);
            // Display
            $transfertCommissionForm.modal('show');
        }
    })
});


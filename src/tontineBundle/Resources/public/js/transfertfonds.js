$('.transfertFond_new').on('click', function (e) {
    e.preventDefault();

    var $modal = $('#pleaseWaitDialog');
    var $transfertFondForm = $('#new-transfertFond-modal');
    // Block screen
    $modal.modal('show');

    // Ajax request for get new transfertFond form
    $.ajax({
        url: $(this).attr('href'),
        type: 'GET',
        success: function () {
            // Permit
             $modal.modal('hide');
             $transfertFondForm.modal('show');
        }
    })
});

$('.transfertFond_new_popup_submit').on('click', function (e) {
    e.preventDefault();
    // Get form to submit
    var $form = $('form[name = "tontinebundle_transfertFond"]');
    // Block btn action for future click
     $(this).button('loading');
    // Submit form
    $.ajax({
        type: $form.attr('method'),
        url:  Routing.generate('tontine_transfert-fonds_new'),
        data: $form.serialize()
    })
    .done(function (data) {
        if(!data.success){
            console.log(JSON.stringify(data.errors));
        }else{
            // Redirect to Home page
            window.location.href = Routing.generate('tontine_transfert-fonds_index');
        }
    }).fail(function (jqXHR, textStatus, errorThrown) {
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
    });
});

$('.transfertFond_edit').on('click', function (e) {
    e.preventDefault();
    //Get record to edit
    var $id = $(this).data('rec');
    var $modal = $('#pleaseWaitDialog');
    var $transfertFondForm = $('#edit-modal');
    // Block screen
    $modal.modal('show');

    // Ajax request for get edit transfertFond form
    $.ajax({
        url:  Routing.generate('tontine_transfert-fonds_edit_form', {'id' : $id }),
        type: 'GET',
        success: function (html) {
            // Permit
            $modal.modal('hide');
            // All popup title
            $transfertFondForm.find('.modal-title').html('Edit Transfertfond');
            // add content to display
            $transfertFondForm.find('.modal-body').html(html);


            // Add submit link to finish
            var $submit = $("<input type='button' class ='transfertFond_edit_popup_submit btn btn-primary' value='Valider' />").on('click', function (e) {
                e.preventDefault();
                // Get form to submit
                var $form = $('form[name = "tontinebundle_transfertFond"]');
                // Block btn action for future click
                 $(this).button('loading');
                // Submit form
                $.ajax({
                    type: $form.attr('method'),
                    url:  Routing.generate('tontine_transfert-fonds_edit', {'id' : $id }),
                    data: $form.serialize()
                })
                .done(function (data) {
                    if(!data.success){
                        console.log(JSON.stringify(data.errors));
                    }else{
                        // Redirect to Home page
                        window.location.href = Routing.generate('tontine_transfert-fonds_index');
                    }
                }).fail(function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                    console.log(textStatus);
                    console.log(errorThrown);
                });
            });

            // Append it
            $transfertFondForm.find('.modal-footer').append($submit);
            // Display
            $transfertFondForm.modal('show');
        }
    })
});

$('.transfertFond_show').on('click', function (e) {
    e.preventDefault();
    //Get record to edit
    var $id = $(this).data('rec');
    var $modal = $('#pleaseWaitDialog');
    var $transfertFondForm = $('#preview-modal');
    // Block screen
    $modal.modal('show');

    // Ajax request for get preview transfertFond form
    $.ajax({
        url:  Routing.generate('tontine_transfert-fonds_preview', {'id' : $id }),
        type: 'GET',
        success: function (html) {
            // Permit
            $modal.modal('hide');
            // All popup title
            $transfertFondForm.find('.modal-title').html('Details Transfertfond');
            // add content to display
            $transfertFondForm.find('.modal-body').html(html);
            // Display
            $transfertFondForm.modal('show');
        }
    })
});


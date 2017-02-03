$('.depotMise_new').on('click', function (e) {
    e.preventDefault();

    var $modal = $('#pleaseWaitDialog');
    var $depotMiseForm = $('#new-depotMise-modal');
    // Block screen
    $modal.modal('show');

    // Ajax request for get new depotMise form
    $.ajax({
        url: $(this).attr('href'),
        type: 'GET',
        success: function () {
            // Permit
             $modal.modal('hide');
             $depotMiseForm.modal('show');
        }
    })
});

$('.depotMise_new_popup_submit').on('click', function (e) {
    e.preventDefault();
    // Get form to submit
    var $form = $('form[name = "tontinebundle_depotMise"]');
    // Block btn action for future click
     $(this).button('loading');
    // Submit form
    $.ajax({
        type: $form.attr('method'),
        url:  Routing.generate('tontine_depotmise_new'),
        data: $form.serialize()
    })
    .done(function (data) {
        if(!data.success){
            console.log(JSON.stringify(data.errors));
        }else{
            // Redirect to Home page
            window.location.href = Routing.generate('tontine_depotmise_index');
        }
    }).fail(function (jqXHR, textStatus, errorThrown) {
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
    });
});

$('.depotMise_edit').on('click', function (e) {
    e.preventDefault();
    //Get record to edit
    var $id = $(this).data('rec');
    var $modal = $('#pleaseWaitDialog');
    var $depotMiseForm = $('#edit-modal');
    // Block screen
    $modal.modal('show');

    // Ajax request for get edit depotMise form
    $.ajax({
        url:  Routing.generate('tontine_depotmise_edit_form', {'id' : $id }),
        type: 'GET',
        success: function (html) {
            // Permit
            $modal.modal('hide');
            // All popup title
            $depotMiseForm.find('.modal-title').html('Edit Depotmise');
            // add content to display
            $depotMiseForm.find('.modal-body').html(html);


            // Add submit link to finish
            var $submit = $("<input type='button' class ='depotMise_edit_popup_submit btn btn-primary' value='Valider' />").on('click', function (e) {
                e.preventDefault();
                // Get form to submit
                var $form = $('form[name = "tontinebundle_depotMise"]');
                // Block btn action for future click
                 $(this).button('loading');
                // Submit form
                $.ajax({
                    type: $form.attr('method'),
                    url:  Routing.generate('tontine_depotmise_edit', {'id' : $id }),
                    data: $form.serialize()
                })
                .done(function (data) {
                    if(!data.success){
                        console.log(JSON.stringify(data.errors));
                    }else{
                        // Redirect to Home page
                        window.location.href = Routing.generate('tontine_depotmise_index');
                    }
                }).fail(function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                    console.log(textStatus);
                    console.log(errorThrown);
                });
            });

            // Append it
            $depotMiseForm.find('.modal-footer').append($submit);
            // Display
            $depotMiseForm.modal('show');
        }
    })
});

$('.depotMise_show').on('click', function (e) {
    e.preventDefault();
    //Get record to edit
    var $id = $(this).data('rec');
    var $modal = $('#pleaseWaitDialog');
    var $depotMiseForm = $('#preview-modal');
    // Block screen
    $modal.modal('show');

    // Ajax request for get preview depotMise form
    $.ajax({
        url:  Routing.generate('tontine_depotmise_preview', {'id' : $id }),
        type: 'GET',
        success: function (html) {
            // Permit
            $modal.modal('hide');
            // All popup title
            $depotMiseForm.find('.modal-title').html('Details Depotmise');
            // add content to display
            $depotMiseForm.find('.modal-body').html(html);
            // Display
            $depotMiseForm.modal('show');
        }
    })
});


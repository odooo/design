$('.finContrat_new').on('click', function (e) {
    e.preventDefault();

    var $modal = $('#pleaseWaitDialog');
    var $finContratForm = $('#new-finContrat-modal');
    // Block screen
    $modal.modal('show');

    // Ajax request for get new finContrat form
    $.ajax({
        url: $(this).attr('href'),
        type: 'GET',
        success: function () {
            // Permit
             $modal.modal('hide');
             $finContratForm.modal('show');
        }
    })
});

$('.finContrat_new_popup_submit').on('click', function (e) {
    e.preventDefault();
    // Get form to submit
    var $form = $('form[name = "tontinebundle_finContrat"]');
    // Block btn action for future click
     $(this).button('loading');
    // Submit form
    $.ajax({
        type: $form.attr('method'),
        url:  Routing.generate('tontine_fincontrat_new'),
        data: $form.serialize()
    })
    .done(function (data) {
        if(!data.success){
            console.log(JSON.stringify(data.errors));
        }else{
            // Redirect to Home page
            window.location.href = Routing.generate('tontine_fincontrat_index');
        }
    }).fail(function (jqXHR, textStatus, errorThrown) {
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
    });
});

$('.finContrat_edit').on('click', function (e) {
    e.preventDefault();
    //Get record to edit
    var $id = $(this).data('rec');
    var $modal = $('#pleaseWaitDialog');
    var $finContratForm = $('#edit-modal');
    // Block screen
    $modal.modal('show');

    // Ajax request for get edit finContrat form
    $.ajax({
        url:  Routing.generate('tontine_fincontrat_edit_form', {'id' : $id }),
        type: 'GET',
        success: function (html) {
            // Permit
            $modal.modal('hide');
            // All popup title
            $finContratForm.find('.modal-title').html('Edit Fincontrat');
            // add content to display
            $finContratForm.find('.modal-body').html(html);


            // Add submit link to finish
            var $submit = $("<input type='button' class ='finContrat_edit_popup_submit btn btn-primary' value='Valider' />").on('click', function (e) {
                e.preventDefault();
                // Get form to submit
                var $form = $('form[name = "tontinebundle_finContrat"]');
                // Block btn action for future click
                 $(this).button('loading');
                // Submit form
                $.ajax({
                    type: $form.attr('method'),
                    url:  Routing.generate('tontine_fincontrat_edit', {'id' : $id }),
                    data: $form.serialize()
                })
                .done(function (data) {
                    if(!data.success){
                        console.log(JSON.stringify(data.errors));
                    }else{
                        // Redirect to Home page
                        window.location.href = Routing.generate('tontine_fincontrat_index');
                    }
                }).fail(function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                    console.log(textStatus);
                    console.log(errorThrown);
                });
            });

            // Append it
            $finContratForm.find('.modal-footer').append($submit);
            // Display
            $finContratForm.modal('show');
        }
    })
});

$('.finContrat_show').on('click', function (e) {
    e.preventDefault();
    //Get record to edit
    var $id = $(this).data('rec');
    var $modal = $('#pleaseWaitDialog');
    var $finContratForm = $('#preview-modal');
    // Block screen
    $modal.modal('show');

    // Ajax request for get preview finContrat form
    $.ajax({
        url:  Routing.generate('tontine_fincontrat_preview', {'id' : $id }),
        type: 'GET',
        success: function (html) {
            // Permit
            $modal.modal('hide');
            // All popup title
            $finContratForm.find('.modal-title').html('Details Fincontrat');
            // add content to display
            $finContratForm.find('.modal-body').html(html);
            // Display
            $finContratForm.modal('show');
        }
    })
});



function Enregistrerfincontrat(){
    showLoader("Enregistrement fin de contrat en cours ...");
    // Get form to submit
    var form = $('#fincontratModal form');
    // Block btn action for future click
    $.ajax({
        type: form.attr('method'),
        url:  Routing.generate('tontine_fincontrat_new_fincontrat',{'id':tontineid}),
        data: form.serialize()
    })
    .done(function (data) {
        hideLoader();
        $("#fincontratModal").modal('hide');
        if(!data.success){
            alert("Oups! Opération échoué!");
            console.log(JSON.stringify(data.errors));
        }else{
            
            alert("enregistrement réussie!");
            //window.location.href = Routing.generate('tontine_client_index');
             Yop.Pagelet({            
            url: Routing.generate('tontine_fincontrat_preview', {'id':data.id}),
            pagelet: '#user-pagelet',
            title: 'Fin de Contrat'
        });
            
        }
    }).fail(function (jqXHR) {
        hideLoader();
        $("#fincontratModal").modal('hide');
        alert("enregistrement échoué!");
        console.log(jqXHR.responseText);
        //console.log(textStatus);
        //console.log(errorThrown);
    });
}
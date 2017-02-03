$('.contrat_new').on('click', function (e) {
    e.preventDefault();

    var $modal = $('#pleaseWaitDialog');
    var $contratForm = $('#new-contrat-modal');
    // Block screen
    $modal.modal('show');

    // Ajax request for get new contrat form
    $.ajax({
        url: $(this).attr('href'),
        type: 'GET',
        success: function () {
            // Permit
             $modal.modal('hide');
             $contratForm.modal('show');
        }
    })
});

$('.contrat_new_popup_submit').on('click', function (e) {
    e.preventDefault();
    // Get form to submit
    var $form = $('form[name = "tontinebundle_contrat"]');
    // Block btn action for future click
     $(this).button('loading');
    // Submit form
    $.ajax({
        type: $form.attr('method'),
        url:  Routing.generate('tontine_contrat_new'),
        data: $form.serialize()
    })
    .done(function (data) {
        if(!data.success){
            console.log(JSON.stringify(data.errors));
        }else{
            // Redirect to Home page
            window.location.href = Routing.generate('tontine_contrat_index');
        }
    }).fail(function (jqXHR, textStatus, errorThrown) {
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
    });
});

$('.contrat_edit').on('click', function (e) {
    e.preventDefault();
    //Get record to edit
    var $id = $(this).data('rec');
    var $modal = $('#pleaseWaitDialog');
    var $contratForm = $('#edit-modal');
    // Block screen
    $modal.modal('show');

    // Ajax request for get edit contrat form
    $.ajax({
        url:  Routing.generate('tontine_contrat_edit_form', {'id' : $id }),
        type: 'GET',
        success: function (html) {
            // Permit
            $modal.modal('hide');
            // All popup title
            $contratForm.find('.modal-title').html('Edit Contrat');
            // add content to display
            $contratForm.find('.modal-body').html(html);


            // Add submit link to finish
            var $submit = $("<input type='button' class ='contrat_edit_popup_submit btn btn-primary' value='Valider' />").on('click', function (e) {
                e.preventDefault();
                // Get form to submit
                var $form = $('form[name = "tontinebundle_contrat"]');
                // Block btn action for future click
                 $(this).button('loading');
                // Submit form
                $.ajax({
                    type: $form.attr('method'),
                    url:  Routing.generate('tontine_contrat_edit', {'id' : $id }),
                    data: $form.serialize()
                })
                .done(function (data) {
                    if(!data.success){
                        console.log(JSON.stringify(data.errors));
                    }else{
                        // Redirect to Home page
                        window.location.href = Routing.generate('tontine_contrat_index');
                    }
                }).fail(function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                    console.log(textStatus);
                    console.log(errorThrown);
                });
            });

            // Append it
            $contratForm.find('.modal-footer').append($submit);
            // Display
            $contratForm.modal('show');
        }
    })
});

$('.contrat_show').on('click', function (e) {
    e.preventDefault();
    //Get record to edit
    var $id = $(this).data('rec');
    var $modal = $('#pleaseWaitDialog');
    var $contratForm = $('#preview-modal');
    // Block screen
    $modal.modal('show');

    // Ajax request for get preview contrat form
    $.ajax({
        url:  Routing.generate('tontine_contrat_preview', {'id' : $id }),
        type: 'GET',
        success: function (html) {
            // Permit
            $modal.modal('hide');
            // All popup title
            $contratForm.find('.modal-title').html('Details Contrat');
            // add content to display
            $contratForm.find('.modal-body').html(html);
            // Display
            $contratForm.modal('show');
        }
    })
});


var tontineid =null

function recuperId(id){
    tontineid = id;
   
  }



function Enregistrer(){
    showLoader("Enregistrement contrat en cours ...");
    // Get form to submit
    var form = $('#contratModal form');
    // Block btn action for future click
    $.ajax({
        type: form.attr('method'),
        url:  Routing.generate('tontine_contrat_new', {'id':tontineid}),
        data: form.serialize()
    })
    .done(function (data) {
        hideLoader();
        $("#contratModal").modal('hide');
        if(!data.success){
            alert("Oups! Opération échoué!");
            console.log(JSON.stringify(data.errors));
        }else{
            alert("enregistrement réussie!");
            //window.location.href = Routing.generate('tontine_client_index');
        }
    }).fail(function (jqXHR) {
        hideLoader();
        $("#contratModal").modal('hide');
        alert("enregistrement échoué!");
        console.log(jqXHR.responseText);
        //console.log(textStatus);
        //console.log(errorThrown);
    });
}





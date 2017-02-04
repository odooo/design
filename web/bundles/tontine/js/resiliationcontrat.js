$('.resiliationContrat_new').on('click', function (e) {
    e.preventDefault();

    var $modal = $('#pleaseWaitDialog');
    var $resiliationContratForm = $('#new-resiliationContrat-modal');
    // Block screen
    $modal.modal('show');

    // Ajax request for get new resiliationContrat form
    $.ajax({
        url: $(this).attr('href'),
        type: 'GET',
        success: function () {
            // Permit
             $modal.modal('hide');
             $resiliationContratForm.modal('show');
        }
    })
});

$('.resiliationContrat_new_popup_submit').on('click', function (e) {
    e.preventDefault();
    // Get form to submit
    var $form = $('form[name = "tontinebundle_resiliationContrat"]');
    // Block btn action for future click
     $(this).button('loading');
    // Submit form
    $.ajax({
        type: $form.attr('method'),
        url:  Routing.generate('tontine_resiliationcontrat_new'),
        data: $form.serialize()
    })
    .done(function (data) {
        if(!data.success){
            console.log(JSON.stringify(data.errors));
        }else{
            // Redirect to Home page
            window.location.href = Routing.generate('tontine_resiliationcontrat_index');
        }
    }).fail(function (jqXHR, textStatus, errorThrown) {
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
    });
});

$('.resiliationContrat_edit').on('click', function (e) {
    e.preventDefault();
    //Get record to edit
    var $id = $(this).data('rec');
    var $modal = $('#pleaseWaitDialog');
    var $resiliationContratForm = $('#edit-modal');
    // Block screen
    $modal.modal('show');

    // Ajax request for get edit resiliationContrat form
    $.ajax({
        url:  Routing.generate('tontine_resiliationcontrat_edit_form', {'id' : $id }),
        type: 'GET',
        success: function (html) {
            // Permit
            $modal.modal('hide');
            // All popup title
            $resiliationContratForm.find('.modal-title').html('Edit Resiliationcontrat');
            // add content to display
            $resiliationContratForm.find('.modal-body').html(html);


            // Add submit link to finish
            var $submit = $("<input type='button' class ='resiliationContrat_edit_popup_submit btn btn-primary' value='Valider' />").on('click', function (e) {
                e.preventDefault();
                // Get form to submit
                var $form = $('form[name = "tontinebundle_resiliationContrat"]');
                // Block btn action for future click
                 $(this).button('loading');
                // Submit form
                $.ajax({
                    type: $form.attr('method'),
                    url:  Routing.generate('tontine_resiliationcontrat_edit', {'id' : $id }),
                    data: $form.serialize()
                })
                .done(function (data) {
                    if(!data.success){
                        console.log(JSON.stringify(data.errors));
                    }else{
                        // Redirect to Home page
                        window.location.href = Routing.generate('tontine_resiliationcontrat_index');
                    }
                }).fail(function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                    console.log(textStatus);
                    console.log(errorThrown);
                });
            });

            // Append it
            $resiliationContratForm.find('.modal-footer').append($submit);
            // Display
            $resiliationContratForm.modal('show');
        }
    })
});

$('.resiliationContrat_show').on('click', function (e) {
    e.preventDefault();
    //Get record to edit
    var $id = $(this).data('rec');
    var $modal = $('#pleaseWaitDialog');
    var $resiliationContratForm = $('#preview-modal');
    // Block screen
    $modal.modal('show');

    // Ajax request for get preview resiliationContrat form
    $.ajax({
        url:  Routing.generate('tontine_resiliationcontrat_preview', {'id' : $id }),
        type: 'GET',
        success: function (html) {
            // Permit
            $modal.modal('hide');
            // All popup title
            $resiliationContratForm.find('.modal-title').html('Details Resiliationcontrat');
            // add content to display
            $resiliationContratForm.find('.modal-body').html(html);
            // Display
            $resiliationContratForm.modal('show');
        }
    })
});

var contratid =null

function recuperId(id){
    contratid = id;
   
  }



function Valider(){
    showLoader("Validation en cours en cour ...");
    // Get form to submit
    var form = $('#validerModal form');
    // Block btn action for future click
    $.ajax({
        type: form.attr('method'),
        url:  Routing.generate('tontine_resiliationcontrat_valider', {'id':contratid}),
        data: form.serialize()
    })
    .done(function (data) {
        hideLoader();
        $("#validerModal").modal('hide');
        if(!data.success){
            alert("Oups! Opération échoué!");
            console.log(JSON.stringify(data.errors));
        }else{
            alert("Validation réussie!");
            
            //window.location.href = Routing.generate('tontine_client_index');
        }
    }).fail(function (jqXHR) {
        hideLoader();
        $("#validerModal").modal('hide');
        alert("Validation échoué!");
        console.log(jqXHR.responseText);
        //console.log(textStatus);
        //console.log(errorThrown);
    });
}



function Enregistrerresiliationcontrat(){
    showLoader("Demande de resiliation de  contrat en cours ...");
    // Get form to submit
    var form = $('#resiliationcontratModal form');
                    
    // Block btn action for future click
    $.ajax({
        type: form.attr('method'),
        url:  Routing.generate('tontine_resiliationcontrat_new_resiliationcontrat',{'id':tontineid}),
        data: form.serialize()
    })
    .done(function (data) {
        hideLoader();
        $("#resiliationcontratModal").modal('hide');
        if(!data.success){
            alert("Oups! Opération échoué!");
            console.log(JSON.stringify(data.errors));
        }else{
           
            alert("enregistrement réussie!");
            //window.location.href = Routing.generate('tontine_client_index');
             Yop.Pagelet({            
            url: Routing.generate('tontine_resiliationcontrat_preview', {'id':data.id}),
            pagelet: '#user-pagelet',
            title: 'Resiliation  de Contrat'
        });
            
        }
    }).fail(function (jqXHR) {
        hideLoader();
        $("#resiliationcontratModal").modal('hide');
        alert("enregistrement échoué!");
        console.log(jqXHR.responseText);
        //console.log(textStatus);
        //console.log(errorThrown);
    });
}
$('.visite_new').on('click', function (e) {
    e.preventDefault();

    var $modal = $('#pleaseWaitDialog');
    var $visiteForm = $('#new-visite-modal');
    // Block screen
    $modal.modal('show');

    // Ajax request for get new visite form
    $.ajax({
        url: $(this).attr('href'),
        type: 'GET',
        success: function () {
            // Permit
             $modal.modal('hide');
             $visiteForm.modal('show');
        }
    })
});

$('.visite_new_popup_submit').on('click', function (e) {
    e.preventDefault();
    // Get form to submit
    var $form = $('form[name = "tontinebundle_visite"]');
    // Block btn action for future click
     $(this).button('loading');
    // Submit form
    $.ajax({
        type: $form.attr('method'),
        url:  Routing.generate('tontine_visite_new'),
        data: $form.serialize()
    })
    .done(function (data) {
        if(!data.success){
            console.log(JSON.stringify(data.errors));
        }else{
            // Redirect to Home page
            window.location.href = Routing.generate('tontine_visite_index');
        }
    }).fail(function (jqXHR, textStatus, errorThrown) {
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
    });
});

$('.visite_edit').on('click', function (e) {
    e.preventDefault();
    //Get record to edit
    var $id = $(this).data('rec');
    var $modal = $('#pleaseWaitDialog');
    var $visiteForm = $('#edit-modal');
    // Block screen
    $modal.modal('show');

    // Ajax request for get edit visite form
    $.ajax({
        url:  Routing.generate('tontine_visite_edit_form', {'id' : $id }),
        type: 'GET',
        success: function (html) {
            // Permit
            $modal.modal('hide');
            // All popup title
            $visiteForm.find('.modal-title').html('Edit Visite');
            // add content to display
            $visiteForm.find('.modal-body').html(html);


            // Add submit link to finish
            var $submit = $("<input type='button' class ='visite_edit_popup_submit btn btn-primary' value='Valider' />").on('click', function (e) {
                e.preventDefault();
                // Get form to submit
                var $form = $('form[name = "tontinebundle_visite"]');
                // Block btn action for future click
                 $(this).button('loading');
                // Submit form
                $.ajax({
                    type: $form.attr('method'),
                    url:  Routing.generate('tontine_visite_edit', {'id' : $id }),
                    data: $form.serialize()
                })
                .done(function (data) {
                    if(!data.success){
                        console.log(JSON.stringify(data.errors));
                    }else{
                        // Redirect to Home page
                        window.location.href = Routing.generate('tontine_visite_index');
                    }
                }).fail(function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                    console.log(textStatus);
                    console.log(errorThrown);
                });
            });

            // Append it
            $visiteForm.find('.modal-footer').append($submit);
            // Display
            $visiteForm.modal('show');
        }
    })
});

$('.visite_show').on('click', function (e) {
    e.preventDefault();
    //Get record to edit
    var $id = $(this).data('rec');
    var $modal = $('#pleaseWaitDialog');
    var $visiteForm = $('#preview-modal');
    // Block screen
    $modal.modal('show');

    // Ajax request for get preview visite form
    $.ajax({
        url:  Routing.generate('tontine_visite_preview', {'id' : $id }),
        type: 'GET',
        success: function (html) {
            // Permit
            $modal.modal('hide');
            // All popup title
            $visiteForm.find('.modal-title').html('Details Visite');
            // add content to display
            $visiteForm.find('.modal-body').html(html);
            // Display
            $visiteForm.modal('show');
        }
    })
});

var visteClientId = null
var refreshVisiteList = false;

function ajouterVisite(idc, rfsh){
    visteClientId = idc;
    refreshVisiteList = rfsh;
    $('#newVisitModal').modal({
        'keyboard':false,
        'backdrop':false,
        'show':true
    })
}

function envoyerVisite(idc){
    //showLoader("Création de la visite en cour ...");
    // Get form to submit
    var form = $('#newVisit form');
    // Block btn action for future click
    $.ajax({
        type: form.attr('method'),
        url:  Routing.generate('tontine_visite_new', {'idc':idc})+"?idb="+$("#tontinebundle_visite_bien").val()
                +"&date="+$("#tontinebundle_visite_choixDate").val(),
        data: form.serialize()
    })
    .done(function (data) {
        //hideLoader();
        //$("#newVisitModal").modal('hide');
        if(!data.success){
            alert("Oups! Opération échoué!");
            console.log(JSON.stringify(data.errors));
        }else{
            alert("Bravo! Opération réussie!");
            Yop.Popin();
          //  if(refreshVisiteList == 1) location = Routing.generate('tontine_visite_index', {'idc':visteClientId});
        }
    }).fail(function (jqXHR, textStatus, errorThrown) {
        //hideLoader();
        //$("#newVisitModal").modal('hide');
        alert("Oups! Opération échoué!");
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
    });
}


function visiteShow(id){
    showLoader("Chargement des détails en cour ...");
    $.ajax({
        type: 'GET',
        url:  Routing.generate('tontine_visite_preview', {'id':id}),
    })
    .done(function (data) {
        hideLoader();
        $("#detailsVisitModal").find(".modal-body").html(data);
        $("#detailsVisitModal").modal('show');
    }).fail(function (jqXHR, textStatus, errorThrown) {
        hideLoader();
        alert("Oups! Échoué!");
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
    });
}

var updatedVisit = null;

function modifierVisite(id){
    updatedVisit= id;
    showLoader("Chargement de la visite");
    $.ajax({
        type: 'GET',
        url:  Routing.generate('tontine_visite_edit_form', {'id':id}),
    })
    .done(function (data) {
        //hideLoader();
        //$("#editVisitModal").find(".modal-body").html(data);
        //$("#editVisitModal").modal('show');
        refreshDatetimepicker();
    }).fail(function (jqXHR, textStatus, errorThrown) {
        //hideLoader();
        alert("Oups! Échoué!");
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
    });
}

function updateVisite(){
    
    var form = $('#newVisit form');
    $.ajax({
        type: form.attr('method'),
        url:  Routing.generate('tontine_visite_edit', {'id':$('#newVisit form').find('idv').text()})
            +"?idb="+$("#tontinebundle_visite_bien").val()
                +"&date="+$("#tontinebundle_visite_choixDate").val(),
        data: form.serialize()
    })
    .done(function (data) {
        
        if(!data.success){
            alert("Oups! Opération échoué!");
            console.log(JSON.stringify(data.errors));
        }else{
            alert("Bravo! Opération réussie!");
            Yop.Popin();
        }
    }).fail(function (jqXHR, textStatus, errorThrown) {
        alert("Oups! Opération échoué!");
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
    });
}

function getClientVisiteList(id){    
    Yop.Pagelet({            
        url: Routing.generate('tontine_visite_index', {'idc':id}),
        pagelet: '#user-pagelet',
        title: ''
    });
}

function initEditVisiteForm(){
    $('#tontinebundle_visite_bien').awesomeSelector();
    $("#tontinebundle_visite_bien").change(function(){
        Yop.Popin({
            url: Routing.generate('tontine_visite_editpopup_form', {'id':$("form idv").text()})+"?idb="+$("#tontinebundle_visite_bien").val(),
            title: "Modification des paramètres de la visite",
            js: 'initEditVisiteForm'
        });
    });
    if($("#tontinebundle_visite_choixDate")){
        $("#tontinebundle_visite_choixDate").change(function(){
            //$("#tontinebundle_visite_bien").val(1);
            Yop.Popin({
                url: Routing.generate('tontine_visite_editpopup_form', {'id':$("form idv").text()})+"?idb="+$("#tontinebundle_visite_bien").val()
                +"&date="+$("#tontinebundle_visite_choixDate").val(),
                title: "Modification des paramètres de la visite",
                js: 'initEditVisiteForm'
            });
        });
    }
}

function initVisitForm() {
    $('#tontinebundle_visite_bien').awesomeSelector();
    $('.datePerso').after("<p style='text-align: justify' class='yop-blink'><code><span class='label-danger'>Attention:</span> Si le client choisit une date en dehors des dates prédéfinies par Global Service Immobilier, les frais de visite sont à sa charge. \n\
Veuillez l'en informer.</code></p>");
    $("#tontinebundle_visite_bien").change(function(){
        Yop.Popin({
            url: Routing.generate('tontine_visite_newpopup_form', {'idc':$("form idc").text()})+"?idb="+$("#tontinebundle_visite_bien").val(),
            title: "Demander une visite de bien",
            js: 'initVisitForm'
        });
    });
    if($("#tontinebundle_visite_choixDate")){
        $("#tontinebundle_visite_choixDate").change(function(){
            //$("#tontinebundle_visite_bien").val(1);
            Yop.Popin({
                url: Routing.generate('tontine_visite_newpopup_form', {'idc':$("form idc").text()})+"?idb="+$("#tontinebundle_visite_bien").val()
                +"&date="+$("#tontinebundle_visite_choixDate").val(),
                title: "Demander une visite de bien",
                js: 'initVisitForm'
            });
        });
    }
}
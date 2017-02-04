$('.conditionGenerale_new').on('click', function (e) {
    e.preventDefault();

    var $modal = $('#pleaseWaitDialog');
    var $conditionGeneraleForm = $('#new-conditionGenerale-modal');
    // Block screen
    $modal.modal('show');

    // Ajax request for get new conditionGenerale form
    $.ajax({
        url: $(this).attr('href'),
        type: 'GET',
        success: function () {
            // Permit
             $modal.modal('hide');
             $conditionGeneraleForm.modal('show');
        }
    })
});

$('.conditionGenerale_new_popup_submit').on('click', function (e) {
    e.preventDefault();
    // Get form to submit
    var $form = $('form[name = "tontinebundle_conditionGenerale"]');
    // Block btn action for future click
     $(this).button('loading');
    // Submit form
    $.ajax({
        type: $form.attr('method'),
        url:  Routing.generate('tontine_conditiongenerale_new'),
        data: $form.serialize()
    })
    .done(function (data) {
        if(!data.success){
            console.log(JSON.stringify(data.errors));
        }else{
            // Redirect to Home page
            window.location.href = Routing.generate('tontine_conditiongenerale_index');
        }
    }).fail(function (jqXHR, textStatus, errorThrown) {
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
    });
});

$('.conditionGenerale_edit').on('click', function (e) {
    e.preventDefault();
    //Get record to edit
    var $id = $(this).data('rec');
    var $modal = $('#pleaseWaitDialog');
    var $conditionGeneraleForm = $('#edit-modal');
    // Block screen
    $modal.modal('show');

    // Ajax request for get edit conditionGenerale form
    $.ajax({
        url:  Routing.generate('tontine_conditiongenerale_edit_form', {'id' : $id }),
        type: 'GET',
        success: function (html) {
            // Permit
            $modal.modal('hide');
            // All popup title
            $conditionGeneraleForm.find('.modal-title').html('Edit Conditiongenerale');
            // add content to display
            $conditionGeneraleForm.find('.modal-body').html(html);


            // Add submit link to finish
            var $submit = $("<input type='button' class ='conditionGenerale_edit_popup_submit btn btn-primary' value='Valider' />").on('click', function (e) {
                e.preventDefault();
                // Get form to submit
                var $form = $('form[name = "tontinebundle_conditionGenerale"]');
                // Block btn action for future click
                 $(this).button('loading');
                // Submit form
                $.ajax({
                    type: $form.attr('method'),
                    url:  Routing.generate('tontine_conditiongenerale_edit', {'id' : $id }),
                    data: $form.serialize()
                })
                .done(function (data) {
                    if(!data.success){
                        console.log(JSON.stringify(data.errors));
                    }else{
                        // Redirect to Home page
                        window.location.href = Routing.generate('tontine_conditiongenerale_index');
                    }
                }).fail(function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                    console.log(textStatus);
                    console.log(errorThrown);
                });
            });

            // Append it
            $conditionGeneraleForm.find('.modal-footer').append($submit);
            // Display
            $conditionGeneraleForm.modal('show');
        }
    })
});

$('.conditionGenerale_show').on('click', function (e) {
    e.preventDefault();
    //Get record to edit
    var $id = $(this).data('rec');
    var $modal = $('#pleaseWaitDialog');
    var $conditionGeneraleForm = $('#preview-modal');
    // Block screen
    $modal.modal('show');

    // Ajax request for get preview conditionGenerale form
    $.ajax({
        url:  Routing.generate('tontine_conditiongenerale_preview', {'id' : $id }),
        type: 'GET',
        success: function (html) {
            // Permit
            $modal.modal('hide');
            // All popup title
            $conditionGeneraleForm.find('.modal-title').html('Details Conditiongenerale');
            // add content to display
            $conditionGeneraleForm.find('.modal-body').html(html);
            // Display
            $conditionGeneraleForm.modal('show');
        }
    });
});

var fileCmp = 0;

function ajouterPiece(){
    fileCmp++;
    var proto = $("#tontinebundle_conditiongenerale_pieces").attr('data-prototype');
    proto = proto.replace("__name__label__", "<span class='glyphicon glyphicon-file'></span>\n\
<a class='btn btn-danger' onclick='removePiece(this)'><span class='glyphicon glyphicon-trash'></span></a>");
    proto = proto.replace(/__name__/g, "_"+fileCmp+"_");
    $("#tontinebundle_conditiongenerale_pieces").append(proto);
}

function initConditionForm (){//init form
   var proto = $("#tontinebundle_conditiongenerale_pieces").attr('data-prototype');
    proto = proto.replace("__name__label__", "<span class='glyphicon glyphicon-file'></span>");
    proto = proto.replace(/__name__/g, "_"+0+"_");
    $("#tontinebundle_conditiongenerale_pieces").append(proto);
}

function removePiece(item){
    $(item).parent().parent().remove();
}

function envoyerCondition(idc){
    //showLoader("Création de la visite en cour ...");
    // Get form to submit
    var form = $('#newCondition form');
    var formData =  (window.FormData)? new FormData(form[0]) : null;
    var data = (formData !== null)? formData : form.serialize();
    // Block btn action for future click
    $.ajax({
        type: form.attr('method'),
        url:  Routing.generate('tontine_conditiongenerale_new', {'idc':idc}),
        data: data,
        contentType: false,
        processData: false,
    })
    .done(function (data) {
        hideLoader();
        //$("#newVisitModal").modal('hide');
        if(!data.success){
            alert("Oups! Opération échoué!");
            console.log(JSON.stringify(data.errors));
        }else{
            alert("Bravo! Opération réussie!");
            Yop.Popin();
            $("#btncg").remove();
        }
    }).fail(function (jqXHR, textStatus, errorThrown) {
        hideLoader();
        //$("#newVisitModal").modal('hide');
        alert("Oups! Opération échoué!");
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
    });
}


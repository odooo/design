/*$(function() {
    $('.tontine_new').on('click', function (e) {
        e.preventDefault();

        var $modal = $('#pleaseWaitDialog');
        var $tontineForm = $('#new-tontine-modal');
        // Block screen
        $modal.modal('show');

        // Ajax request for get new tontine form
        $.ajax({
            url: $(this).attr('href'),
            type: 'GET',
            success: function () {
                // Permit
                $modal.modal('hide');
                $tontineForm.modal('show');
            }
        })
    });

    $('.tontine_edit').on('click', function (e) {
        e.preventDefault();
        //Get record to edit
        var $id = $(this).data('rec');
        var $modal = $('#pleaseWaitDialog');
        var $tontineForm = $('#edit-modal');
        // Block screen
        $modal.modal('show');

        // Ajax request for get edit tontine form
        $.ajax({
            url:  Routing.generate('tontine_tontines_edit_form', {'id' : $id }),
            type: 'GET',
            success: function (html) {
                // Permit
                $modal.modal('hide');
                // All popup title
                $tontineForm.find('.modal-title').html('Edit Tontine');
                // add content to display
                $tontineForm.find('.modal-body').html(html);


                // Add submit link to finish
                var $submit = $("<input type='button' class ='tontine_edit_popup_submit btn btn-primary' value='Valider' />").on('click', function (e) {
                    e.preventDefault();
                    // Get form to submit
                    var $form = $('form[name = "tontinebundle_tontine"]');
                    // Block btn action for future click
                    $(this).button('loading');
                    // Submit form
                    $.ajax({
                        type: $form.attr('method'),
                        url:  Routing.generate('tontine_tontines_edit', {'id' : $id }),
                        data: $form.serialize()
                    })
                    .done(function (data) {
                        if(!data.success){
                            console.log(JSON.stringify(data.errors));
                        }else{
                            // Redirect to Home page
                            window.location.href = Routing.generate('tontine_tontines_index');
                        }
                    }).fail(function (jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR);
                        console.log(textStatus);
                        console.log(errorThrown);
                    });
                });

                // Append it
                $tontineForm.find('.modal-footer').append($submit);
                // Display
                $tontineForm.modal('show');
            }
        })
    });

    $('.tontine_show').on('click', function (e) {
        e.preventDefault();
        //Get record to edit
        var $id = $(this).data('rec');
        var $modal = $('#pleaseWaitDialog');
        var $tontineForm = $('#preview-modal');
        // Block screen
        $modal.modal('show');

        // Ajax request for get preview tontine form
        $.ajax({
            url:  Routing.generate('tontine_tontines_preview', {'id' : $id }),
            type: 'GET',
            success: function (html) {
                // Permit
                $modal.modal('hide');
                // All popup title
                $tontineForm.find('.modal-title').html('Details Tontine');
                // add content to display
                $tontineForm.find('.modal-body').html(html);
                // Display
                $tontineForm.modal('show');
            }
        })
    });
});*/

function initTontineForm($dom) {    
    $('#tontinebundle_tontine_bien').awesomeSelector();
    $('#tontinebundle_tontine_duree').closest('.form-group').hide();

    $('#tontinebundle_tontine_bien').on('change', function() {
        var value = $(this).val();
        if (value) {
            $('#tontinebundle_tontine_montant').removeAttr('required').closest('.form-group').hide();
            $('#tontinebundle_tontine_mode').closest('.form-group').hide();
            showBienOptions(value);
        } else {
            $('#tontinebundle_tontine_montant').attr('required', true).closest('.form-group').show();
            $('#tontinebundle_tontine_mode').closest('.form-group').show();
        }
    })
}

function initTontineMiseForm() {
    $('#tontinebundle_depotmise_date').datetimepicker();
}

function showBienOptions(bienId) {
    $('#bien-options').css('text-align', 'center').html('<span class="fa fa-spin fa-spinner"></span>');
    $.ajax({
        type: 'GET',
        url: Routing.generate('tontine_bien_options', {id: bienId})
    }).done(function(options) {
        $('#bien-options').html('');
        if (options.length) {
            $('#bien-options').html(options.map(function(option) {
                var year = option.duree + 'an';

                if (option.duree > 1) {
                    year += 's';
                }

                return $(
                    '<div class="col-sm-4 text-center">' +
                        '<span>' + option.mode + '( '+ year +' )</span><br>' +
                        '<span style="font-weight: bold; font-size: 16px">' + option.mise + ' Fcfa </span><br>' +
                    '</div>'          
                )
                .css({
                    padding: '5px',
                    background: '#ecf0f5',
                    'cursor': 'pointer',
                })
                .on('click', function() {
                    $('#bien-options .col-sm-4').css('background', '#ecf0f5');
                    $(this).css('background', '#00a65a');
                    optionSelected(option);
                })
            }));
        } 
    }).fail(function() {
        $('#bien-options').html('Erreur: resélectionnez !');  
    });
}

function optionSelected(option) {
    $('#tontinebundle_tontine_mode').val(option.modeId);

    $('#tontinebundle_tontine_montant').val(option.mise);
    $('#tontinebundle_tontine_duree').val(option.duree);
}

function createNewTontine(event, $btn, $modal) {
    var $form = $('form[name = "tontinebundle_tontine"]');    

    $btn.button('loading');
    $.ajax({
        type: $form.attr('method'),
        url:  Routing.generate('tontine_tontines_new'),
        data: $form.serialize()
    })
    .done(function (data) {
        $btn.button('reset');
        $modal.modal('hide');
        if(data.success){
            Yop.load({
                url: Routing.generate('tontine_tontines_preview', {id: data.tontine.id}),
                at: '#user-pagelet',
                title: 'Détails de la tontine',
            });
        }
    }).fail(function (jqXHR, textStatus, errorThrown) {
        $btn.button('reset');
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
    });
}

function addTontineMise(event, $btn, $modal) {
    var $form = $('form[name="tontinebundle_depotmise"]');
    
    var minMise = $('#tontine-min-mise').val();
    var mise = $('#tontinebundle_depotmise_montant').val();

    if (minMise && mise && mise < minMise) {
        $('#alert-tontine-min-mise').fadeIn();
        return;
    } else {
        $('#alert-tontine-min-mise').fadeOut();
    }

    $btn.button('loading');    
    $.ajax({
        type: $form.attr('method'),
        url:  $form.attr('action'),
        data: $form.serialize()
    })
    .done(function (data) {
        $btn.button('reset');
        $modal.modal('hide');
        
        if(data.success) {
            var miseCount = $('#table-list-mise tr').length;
            var $mise = $('<tr></tr>')
                .append($('<td></td>').text(++miseCount))
                .append($('<td></td>').html('<strong>' + data.mise.montant + ' Fcfa</strong>'))
                .append($('<td></td>').text(data.mise.date));

            $('#table-list-mise').append($mise);
        }
    }).fail(function (jqXHR, textStatus, errorThrown) {
        $btn.button('reset');
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
    });
}
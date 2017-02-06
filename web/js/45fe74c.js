$(function() {
   
   $('.client_new').on('click', function (e) {
        e.preventDefault();

        var $modal = $('#pleaseWaitDialog');
        var $clientForm = $('#new-client-modal');
        // Block screen
        $modal.modal('show');

        // Ajax request for get new client form
        $.ajax({
            url: $(this).attr('href'),
            type: 'GET',
            success: function () {
                // Permit
                 $modal.modal('hide');
                 $clientForm.modal('show');
            }
        })
    });

    $('.client_new_popup_submit').on('click', function (e) {
        e.preventDefault();
        // Get form to submit
        var $form = $('form[name = "tontinebundle_client"]');
        // Block btn action for future click
         $(this).button('loading');
        // Submit form
        $.ajax({
            type: $form.attr('method'),
            url:  Routing.generate('tontine_client_new'),
            data: $form.serialize()
        })
        .done(function (data) {
            if(!data.success){
                console.log(JSON.stringify(data.errors));
            }else{
                // Redirect to Home page
                window.location.href = Routing.generate('tontine_client_index');
            }
        }).fail(function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
        });
    });

    $('.client_edit').on('click', function (e) {
        e.preventDefault();
        //Get record to edit
        var $id = $(this).data('rec');
        var $modal = $('#pleaseWaitDialog');
        var $clientForm = $('#edit-modal');
        // Block screen
        $modal.modal('show');

        // Ajax request for get edit client form
        $.ajax({
            url:  Routing.generate('tontine_client_edit_form', {'id' : $id }),
            type: 'GET',
            success: function (html) {
                // Permit
                $modal.modal('hide');
                // All popup title
                $clientForm.find('.modal-title').html('Edit Client');
                // add content to display
                $clientForm.find('.modal-body').html(html);


                // Add submit link to finish
                var $submit = $("<input type='button' class ='client_edit_popup_submit btn btn-primary' value='Valider' />").on('click', function (e) {
                    e.preventDefault();
                    // Get form to submit
                    var $form = $('form[name = "tontinebundle_client"]');
                    // Block btn action for future click
                     $(this).button('loading');
                    // Submit form
                    $.ajax({
                        type: $form.attr('method'),
                        url:  Routing.generate('tontine_client_edit', {'id' : $id }),
                        data: $form.serialize()
                    })
                    .done(function (data) {
                        if(!data.success){
                            console.log(JSON.stringify(data.errors));
                        }else{
                            // Redirect to Home page
                            window.location.href = Routing.generate('tontine_client_index');
                        }
                    }).fail(function (jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR);
                        console.log(textStatus);
                        console.log(errorThrown);
                    });
                });

                // Append it
                $clientForm.find('.modal-footer').append($submit);
                // Display
                $clientForm.modal('show');
            }
        })
    });

    $('.client_show').on('click', function (e) {
        e.preventDefault();
        //Get record to edit
        var $id = $(this).data('rec');
        var $modal = $('#pleaseWaitDialog');
        var $clientForm = $('#preview-modal');
        // Block screen
        $modal.modal('show');

        // Ajax request for get preview client form
        $.ajax({
            url:  Routing.generate('tontine_client_preview', {'id' : $id }),
            type: 'GET',
            success: function (html) {
                // Permit
                $modal.modal('hide');
                // All popup title
                $clientForm.find('.modal-title').html('Details Client');
                // add content to display
                $clientForm.find('.modal-body').html(html);
                // Display
                $clientForm.modal('show');
            }
        })
    });
 
    
}); 

$(function() {

    $('#user-list .search-form').on('keyup', function(event) {
        var keywords = $(this).val().trim().split(' ');
        var $items = $('#user-list .list-item');
        
        if (keywords.length == 0) {
            $items.fadeIn();
        } else {
            $items.each(function() {
                var searchable = $(this).data('search');
                
                for (var i in keywords) {
                    if (searchable.toLowerCase().match(new RegExp(keywords[i].toLowerCase(), 'g'))) {
                        $(this).fadeIn();
                        return;   
                    }
                }
                
                $(this).fadeOut();
            });
        }
    });
    
    var title = $('#user-list').data('title') || "";
    
    $('#user-list .list-item').on('click', function() {
        $('#user-list .list-item').removeClass('active');
        $(this).addClass('active');
        
        Yop.load({            
            url: $(this).data('href'),
            at: '#user-pagelet',
            title: title + $(this).data('name')
        });
    })
    if($('#user-list .list-item').length !== 0){
        Yop.load({            
            url: $('#user-list .list-item').eq(0).data('href'),
            at: '#user-pagelet',
            title: title + $('#user-list .list-item').eq(0).data('name'),
        }, false);
        $('#user-list .list-item').eq(0).addClass('active');
    }
});
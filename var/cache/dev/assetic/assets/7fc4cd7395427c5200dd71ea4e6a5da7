function enabledisableagent(value, id, success){
    showLoader(value === 1 ? 'Activation en cour ...' : 'Désactivation en cour ...');
    $.ajax({
      type: "POST",
      url: Routing.generate("tontine_agent_enabledeseable"),
      data: {"id":id, "value":value}, 
    }).done(function(data) {

    }).fail(function(data) {
        alert(data);
    }).success(function(data) {
        if(data === "OK") success();
        hideLoader();
        if(value === 1) alert("Bravo! Compte activé");
        else alert("Bravo! Compte désactivé");
    });
}

function onOffBtn(id, index) {
    if ($(index).find('.btn-success').size()>0) {
        enabledisableagent(0,id,function(){
            $(index).find('.btn').toggleClass('btn-success active');
            $(index).find('.btn-success').removeClass('btn-success').toggleClass('btn-danger');
        });                            
    }else{
        enabledisableagent(1,id, function(){
            $(index).find('.btn').toggleClass('btn-danger active');
            $(index).find('.btn-danger').removeClass('btn-danger').toggleClass('btn-success');
         });
    }
}
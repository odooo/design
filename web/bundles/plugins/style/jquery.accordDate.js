// (function($){
    // $.fn.min=function(params){
        // if(typeof params == "undefined")params=0;
        // var first=$(this).find("option").first();
        // if(first.val()>)
        
    // }
// })(jQuery);


(function($){
    $.fn.selectMin=function(param){
        if(typeof param == "undefined")param=0;
        while(true){
        var first=$(this).find("option").first();
        if(parseInt(first.val())>param){
            $(this).prepend("<option>"+(parseInt(first.val())+1)+"</option>")
        }else if(parseInt(first.val())<param){
            first.remove();
        }else{
            break;
        }
        }
        
    }
    $.fn.selectMax=function(param){
        if(typeof param == "undefined")param=0;
        while(true){
        var last=$(this).find("option").last();
        if(parseInt(last.val())>param){
            last.remove();
        }else if(parseInt(last.val())<param){
            $(this).append("<option>"+(parseInt(last.val())+1)+"</option>")
        }else{
            break;
        }
        }
    }
    $.fn.accordDate=function(options){
        var defaults={
            "day":".day",
            "month":".month",
            "year":".year",
            "lengthYear":100
        };
        //pemettre de gerer les options des select
        selectNumberOption=function (opt){
            defaults={
            "min":1,
            "max":31
            };
            selectOption="\n";
            var params=jQuery.extend(defaults,opt);
            for(i=params.min; i<=params.max;i++){
             selectOption+="<option>"+i+"</option>\n";
            }
            
            return selectOption+"\n";
        };
        
        parametres=$.extend(defaults,options);
        return this.each(function(){
            //recuperation des object jour ,mois, annee de l'object jquery parent
            var jour=$(this).find(parametres.day);
            var mois=$(this).find(parametres.month);
            var ans=$(this).find(parametres.year);
            
            //initialisation de jour;
            jour.html(selectNumberOption());
            
            //recuperation de la date actuelle 
            var curentYear=new Date().getFullYear();
            
            //on recupere reste de l'annee pour test si elle bicetil ou pas
            var test=ans.val()%4;
            
            //initialisation des annee en relation avec l'annee actuelle 
            ans.html(selectNumberOption({
                    "min":curentYear-parametres.lengthYear,
                    "max":curentYear-1
                }));
            
            
            mois.change(function(){
            if(mois.val()==4||mois.val()==6||mois.val()==7||mois.val()==8||mois.val()==9||mois.val()==11){
                jour.selectMax(30);
                
                //if(lastSelect > 30)jour.val(30);
                //else jour.val(lastSelect);
                }
                else if(mois.val()==2){
                    jour.selectMax(29);
             
               
                
                }else {
                    jour.selectMax(31);
                }
                ans.change();
            });
            
            //verifiaction apres modification de l'anne si le mois et jour respecte les regle de datage
            ans.change(function(){
                var test2=ans.val()%4;
                if(test2!=0 && mois.val()==2){
                    jour.selectMax(28);
                }else if(test2==0 && mois.val()==2){
                    jour.selectMax(29);
                }
            });
        });
    };
})(jQuery);

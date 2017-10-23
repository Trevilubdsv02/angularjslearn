app.factory("contatosAPI", function($http, configPasta){
   $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
    
    var _ajaxContatos = function() {
        return $http.get( configPasta.urlBase + "/slct.php" ) ;  
    };
    var _ajaxUmContato = function(id) {
        return $http.post( configPasta.urlBase + "/slctOne.php", id );  
    };
    var _attContatos = function() {
        return $http.post( configPasta.urlBase +"/att.php");
    };
    var _sbmContatos = function(recebeA) 
    {
        return $http({
             method  : 'POST',
             url     : configPasta.urlBase + "/sbm.php",
             data    : recebeA  // pass in data as strings
            // headers : { 'Content-Type': 'application/x-www-form-urlencoded' }  // set the headers so angular passing info as form data (not request payload)
            });
    };
    
    

    
    
    
    return {
        ajaxContatos: _ajaxContatos,
        ajaxUmContato: _ajaxUmContato,
        attContatos: _attContatos,
        sbmContatos: _sbmContatos
    };
    
});
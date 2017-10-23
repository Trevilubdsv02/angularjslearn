app.factory("operadorasAPI", function($http, configPasta){
    var _ajaxOperadoras = function() {
    return $http.get( configPasta.urlBase +"/listaOperadoras.php");
    };
    return {
      ajaxOperadoras: _ajaxOperadoras  
    };
});
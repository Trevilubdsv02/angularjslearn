app.config(function($routeProvider, configPasta){
    $routeProvider.when("/contatos",{
       templateUrl:"view/contatos.html",
    });
    
    $routeProvider.when("/novoContato",{
        templateUrl:"view/novoContato.html",
    });
    $routeProvider.when("/atualizarContato/:id",{
        templateUrl:"view/atualizarContato.html",
    });
    $routeProvider.otherwise("/contatos",{
        templateUrl:"view/novoContato.html", 
    });
        
});
app.controller('atualizarController', function($sanitize, $scope, $timeout, contatosAPI, operadorasAPI, $routeParams){
    
    var that = this;    
    var pageid = {"id":$routeParams.id};
       /*
        Data
       */
    
    //form de atualização//
    that.formatt = {};
    /////////////////////////////////
    that.operadoras=[];
    that.cores =[
        {nome:"Azul", cor:"blue"},
        {nome:"Vermelho", cor:"red"}
    ];
        
        /*
         Methods
        */
    that.carregarOperadoras = function(){
        return $timeout(function() {
            operadorasAPI.ajaxOperadoras().then(function (response){
                    that.operadoras = response.data;
                console.log(that.operadoras);
            }); 
        });
    };
    that.carregarOperadoras();
    that.carregarUmContato = function(pageid){
        contatosAPI.ajaxUmContato(pageid).then(function(response){
            that.formatt = (response.data.consulta);
            console.log(response.data.consulta);
        });
    };
    that.carregarUmContato(pageid);
    
    
});
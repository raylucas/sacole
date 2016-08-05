angular.module("scle").controller("MainController", function ($scope, $http) {
	$scope.teste = "pedrao";
	var url = 'operador.php';

	$scope.depositos = [];
    $scope.pontuacao = [];
	$scope.produtos = [
		{ 
			categoria: 'Pilha', 
			imagem: 'images/pilha.jpg',
			qnt: 0,
		}, 
		{ 
			categoria: 'Celular', 
			imagem: 'images/cel.png',
			qnt: 0,
		},
		{ 
			categoria: 'Cartucho', 
			imagem: 'images/cartucho.jpg',
			qnt: 0,
		},
		
	];
	
	$scope.mais = function(index) { 
		$scope.produtos[index].qnt += 1; 
	};
	
	$scope.menos = function(index) { 
		if($scope.produtos[index].qnt > 0){
			$scope.produtos[index].qnt -= 1; 
		}
	};	

	$scope.enviar = function(produtos){
		var p = produtos;
		var i=0;
		var flag = false;
		for(i in p){
			if(p[i].categoria != ""){
				if(p[i].qnt != 0){
					var operacao = "enviar";	
					$http({
				      method: 'post',
				      url: url,
				      data: $.param({'categoria': p[i].categoria, 
					  				 'qnt': p[i].qnt,
					  				 'ra':p.ra,
					  				'operacao' : operacao 
									}),
				      headers: {'Content-Type': 'application/x-www-form-urlencoded'}
				    }).success(function(data, status, headers, config) {
				    
					}).error(function (data, status, headers, config) {
						$scope.message = "Aconteceu um problema: " + data;
					});
				}
			}
		}
		alert("Enviado com sucesso");
		location.reload();

	};	

	$scope.consultaDespositos = function () {
    var operacao = "consultarDespositos";
		$http({
		      method: 'post',
		      url: url,
		      data: $.param({ 'operacao' : operacao }),
		      headers: {'Content-Type': 'application/x-www-form-urlencoded'}
		    }).success(function(data, status, headers, config) {
	    		$scope.depositos = data;
            }).error(function (data, status, headers, config) {
			$scope.message = "Aconteceu um problema: " + data;
		});
	};
    
    $scope.adicionarComponente = function(componente){
        var operacao = "inserirComponente";
		$http({
              method: 'post',
              url: url,
              data: $.param({'categoria': componente.categoria, 
                             'ponts': componente.pontuacao,
                            'operacao' : operacao 
                            }),
              headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(data, status, headers, config) {
                alert("Componente criado com sucesso!");
            }).error(function (data, status, headers, config) {
                $scope.message = "Aconteceu um problema: " + data;
            });
    };
    
    $scope.consultaPontucao = function () {
    var operacao = "consultarPontuacao";
		$http({
		      method: 'post',
		      url: url,
		      data: $.param({ 'operacao' : operacao }),
		      headers: {'Content-Type': 'application/x-www-form-urlencoded'}
		    }).success(function(data, status, headers, config) {
	    		$scope.pontuacao = data;
            }).error(function (data, status, headers, config) {
			$scope.message = "Aconteceu um problema: " + data;
		});
	};

	$scope.consultaDespositos();
    $scope.consultaPontucao();
});



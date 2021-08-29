
// if(document.getElementsByClassName('status_class')[3].childNodes[0].nodeValue;)


angular.module('app', ['ngMaterial']);

function DialogRolesController($scope, $mdDialog, RolesService) {
  $scope.roles = ['Administrador'];
  $scope.selected = RolesService.getRole();

  $scope.cancel = function() {
    $mdDialog.cancel();
  };

  $scope.select = function(role) {
    RolesService.setRole(role);
    $mdDialog.hide(role);
  };
}

angular.module('app')
.factory('ViewsService', function() {
  var _views = [
        {label:'Página Inicial', icon: 'fa-inbox', separator: false},
        {label:'Funções do Sistema', icon: 'fas fa-book-reader', separator: false},
        {label:'Gerar relatório', icon: 'fa-user-plus', separator: false},
        {label:'Sair', icon: 'fa-cog', separator: true, id:"testesairr"}
      ],
      _current = 'Página Inicial';
	  

  function _getViews() {
	  
    return _views;
  }

  function _getCurrent() {
    return _current;
  }

  function _setCurrent(current) {
    _current = current
  }

  return {
    getViews: _getViews,
    getCurrent: _getCurrent,
    setCurrent: _setCurrent
  };
});

angular.module('app')
.factory('RolesService', function() {
  var _role = 'Administrador';
  function _getRole() {
    return _role;
  }

  function _setRole(role) {
    _role= role;
  }

  return {
    getRole: _getRole,
    setRole: _setRole
  };
});

angular.module('app').controller('DashboardController', function() {
  var ctrl = this;
});


angular.module('app')
.controller('appController', function($scope, $mdSidenav, $document, $mdDialog,
  RolesService, ViewsService) {
  var ctrl = this;

  ctrl.onDocumentClick = null;
  ctrl.logOutMenuVisible = false;
  ctrl.views = ViewsService.getViews();
  ctrl.currentView = ViewsService.getCurrent();
  ctrl.role = RolesService.getRole();
 

  function _showLogOutMenu () {
    ctrl.logOutMenuVisible = true;

    ctrl.onDocumentClick = $document.bind('click', function () {
	
	window.location.href = "https://localhost/admin/";     
	 _hideLogOutMenu();
	 
	 
      $scope.$apply();
	  
    });
  }
  

  function _hideLogOutMenu () {
    ctrl.logOutMenuVisible = false;
    ctrl.onDocumentClick = null;
	
	
  }

  ctrl.toggleMainMenu = function() {
    $mdSidenav('menu-left').toggle();
  };

  ctrl.toggleLogOutMenu = function(event) {
    event.stopImmediatePropagation();

    if (ctrl.logOutMenuVisible) {
      _hideLogOutMenu();
	  
	  
    } else {
      _showLogOutMenu();
	  
    }
  };

  ctrl.changeRole = function(event) {$mdDialog.show({
      controller: DialogRolesController,
      templateUrl: 'dialogRole.html',
      parent: angular.element(document.body),
      targetEvent: event,
      clickOutsideToClose:true
    })
    .then(function(role) {
      ctrl.role = role;
    });
  };

  ctrl.changeView = function(view) {
    ViewsService.setCurrent(view);
    ctrl.currentView = view;
	if(ctrl.currentView === 'Sair'){
		window.location.href = "https://localhost/admin/";
	}
    ctrl.toggleMainMenu();
  }
});



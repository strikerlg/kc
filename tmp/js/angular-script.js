// Application module - Moduł aplikacji
var crudApp = angular.module('crudApp',[]);
crudApp.controller("DbController",['$scope','$http', function($scope,$http){

// Funkcja pozwala uzyskać szczegółowe dane pracownika z bazy danych
getInfo();
function getInfo(){
// Wysyłanie żądania do plików EmpDetails.php
$http.post('databaseFiles/empDetails.php').success(function(data){
// Przechowywanie zwracanych danych do zakresu
$scope.details = data;
});
}

// Ustawienie domyślnej wartości płci
$scope.empInfo = {'gender' : 'male'};
// Włączanie zmiennej show_form, aby włączyć opcję Dodaj przycisk pracownika
$scope.show_form = true;
// Funkcja dodawania zachowań przełączania w celu utworzenia
$scope.formToggle =function(){
$('#empForm').slideToggle();
$('#editForm').css('display', 'none');
}
$scope.insertInfo = function(info){
$http.post('databaseFiles/insertDetails.php',{"name":info.name,"email":info.email,"address":info.address,"gender":info.gender}).success(function(data){
if (data == true) {
getInfo();
$('#empForm').css('display', 'none');
}
});
}
$scope.deleteInfo = function(info){
$http.post('databaseFiles/deleteDetails.php',{"del_id":info.emp_id}).success(function(data){
if (data == true) {
getInfo();
}
});
}
$scope.currentUser = {};
$scope.editInfo = function(info){
$scope.currentUser = info;
$('#empForm').slideUp();
$('#editForm').slideToggle();
}
$scope.UpdateInfo = function(info){
$http.post('databaseFiles/updateDetails.php',{"id":info.emp_id,"name":info.emp_name,"email":info.emp_email,"address":info.emp_address,"gender":info.emp_gender}).success(function(data){
$scope.show_form = true;
if (data == true) {
getInfo();
}
});
}
$scope.updateMsg = function(emp_id){
$('#editForm').css('display', 'none');
}
}]);
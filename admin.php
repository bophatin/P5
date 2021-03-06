<?php
require 'model/Autoloader.php';
require 'controller/FrontController.php';
require 'controller/AdminController.php';
Autoloader::register();

if(isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 'adminLogView';
}

$page === isset($_GET['page']);

switch($page) {
	case 'adminLogView':
	AdminController::log();
	break;

	case 'logout':
	AdminController::logout();
	break;

	case 'adminCategoryView':
	AdminController::editCategory();
	break;

	case 'adminArticlesView':
	AdminController::editArticle();
	break;

	case 'adminNewsletterView':
	AdminController::getListEmails();
	break;

	case 'exportCSV' :
	AdminController::exportEmails();
	break;

	case 'adminUsersView':
	AdminController::editUsers();
	break;

	case 'updateUsersView':
	AdminController::getUserId();
	AdminController::updateUser();
	break;

	case 'updateCategoryView':
	AdminController::getCatId();
	AdminController::updateCat();
	break;

	case 'updateArticlesView':
	AdminController::updateArt();
	AdminController::getArtId();
	break;

	case 'updateNewsletterView':
	AdminController::getEmailId();
	AdminController::updateEmail();
	break;

	case 'delete':
	AdminController::delete();
	break;

}

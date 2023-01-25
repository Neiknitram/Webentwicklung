<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Login::index');
$routes->get('login', 'Login::index');
$routes->get('members', 'Members::index');
$routes->get('members_edit', 'Members_edit::index');
$routes->get('members_delete', 'Members_delete::index');
$routes->get('projects', 'Projects::index');
$routes->get('projects_edit', 'Projects_edit::index');
$routes->get('projects_delete', 'Projects_delete::index');
$routes->get('register', 'Register::index');
$routes->get('tab', 'Tab::index');
$routes->get('tab_edit', 'Tab_edit::index');
$routes->get('tab_delete', 'Tab_delete::index');
$routes->get('tasks', 'Tasks::index');
$routes->get('tasks_edit', 'Tasks_edit::index');
$routes->get('tasks_delete', 'Tasks_delete::index');
$routes->get('todo', 'Todo::index');
$routes->post('/login', 'Login::login');
$routes->post('/membersEdit', 'Members_edit::editMember');
$routes->post('/membersAdd', 'Members::addMember');
$routes->post('/membersDelete', 'Members_delete::deleteMember');
$routes->get('/projects', 'Projects::index');
$routes->post('/select_projects', 'Projects::select');
$routes->post('/add_projects', 'Projects::add');
$routes->post('/edit_projects', 'Projects_edit::editProject');
$routes->post('/projectsDelete', 'Projects_delete::deleteProject');
$routes->post('/tasksAdd', 'Tasks::addTask');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

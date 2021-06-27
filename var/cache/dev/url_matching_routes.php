<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\AuthenticatorController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\AuthenticatorController::logout'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'blog', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, false, false, null]],
        '/candidats' => [[['_route' => 'candidat', '_controller' => 'App\\Controller\\CandidatController::profil'], null, null, null, false, false, null]],
        '/candidat/favoris' => [[['_route' => 'favoris', '_controller' => 'App\\Controller\\CandidatController::favoris'], null, null, null, false, false, null]],
        '/candidat/postuler' => [[['_route' => 'postuler', '_controller' => 'App\\Controller\\CandidatController::showPostuleList'], null, null, null, false, false, null]],
        '/candidat' => [[['_route' => 'crud_candidat_index', '_controller' => 'App\\Controller\\CrudCandidatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/candidat/new' => [[['_route' => 'crud_candidat_new', '_controller' => 'App\\Controller\\CrudCandidatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/candidat/edit' => [[['_route' => 'crud_candidat_edit', '_controller' => 'App\\Controller\\CrudCandidatController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/recruteur' => [[['_route' => 'crud_recruteur_index', '_controller' => 'App\\Controller\\CrudRecruteurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/recruteur/new' => [[['_route' => 'crud_recruteur_new', '_controller' => 'App\\Controller\\CrudRecruteurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/recruteur/edit' => [[['_route' => 'crud_recruteur_edit', '_controller' => 'App\\Controller\\CrudRecruteurController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/lesoffres' => [[['_route' => '', '_controller' => 'App\\Controller\\DiscoverController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/offres' => [[['_route' => 'offres', '_controller' => 'App\\Controller\\JobController::index'], null, null, null, false, false, null]],
        '/api/job' => [[['_route' => 'apijob', '_controller' => 'App\\Controller\\JobController::fetchJob'], null, null, null, false, false, null]],
        '/offres/modifier' => [[['_route' => 'job_crud_index', '_controller' => 'App\\Controller\\JobCrudController::index'], null, ['GET' => 0], null, true, false, null]],
        '/offres/modifier/new' => [[['_route' => 'job_crud_new', '_controller' => 'App\\Controller\\JobCrudController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/recruteurs' => [[['_route' => 'recruteur', '_controller' => 'App\\Controller\\RecruteurController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/register/1' => [[['_route' => 'choice_register', '_controller' => 'App\\Controller\\RegistrationController::registerType'], null, null, null, false, false, null]],
        '/registerRecruter' => [[['_route' => 'app_register_recruteur', '_controller' => 'App\\Controller\\RegistrationRecruterController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationRecruterController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/candidat/(?'
                    .'|ajouterAuxFavoris/([^/]++)(*:208)'
                    .'|favoris/remove/([^/]++)(*:239)'
                    .'|([^/]++)(*:255)'
                .')'
                .'|/re(?'
                    .'|crute(?'
                        .'|ur(?'
                            .'|/([^/]++)(*:292)'
                            .'|s/candidature/([^/]++)(*:322)'
                        .')'
                        .'|r/postule/([^/]++)(*:349)'
                    .')'
                    .'|set\\-password/reset(?:/([^/]++))?(*:391)'
                .')'
                .'|/showJob/([^/]++)(*:417)'
                .'|/postulers/([^/]++)(*:444)'
                .'|/offres/modifier/([^/]++)(?'
                    .'|(*:480)'
                    .'|/edit(*:493)'
                    .'|(*:501)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        208 => [[['_route' => 'ajouter_favoris', '_controller' => 'App\\Controller\\CandidatController::ajouterFavoris'], ['id'], null, null, false, true, null]],
        239 => [[['_route' => 'remove_favoris', '_controller' => 'App\\Controller\\CandidatController::supprimerFavoris'], ['id'], null, null, false, true, null]],
        255 => [[['_route' => 'crud_candidat_delete', '_controller' => 'App\\Controller\\CrudCandidatController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        292 => [[['_route' => 'crud_recruteur_delete', '_controller' => 'App\\Controller\\CrudRecruteurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        322 => [[['_route' => 'recruteur_candidature', '_controller' => 'App\\Controller\\RecruteurController::showCandidat'], ['id'], null, null, false, true, null]],
        349 => [[['_route' => 'candidat_postuler', '_controller' => 'App\\Controller\\JobController::showCandidatPostuler'], ['id'], null, null, false, true, null]],
        391 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        417 => [[['_route' => 'displayJob', '_controller' => 'App\\Controller\\JobController::displayJob'], ['id'], null, null, false, true, null]],
        444 => [[['_route' => 'job_postuler', '_controller' => 'App\\Controller\\JobController::postuler'], ['id'], null, null, false, true, null]],
        480 => [[['_route' => 'job_crud_show', '_controller' => 'App\\Controller\\JobCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        493 => [[['_route' => 'job_crud_edit', '_controller' => 'App\\Controller\\JobCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        501 => [
            [['_route' => 'job_crud_delete', '_controller' => 'App\\Controller\\JobCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

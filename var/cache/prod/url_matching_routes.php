<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/candidat/(?'
                    .'|ajouterAuxFavoris/([^/]++)(*:46)'
                    .'|favoris/remove/([^/]++)(*:76)'
                    .'|([^/]++)(*:91)'
                .')'
                .'|/re(?'
                    .'|crute(?'
                        .'|ur(?'
                            .'|/([^/]++)(*:127)'
                            .'|s/candidature/([^/]++)(*:157)'
                        .')'
                        .'|r/postule/([^/]++)(*:184)'
                    .')'
                    .'|set\\-password/reset(?:/([^/]++))?(*:226)'
                .')'
                .'|/showJob/([^/]++)(*:252)'
                .'|/postulers/([^/]++)(*:279)'
                .'|/offres/modifier/([^/]++)(?'
                    .'|(*:315)'
                    .'|/edit(*:328)'
                    .'|(*:336)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'ajouter_favoris', '_controller' => 'App\\Controller\\CandidatController::ajouterFavoris'], ['id'], null, null, false, true, null]],
        76 => [[['_route' => 'remove_favoris', '_controller' => 'App\\Controller\\CandidatController::supprimerFavoris'], ['id'], null, null, false, true, null]],
        91 => [[['_route' => 'crud_candidat_delete', '_controller' => 'App\\Controller\\CrudCandidatController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        127 => [[['_route' => 'crud_recruteur_delete', '_controller' => 'App\\Controller\\CrudRecruteurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        157 => [[['_route' => 'recruteur_candidature', '_controller' => 'App\\Controller\\RecruteurController::showCandidat'], ['id'], null, null, false, true, null]],
        184 => [[['_route' => 'candidat_postuler', '_controller' => 'App\\Controller\\JobController::showCandidatPostuler'], ['id'], null, null, false, true, null]],
        226 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        252 => [[['_route' => 'displayJob', '_controller' => 'App\\Controller\\JobController::displayJob'], ['id'], null, null, false, true, null]],
        279 => [[['_route' => 'job_postuler', '_controller' => 'App\\Controller\\JobController::postuler'], ['id'], null, null, false, true, null]],
        315 => [[['_route' => 'job_crud_show', '_controller' => 'App\\Controller\\JobCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        328 => [[['_route' => 'job_crud_edit', '_controller' => 'App\\Controller\\JobCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        336 => [
            [['_route' => 'job_crud_delete', '_controller' => 'App\\Controller\\JobCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

<?php

namespace ContainerZakWY5x;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_ServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AuthenticatorController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\CandidatController::ajouterFavoris' => ['privates', '.service_locator.eTJZNXh', 'get_ServiceLocator_ETJZNXhService', true],
            'App\\Controller\\CandidatController::favoris' => ['privates', '.service_locator.D_dj0rp', 'get_ServiceLocator_DDj0rpService', true],
            'App\\Controller\\CandidatController::profil' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\CandidatController::supprimerFavoris' => ['privates', '.service_locator.h9bDyFt', 'get_ServiceLocator_H9bDyFtService', true],
            'App\\Controller\\CrudCandidatController::delete' => ['privates', '.service_locator.4XzjmVT', 'get_ServiceLocator_4XzjmVTService', true],
            'App\\Controller\\CrudCandidatController::edit' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\CrudRecruteurController::delete' => ['privates', '.service_locator.DsvvdXF', 'get_ServiceLocator_DsvvdXFService', true],
            'App\\Controller\\CrudRecruteurController::index' => ['privates', '.service_locator.qsCY2gG', 'get_ServiceLocator_QsCY2gGService', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\JobController::displayJob' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\JobController::fetchJob' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\JobController::index' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\JobController::postuler' => ['privates', '.service_locator.gFYxa9A', 'get_ServiceLocator_GFYxa9AService', true],
            'App\\Controller\\JobController::showCandidatPostuler' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\JobCrudController::delete' => ['privates', '.service_locator.wv06f8x', 'get_ServiceLocator_Wv06f8xService', true],
            'App\\Controller\\JobCrudController::edit' => ['privates', '.service_locator.wv06f8x', 'get_ServiceLocator_Wv06f8xService', true],
            'App\\Controller\\JobCrudController::show' => ['privates', '.service_locator.wv06f8x', 'get_ServiceLocator_Wv06f8xService', true],
            'App\\Controller\\RecruteurController::index' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\RecruteurController::showCandidat' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\RegistrationRecruterController::register' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AuthenticatorController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\CandidatController:ajouterFavoris' => ['privates', '.service_locator.eTJZNXh', 'get_ServiceLocator_ETJZNXhService', true],
            'App\\Controller\\CandidatController:favoris' => ['privates', '.service_locator.D_dj0rp', 'get_ServiceLocator_DDj0rpService', true],
            'App\\Controller\\CandidatController:profil' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\CandidatController:supprimerFavoris' => ['privates', '.service_locator.h9bDyFt', 'get_ServiceLocator_H9bDyFtService', true],
            'App\\Controller\\CrudCandidatController:delete' => ['privates', '.service_locator.4XzjmVT', 'get_ServiceLocator_4XzjmVTService', true],
            'App\\Controller\\CrudCandidatController:edit' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\CrudRecruteurController:delete' => ['privates', '.service_locator.DsvvdXF', 'get_ServiceLocator_DsvvdXFService', true],
            'App\\Controller\\CrudRecruteurController:index' => ['privates', '.service_locator.qsCY2gG', 'get_ServiceLocator_QsCY2gGService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\JobController:displayJob' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\JobController:fetchJob' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\JobController:index' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\JobController:postuler' => ['privates', '.service_locator.gFYxa9A', 'get_ServiceLocator_GFYxa9AService', true],
            'App\\Controller\\JobController:showCandidatPostuler' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\JobCrudController:delete' => ['privates', '.service_locator.wv06f8x', 'get_ServiceLocator_Wv06f8xService', true],
            'App\\Controller\\JobCrudController:edit' => ['privates', '.service_locator.wv06f8x', 'get_ServiceLocator_Wv06f8xService', true],
            'App\\Controller\\JobCrudController:show' => ['privates', '.service_locator.wv06f8x', 'get_ServiceLocator_Wv06f8xService', true],
            'App\\Controller\\RecruteurController:index' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\RecruteurController:showCandidat' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\RegistrationRecruterController:register' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.pwZ6MTM', 'get_ServiceLocator_PwZ6MTMService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AuthenticatorController::login' => '?',
            'App\\Controller\\CandidatController::ajouterFavoris' => '?',
            'App\\Controller\\CandidatController::favoris' => '?',
            'App\\Controller\\CandidatController::profil' => '?',
            'App\\Controller\\CandidatController::supprimerFavoris' => '?',
            'App\\Controller\\CrudCandidatController::delete' => '?',
            'App\\Controller\\CrudCandidatController::edit' => '?',
            'App\\Controller\\CrudRecruteurController::delete' => '?',
            'App\\Controller\\CrudRecruteurController::index' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\JobController::displayJob' => '?',
            'App\\Controller\\JobController::fetchJob' => '?',
            'App\\Controller\\JobController::index' => '?',
            'App\\Controller\\JobController::postuler' => '?',
            'App\\Controller\\JobController::showCandidatPostuler' => '?',
            'App\\Controller\\JobCrudController::delete' => '?',
            'App\\Controller\\JobCrudController::edit' => '?',
            'App\\Controller\\JobCrudController::show' => '?',
            'App\\Controller\\RecruteurController::index' => '?',
            'App\\Controller\\RecruteurController::showCandidat' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RegistrationRecruterController::register' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::reset' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AuthenticatorController:login' => '?',
            'App\\Controller\\CandidatController:ajouterFavoris' => '?',
            'App\\Controller\\CandidatController:favoris' => '?',
            'App\\Controller\\CandidatController:profil' => '?',
            'App\\Controller\\CandidatController:supprimerFavoris' => '?',
            'App\\Controller\\CrudCandidatController:delete' => '?',
            'App\\Controller\\CrudCandidatController:edit' => '?',
            'App\\Controller\\CrudRecruteurController:delete' => '?',
            'App\\Controller\\CrudRecruteurController:index' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\JobController:displayJob' => '?',
            'App\\Controller\\JobController:fetchJob' => '?',
            'App\\Controller\\JobController:index' => '?',
            'App\\Controller\\JobController:postuler' => '?',
            'App\\Controller\\JobController:showCandidatPostuler' => '?',
            'App\\Controller\\JobCrudController:delete' => '?',
            'App\\Controller\\JobCrudController:edit' => '?',
            'App\\Controller\\JobCrudController:show' => '?',
            'App\\Controller\\RecruteurController:index' => '?',
            'App\\Controller\\RecruteurController:showCandidat' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RegistrationRecruterController:register' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:reset' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]));
    }
}
<?php

namespace ContainerZakWY5x;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegistrationRecruterControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\RegistrationRecruterController' shared autowired service.
     *
     * @return \App\Controller\RegistrationRecruterController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\RegistrationRecruterController'] = $instance = new \App\Controller\RegistrationRecruterController(new \App\Security\EmailRecruteurVerifier(($container->privates['symfonycasts.verify_email.helper'] ?? $container->load('getSymfonycasts_VerifyEmail_HelperService')), ($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService'))));

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\RegistrationRecruterController', $container));

        return $instance;
    }
}

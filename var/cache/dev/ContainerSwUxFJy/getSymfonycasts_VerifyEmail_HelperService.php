<?php

namespace ContainerSwUxFJy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSymfonycasts_VerifyEmail_HelperService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'symfonycasts.verify_email.helper' shared service.
     *
     * @return \SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/VerifyEmailHelperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/VerifyEmailHelper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/UriSigner.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/Util/VerifyEmailQueryUtility.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/Generator/VerifyEmailTokenGenerator.php';

        return $container->privates['symfonycasts.verify_email.helper'] = new \SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelper(($container->services['router'] ?? $container->getRouterService()), new \Symfony\Component\HttpKernel\UriSigner($container->getEnv('APP_SECRET'), 'signature'), new \SymfonyCasts\Bundle\VerifyEmail\Util\VerifyEmailQueryUtility(), new \SymfonyCasts\Bundle\VerifyEmail\Generator\VerifyEmailTokenGenerator($container->getEnv('APP_SECRET')), 3600);
    }
}

<?php

namespace ContainerZakWY5x;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVichUploader_Listener_Upload_CandidatService extends App_KernelProdContainer
{
    /*
     * Gets the private 'vich_uploader.listener.upload.candidat' shared service.
     *
     * @return \Vich\UploaderBundle\EventListener\Doctrine\UploadListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['vich_uploader.listener.upload.candidat'] = new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('candidat', ($container->privates['vich_uploader.adapter.orm'] ?? ($container->privates['vich_uploader.adapter.orm'] = new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter())), ($container->privates['vich_uploader.metadata_reader'] ?? $container->getVichUploader_MetadataReaderService()), ($container->services['vich_uploader.upload_handler'] ?? $container->load('getVichUploader_UploadHandlerService')));
    }
}

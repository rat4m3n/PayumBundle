<?php
namespace Payum\Bundle\PayumBundle\DependencyInjection\Factory\Storage;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;

interface StorageFactoryInterface
{
    /**
     * @param \Symfony\Component\DependencyInjection\ContainerBuilder $container
     * @param string $contextName
     * @param array $config
     * 
     * @return string The context serviceId
     */
    function create(ContainerBuilder $container, $contextName, array $config);

    /**
     * The payment name, 
     * For example filesystem, doctrine, propel etc.
     * 
     * @return string
     */
    function getName();

    /**
     * @param \Symfony\Component\Config\Definition\Builder\NodeDefinition $builder
     * 
     * @return void
     */
    function addConfiguration(ArrayNodeDefinition $builder);
}
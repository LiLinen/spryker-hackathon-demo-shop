<?php

namespace Pyz\Service\Cloudimage;

use Pyz\Service\Cloudimage\Converter\CloudimageUrlConverter;
use Pyz\Service\Cloudimage\Converter\CloudimageUrlConverterInterface;
use Spryker\Service\Kernel\AbstractServiceFactory;

/**
 * @method \Pyz\Service\Cloudimage\CloudimageConfig getConfig()
 */
class CloudimageServiceFactory extends AbstractServiceFactory
{
    /**
     * @return \Pyz\Service\Cloudimage\Converter\CloudimageUrlConverterInterface
     */
    public function createCloudimageUrlConverter(): CloudimageUrlConverterInterface
    {
        return new CloudimageUrlConverter(
            $this->getConfig()->getCloudimageToken()
        );
    }
}

<?php

namespace Pyz\Service\Cloudimage;

use Pyz\Shared\Cloudimage\CloudimageConstants;
use Spryker\Service\Kernel\AbstractBundleConfig;

class CloudimageConfig extends AbstractBundleConfig
{
    public const DEFAULT_TOKEN = 'You need to set the Cloudimage Token';

    /**
     * @return string
     */
    public function getCloudimageToken(): string
    {
        return $this->get(CloudimageConstants::TOKEN, static::DEFAULT_TOKEN);
    }
}

<?php

namespace Pyz\Service\Cloudimage;

interface CloudimageServiceInterface
{
    /**
     * @param string $originalUrl
     * @param array $operations
     * @param array $filters
     *
     * @return string
     */
    public function getCloudimageUrl(string $originalUrl, array $operations = [], array $filters = []): string;
}

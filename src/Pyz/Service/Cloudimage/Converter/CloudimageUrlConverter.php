<?php

namespace Pyz\Service\Cloudimage\Converter;

class CloudimageUrlConverter implements CloudimageUrlConverterInterface
{
    /**
     * @var string
     */
    private $token;

    /**
     * @param string $token
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }

    /**
     * @param string $originalUrl
     * @param array $operations
     * @param array $filters
     *
     * @return string
     */
    public function convertUrl(string $originalUrl, array $operations = [], array $filters = []): string
    {
        $cloudimageBaseUrl = sprintf('https://%s.cloudimg.io/%s',
            $this->token,
            $originalUrl
        );

        $queryParameters = array_merge($operations, $filters);
        if (count($queryParameters) !== 0) {
            return $cloudimageBaseUrl . '?' . http_build_query($queryParameters);
        }

        return $cloudimageBaseUrl;
    }
}

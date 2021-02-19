<?php


namespace Neyric\Pappers;


use Neyric\Pappers\Exception\PappersException;
use Neyric\Pappers\Exception\PappersNotFoundException;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\Exception\HttpExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class PappersClient
{
    private const BASE_URL = 'https://api.pappers.fr/v1';

    private string $pappersApiKey;
    private HttpClientInterface $httpClient;

    public function __construct(string $pappersApiKey)
    {
        $this->httpClient = HttpClient::create();
        $this->pappersApiKey = $pappersApiKey;
    }

    /**
     * @param string $path
     * @param array<string, mixed> $params
     * @return string
     * @throws PappersException
     * @throws PappersNotFoundException
     */
    public function get(string $path, array $params): string
    {
        try {
            $response = $this->httpClient->request('GET', $this->url($path), $this->buildGetOptions($params));

            $statusCode = $response->getStatusCode();

            $this->handleErrorStatusCodes($statusCode);

            return $response->getContent();

        } catch (HttpExceptionInterface|TransportExceptionInterface $e) {
            throw new PappersException("Unable to request Pappers", 0, $e);
        }
    }

    private function url(string $path): string
    {
        return self::BASE_URL . $path;
    }

    /**
     * @throws PappersException|PappersNotFoundException
     */
    private function handleErrorStatusCodes(int $statusCode): void
    {
        if ($statusCode == 400) {
            throw new PappersException("Incorrect parameters");
        }

        if ($statusCode == 401) {
            throw new PappersException("Incorrect API token");
        }

        if ($statusCode == 404) {
            throw new PappersNotFoundException();
        }

        if ($statusCode == 503) {
            throw new PappersException("Service momentanément indisponible");
        }
    }

    /**
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    private function buildGetOptions(array $params): array
    {
        return [
            'query' => array_merge([
                'api_token' => $this->pappersApiKey
            ], $params)
        ];
    }
}

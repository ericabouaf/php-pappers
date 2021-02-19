<?php


namespace Neyric\Pappers;


use Neyric\Pappers\Exception\PappersException;
use Neyric\Pappers\Exception\PappersNotFoundException;
use Neyric\Pappers\Model\Entreprise;
use Neyric\Pappers\Model\Recherche\Recherche;
use Neyric\Pappers\Model\Recherche\Resultats;
use Symfony\Component\Serializer\SerializerInterface;

class Pappers implements PappersInterface
{
    private PappersClient $client;
    private ?SerializerInterface $serializer = null;

    public function __construct(string $pappersApiKey)
    {
        $this->client = new PappersClient($pappersApiKey);
    }

    /**
     * @throws PappersException|PappersNotFoundException
     */
    public function getCompanyBySiren(string $siren): Entreprise
    {
        return $this->getCompany([
            'siren' => $siren
        ]);
    }

    /**
     * @throws PappersException|PappersNotFoundException
     */
    public function getCompanyBySiret(string $siret): Entreprise
    {
        return $this->getCompany([
            'siret' => $siret
        ]);
    }

    /**
     * @param array<string, string> $params
     * @return Entreprise
     * @throws PappersException
     * @throws PappersNotFoundException
     */
    private function getCompany(array $params): Entreprise
    {
        $json = $this->client->get('/entreprise', $params);
        return $this->getSerializer()->deserialize($json, Entreprise::class, 'json');
    }

    /**
     * @throws PappersException|PappersNotFoundException
     */
    public function recherche(Recherche $query): Resultats
    {
        $params = (array) $query;

        $json = $this->client->get('/recherche', $params);
        return $this->getSerializer()->deserialize($json, Resultats::class, 'json');
    }

    /**
     * @throws PappersException|PappersNotFoundException
     */
    public function telechargeDocument(string $token): string
    {
        return $this->client->get('/document/telechargement', [
            'token' => $token
        ]);
    }

    private function getSerializer(): SerializerInterface
    {
        if (!$this->serializer) {
            $this->serializer = new PappersSerializer();
        }

        return $this->serializer;
    }

}

<?php

namespace Neyric\Pappers;

use Neyric\Pappers\Exception\PappersException;
use Neyric\Pappers\Exception\PappersNotFoundException;
use Neyric\Pappers\Model\Entreprise;
use Neyric\Pappers\Model\Recherche\Recherche;
use Neyric\Pappers\Model\Recherche\Resultats;

interface PappersInterface
{
    /**
     * @throws PappersException|PappersNotFoundException
     */
    public function getCompanyBySiren(string $siren): Entreprise;

    /**
     * @throws PappersException|PappersNotFoundException
     */
    public function getCompanyBySiret(string $siret): Entreprise;

    /**
     * @throws PappersException|PappersNotFoundException
     */
    public function recherche(Recherche $query): Resultats;

    /**
     * @throws PappersException|PappersNotFoundException
     */
    public function telechargeDocument(string $token): string;
}

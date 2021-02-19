<?php


namespace Neyric\Pappers\Model\Recherche;


use Neyric\Pappers\Model\Entreprise;

class Resultats
{

    /**
     * @var Entreprise[]
     */
    public array $entreprises;

    public int $total_entreprises;

    public int $page;
}

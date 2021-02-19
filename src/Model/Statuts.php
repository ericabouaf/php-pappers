<?php


namespace Neyric\Pappers\Model;


class Statuts
{
    // public string $date_depot_formate;
    public bool $disponible;
    public string $nom_fichier_pdf;
    public string $token;
    public string $type;
    public ?string $decision = null;
    public string $date_acte;
    public string $date_acte_formate;
}

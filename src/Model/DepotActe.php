<?php


namespace Neyric\Pappers\Model;


class DepotActe
{

    /** Date de dépôt de l'acte, au format AAAA-MM-JJ. */
    public string $date_depot;

    /** Date de dépôt formatée de l'acte, au format JJ/MM/AAAA. */
    public string $date_depot_formate;

    /**
     * Disponibilité de l'acte. Un acte peut être indisponible car il a été publié avant le 1er janvier 1993
     * ou bien car il est confidentiel.
     */
    public bool $disponible;

    /** Nom du fichier pdf de l'acte. */
    public string $nom_fichier_pdf;

    /** Token de l'acte. */
    public string $token;

    /**
     * Détails de l'acte.
     * @var Acte[]
     */
    public array $actes;

}

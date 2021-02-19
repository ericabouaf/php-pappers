<?php


namespace Neyric\Pappers\Model;


class DepotComptes
{
    /** Date de dépôt du compte. */
    public string $date_depot;

    /** Date de dépôt formatée du compte. */
    public string $date_depot_formate;

    /** Date de clôture du compte, au format AAAA-MM-JJ. */
    public string $date_cloture;

    /** Année de clôture du compte. */
    public int $annee_cloture;

    /** Confidentialité totale des comptes. */
    public bool $confidentialite;

    /**
     * Confidentialité partielle des comptes
     * (seul le compte de résultat est confidentiel, le reste des comptes sont disponibles).
     */
    public bool $confidentialite_compte_de_resultat;

    /** Disponibilité du compte. */
    public bool $disponible;

    /** Nom du fichier pdf du compte. */
    public string $nom_fichier_pdf;

    /** Token du compte. */
    public string $token;
}

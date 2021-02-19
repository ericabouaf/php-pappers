<?php


namespace Neyric\Pappers\Model;


class Finance
{
    /** Année des finances. */
    public int $annee;

    /** Date de cloture de l'exercice des finances de l'entreprise. */
    public string $date_de_cloture_exercice;

    /** Durée de l'exercice de l'entreprise. */
    public int $duree_exercice;

    /** Chiffre d'affaires de l'entreprise. */
    public int $chiffre_affaires;

    /** Résultat de l'entreprise. */
    public int $resultat;

    /** Effectif de l'entreprise. */
    public int $effectif;
}

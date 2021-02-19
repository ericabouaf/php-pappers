<?php


namespace Neyric\Pappers\Model;


class Representant
{
    /** Qualité du représentant. */
    public string $qualite;

    /** Vrai si le représentant est une personne morale, faux si personne physique. */
    public bool $personne_morale;

    /** Date de prise de poste du représentant. */
    public string $date_prise_de_poste;

    /** Nom du représentant. */
    public string $nom;

    /** Prénom du représentant. */
    public string $prenom;

    /** Nom complet du représentant. */
    public string $nom_complet;

    /** Date de naissance du représentant. */
    public string $date_de_naissance;

    /** Date de naissance formatée du représentant. */
    public string $date_de_naissance_formate;

    /** Age du représentant. */
    public int $age;

    /** Nationalité du représentant. */
    public string $nationalite;

    /** Ville de naissance du représentant. */
    public string $ville_de_naissance;

    /** Pays de naissance du représentant. */
    public string $pays_de_naissance;

    /** Première ligne de l'adresse du représentant. */
    public ?string $adresse_ligne_1 = null;

    /** Deuxième ligne de l'adresse du représentant. */
    public ?string $adresse_ligne_2 = null;

    /** Troisième ligne de l'adresse du représentant. */
    public ?string $adresse_ligne_3 = null;

    /** Code postal du représentant. */
    public ?string $code_postal = null;

    /** Ville du représentant. */
    public ?string $ville = null;

    /** Pays du représentant. */
    public string $pays;

}

<?php


namespace Neyric\Pappers\Model;


class FicheEtablissement
{
    /** Numéro siret de l'établissement au format xxxxxxxxxxxxxx. */
    public string $siret;

    /** Numéro siret de l'établissement au format xxx xxx xxx xxxxx. */
    public string $siret_formate;

    /** Numéro NIC de l'établissement. */
    public string $nic;

    /** Code postal de l'établissement. */
    public string $code_postal;

    /** Ville de l'établissement. */
    public string $ville;

    /** Latitude de l'établissement. */
    public ?float $latitude = null;

    /** Longitude de l'établissement. */
    public ?float $longitude = null;

    /**
     * @var bool|int
     * Vrai si l'établissement est cessé, faux si il est en activité.
     */
    public $etablissement_cesse;

    /** Vrai si l'établissement est siège, faux s'il ne l'est pas. */
    public bool $siege;

    /** Si vrai, l'établissement a au moins un employé. */
    public bool $etablissement_employeur;

    /** Tranche d'effectif de l'établissement. */
    public string $effectif;

    /** Effectif minimal de l'établissement. */
    public int $effectif_min;

    /** Effectif maximal de l'établissement. */
    public int $effectif_max;

    /** Tranche d'effectif de l'établissement, selon la nomenclature Sirene. (https://www.sirene.fr/sirene/public/variable/tefen) */
    public ?string $tranche_effectif = null;

    /**
     * Année correspondante à la tranche d'effectif de l'établissement.
     * @var string|int|null
     */
    public $annee_effectif = null;

    /** Code NAF de l'établissement. */
    public string $code_naf;

    /** Libellé du code NAF de l'établissement. */
    public string $libelle_code_naf;

    /** Date de création de l'établissement. */
    public string $date_de_creation;

    /** Numéro de voie de l'établissement. */
    public ?int $numero_voie = null;

    /** Indice de répétition de l'établissement. */
    public ?string $indice_repetition = null;

    /** Type de voie de l'établissement. */
    public string $type_voie;

    /** Libellé de la voie de l'établissement. */
    public string $libelle_voie;

    /** Complément d'adresse de l'établissement. */
    public ?string $complement_adresse = null;

    /** Première ligne de l'adresse de l'établissement. Correspond à l'ensemble des données numero_voie, indice_repetition, type_voie et libelle_voie. */
    public string $adresse_ligne_1;

    /** Seconde ligne de l'adresse de l'établissement. Est égal à complement_adresse */
    public ?string $adresse_ligne_2 = null;

}

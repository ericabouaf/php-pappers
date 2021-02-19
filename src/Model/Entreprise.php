<?php


namespace Neyric\Pappers\Model;


class Entreprise
{
    /** Le numéro SIREN de l'entreprise au format xxxxxxxxx. */
    public string $siren;

    /** Le numéro SIREN de l'entreprise au format xxx xxx xxx. */
    public string $siren_formate;

    /**
     * Le nom de l'entreprise. Il est égal à sigle + dénomination en cas de personne morale,
     * ou à nom + prénom en cas de personne physique.
     */
    public string $nom_entreprise;

    /** Vrai en cas de personne morale, faux en cas de personne physique. */
    public bool $personne_morale;

    /** Dénomination de l'entreprise si personne morale. */
    public ?string $denomination = null;

    /** Nom si personne physique. */
    public ?string $nom = null;

    /** Prénom si personne physique. */
    public ?string $prenom = null;

    /** Sexe si personne physique. F pour féminin, M pour masculin. */
    public ?string $sexe = null;

    /** Code NAF de l'entreprise. */
    public string $code_naf;

    /** Libellé du code NAF de l'entreprise. */
    public string $libelle_code_naf;

    /** Domaine d'activité de l'entreprise. */
    public string $domaine_activite;

    /** @var ConventionCollective[] */
    public array $conventions_collectives;

    /** Date de création de l'entreprise au format AAAA-MM-JJ. */
    public string $date_creation;

    /** Date de création de l'entreprise au format JJ/MM/AAAA. */
    public string $date_creation_formate;

    /**
     * @var bool|int
     * Si vrai, l'entreprise n'est plus en activité. Sinon, elle est toujours en activité.
     */
    public $entreprise_cessee;

    /**
     * @var bool|int
     * Si vrai, l'entreprise a au moins un employé.
     */
    public $entreprise_employeuse;

    /** Catégorie juridique de l'entreprise, selon la nomenclature Insee. (https://www.insee.fr/fr/information/2028129) */
    public string $categorie_juridique;

    /** Forme juridique de l'entreprise. */
    public string $forme_juridique;

    /** Tranche d'effectif de l'entreprise. */
    public string $effectif;

    /** Effectif minimal de l'entreprise. */
    public int $effectif_min;

    /** Effectif maximal de l'entreprise. */
    public int $effectif_max;

    /** Tranche d'effectif de l'entreprise, selon la nomenclature Sirene. (https://www.sirene.fr/sirene/public/variable/tefen) */
    public ?string $tranche_effectif = null;

    /** Année de validité des variables effectif, effectif_min et effectif_max. */
    public ?int $annee_effectif = null;

    /** Date de dernier traitement de l'entreprise. */
    public string $dernier_traitement;

    /** @var FicheEtablissement */
    public $siege;

    /** Le statut de diffusion de l'entreprise.
     * Non diffusable correspond à une personne physique ayant demandé à être exclue de la diffusion.
     * Aucune information n'est alors disponible.
     * Cette modalité n'est visible que pour les organismes habilités au titre de l'article R. 123-224 ou les administrations.
     */
    public bool $diffusable;

    /** Sigle de l'entreprise si personne morale. */
    public ?string $sigle = null;

    /** Objet social de l'entreprise. */
    public ?string $objet_social = null;

    /** Capital de l'entreprise.*/
    public ?int $capital = null;

    /** Capital l'entreprise au format xx xxx €. */
    public ?string $capital_formate = null;

    /** Capital actuel de l'entreprise si variable. */
    public ?string $capital_actuel_si_variable = null;

    /** Date de clôture d'exercice de l'entreprise. */
    public ?string $date_cloture_exercice = null;

    /** Date de clôture d'exercice exceptionnel de l'entreprise. */
    public ?string $date_cloture_exercice_exceptionnelle = null;

    /** Date de clôture d'exercice exceptionnel formatée de l'entreprise. */
    public ?string $date_cloture_exercice_exceptionnelle_formate = null;

    /** Prochaine date de clôture d'exercice de l'entreprise. */
    public ?string $prochaine_date_cloture_exercice = null;

    /** Prochaine date de clôture d'exercice formatée de l'entreprise. */
    public ?string $prochaine_date_cloture_exercice_formate = null;

    /** Vrai si l'entreprise est une entreprise de l'économie sociale et solidaire. */
    public bool $economie_sociale_solidaire;

    /** Durée de la personne morale. */
    public ?int $duree_personne_morale = null;

    /** Dernière mise à jour de la base de donnée sirène au format AAAA-MM-JJ. */
    public string $derniere_mise_a_jour_sirene;

    /** Dernière mise à jour de la base de donnée RCS au format AAAA-MM-JJ. */
    public ?string $derniere_mise_a_jour_rcs = null;

    /** Statut de l'entreprise au RCS. Peut valoir "Inscrit", "Non inscrit" ou "Radié". */
    public string $statut_rcs;

    /** Greffe RCS de l'entreprise. */
    public ?string $greffe = null;

    /** Date d'immatriculation de l'entreprise au RCS. */
    public ?string $date_immatriculation_rcs = null;

    /** Date de la première immatriculation de l'entreprise au RCS. */
    public ?string $date_premiere_immatriculation_rcs = null;

    /** Date de radiation de l'entreprise au RCS. */
    public ?string $date_radiation_rcs = null;

    /** Numéro de TVA intracommunautaire de l'entreprise. */
    public string $numero_tva_intracommunautaire;

    /** @var FicheEtablissement[] */
    public array $etablissements;

    /** @var Finance[] */
    public array $finances;

    /**
     * @var Representant[]
     */
    public array $representants;

    /**
     * Liste des actes de l'entreprise.
     * @var DepotActe[]
     */
    public array $depots_actes;

    /**
     * Liste des comptes de l'entreprise.
     * @var DepotComptes[]
     */
    public array $comptes;

    /**
     * Liste des publications au Bodacc de l'entreprise.
     * @var PublicationBodacc[]
     */
    public array $publications_bodacc;

    /**
     * Liste des procédures collectives de l'entreprise.
     * @var ProcedureCollective[]
     */
    public array $procedures_collectives;

    /** Vrai si l'entreprise a des procédures collectives, faux sinon. */
    public bool $procedures_collectives_existes;

    /**
     * Liste des statuts de l'entreprise.
     * @var Statuts
     */
    public $derniers_statuts;

    /**
     * Extrait d'immatriculation de l'entreprise.
     * @var ExtraitImmatriculation
     */
    public $extrait_immatriculation;
}

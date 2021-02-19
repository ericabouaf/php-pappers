<?php


namespace Neyric\Pappers\Model\Recherche;


class Recherche
{
    public int $par_page = 20;

    public int $page = 1;

    public ?string $nom_entreprise = null;

    /** Code NAF de l'entreprise. */
    public ?string $code_naf = null;

    /** Date de création minimale de l'entreprise, au format JJ-MM-AAAA. */
    public ?string $date_creation_min = null;

    /** Catégorie juridique de l'entreprise, selon la nomenclature Insee. https://www.insee.fr/fr/information/2028129 */
    public ?string $categorie_juridique = null;

    // Note: we did not implemented all search parameters. Cf https://www.pappers.fr/api/documentation#operation/recherche
}

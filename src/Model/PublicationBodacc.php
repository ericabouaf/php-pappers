<?php


namespace Neyric\Pappers\Model;


class PublicationBodacc
{

    /** Numéro de parution de la publication. */
    public string $numeroParution;

    /** Date de la publication. */
    public string $date;

    /** Numéro d'annonce de la publication. */
    public string $numeroAnnonce;

    /** Bodacc de la publication (A, B ou C). */
    public string $bodacc;

    /** Type de la publication. */
    public ?string $type = null;

    /** Date de clôture de la publication. */
    public ?string $dateCloture = null;

    /** Type de dépôt de la publication. */
    public ?string $typeDepot = null;

    /** Greffe de publication. */
    public ?string $rcs = null;

    /** Dénomination de l'entreprise concernée par la publication. */
    public ?string $denomination = null;

    /** Description de la publication. */
    public ?string $description = null;

    /** Capital de l'entreprise concernée par la publication. */
    public ?int $capital = null;

    /** Adresse de l'entreprise concernée par la publication. */
    public ?string $adresse = null;

}

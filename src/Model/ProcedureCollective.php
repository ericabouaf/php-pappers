<?php


namespace Neyric\Pappers\Model;


class ProcedureCollective
{

    /** Numéro de parution de la publication. */
    public string $numeroParution;

    /** Date de la publication. */
    public string $date;

    /** Numéro d'annonce de la publication. */
    public string $numeroAnnonce;

    /** Bodacc de la publication. */
    public string $bodacc;


    public ?string $type = null;

    public ?string $famille = null;

    public ?string $nature = null;

    public ?string $complementJugement = null;

}

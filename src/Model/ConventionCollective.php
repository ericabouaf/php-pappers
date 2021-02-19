<?php


namespace Neyric\Pappers\Model;


class ConventionCollective
{

    /** Nom de la convention collective. */
    public string $nom;

    /**
     * Code IDCC de l'entreprise.
     * @var string|int
     */
    public $idcc;

    /**
     * Si confirmée, l'information est issue de la DSN de l'entreprise et fournie par le ministère du Travail.
     * Si non confirmée, ce n'est qu'une estimation à partir du code NAF de l'entreprise.
     */
    public bool $confirmee;

}

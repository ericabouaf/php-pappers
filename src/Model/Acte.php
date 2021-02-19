<?php


namespace Neyric\Pappers\Model;


class Acte
{
    /** Type de l'acte. */
    public string $type;

    /** Décision de l'acte. */
    public ?string $decision = null;

    /** Date de l'acte, au format AAAA-MM-JJ. */
    public ?string $date_acte = null;

    /** Date formatée de l'acte, au format JJ/MM/AAAA. */
    public ?string $date_acte_formate = null;
}

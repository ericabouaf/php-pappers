<?php


namespace Neyric\Pappers\Tests;


use Neyric\Pappers\Model\Recherche\Recherche;
use Neyric\Pappers\Pappers;
use PHPUnit\Framework\TestCase;

class PappersTest extends TestCase
{
    private const GOOGLE_FRANCE_SIREN = "443061841";
    private const GOOGLE_FRANCE_SIRET = "44306184100047";

    private const FUNBOOKER_SIREN = "829634781";

    private Pappers $pappers;

    public function setUp(): void
    {
        $apikey = getenv('PAPPERS_API_KEY');
        $this->pappers = new Pappers($apikey);
    }

    /**
     * @covers \Neyric\Pappers\Pappers
     */
    public function testShouldReturnCompanyFromSiren(): void
    {
        $entreprise = $this->pappers->getCompanyBySiren(self::GOOGLE_FRANCE_SIREN);

        $this->assertNotNull($entreprise);
        $this->assertEquals("GOOGLE FRANCE", $entreprise->nom_entreprise);
    }

    /**
     * @covers \Neyric\Pappers\Pappers
     */
    public function testShouldReturnCompanyFromSiret(): void
    {
        $entreprise = $this->pappers->getCompanyBySiret(self::GOOGLE_FRANCE_SIRET);

        $this->assertNotNull($entreprise);
        $this->assertEquals("GOOGLE FRANCE", $entreprise->nom_entreprise);
    }

    /**
     * @covers \Neyric\Pappers\Pappers
     */
    public function testShouldReturnCompanyFromSiren2(): void
    {
        $entreprise = $this->pappers->getCompanyBySiren(self::FUNBOOKER_SIREN);

        $this->assertNotNull($entreprise);
        $this->assertEquals("FUNBOOKER", $entreprise->nom_entreprise);
    }

    /**
     * @covers \Neyric\Pappers\Pappers
     */
    public function testSearch(): void
    {
        $query = new Recherche();
        $query->nom_entreprise = "Funbooker";

        $resultats = $this->pappers->recherche($query);

        $this->assertNotNull($resultats);

        $this->assertEquals(1, $resultats->total_entreprises);
        $this->assertEquals(1, $resultats->page);
    }

    /**
     * @covers \Neyric\Pappers\Pappers
     */
    public function testDownloadDocument(): void
    {
        $token = "QTgyOTYzNDc4MTIwMjAwMzAzNzZ8U3RhdHV0cyBtaXMgw6Agam91cnw";
        $doc = $this->pappers->telechargeDocument($token);

        $this->assertNotNull($doc);
    }

}

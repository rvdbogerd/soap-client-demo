<?php

declare(strict_types=1);

namespace Builder;

use ToezichtS2S\Service\Algemeen\v1\SoftwareVersie;
use ToezichtS2S\Service\Algemeen\v1\VerzoekContext;
use ToezichtS2S\Service\Metadata\v1\RaadpleegCodelijstVerzoek;

class CodelijstVerzoekBuilder
{
    public function __construct()
    {
        // TODO: Implement __construct() method.
    }

    public function build()
    {
        $verzoek = new RaadpleegCodelijstVerzoek();
        $verzoek->setIdentificatie('http://rechtspraak.nl/Service/Notificaties/v1/SoortGebeurtenis');

        $operatieContext = new VerzoekContext();
        $operatieContext->setOrganisatie('66116899')
            ->setRegister('NHR')
            ->setSoftwareVersie(
                (new SoftwareVersie())->setLeverancier('Armarium BV')->setPakketnaam('Armarium Bewind')->setVersie('0.1')
            )
//            ->setExterneReferentie()
        ;

        $verzoek->setOperatieContext($operatieContext);

        return $verzoek;
    }
}
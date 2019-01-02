<?php

declare(strict_types=1);

namespace Rechtspraak\ToezichtS2S\Parser;

use DOMDocument;
use Psr\Http\Message\ResponseInterface;

interface ResponseParserInterface
{
    public function parse(ResponseInterface $response): DOMDocument;
}
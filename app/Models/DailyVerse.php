<?php

namespace App\Models;

use Hefestos\Core\Model;
use Hefestos\Ferramentas\ClienteHttp;

class DailyVerse extends Model
{
    protected string $tabela = 'dailyverses';

    public function getVerse(): array
    {
        // Requisição para a API
        $response = (new ClienteHttp())
            ->adicionarHeaders([
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdHIiOiJXZWQgQXByIDMwIDIwMjUgMDA6MDI6MjkgR01UKzAwMDAubWFyaWFpYXJhc2JyYWdhQGdtYWlsLmNvbSIsImlhdCI6MTc0NTk3MTM0OX0.MipqEq5U2G432Zb1kMK-Ji-BzBX3ed7nXpvlPc2SzKo'
            ])
            ->get('https://www.abibliadigital.com.br/api/verses/nvi/random')
            ->resposta('array');

        // Retornar resposta
        return $response;
    }

    public function formatReference(array $response): string
    {
        return $response['book']['name'] . ' ' . $response['chapter'] . ':' . $response['number'];
    }
}

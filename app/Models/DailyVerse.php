<?php

namespace App\Models;

use Hefestos\Core\Model;
use Hefestos\Ferramentas\ClienteHttp;

class DailyVerse extends Model
{
    protected string $tabela = 'daily_verses';

    public function formatReference(array $response): string
    {
        return $response['book'] . ' ' . $response['chapter'] . ':' . $response['number'];
    }
}

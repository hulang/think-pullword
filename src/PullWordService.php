<?php

declare(strict_types=1);

namespace PullWord;

use think\Service;
use PullWord\PullWord;

class PullWordService extends Service
{
    public function register()
    {
        $this->app->bind('pullword', PullWord::class);
    }
}

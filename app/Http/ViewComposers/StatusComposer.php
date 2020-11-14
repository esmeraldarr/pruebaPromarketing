<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Collection;

class StatusComposer
{
    public function compose(View $view)
    {
        $view->with('status', collect([
                ['value'=> 1,
                'text'=> 'published'],
                
                ['value'=> 2,
                'text'=> 'notPublished'],

                ['value'=> 3,
                'text'=> 'pending'],
        ]));
    }
}

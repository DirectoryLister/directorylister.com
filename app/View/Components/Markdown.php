<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Parsedown;

class Markdown extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return fn (array $data): string => sprintf('<article class="prose">%s</article>', (new Parsedown)->text($data['slot']));
    }
}

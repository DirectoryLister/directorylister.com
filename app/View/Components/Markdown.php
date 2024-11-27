<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Parsedown;

class Markdown extends Component
{
    private const array REPLACEMENTS = [
        '[!NOTE]' => 'ℹ️',
        '[!TIP]' => '💡',
        '[!IMPORTANT]' => '❕',
        '[!WARNING]' => '⚠️',
        '[!CAUTION]' => '⛔️',
    ];

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return function (array $data): string {
            $replaced = str_replace(array_keys(self::REPLACEMENTS), array_values(self::REPLACEMENTS), $data['slot']);

            return sprintf('<article class="prose">%s</article>', (new Parsedown)->text($replaced));
        };
    }
}

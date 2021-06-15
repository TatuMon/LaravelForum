<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Community;

class CommDropdown extends Component
{
    public function render()
    {
        return view('components.comm-dropdown', [
            'comms' => Community::select('name', 'slug')->get()
        ]);
    }
}

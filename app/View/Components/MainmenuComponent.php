<?php

namespace App\View\Components;

use Illuminate\View\Component;

use Illuminate\Support\Facades\DB;

// Model Database
use App\Models\MsMenuModel;

class MainmenuComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $ms_menu = MsMenuModel::get();
        return view('components.mainmenu-component', [
            'Ms_MainMenu' => $ms_menu
        ]);
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Session;

// Model Database
use App\Models\MsMenuModel;
use App\Models\MsAuthorizationModel;

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
        $UserLogin = session()->get('userLogin');
        $roleID = $UserLogin->admin_role;

        $roleAuthorization = MsAuthorizationModel::select('id_menu')
        ->where('id_role', $roleID)->get();
        
        $tmpMenuRole = [];
        foreach($roleAuthorization as $item)
        {
            array_push($tmpMenuRole, $item['id_menu']);
        }

        $ms_menu = MsMenuModel::where('menu_visible', 1)
        ->whereIn('id', $tmpMenuRole)
        ->orderBy('menu_sort')->get();

        $collection = collect($ms_menu);
        $grup_menu = $collection->groupBy('menu_grup');

        //dd($grup_menu);
        return view('components.mainmenu-component', [
            'Ms_MainMenu' => $ms_menu,
            'Grup_menu' => $grup_menu
        ]);
    }
}

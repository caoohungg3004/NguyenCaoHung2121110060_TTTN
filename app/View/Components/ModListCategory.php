<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Category;

class ModListCategory extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $arg = [
            ['status', '=', 1],
            ['parent_id', '=', 0]
        ];
        $mod_list_category = Category::where($arg)->get();
        return view('components.mod-list-category',compact('mod_list_category'));
    }
}

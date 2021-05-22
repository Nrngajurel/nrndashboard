<?php

namespace App\Http\Livewire\Widgets;

use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Search extends Component
{
    public $search_text = "";

    public function render()
    {
//        $users= Cache::get('users',function (){
//           return  User::where('name','like','%'.$this->search_text.'%')->get();
//        });

        $users = User::where('name','like','%'.$this->search_text.'%')
            ->orWhere('email','like','%'.$this->search_text.'%')
            ->limit(5)
            ->get();
        return view('livewire.widgets.search',[
            'users' => $this->search_text ? $users :[]
        ]);
    }
}

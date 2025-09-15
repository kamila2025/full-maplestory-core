<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Cases extends Component
{
    public $pageTitle = '精選案例';

    public $pageDescription = '精選案例';

    public function render()
    {
        return view('livewire.pages.cases')
            ->layout('components.layouts.app', [
                'title' => $this->pageTitle . ' | ' . config('app.name'),
            ]);
    }
}

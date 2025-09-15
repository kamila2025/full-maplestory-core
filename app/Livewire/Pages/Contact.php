<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Contact extends Component
{
    public $pageTitle = '聯絡我們';

    public function render()
    {
        return view('livewire.pages.contact')
            ->layout('components.layouts.app', [
                'title' => $this->pageTitle . ' | ' . config('app.name'),
            ]);
    }
}

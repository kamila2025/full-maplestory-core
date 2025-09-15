<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Plans extends Component
{
    public $pageTitle = '方案介紹';

    public $pageDescription = '我們提供多種網站類型，包括形象網站、部落格網站和電子商務網站，讓您可以根據自己的需求選擇最適合的網站類型。';

    public array $plans = [];

    public function mount()
    {
        $this->plans = [
            [
                'title'   => '形象網站',
                'price'   => '$15,000',
                'origin'  => '$20,000',
                'features'=> [
                    ['text' => 'VPS雲端主機'],
                    ['text' => 'SSL安全加密'],
                    ['text' => '線上聯絡表單'],
                    ['text' => '產品/服務型錄展示'],
                    ['text' => '最新消息'],
                    ['text' => 'Google Map 崁入'],
                    ['text' => 'GSC & GA 串接'],
                    ['text' => '全站式後台管理'],
                ],
            ],
            [
                'title'   => '部落格網站',
                'price'   => '$15,000',
                'origin'  => '$20,000',
                'features'=> [
                    ['text' => 'VPS雲端主機'],
                    ['text' => 'SSL安全加密'],
                    ['text' => '線上聯絡表單'],
                    ['text' => '產品/服務型錄展示'],
                    ['text' => '最新消息'],
                    ['text' => 'Google Map 崁入'],
                    ['text' => 'GSC & GA 串接'],
                    ['text' => '全站式後台管理'],
                ],
            ],
            [
                'title'   => '電子商務網站',
                'price'   => '$15,000',
                'origin'  => '$20,000',
                'features'=> [
                    ['text' => 'VPS雲端主機'],
                    ['text' => 'SSL安全加密'],
                    ['text' => '線上聯絡表單'],
                    ['text' => '產品/服務型錄展示'],
                    ['text' => '最新消息'],
                    ['text' => 'Google Map 崁入'],
                    ['text' => 'GSC & GA 串接'],
                    ['text' => '全站式後台管理'],
                ],
            ],
        ];
    }

    public function render()
    {
        return view('livewire.pages.plans')
            ->layout('components.layouts.app', [
                'title' => $this->pageTitle . ' | ' . config('app.name'),
            ]);
    }
}

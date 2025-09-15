<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Faqs extends Component
{
    public $pageTitle = '常見問題';

    public array $faqs = [];

    public function mount()
    {
        $this->faqs = [
            ['question' => '製作網站需要多久時間？', 'answer' => '依貴公司提供資料時間而定，一般若資料提供齊全，我們會在10~25個工作天內完成網站建置的工作(依不同型態網站而定)，並進行對稿的程序。'],
            ['question' => '如何維護自己公司的網站？', 'answer' => '提供第一年4次免費網站維護的服務，可不定時更新網頁內容之文字及圖片,如您要自已維護公司網站在完成後我們將開放主機後台帳號及密碼您可自行作修改網頁內容。'],
            ['question' => '我已有網站、想要重新製作、有此服務嗎？', 'answer' => '有的，我們會依照您的需求重新規劃並給予報價。'],
            ['question' => '什麼是關鍵字廣告？', 'answer' => '現代的消費者想要購買一項商品，或找一家餐廳，大部份人的答案應該是上網利用搜尋引擎來找相關資料，運用搜尋引擎來推廣自己的產品，運用Yahoo Bing 關鍵字廣告及 Google 關鍵字廣告 做精準行銷。'],
            ['question' => '任意使用別人網站上的資料或圖片，放置在自己的網站上，是否有版權的問題？', 'answer' => '是的，無論是圖片、影音，文字…等相關資料皆有版權依照智慧財產權的保護，使用他人網站上的資料，都應優先取得相關的版權才得以可用該資料，建議購買有版權相關資料，避免日後產生問題。'],
            ['question' => '公司想要製作網站，需要準備那些資料給網頁設計公司進行製作？', 'answer' => '當您進入網站製作階段就要著手準備相關資料了，通常一般網站製作需準備文案資料，例如：公司簡介、產品介紹、營業項目、產品規格表、聯絡資訊…等。'],
        ];
    }

    public function render()
    {
        return view('livewire.pages.faqs')
            ->layout('components.layouts.app', [
                'title' => $this->pageTitle . ' | ' . config('app.name'),
            ]);
    }
}

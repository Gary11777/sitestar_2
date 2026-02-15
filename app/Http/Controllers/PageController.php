<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home');
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function portfolio(): View
    {
        $projects = [
            [
                'title' => 'Dimgent International',
                'domain' => 'dimgent.com',
                'url' => 'https://dimgent.com/',
                'description' => 'A comprehensive corporate platform representing a global network of logistics and consulting services. The design emphasizes credibility, seamless navigation, and a polished international presence.',
                'category' => 'Corporate Website',
                'year' => '2024',
                'gradient' => 'bg-gradient-to-br from-brand-100 via-peach/50 to-brand-200',
                'text_color' => 'text-brand-500/20',
                'tags' => ['Laravel', 'Tailwind CSS', 'Responsive', 'SEO'],
            ],
            [
                'title' => 'Dimgent Belarus',
                'domain' => 'dimgent.by',
                'url' => 'https://dimgent.by/',
                'description' => 'A regional business portal connecting local enterprises with international trade and partnership opportunities. Built for clarity, speed, and accessibility across all devices.',
                'category' => 'Regional Portal',
                'year' => '2024',
                'gradient' => 'bg-gradient-to-br from-amber-100 via-brand-100 to-coral/20',
                'text_color' => 'text-amber-500/20',
                'tags' => ['PHP', 'Alpine.js', 'E-Commerce', 'Multilingual'],
            ],
        ];

        return view('pages.portfolio', compact('projects'));
    }

    public function contact(): View
    {
        return view('pages.contact');
    }
}

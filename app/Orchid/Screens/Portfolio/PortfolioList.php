<?php

namespace App\Orchid\Screens\Portfolio;

use Orchid\Screen\Screen;
use App\Models\PortfolioPost;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\TD;

class PortfolioList extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'portfolio' => PortfolioPost::all()
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Портфолио';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::table('portfolio', [
                TD::make('order', 'Порядок'),
                TD::make('name', 'Наименование'),
            ])
        ];
    }
}

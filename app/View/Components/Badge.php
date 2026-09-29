<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Badge extends Component
{
    public string $status;
    public string $colorClass;
    public string $label;

    /**
     * Create a new component instance.
     */
    public function __construct(string $status = 'aman')
    {
        $this->status = strtolower($status);

        $colors = [
            'penuh'   => 'bg-blue-100 text-blue-800 border-blue-300',
            'aman'    => 'bg-emerald-100 text-emerald-800 border-emerald-300',
            'menipis' => 'bg-amber-100 text-amber-800 border-amber-300',
            'habis'   => 'bg-rose-100 text-rose-800 border-rose-300',
        ];

        $labels = [
            'penuh'   => 'Stok Penuh',
            'aman'    => 'Stok Aman',
            'menipis' => 'Stok Menipis',
            'habis'   => 'Stok Habis',
        ];

        $this->colorClass = $colors[$this->status] ?? 'bg-gray-100 text-gray-800 border-gray-300';
        $this->label = $labels[$this->status] ?? ucfirst($status);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.badge');
    }
}

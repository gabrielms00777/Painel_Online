<?php

namespace App\Livewire\Admin;

use App\Models\OnlineUser;
use App\Models\User;
use App\Models\Visit;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        // dd($this->onlineUser());
        return view('livewire.admin.dashboard');
    }

    #[Computed()]
    public function onlineUser()
    {
        return OnlineUser::query()->count();
    }

    #[Computed()]
    public function visitorsMonth()
    {
        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();

        return Visit::query()->whereBetween('created_at', [$startOfMonth, $endOfMonth])->count();
    }

    #[Computed()]
    public function allVisitorCount()
    {
        return Visit::query()->count();
    }
    #[Computed()]
    public function allVisitor()
    {
        return Visit::select('path', DB::raw('count(*) as count'))
        ->groupBy('path')
        ->orderBy('count', 'desc')
        ->get();
    }

    #[Computed()]
    public function users()
    {
        return User::query()->latest()->get();
    }
}

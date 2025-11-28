<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $tenantId = auth()->user()->tenant_id;

        $users = User::where('tenant_id', $tenantId)->get();

        // TOTAL SALES
        $totalSales = \DB::table('sales')
            ->where('tenant_id', $tenantId)
            ->sum('total_amount');

        // TOTAL COST
        $totalCost = \DB::table('inventories')
            ->where('tenant_id', $tenantId)
            ->sum('cost_price');

        // PROFIT
        $totalProfit = $totalSales - $totalCost;

        // EXPENSES
        $totalExpenses = \DB::table('expenses')
            ->where('tenant_id', $tenantId)
            ->sum('amount');

        // USERS LIST
        $users = User::where('tenant_id', $tenantId)->get();

        return view('admin.Dashboard', compact(
            'totalSales',
            'totalCost',
            'totalProfit',
            'totalExpenses',
            'users'));
    }
}

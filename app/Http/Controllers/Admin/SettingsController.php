<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Show General Settings Page
     */
    public function general()
    {
        return view('admin.settings.general');
    }

    /**
     * Show Finance Settings Page
     */
    public function finance()
    {
        return view('admin.settings.finance');
    }

    /**
     * Show Billing Settings Page
     */
    public function billing()
    {
        return view('admin.settings.billing');
    }

    /**
     * Show Stripe Settings Page
     */
    public function stripe()
    {
        return view('admin.settings.stripe');
    }

    /**
     * Show Security Settings Page
     */
    public function security()
    {
        return view('admin.settings.security');
    }

    /**
     * Show System Settings Page
     */
    public function system()
    {
        return view('admin.settings.system');
    }
}

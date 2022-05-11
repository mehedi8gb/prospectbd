<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\session;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
    if(Auth::check()){

        if(Auth::user()->role_id == 1){
            return view('dashboard');
    }else{
        return view('frontend.user.customer.dashboard');
    }

}else{
    return view('auth.login');
}
}

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();


        if(Auth::user()->role_id == 1) {
            return redirect()->intended(RouteServiceProvider::ADMIN);

        }
        if(Auth::user()->role_id == 2) {
            $session = new session;
            $session->user_id = Auth::user()->id;
            $session->last_activity = Carbon::now();
            $session->save();
            return redirect()->intended(RouteServiceProvider::HOME);
        }

    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $session = session::find(session::where("user_id",Auth::user()->id)->first()->id);
        $session->delete();
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

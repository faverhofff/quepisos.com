<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Services\ActivationService;
use App\Http\Controllers\Controller;
use App\Events\Frontend\Auth\UserRegistered;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests\Frontend\Auth\RegisterRequest;
use App\Repositories\Frontend\Access\User\UserRepository;

/**
 * Class RegisterController.
 */
class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * @var UserRepository
     */
    protected $user;

    //Add protected variable:
    protected $activationService;

    /**
     * RegisterController constructor.
     *
     * @param UserRepository $user
     */
    public function __construct(UserRepository $user, ActivationService $activationService)
    {
        // Where to redirect users after registering
        $this->redirectTo = route('frontend.index');
        
        $this->activationService = $activationService;
        
        $this->user = $user;
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('frontend.auth.register');
    }

    /**
     * @param RegisterRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function register(RegisterRequest $request)
    {
        if (config('access.users.confirm_email')) {

            if ( !$request->has('condition') ) 
                return view('frontend.auth.register');
            $user = $this->user->create($request->all());
            event(new UserRegistered($user));

            return redirect($this->redirectPath())->withFlashSuccess(trans('exceptions.frontend.auth.confirmation.created_confirm'));
        } else {
            auth()->login($this->user->create($request->all()));
            event(new UserRegistered(access()->user()));

            return redirect($this->redirectPath());
        }
    }
}

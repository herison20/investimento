<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use Illuminate\Http\Request;
use Exception;
use Auth;


class DashboardController extends Controller
{
    private $repository;
    private $validator;

    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function index()
    {
        return view('user.dashboard');
    }

    public function auth(Request $request)
    {
        $data = [
            'email' => $request->get('username'),
            'password' => $request->get('password')
        ];

        try
        {
            if (env('PASSWORD_HASH')) {
                Auth::attempt($data, false);
            } else {

                $user = $this->repository->findWhere(['email' => $request->get('username')])->first();

                if (!$user) {
                    throw new Exception("E email informado é invalido!");
                }

                if ($user->password == $request->get('password')) {
                    throw new Exception("A senha informada é invalido!");
                } 

                Auth::login($user);

            }

            return redirect()->route('user.dashboard');
        }
        catch(Exception $e)
        {
              return $e->getMessage();  
        }
        
        
    }

}

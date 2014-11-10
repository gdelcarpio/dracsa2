<?php

// use Dracsa\Repositories\CategoryRepo;
use Dracsa\Entities\User;
use Dracsa\Repositories\UserRepo;
use Dracsa\Repositories\UsertypeRepo;
use Dracsa\Managers\RegisterManager;

class UsersController extends BaseController {

    protected $userRepo;
    protected $usertypeRepo;

    public function __construct(UserRepo $userRepo, UsertypeRepo $usertypeRepo)
    {
        $this->userRepo = $userRepo;
        $this->usertypeRepo = $usertypeRepo;
    }

    public function user($id)
    {
        $user = $this->userRepo->find($id);

        // $this->notFoundUnless($user);

        return View::make('user', compact('user'));
    }

    public function show($slug, $id)
    {
        $candidate = $this->candidateRepo->find($id);

        $this->notFoundUnless($candidate);

        return View::make('candidates/show', compact('candidate'));
    }

    public function register()
    {
        $user = $this->userRepo->newUser();
        $manager = new RegisterManager($user, Input::all());
        $manager->save();
        return Redirect::route('home');
    }

} 
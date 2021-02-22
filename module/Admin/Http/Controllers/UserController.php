<?php

namespace Module\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Module\Core\Http\Requests\UserRequest;
use Module\Core\Models\User;

class UserController extends Controller
{
    /**
     * @var User
     */
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Displaying of list,
     *
     * @throws \Exception
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        try {
            return view('admin::pages.user.index');
        } catch (\Exception $e) {
            throw new \Exception('There is an error in index function');
        }
    }

    /**
     * Rendering create form
     *
     * @throws \Exception
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        try {
            return view('admin::pages.user.create');
        } catch (\Exception $e) {
            throw new \Exception('There is an error in rendering create form');
        }
    }

    /**
     * Store User
     *
     * @param UserRequest $userRequest
     *
     * @throws \Exception
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(UserRequest $userRequest)
    {
        try {
            $this->user->fill($userRequest->all());
            $this->user->save();

            return redirect()
                ->route('user.index')
                ->with('status', 'Successfully Inserted!');
        } catch (\Exception $e) {
            echo $e->getMessage();die();
            throw new \Exception('There is an error in saving user');
        }
    }
}

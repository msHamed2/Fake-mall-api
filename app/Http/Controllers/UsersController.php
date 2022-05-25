<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use App\Models\User;
use Facade\FlareClient\Http\Exceptions\NotFound;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\RecordsNotFoundException;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Translation\Exception\NotFoundResourceException;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(UsersRequest $request)
    {
        $data = $request->validated();
        $data['with_address']=1;
        $data = User::query()->applyAllFilters($data);
        $data->isEmpty() ? throw new ModelNotFoundException() : null  ;
        return self::getJsonResponse('success', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UsersRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(UsersRequest $request)
    {
        $data = $request->validated();

        $user = User::query()->create($data);
        $user->address()->create($data['address']);
        $user['address'] = $user->address;
        return self::getJsonResponse('success', $user);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    function login(Request $request){
        $email=$request->email;
        $password=$request->password;
        $data =User::query()->where('email',$email)->where('password',$password)->firstOrFail();
         $data ?? throw new ModelNotFoundException();
         $data['token']='ey'.str_shuffle('Skd2bfllSMViJIUzI1NiIsInR');
         return self::getJsonResponse('success',$data);
    }
}

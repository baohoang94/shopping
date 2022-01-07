<?php

namespace App\Http\Controllers;

use App\Role;
use App\Traits\DeleteModelTrait;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AdminUserController extends Controller
{
    use DeleteModelTrait;
    private $user;
    private $role;
    public function __construct(User $user, Role $role)
    {
        $this->user = $user;
        $this->role = $role;
    }
    public function index()
    {
        $users = $this->user->paginate(10);
        return view('admin.user.index', compact('users'));
    }
    public function create()
    {
        $roles = $this->role->all();
        return view('admin.user.add', compact('roles'));
    }
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $user = $this->user->create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $user->roles()->attach($request->role_id);
            DB::commit();
            return redirect()->route('users.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            $errorMessage = 'Mesage: ' . $exception->getMessage() . '. Line: ' . $exception->getLine();
            Log::error($errorMessage);
            echo $errorMessage;
        }
    }
    public function edit($id)
    {
        $roles = $this->role->all();
        $user = $this->user->find($id);
        $rolesOfUser = $user->roles;
        return view('admin.user.edit', compact('roles', 'user', 'rolesOfUser'));
    }
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $this->user->find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $user = $this->user->find($id);
            $user->roles()->sync($request->role_id);
            DB::commit();
            return redirect()->route('users.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            $errorMessage = 'Mesage: ' . $exception->getMessage() . '. Line: ' . $exception->getLine();
            Log::error($errorMessage);
            echo $errorMessage;
        }
    }
    public function delete($id)
    {
        return $this->deleteModelTrait($id, $this->user);
    }
    public function changePassword()
    {
        return view('admin.user.changePassword');
    }
    public function updatePassword(Request $request)
    {
        $check = true;
        while ($check) {
            if (!Hash::check($request->old_password, auth()->user()->password)) {
                $check = false;
                $messge = 'Sai mật khẩu cũ';
                break;
            }
            if (strlen($request->new_password) < 8) {
                $check = false;
                $messge = 'Mật khẩu phải > 8 kí tự';
                break;
            }
            if ($request->new_password !== $request->confirm_new_password) {
                $check = false;
                $messge = 'Nhập lại mật khẩu mới không khớp';
                break;
            }
            break;
        }
        if ($check) {
            User::find(auth()->user()->id)->update([
                'password' => Hash::make($request->new_password),
            ]);
            return redirect()->to('home');
        }
        return view('admin.user.changePassword', compact('messge'));
    }
}

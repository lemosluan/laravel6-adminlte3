<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\User;

class UserController extends Controller
{

    public function index()
    {
        $this->authorize('index', User::class);
        $registros = User::all()->sortByDesc('id');
        return view('panel.user.index', compact('registros'));
    }

    public function create()
    {
        $this->authorize('create', User::class);
        return view('panel.user.create');
    }

    public function store(StoreRequest $request)
    {
        $this->authorize('create', User::class);
        try {
            User::create($request->input());
        } catch (\Exception $e) {
            dd($e);
        }
        return redirect()->route('panel.user.index')
            ->with('success', 'Perfil criado com sucesso.');
    }

    public function show(User $registro)
    {
        //
    }

    public function edit(User $registro)
    {
        $user = $registro ?? auth()->user();
        $this->authorize('edit', $user);
        return view('panel.user.edit', compact('registro'));
    }

    public function update(UpdateRequest $request, User $registro)
    {
        $user = $registro ?? auth()->user();
        $this->authorize('edit', $user);
        try {
            $registro->update($request->input());
        } catch (\Exception $e) {
            dd($e);
        }
        if (auth()->user()->can('index', auth()->user())) {
            return redirect()->route('panel.user.index')
                ->with('success', 'Perfil atualizado com sucesso.');
        } else {
            return redirect()->route('panel.user.profile')
                ->with('success', 'Perfil atualizado com sucesso.');
        }
    }

    public function destroy(User $registro)
    {
        $this->authorize('destroy', User::class);
        try {
            $registro->delete();
        } catch (\Exception $e) {
            dd($e);
        }
        return redirect()->route('panel.user.index')
            ->with('success', 'Perfil deletado com sucesso.');
    }

    public function selfUpdate()
    {
        $this->authorize('edit', auth()->user());
        $registro = auth()->user();
        return view('panel.user.edit', compact('registro'));
    }
}

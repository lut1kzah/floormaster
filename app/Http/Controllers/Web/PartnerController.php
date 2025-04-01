<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
    $partners = Partner::all();
    return view('partners.index', compact('partners'));
    }

    // Форма создания
    public function create()
    {
        return view('partners.create');
    }

    // Сохранение нового партнера
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:partners',
            // ... другие правила валидации
        ]);

        $partner = Partner::create($validated);

        return redirect()->route('partners.show', $partner)
            ->with('success', 'Партнер успешно создан');
    }

    // Просмотр одного партнера
    public function show(Partner $partner)
    {
        return view('partners.show', compact('partner'));
    }

    // Форма редактирования
    public function edit(Partner $partner)
    {
        return view('partners.edit', compact('partner'));
    }

    // Обновление данных
    public function update(Request $request, Partner $partner)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:partners,email,'.$partner->id,
            // ... другие правила валидации
        ]);

        $partner->update($validated);

        return redirect()->route('partners.show', $partner)
            ->with('success', 'Данные партнера обновлены');
    }

    // Удаление партнера
    public function destroy(Partner $partner)
    {
        $partner->delete();
        return redirect()->route('partners.index')
            ->with('success', 'Партнер удален');
    }
}

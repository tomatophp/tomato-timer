<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TomatoPHP\TomatoAdmin\Facade\Tomato;

class TimersMetaController extends Controller
{
    public string $model;

    public function __construct()
    {
        $this->model = \App\Models\TimersMeta::class;
    }

    /**
     * @param Request $request
     * @return View|JsonResponse
     */
    public function index(Request $request): View|JsonResponse
    {
        return Tomato::index(
            request: $request,
            model: $this->model,
            view: 'admin.timers-metas.index',
            table: \App\Tables\TimersMetaTable::class
        );
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function api(Request $request): JsonResponse
    {
        return Tomato::json(
            request: $request,
            model: \App\Models\TimersMeta::class,
        );
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return Tomato::create(
            view: 'admin.timers-metas.create',
        );
    }

    /**
     * @param Request $request
     * @return RedirectResponse|JsonResponse
     */
    public function store(Request $request): RedirectResponse|JsonResponse
    {
        $response = Tomato::store(
            request: $request,
            model: \App\Models\TimersMeta::class,
            validation: [
                            'timer_id' => 'required|exists:timers,id',
            'user_id' => 'nullable|exists:users,id',
            'linked_id' => 'nullable|exists:issues,id',
            'model' => 'nullable|max:255|string',
            'model_id' => 'nullable',
            'key' => 'required|max:255|string',
            'value' => 'nullable',
            'type' => 'nullable|max:255|string',
            'group' => 'nullable|max:255|string'
            ],
            message: __('TimersMeta updated successfully'),
            redirect: 'admin.timers-metas.index',
        );

        if($response instanceof JsonResponse){
            return $response;
        }

        return $response->redirect;
    }

    /**
     * @param \App\Models\TimersMeta $model
     * @return View|JsonResponse
     */
    public function show(\App\Models\TimersMeta $model): View|JsonResponse
    {
        return Tomato::get(
            model: $model,
            view: 'admin.timers-metas.show',
        );
    }

    /**
     * @param \App\Models\TimersMeta $model
     * @return View
     */
    public function edit(\App\Models\TimersMeta $model): View
    {
        return Tomato::get(
            model: $model,
            view: 'admin.timers-metas.edit',
        );
    }

    /**
     * @param Request $request
     * @param \App\Models\TimersMeta $model
     * @return RedirectResponse|JsonResponse
     */
    public function update(Request $request, \App\Models\TimersMeta $model): RedirectResponse|JsonResponse
    {
        $response = Tomato::update(
            request: $request,
            model: $model,
            validation: [
                            'timer_id' => 'sometimes|exists:timers,id',
            'user_id' => 'nullable|exists:users,id',
            'linked_id' => 'nullable|exists:issues,id',
            'model' => 'nullable|max:255|string',
            'model_id' => 'nullable',
            'key' => 'sometimes|max:255|string',
            'value' => 'nullable',
            'type' => 'nullable|max:255|string',
            'group' => 'nullable|max:255|string'
            ],
            message: __('TimersMeta updated successfully'),
            redirect: 'admin.timers-metas.index',
        );

         if($response instanceof JsonResponse){
             return $response;
         }

         return $response->redirect;
    }

    /**
     * @param \App\Models\TimersMeta $model
     * @return RedirectResponse|JsonResponse
     */
    public function destroy(\App\Models\TimersMeta $model): RedirectResponse|JsonResponse
    {
        $response = Tomato::destroy(
            model: $model,
            message: __('TimersMeta deleted successfully'),
            redirect: 'admin.timers-metas.index',
        );

        if($response instanceof JsonResponse){
            return $response;
        }

        return $response->redirect;
    }
}

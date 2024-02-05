<?php


Route::middleware(['web','auth', 'splade', 'verified'])->name('admin.')->group(function () {
    Route::get('admin/timers', [TomatoPHP\TomatoTimer\Http\Controllers\TimerController::class, 'index'])->name('timers.index');
    Route::get('admin/timers/api', [TomatoPHP\TomatoTimer\Http\Controllers\TimerController::class, 'api'])->name('timers.api');
    Route::get('admin/timers/create', [TomatoPHP\TomatoTimer\Http\Controllers\TimerController::class, 'create'])->name('timers.create');
    Route::post('admin/timers', [TomatoPHP\TomatoTimer\Http\Controllers\TimerController::class, 'store'])->name('timers.store');
    Route::get('admin/timers/{model}', [TomatoPHP\TomatoTimer\Http\Controllers\TimerController::class, 'show'])->name('timers.show');
    Route::get('admin/timers/{model}/edit', [TomatoPHP\TomatoTimer\Http\Controllers\TimerController::class, 'edit'])->name('timers.edit');
    Route::post('admin/timers/{model}', [TomatoPHP\TomatoTimer\Http\Controllers\TimerController::class, 'update'])->name('timers.update');
    Route::delete('admin/timers/{model}', [TomatoPHP\TomatoTimer\Http\Controllers\TimerController::class, 'destroy'])->name('timers.destroy');
});

Route::middleware(['web','auth', 'splade', 'verified'])->name('admin.')->group(function () {
    Route::get('admin/timers-metas', [TomatoPHP\TomatoTimer\Http\Controllers\TimersMetaController::class, 'index'])->name('timers-metas.index');
    Route::get('admin/timers-metas/api', [TomatoPHP\TomatoTimer\Http\Controllers\TimersMetaController::class, 'api'])->name('timers-metas.api');
    Route::get('admin/timers-metas/create', [TomatoPHP\TomatoTimer\Http\Controllers\TimersMetaController::class, 'create'])->name('timers-metas.create');
    Route::post('admin/timers-metas', [TomatoPHP\TomatoTimer\Http\Controllers\TimersMetaController::class, 'store'])->name('timers-metas.store');
    Route::get('admin/timers-metas/{model}', [TomatoPHP\TomatoTimer\Http\Controllers\TimersMetaController::class, 'show'])->name('timers-metas.show');
    Route::get('admin/timers-metas/{model}/edit', [TomatoPHP\TomatoTimer\Http\Controllers\TimersMetaController::class, 'edit'])->name('timers-metas.edit');
    Route::post('admin/timers-metas/{model}', [TomatoPHP\TomatoTimer\Http\Controllers\TimersMetaController::class, 'update'])->name('timers-metas.update');
    Route::delete('admin/timers-metas/{model}', [TomatoPHP\TomatoTimer\Http\Controllers\TimersMetaController::class, 'destroy'])->name('timers-metas.destroy');
});

<?php


Route::middleware(['web','auth', 'splade', 'verified'])->name('admin.')->group(function () {
    Route::get('admin/timers', [App\Http\Controllers\Admin\TimerController::class, 'index'])->name('timers.index');
    Route::get('admin/timers/api', [App\Http\Controllers\Admin\TimerController::class, 'api'])->name('timers.api');
    Route::get('admin/timers/create', [App\Http\Controllers\Admin\TimerController::class, 'create'])->name('timers.create');
    Route::post('admin/timers', [App\Http\Controllers\Admin\TimerController::class, 'store'])->name('timers.store');
    Route::get('admin/timers/{model}', [App\Http\Controllers\Admin\TimerController::class, 'show'])->name('timers.show');
    Route::get('admin/timers/{model}/edit', [App\Http\Controllers\Admin\TimerController::class, 'edit'])->name('timers.edit');
    Route::post('admin/timers/{model}', [App\Http\Controllers\Admin\TimerController::class, 'update'])->name('timers.update');
    Route::delete('admin/timers/{model}', [App\Http\Controllers\Admin\TimerController::class, 'destroy'])->name('timers.destroy');
});

Route::middleware(['web','auth', 'splade', 'verified'])->name('admin.')->group(function () {
    Route::get('admin/timers-metas', [App\Http\Controllers\Admin\TimersMetaController::class, 'index'])->name('timers-metas.index');
    Route::get('admin/timers-metas/api', [App\Http\Controllers\Admin\TimersMetaController::class, 'api'])->name('timers-metas.api');
    Route::get('admin/timers-metas/create', [App\Http\Controllers\Admin\TimersMetaController::class, 'create'])->name('timers-metas.create');
    Route::post('admin/timers-metas', [App\Http\Controllers\Admin\TimersMetaController::class, 'store'])->name('timers-metas.store');
    Route::get('admin/timers-metas/{model}', [App\Http\Controllers\Admin\TimersMetaController::class, 'show'])->name('timers-metas.show');
    Route::get('admin/timers-metas/{model}/edit', [App\Http\Controllers\Admin\TimersMetaController::class, 'edit'])->name('timers-metas.edit');
    Route::post('admin/timers-metas/{model}', [App\Http\Controllers\Admin\TimersMetaController::class, 'update'])->name('timers-metas.update');
    Route::delete('admin/timers-metas/{model}', [App\Http\Controllers\Admin\TimersMetaController::class, 'destroy'])->name('timers-metas.destroy');
});

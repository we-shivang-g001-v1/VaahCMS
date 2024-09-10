<?php

use VaahCms\Modules\Blog\Http\Controllers\Backend\ContentsController;

Route::group(
    [
        'prefix' => 'backend/blog/contents',
        
        'middleware' => ['web', 'has.backend.access'],
        
],
function () {
    /**
     * Get Assets
     */
    Route::get('/assets', [ContentsController::class, 'getAssets'])
        ->name('vh.backend.blog.contents.assets');
    /**
     * Get List
     */
    Route::get('/', [ContentsController::class, 'getList'])
        ->name('vh.backend.blog.contents.list');
    /**
     * Update List
     */
    Route::match(['put', 'patch'], '/', [ContentsController::class, 'updateList'])
        ->name('vh.backend.blog.contents.list.update');
    /**
     * Delete List
     */
    Route::delete('/', [ContentsController::class, 'deleteList'])
        ->name('vh.backend.blog.contents.list.delete');


    /**
     * Fill Form Inputs
     */
    Route::any('/fill', [ContentsController::class, 'fillItem'])
        ->name('vh.backend.blog.contents.fill');

    /**
     * Create Item
     */
    Route::post('/', [ContentsController::class, 'createItem'])
        ->name('vh.backend.blog.contents.create');
    /**
     * Get Item
     */
    Route::get('/{id}', [ContentsController::class, 'getItem'])
        ->name('vh.backend.blog.contents.read');
    /**
     * Update Item
     */
    Route::match(['put', 'patch'], '/{id}', [ContentsController::class, 'updateItem'])
        ->name('vh.backend.blog.contents.update');
    /**
     * Delete Item
     */
    Route::delete('/{id}', [ContentsController::class, 'deleteItem'])
        ->name('vh.backend.blog.contents.delete');

    /**
     * List Actions
     */
    Route::any('/action/{action}', [ContentsController::class, 'listAction'])
        ->name('vh.backend.blog.contents.list.actions');

    /**
     * Item actions
     */
    Route::any('/{id}/action/{action}', [ContentsController::class, 'itemAction'])
        ->name('vh.backend.blog.contents.item.action');

    //---------------------------------------------------------

});

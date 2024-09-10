<?php
use VaahCms\Modules\Blog\Http\Controllers\Backend\ContentsController;
/*
 * API url will be: <base-url>/public/api/blog/contents
 */
Route::group(
    [
        'prefix' => 'blog/contents',
        'namespace' => 'Backend',
    ],
function () {

    /**
     * Get Assets
     */
    Route::get('/assets', [ContentsController::class, 'getAssets'])
        ->name('vh.backend.blog.api.contents.assets');
    /**
     * Get List
     */
    Route::get('/', [ContentsController::class, 'getList'])
        ->name('vh.backend.blog.api.contents.list');
    /**
     * Update List
     */
    Route::match(['put', 'patch'], '/', [ContentsController::class, 'updateList'])
        ->name('vh.backend.blog.api.contents.list.update');
    /**
     * Delete List
     */
    Route::delete('/', [ContentsController::class, 'deleteList'])
        ->name('vh.backend.blog.api.contents.list.delete');


    /**
     * Create Item
     */
    Route::post('/', [ContentsController::class, 'createItem'])
        ->name('vh.backend.blog.api.contents.create');
    /**
     * Get Item
     */
    Route::get('/{id}', [ContentsController::class, 'getItem'])
        ->name('vh.backend.blog.api.contents.read');
    /**
     * Update Item
     */
    Route::match(['put', 'patch'], '/{id}', [ContentsController::class, 'updateItem'])
        ->name('vh.backend.blog.api.contents.update');
    /**
     * Delete Item
     */
    Route::delete('/{id}', [ContentsController::class, 'deleteItem'])
        ->name('vh.backend.blog.api.contents.delete');

    /**
     * List Actions
     */
    Route::any('/action/{action}', [ContentsController::class, 'listAction'])
        ->name('vh.backend.blog.api.contents.list.action');

    /**
     * Item actions
     */
    Route::any('/{id}/action/{action}', [ContentsController::class, 'itemAction'])
        ->name('vh.backend.blog.api.contents.item.action');



});

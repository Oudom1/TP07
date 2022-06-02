<?php

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

// Route::get('/', function () {
//     return view('tasks');
// });
Route::get('/', function () {
    $tasks = Task::orderby('created_at',  'asc')->get();

    return view ('tasks', [
        'tasks' => $tasks
    ]);
});
Route::post('/task', function (Request $request){
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:225',
    ]);
    
    if ($validator->fails()){
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $task = new Task;
    $task->name = $request->name;
    $task->save();

    return redirect('/');
});
Route::delete('/task/{id}', function ($id){
    Task::findOrFail($id)->delete();

    return redirect('/');
});













// Route::get('/', function () {
//     return view('welcome');
// });
// /**
//  * Add A New Task
//  */
// Route::post('/task', function (Request $request){
//     //
// });
// /**
//  * Delete An Existing Task
//  */

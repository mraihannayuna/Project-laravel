<?php

namespace App\Http\Controllers;

use App\Models\tasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

                if(!Auth::check()){
            return redirect('logout');
        }


        $tasks = tasks::orderBy('id', 'DESC')->paginate(5);
        $i = ($tasks->currentPage() - 1) * $tasks->perPage() + 1;
        $data = [
            'tasks' => $tasks,
            'i' => $i
        ];

        return view('task.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if(!Auth::check()){
            return redirect('logout');
        }

        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                if(!Auth::check()){
            return redirect('logout');
        }

            Tasks::create([
            'nama' => $request->input('nama'),
            'kelas' => $request->input('kelas')
        ]);

        return redirect('Cloudsch');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function show(tasks $tasks)
    {
        // ? Tidak Dipakai....
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function edit($tasks)
    {
                if(!Auth::check()){
            return redirect('logout');
        }


    $id = tasks::where('id', $tasks)->first();

        $data = [
            'id' => $id,
        ];

        return view('task.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                if(!Auth::check()){
            return redirect('logout');
        }

        // "UPDATE ...   WHERE id = $id"
        tasks::where('id',$id)
            ->update([
                'nama' => $request->input('nama'),
                'kelas' => $request->input('kelas')
            ]);

        return redirect("Cloudsch");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

            if(!Auth::check()){
            return redirect('logout');
        }

                        tasks::SelectedById($id)->delete();
                        return redirect('Cloudsch');
    }
}

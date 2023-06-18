<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//* importare il model
use App\Models\Project;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //* vengono mostrati tutti progetti in una volta
      // $projects = Project::all();
      //* vengono mostrati 10 progetti alla volta (per far ciò è necessario importare bootstrap in AppServiceProvider)
      // $projects = Project::paginate(10);
      $projects = Project::paginate(2);


      return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //* per salvare i dati nel database al click del button submit del form in create
      $form_data = $request->all();

      $new_project = new Project();

      $new_project->name = $form_data['name'];
      $new_project->slug = Project::generateSlug($form_data['name']);
      $new_project->description = $form_data['description'];
      $new_project->category = $form_data['category'];
      // $new_project->date = date('Y-m-d');
      $new_project->start_date = $form_data['start_date'];
      $new_project->end_date = $form_data['end_date'];
      $new_project->url = $form_data['url'];
      $new_project->produced_for = $form_data['produced_for'];
      $new_project->collaborators = $form_data['collaborators'];

      // dd($request->all());
      $new_project->save();

      //* redirect al progetto appena generato
      return redirect()->route('adminprojects.show', $new_project);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //* metodo migliore
    //! MA BISOGNA USARE IL PARAMETRO DI DEFAULT (in questo caso $dCComic) e non può essere modificato
    public function show(Project $project)
    {
      // con orario formattato (per show.blade.php)
      $start_date = date_create($project->start_date);
      $start_date_formatted = date_format($start_date, 'd/m/Y');

      // con orario formattato (per show.blade.php)
      $end_date = date_create($project->end_date);
      $end_date_formatted = date_format($end_date, 'd/m/Y');

      return view('admin.projects.show', compact('project', 'start_date_formatted', 'end_date_formatted'));
    }
    // OPPURE con id
    // public function show($id)
    // {
    //   $project = Project::find($id);
    //   // dd($project);
    //   return view('projects.show', compact('project'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

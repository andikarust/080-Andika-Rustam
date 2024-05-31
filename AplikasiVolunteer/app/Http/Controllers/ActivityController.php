<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ActivityType;
use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $activity = Activity::with('activities_type')->find($id);
        // dd($activity);
        $activity = Activity::all();
        $type = ActivityType::all();
        $data = array(
            'type' => $type,
            'activity' => $activity

        );
        return view('organisasi.aktivitas', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $activity = Activity::all();
        $type = ActivityType::all();
        $data = array(
            'type' => $type,
            'activity' => $activity
        );
        // dd($type);
        return view('organisasi.aktivitas', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'judul_aktivitas' => 'required',
            'tanggal_aktivitas' => 'required',
            'tanggal_batas_registrasi' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required',
            'cover' => 'required',
            'id_activities_type' => 'required'
        ]);

        $input = $request->all();
        $user_id = Auth::id();
        $id_organisasi = Organization::where('id_user', $user_id)->value('id');
        // dd($id_organisasi);
        $input['id_organization'] = $id_organisasi; 

        if ($cover = $request->file('cover')) {
            $destinationPath = 'assets/image/';
            $coverName = uniqid() . "." . $cover->getClientOriginalExtension();
            $cover->move($destinationPath, $coverName);
            $input['cover'] = $coverName;
        }

        Activity::create($input);

        return redirect()->route('aktivitas.index')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $activity = Activity::with('activities_type')->find($id);
        return view('organisasi.aktivitas', compact('activity','activities_type'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $activity = Activity::findorfail($id);
        $activitytypes = ActivityType::all();
        return view('organisasi.aktivitas.edit', compact('activity','activitytypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul_aktivitas' => 'required',
            'deskripsi' => 'required',
            'cover' => 'required',
            'tanggal_aktivitas' => 'required',
            'tanggal_batal_registrasi' => 'required',
            'lokasi' => 'required',
            'id_organization' => 'required',
            'id_activities_type' => 'required'
        ]);

        $input = $request->all();

        if ($cover = $request->file('cover')) {
            $destinationPath = 'assets/image/';
            $coverName = uniqid() . "." . $cover->getClientOriginalExtension();
            $cover->move($destinationPath, $coverName);
            $input['cover'] = $coverName;
        } else {
            unset($input['cover']);
        }
        $activity = Activity::findorfail($id);
        $activity->update($input);

        return redirect('organisasi.aktivitas')->with('message', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activity $activity)
    {
        $activity->delete();

        return redirect('organisasi.aktivitas')->with('message', 'Data Berhasil Dihapus');
    }
}

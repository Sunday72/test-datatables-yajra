<?php

namespace App\Http\Controllers;

use App\Models\School;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSchoolRequest;
use App\Http\Requests\UpdateSchoolRequest;
use Illuminate\Auth\Access\Response;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('school.index');
    }

    public function datatable(Request $request){
        if($request->ajax()){
            $schools = School::select('*');
            return DataTables::of($schools)
            ->addColumn('action', function($row) {
                $btn = '<a href="'.route('school.show', $row->id).'" class="btn btn-primary btn-sm me-2 view-school" data-id="'.$row->id.'">View</a>';
                $btn .= '<a href="'.route('school.edit', $row->id).'" class="btn btn-warning btn-sm me-2">Edit</a>';
                $btn .= '<form action="'.route('school.destroy', $row->id).'" method="POST" class="d-inline-block">
                            '.csrf_field().'
                            '.method_field('DELETE').'
                            <button type="submit" class="btn btn-danger btn-sm ml-2" onclick="return confirm(\'Are you sure?\')">Delete</button>
                        </form>';

                return $btn;
            })
            ->make(true);
        }

        return abort(404);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('school.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSchoolRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $schools = School::findOrFail($id);
        return response()->json($schools);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(School $school)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSchoolRequest $request, School $school)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(School $school)
    {
        //
    }
}

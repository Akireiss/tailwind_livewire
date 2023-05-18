<?php

namespace App\Http\Controllers\User;

use App\Models\Reports;
use App\Models\Students;
use App\Models\Violations;
use App\Models\Regulations;
use Illuminate\Http\Request;
use App\Models\Reporting_parties;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ReportFormRequest;
use App\Models\User_Reports;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Reports::all();
        $students = Students::all();
        $regulations = Regulations::all();
        $reporting_parties = Reporting_parties::all();
        return view('user.report.index', compact('reporting_parties', 'regulations', 'students','reports'));
    }
    public function index1()
    {
        return view('admin.notification.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReportFormRequest $request)
    {
        $validatedData = $request->validated();
        $regulations = Regulations::findOrFail($validatedData['regulation_id']);
        $students = Students::findOrFail($validatedData['students_id']);

       $report = $regulations->reports()->create([
           'students_id' => $validatedData['students_id'],
           'regulation_id' => $validatedData['regulation_id'],
           'description' => $validatedData['description'],
       ]);

       if($request->hasFile('images')){
           $uploadPath = 'uploads/reports/';
           $i = 1;
           foreach($request->file('images') as $imageFile){
           $extention = $imageFile->getClientOriginalExtension();
           $filename = time().$i++ . '.'.$extention;
           $imageFile->move($uploadPath,$filename);
           $finalImagePathName = $uploadPath.$filename;

           $report->images()->create([
               'reports_id' => $report->id,
               'images' => $finalImagePathName,
           ]);
           }
           //for

            $reporter = new Reporting_parties([
                    'reports_id' => $report->id,
                    'name' => $request->input('name'),
                    'grade' => $request->input('grade'),
                    'contact_details' => $request->input('contact_details'),
            ]);
            $reporter->save();

           if (Auth::check()) {
              User_Reports::create([
                    'user_id' => auth()->user()->id,
                    'reports_id' => $report->id
                ]);
            }


            }

       return redirect('user/report')->with('message', 'Reports has been created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

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

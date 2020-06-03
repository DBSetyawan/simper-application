<?php

namespace App\Http\Controllers;

use App\User;
use App\Leave;
use App\Calendar;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class DashboardController extends Controller
{

    private function id_exists($array, $id, $strict = FALSE) {
        foreach ($array as $inner) {
          if (isset($inner) && (($strict) ? $inner === $id : $inner == $id)) {
            return TRUE;
          }
        }
        return FALSE;
      }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);

         $totalLeave = Leave::withCount([
            'users',
            'users as pending_comments_count' => function (Builder $query) {
                $query->where('is_approved', true);
            }
        ])->count();

        $query = Leave::whereNull('is_approved');
            // foreach ($totalLeave_pending as $key => $value) {
            //     # code...
            //     $data_pending[] = $value; 
            // }

            // if ($this->id_exists($data_pending, 1, true)) {
            //     $result = "ditemukan adanya permohonan cuti";
            //   } else {
            //     $result = 0;
            //   } 
            $totalLeave_pending = $query->count();
        //    die;
        $events = Calendar::all();
        $event = [];

        foreach ($events as $row){
//            $enddate = $row->end_date."24:00:00";
            $event[] = \Calendar::event(
                $row->title,
                false,
                new \DateTime($row->start_date),
                new \DateTime($row->end_date),
                $row->id,
                [
                    'color'=>$row->color,
                ]
            );
        }
        $calendar =  \Calendar::addEvents($event);

            // dd($totalLeave_pending);
        return view('admin.dashboard.index',compact('users','totalLeave','totalLeave_pending','events','calendar'));
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
    public function store(Request $request)
    {
        //
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

<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ReportRequest;
use App\Http\Controllers\Concerns\WithCurrentUser;

class ReportsController extends Controller
{
    use WithCurrentUser;

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.reports.created');
    }

    /**
 * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ReportRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReportRequest $request)
    {
        $body = $request->validationData();
        $report = $this->currentUser
            ->reports()
            ->create($body);

        /**
         * Menautkan beberapa bidang [Category] && [Attachment] ke [Report] melalu foerign key.
         */
        list($categories, $files) = $request->only(['categories', 'files']);

        $report->categories()->attach($categories);
        $report->attachments()->attach($files);

        return redirect()
            ->route('users.reports.graph', $report->slug)
            ->with(
                'message',
                "Yaap pelaporan Anda hampir selesai, kamu juga dapat melakukan pelaporan Grafik."
            );


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
        $report = $this->currentUser->reports()->findOrFail($id);

        return view('users.reports.edited', compact('report'));
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
        $report = $this->currentUser->reports()->findOrFail($id);
        $message = <<<EOF
            Berhasil menghapus pemantuan {$report->marker->name} tanggal {$report->created_at->format('d-m-Y')}
        EOF;
        $report->delete();

        return redirect()
            ->back()
            ->with(
                'message',
                $message
            );
    }
}

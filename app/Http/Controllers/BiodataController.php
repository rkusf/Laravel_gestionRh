<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Biodata;
class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biodatas = Biodata::latest()->paginate(5);
        return view('biodata.index', compact('biodatas'))
                  ->with('i', (request()->input('page',1) -1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('biodata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'nom' => 'required',
          'prenom' => 'required',
          'fonction' =>'required',
          'attestation_1'=>'required',
          'attestation_2'=>'required'

        ]);

        Biodata::create($request->all());
        return redirect()->route('biodata.index')
                        ->with('success', ' created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $biodata = Biodata::find($id);
        return view('biodata.detail', compact('biodata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $biodata = Biodata::find($id);
        return view('biodata.edit', compact('biodata'));
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
      $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'fonction' =>'required',
        'attestation_1'=>'required',
        'attestation_2'=>'required'
      ]);
      $biodata = Biodata::find($id);
      $biodata->nom = $request->get('nom');
      $biodata->prenom = $request->get('prenom');
      $biodata->fonction = $request->get('fonction');
      $biodata->attestation_1 = $request->get('attestation_1');
      $biodata->attestation_2 = $request->get('attestation_2');

      $biodata->save();
      return redirect()->route('biodata.index')
                      ->with('success', ' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $biodata = Biodata::find($id);
        $biodata->delete();
        return redirect()->route('biodata.index')
                        ->with('success', ' deleted successfully');
    }
}

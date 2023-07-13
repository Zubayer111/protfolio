<?php

namespace App\Http\Controllers;

use App\Models\Protfolio;
use Illuminate\Http\Request;

class ProtfolioController extends Controller
{
    private $protfolios;
    private $protfolio;

    public function index()
    {
        return view("admin.protfolio.add");
    }

    public function manage()
    {
        $this->protfolios = Protfolio::orderBy("id", "desc")->get();
        return view("admin.protfolio.manage",["protfolios" => $this->protfolios]);
    }

    public function create(Request $request)
    {
        
        Protfolio::newProtfolio($request);
        return redirect("/add-protfolio")->with("message", "Protfolio info created Successfully");
    }

    public function edit($id)
    {
        $this->protfolio = Protfolio::find($id);
        return view("admin.protfolio.edit", ["protfolio" => $this->protfolio]);
    }

    public function updete(Request $request, $id)
    {
        Protfolio::updeteProtfolio($request, $id);
        return redirect("/manage-protfolio")->with("message", "Protfolio info updeted Successfully");
    }

    public function delete($id)
    {
        $this->protfolio = Protfolio::find($id);
        if(file_exists($this->protfolio->image))
        {
            unlink($this->protfolio->image);
        }
        $this->protfolio->delete();
        return redirect("/manage-protfolio")->with("message", "Protfolio info deleded Successfully");
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $homes;
    private $home;
    private $message;

    public function home()
    {
        return view("admin.home.add");
    }

    public function create(Request $request)
    {
        
        Home::newHome($request);
        
        return redirect("/add-home")->with("message", "Home info created Successfully");
    }

    public function manage()
    {
        $this->homes = Home::orderBy("id", "desc")->get();
        return view("admin.home.manage", ["homes" => $this->homes]);
    }

    public function edit($id)
    {
        $this->home = Home::find($id);
        return view("admin.home.edit", ["home" => $this->home]);
    }

    public function updete(Request $request, $id)
    {
        Home::updatedHome($request, $id);
        return redirect("/manage-home")->with("message", "Home info updated Successfully");
    }

    public function delete($id)
    {
        $this->home = Home::find($id);
        if(file_exists($this->home->image))
        {
            unlink($this->home->image);
        }
        $this->home->delete();
        return redirect("/manage-home")->with("message", "Home info deleted Successfully");
    }

    public function updeteStatus($id)
    {
        $this->home = Home::find($id);
        if($this->home->status == 1)
        {
            $this->home->status = 0;
            $this->message = "Home status info unpublished successfully." ;
        }
        else
        {
            $this->home->status = 1;
            $this->message = "Home status info published successfully." ;
        }
        $this->home->save();
        return redirect("/manage-home")->with("message" , $this->message);
    }
}

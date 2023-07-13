<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    private $abouts;
    private $about;
    private $message;

    public function index()
    {
        return view("admin.about.add");
    }

    public function manage()
    {
        $this->abouts = About::orderBy("id", "desc")->get();
        return view("admin.about.manage", ["abouts" => $this->abouts]);
    }

    public function create(Request $request)
    {
        About::newAbout($request);
        return redirect("/add-about")->with("message", "About info created Successfully");
    }

    public function edit($id)
    {
        $this->about = About::find($id);
        return view("admin.about.edit", ["about" =>$this->about]);
    }

    public function updete(Request $request, $id)
    {
        About::updatedAbout($request, $id);
        return redirect("/manage-about")->with("message", "About info upated Successfully");
    }

    public function delete($id)
    {
        $this->about = About::find($id);
        if(file_exists($this->about->image))
        {
            unlink($this->about->image);
        }
        $this->about->delete();
        return redirect("/manage-about")->with("message", "About info dleted Successfully");
    }

    public function updeteStatus($id)
    {
        $this->about = About::find($id);
        if($this->about->status == 1)
        {
            $this->about->status = 0;
            $this->message = "About status info unpublished successfully." ;
        }
        else
        {
            $this->about->status = 1;
            $this->message = "About status info published successfully." ;
        }
        $this->about->save();
        return redirect("/manage-about")->with("message", $this->message);
    }
}

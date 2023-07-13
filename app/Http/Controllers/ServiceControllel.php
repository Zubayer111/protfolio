<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceControllel extends Controller
{
    private $service;
    private $services;
    private $message;
    

    public function add()
    {
        return view("admin.service.add");
    }

    public function manage()
    {
        $this->services = Service::orderBy("id", "desc")->get();
        return view("admin.service.manage", ["services" => $this->services]);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'required|string', 
        ]);
        $service = new Service();
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        $service->save();

        return redirect("/add-service")->with("message", "Service information created successfully");
    }

    public function updeteStatus($id)
    {
        $this->service = Service::find($id);
        if($this->service->status == 1)
        {
            $this->service->status = 0;
            $this->message = "Service status info unpublished successfully.";
        }
        else
        {
            $this->service->status = 1;
            $this->message = "Service status info published successfully.";
        }
        $this->service->save();
        return redirect("/manage-service")->with("message", $this->message);
    }

    public function edit($id)
    {
        $this->service = Service::find($id);
        return view("admin.service.edit", ["service" => $this->service]);
    }

    public function updete(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'required|string', 
        ]);

        $services = Service::find($id);
        $services->title = $request->title;
        $services->description = $request->description;
        $services->save();
        return redirect("/manage-service")->with("message", "Service information update successfully");
    }

    public function delete($id)
    {
        $this->service = Service::find($id);
        $this->service->delete();
        return redirect("/manage-service")->with("message", "Service information delete successfully");
    }

}

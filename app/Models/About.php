<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    private static $image;
    private static $imageUrl;
    private static $imageName;
    private static $directory;
    private static $about;

    public static function getImageurl($request)
    {
        self::$image = $request->file("image");
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = "about-images/";
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newAbout($request)
    {
        self::$about = new About();
        self::$imageUrl = self::getImageurl($request);
        self::saveAboutInfo(self::$about, $request, self::$imageUrl);
    }

    public static function saveAboutInfo($about, $request, $imageUrl)
    {
        $about->email = $request->email;
        $about->long_description = $request->long_description;
        $about->number = $request->number;
        $about->date_of_birth = $request->date_of_birth;
        $about->nationality = $request->nationality;
        $about->address = $request->address;
        $about->image = $imageUrl;
        $about->save();
    }

    public static function updatedAbout($request, $id)
    {
        self::$about = About::find($id);

        if($request->file('image'))
        {
            if(file_exists(self::$about->image))
            {
                unlink(self::$about->image);
            }
            self::$imageUrl = self::getImageurl($request);
        }
        else
        {
            self::$imageUrl = self::$about->image;
        }

        self::saveAboutInfo(self::$about, $request, self::$imageUrl);
    }
}

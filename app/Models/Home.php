<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    private static $name;
    private static $home;
    private static $image;
    private static $imageUrl;
    private static $imageName;
    private static $directory;
    
    public static function getImageurl($request)
    {
        self::$image = $request->file("image");
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = "home-images/";
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newHome($request)
    {
        self::$home = new Home();
        self::$imageUrl = self::getImageurl($request);
        self::saveHomeInfo(self::$home, $request, self::$imageUrl);
    }

    public static function saveHomeInfo( $home, $request , $imageUrl)
    {
        $home->full_name = $request->full_name;
        $home->short_description = $request->short_description;
        $home->image = $imageUrl;
        $home->save();
    }

    public static function updatedHome($request, $id)
    {
        self::$home = Home::find($id);

        if($request->file('image'))
        {
            if(file_exists(self::$home->image))
            {
                unlink(self::$home->image);
            }
            self::$imageUrl = self::getImageurl($request);
        }
        else
        {
            self::$imageUrl = self::$home->image;
        }

        self::saveHomeInfo(self::$home, $request, self::$imageUrl);
    }
}

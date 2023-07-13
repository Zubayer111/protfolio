<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protfolio extends Model
{
    use HasFactory;

    private static $image;
    private static $imageName;
    private static $directory;
    private static $imageUrl;
    private static $protfolio;

    public static function getImageurl($request)
    {
        self::$image = $request->file("image");
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = "protfolio-images/";
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newProtfolio($request)
    {
        self::$protfolio = new Protfolio();
        self::$imageUrl = self::getImageurl($request);
        self::saveProtfolioInfo(self::$protfolio, $request, self::$imageUrl);
    }

    public static function saveProtfolioInfo( $protfolio, $request , $imageUrl)
    {
        $protfolio->protfolio_title = $request->protfolio_title;
        $protfolio->short_description = $request->short_description;
        $protfolio->image = $imageUrl;
        $protfolio->save();
    }

    public static function updeteProtfolio($request, $id)
    {
        self::$protfolio = Protfolio::find($id);

        if($request->file('image'))
        {
            if(file_exists(self::$protfolio->image))
            {
                unlink(self::$protfolio->image);
            }
            self::$imageUrl = self::getImageurl($request);
        }
        else
        {
            self::$imageUrl = self::$protfolio->image;
        }
        self::saveProtfolioInfo(self::$protfolio, $request, self::$imageUrl);
    }

    
}

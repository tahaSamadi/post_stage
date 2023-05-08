<?php

namespace App\Services\resize_save_image;
use Illuminate\Support\Facades\Storage;
use Image;

class resize_image
{
    protected string $image_name_path;
    protected string $directory_name;
    public function __construct($pic)
    {
        $this->image_name_path=time().'.'.$pic->extension();
        $this->directory_name='public/news/';
        $pic->storeAs($this->directory_name,$this->image_name_path);
    }

    public function resize_image(array $resize_images){
        foreach ($resize_images as $resize_image){
            self::make_image(['width'=>$resize_image['width'],'height'=>$resize_image['height']
                ,'module'=>$resize_image['module'],'thumb_name'=>$resize_image['thumb_name']]);
        }
    }



    private function make_image(array $image_size){

        $img=Image::make(storage_path('/app/'.$this->getDirectoryName().$this->getImageNamePath()));


        $make_thumb_path=sprintf(storage_path().'/app/public/%s/%s/'
            ,$image_size['thumb_name'],$image_size['module']);

        $destination_path=mkdir_file::mkdir($make_thumb_path);

        $img->resize($image_size['width'], $image_size['height'])
            ->save($destination_path.'/'.$this->getImageNamePath());
    }
    /**
     * @return string
     */
    public function getImageNamePath(): string
    {
        return $this->image_name_path;
    }

    /**
     * @return string
     */
    public function getDirectoryName(): string
    {
        return $this->directory_name;
    }




}

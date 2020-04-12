<?php


namespace App\Services;


use App\Image;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class UploadImage
{
    protected $images;

    public function __construct(Image $image)
    {
        $this->images = $image;
    }

    /**
     * Загрузка картинов на сервер
     * @param $product_id
     * @param $images
     */
    public function upload($product_id, $images)
    {
        foreach ($images as $image) {
            $path = Storage::disk('local')->put('/product', $image);
            $data_images[] = [
                'product_id' => $product_id,
                'image' => $path,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ];
        }

        return $this->createImageByProduct($data_images);

    }

    /**
     * Запись картинок в бд
     * @param $data_images
     */
    protected function createImageByProduct($data_images)
    {
        try {
            $this->images->insert($data_images);
        } catch (\Exception $e) {
            return 'error';
        }

        return 'ok';
    }
}

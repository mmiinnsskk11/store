<?php


namespace App\Services;


use App\Catalog;

class CreateProduct
{

    protected $uploadImage;
    protected $catalog;

    public function __construct(UploadImage $uploadImage,
                                Catalog $catalog)
    {
        $this->uploadImage = $uploadImage;
        $this->catalog = $catalog;
    }

    /**
     * добавление товара в бд
     * @param $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createProduct($request)
    {
        $data_create_product = $this->dataCreateProduct($request);
        try {
            $product = $this->catalog->create($data_create_product);
            $this->uploadImage($product->id, $request->img);
        } catch (\Exception $e) {
            return redirect()->route('subcategories.index')->with('error', 'Возникла ошибка повторите еще раз');
        }

        return redirect()->route('subcategories.index')->with('success', 'Категория успешно обновлена');
    }

    /**
     * Загрузка картинок на сервер
     * @param $product_id
     * @param $images
     * @return string
     */
    protected function uploadImage($product_id, $images)
    {
        return $this->uploadImage->upload($product_id, $images);
    }

    /**
     * Создание массива данных для записы товара в бд
     * @param $request
     * @return array
     */
    protected function dataCreateProduct($request)
    {
        return [
            'name' => $request->name,
            'categories_id' => $request->category,
            'subcategories_id' => $request->subcategory,
            'cost' => $request->cost,
            'description' => $request->description
        ];
    }
}

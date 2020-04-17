<?php


namespace App\Services;


use App\Catalog;

class ProductService
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
            return redirect()->route('catalog.index')->with('error', 'Возникла ошибка повторите еще раз');
        }

        return redirect()->route('catalog.index')->with('success', 'Товар успешно добавлен');
    }

    /**
     * добавление товара в бд
     * @param $request
     * @param $catalog
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateProduct($request, $catalog)
    {
        $data_update_product = $this->dataUpdateProduct($request, $catalog);
        try {
            $product = $catalog->update($data_update_product);

            if (!empty($request->img)) {
                $this->uploadImage($product->id, $request->img);
            }

        } catch (\Exception $e) {
            return redirect()->route('catalog.index')->with('error', 'Возникла ошибка повторите еще раз');
        }

        return redirect()->route('catalog.index')->with('success', 'Товар успешно обновлен');
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

    protected function dataUpdateProduct($request, $catalog)
    {
        return [
            'name' => !empty($request->name) ? $request->name : $catalog->name,
            'categories_id' => !empty($request->category) ? $request->category : $catalog->category,
            'subcategories_id' => !empty($request->subcategory) ? $request->subcategory : $catalog->subcategory,
            'cost' => !empty($request->cost) ? $request->cost : $catalog->cost,
            'description' => !empty($request->description) ? $request->description : $catalog->description,
        ];
    }
}

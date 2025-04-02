<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Category;
use App\Models\Product;
use App\Models\Image;

use MoonShine\Laravel\DependencyInjection\Request;
use MoonShine\Laravel\Fields\Relationships\MorphTo;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Image as ImageField;

/**
 * @extends ModelResource<Image>
 */
class ImageResource extends ModelResource
{
    protected string $model = Image::class;
    protected string $title = 'Images';


    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            ImageField::make('Path'),
            MorphTo::make('ImageAble', 'imageable', fn($item) => $item->id . "." . $item->name)
                ->types([
                    Category::class => ['Categories', 'Categories'],
                    Product::class => ['Products', 'Products'],
                ]),
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                ImageField::make('Path'),
                MorphTo::make('ImageAble', 'imageable', fn($item) => $item->id . "." . $item->name)
                    ->types([
                        Product::class => ['Products', 'Products'],
                        Category::class => ['Categories', 'Categories'],
                    ]),
            ])
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            ImageField::make('Path'),
            MorphTo::make('ImageAble', 'imageable', fn($item) => $item->id . "." . $item->name)
                ->types([
                    Category::class => ['Categories', 'Categories'],
                    Product::class => ['Products', 'Products'],
                ]),
        ];
    }

    /**
     * @param Image $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}

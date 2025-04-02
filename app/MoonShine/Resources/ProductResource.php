<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;


use App\Models\Product;


use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Fields\Relationships\BelongsToMany;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;

/**
 * @extends ModelResource<Product>
 */
class ProductResource extends ModelResource
{
    protected string $model = Product::class;

    protected string $title = 'Products';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Name')->sortable(),
            Textarea::make('Description')
                ->customAttributes([
                'rows'=>7,
            ]),
            Text::make('Price')->sortable(),
            Text::make('Sale Price','sale_price')->sortable(),
            BelongsTo::make(
                'Category ID and Name',
                'category',
                fn($item)=>"$item->name",
                CategoryResource::class)->nullable(),
            Number::make('Quantity', 'quantity'),
        Number::make('Amount','pilgrim'),
            BelongsTo::make('Volume', 'volume', fn($item) => $item->name,
                VolumeResource::class
            )->nullable(),
            BelongsToMany::make('Discounts', 'discounts', DiscountResource::class),


        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Name')->sortable(),
            Textarea::make('Description')
                ->customAttributes([
                    'rows'=>7,
                ]),
            Number::make('price')->sortable(),
            Number::make('Sale Price','sale_price')->sortable(),
            BelongsTo::make(
                'Category ID and Name',
                'category',
                fn($item)=>"$item->name",
                CategoryResource::class)->nullable(),
            Number::make('Quantity', 'quantity'),
            Number::make('Amount','pilgrim'),
            BelongsTo::make('Volume', 'volume', fn($item) => $item->name,
                VolumeResource::class
            )->nullable(),
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Name')->sortable(),
            Textarea::make('Description')
                ->customAttributes([
                    'rows'=>7,
                ]),
            Text::make('Price')->sortable(),
            Text::make('Sale Price','sale_price')->sortable(),
            BelongsTo::make(
                'Category ID and Name',
                'category',
                fn($item)=>"$item->name",
                CategoryResource::class)->nullable(),
            Number::make('Quantity', 'quantity'),
        Number::make('Amount','pilgrim'),
            BelongsTo::make('Volume', 'volume', fn($item) => $item->name,
                VolumeResource::class
            )->nullable(),
        ];
    }

    /**
     * @param Product $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}

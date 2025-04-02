<?php

declare(strict_types=1);

namespace App\MoonShine\Layouts;

use App\MoonShine\Resources\BannerResource;
use App\MoonShine\Resources\MoonShineUserResource;
use App\MoonShine\Resources\MoonShineUserRoleResource;
use MoonShine\Laravel\Layouts\AppLayout;
use MoonShine\ColorManager\ColorManager;
use MoonShine\Contracts\ColorManager\ColorManagerContract;
use MoonShine\Laravel\Components\Layout\{Locales, Notifications, Profile, Search};
use MoonShine\UI\Components\{Breadcrumbs,
    Components,
    Layout\Flash,
    Layout\Div,
    Layout\Body,
    Layout\Burger,
    Layout\Content,
    Layout\Footer,
    Layout\Head,
    Layout\Favicon,
    Layout\Assets,
    Layout\Meta,
    Layout\Header,
    Layout\Html,
    Layout\Layout,
    Layout\Logo,
    Layout\Menu,
    Layout\Sidebar,
    Layout\ThemeSwitcher,
    Layout\TopBar,
    Layout\Wrapper,
    When};
use App\MoonShine\Resources\PostCategoryResource;
use MoonShine\MenuManager\MenuGroup;
use MoonShine\MenuManager\MenuItem;
use App\MoonShine\Resources\PostResource;
use App\MoonShine\Resources\VolumeResource;
use App\MoonShine\Resources\CategoryResource;
use App\MoonShine\Resources\ProductResource;
use App\MoonShine\Resources\ImageResource;
use App\MoonShine\Resources\TeamsResource;
use App\MoonShine\Resources\DiscountResource;

final class MoonShineLayout extends AppLayout
{
    protected function assets(): array
    {
        return [
            ...parent::assets(),
        ];
    }

    protected function menu(): array
    {
        return [
            MenuGroup::make('System', [
                MenuItem::make('Admins', MoonShineUserResource::class),
                MenuItem::make('Roles', MoonShineUserRoleResource::class),
//                MenuItem::make('Permissions', PermissionResource::class),
            ]),
            MenuGroup::make('Posts', [
                MenuItem::make('Post Categories', PostCategoryResource::class),
                MenuItem::make('Posts', PostResource::class),
            ]),

            MenuGroup::make('Products', [
                MenuItem::make('Categories', CategoryResource::class),
                MenuItem::make('Volumes', VolumeResource::class),
                MenuItem::make('Product', ProductResource::class),
                MenuItem::make('Images', ImageResource::class),
            ]),

            MenuGroup::make('Images', [
                MenuItem::make('Banner', BannerResource::class),
                MenuItem::make('Teams', TeamsResource::class),
            ]),
            MenuItem::make('Discounts', DiscountResource::class),
        ];

    }

    /**
     * @param ColorManager $colorManager
     */
    protected function colors(ColorManagerContract $colorManager): void
    {
        parent::colors($colorManager);

        // $colorManager->primary('#00000');
    }

    public function build(): Layout
    {
        return parent::build();
    }
}

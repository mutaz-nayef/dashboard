<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders\data\menus.json'));
        $menus = json_decode($json, true);

        $this->createMenus($menus);
    }
    protected function createMenus(array $menus, ?int $parentId = null): void
    {
        foreach ($menus as $menu) {
            // Remove children to avoid mass assignment issues
            $children = $menu['children'] ?? [];
            unset($menu['children']);

            // Prepare insert data
            $menuData = [
                'title'     => $menu['title'],
                'slug'      => $menu['slug'],
                'url'       => $menu['url'] ?? null,
                'icon'      => $menu['icon'] ?? null,
                'parent_id' => $parentId,
            ];

            // Insert into DB
            $created = Menu::create($menuData);

            // Recursively add children
            if (!empty($children)) {
                $this->createMenus($children, $created->id);
            }
        }
    }
}

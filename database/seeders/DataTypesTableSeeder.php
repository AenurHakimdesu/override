<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        // 1. Users
        $dataType = $this->dataType('slug', 'users');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'users',
                'display_name_singular' => __('voyager::seeders.data_types.user.singular'),
                'display_name_plural'   => __('voyager::seeders.data_types.user.plural'),
                'icon'                  => 'voyager-person',
                'model_name'            => 'TCG\\Voyager\\Models\\User',
                'policy_name'           => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller'            => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        // 2. Menus
        $dataType = $this->dataType('slug', 'menus');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'menus',
                'display_name_singular' => __('voyager::seeders.data_types.menu.singular'),
                'display_name_plural'   => __('voyager::seeders.data_types.menu.plural'),
                'icon'                  => 'voyager-list',
                'model_name'            => 'TCG\\Voyager\\Models\\Menu',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        // 3. Roles
        $dataType = $this->dataType('slug', 'roles');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'roles',
                'display_name_singular' => __('voyager::seeders.data_types.role.singular'),
                'display_name_plural'   => __('voyager::seeders.data_types.role.plural'),
                'icon'                  => 'voyager-lock',
                'model_name'            => 'TCG\\Voyager\\Models\\Role',
                'controller'            => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        // 4. Posts
        $dataType = $this->dataType('slug', 'posts');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'posts',
                'display_name_singular' => __('Post'),
                'display_name_plural'   => __('Posts'),
                'icon'                  => 'voyager-news',
                'model_name'            => 'TCG\Voyager\Models\Post',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        // 5. Categories
        $dataType = $this->dataType('slug', 'categories');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'categories',
                'display_name_singular' => __('Category'),
                'display_name_plural'   => __('Categories'),
                'icon'                  => 'voyager-categories',
                'model_name'            => 'TCG\Voyager\Models\Category',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        // 6. Pages
        $dataType = $this->dataType('slug', 'pages');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'pages',
                'display_name_singular' => __('Page'),
                'display_name_plural'   => __('Pages'),
                'icon'                  => 'voyager-file-text',
                'model_name'            => 'TCG\Voyager\Models\Page',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        // 7. Albums
        $dataType = $this->dataType('slug', 'albums');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'albums',
                'display_name_singular' => __('Album'),
                'display_name_plural'   => __('Albums'),
                'icon'                  => 'voyager-categories',
                'model_name'            => 'App\Models\Album',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        // 8. Photos
        $dataType = $this->dataType('slug', 'photos');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'photos',
                'display_name_singular' => __('Photo'),
                'display_name_plural'   => __('Photos'),
                'icon'                  => 'voyager-phot',
                'model_name'            => 'App\Models\Photo',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        // 9. Videos
        $dataType = $this->dataType('slug', 'videos');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'videos',
                'display_name_singular' => __('Video'),
                'display_name_plural'   => __('Vidoes'),
                'icon'                  => 'voyager-video',
                'model_name'            => 'App\Models\Video',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        // 10. Agendas
        $dataType = $this->dataType('slug', 'agendas');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'agendas',
                'display_name_singular' => __('Agenda'),
                'display_name_plural'   => __('Agendas'),
                'icon'                  => 'voyager-logbook',
                'model_name'            => 'App\Models\Agenda',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        // 11. Running Texts
        $dataType = $this->dataType('slug', 'running_texts');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'running_texts',
                'display_name_singular' => __('Running Text'),
                'display_name_plural'   => __('Running Texts'),
                'icon'                  => 'voyager-pen',
                'model_name'            => 'App\Models\RunningText',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
        // 12. Tautans
        $dataType = $this->dataType('slug', 'tautans');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'tautans',
                'display_name_singular' => __('Tautan'),
                'display_name_plural'   => __('Tautans'),
                'icon'                  => 'voyager-browser',
                'model_name'            => 'App\Models\Tautan',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}

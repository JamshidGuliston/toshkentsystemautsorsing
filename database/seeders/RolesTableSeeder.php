<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $role = Role::firstOrNew(['name' => 'admin']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('voyager::seeders.roles.admin'),
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'direktor']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => 'direktor',
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'texnolog']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => 'texnolog',
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'skladchi']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => 'sklad',
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'bugalter']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => 'bugalter',
            ])->save();
        }
    }
}

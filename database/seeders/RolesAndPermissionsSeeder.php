<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        $permissions = $this->createEntitiesPermissions();
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        $this->createRolesByPermissions($permissions);
    }

    /**
     * Create entities permissios like: global edit store_entities, user edit drivers
     *
     * @return array
     */
    private function createEntitiesPermissions(): array
    {
        // Permissions
        $levels = ['global', 'user'];
        $actions = ['list', 'show', 'create', 'edit', 'delete', 'restore'];
        $entities = Schema::getTables();
        $permissions = [];

        foreach ($entities as $entity) {
            $entity = $entity['name'];
            foreach ($levels as $level) {
                foreach ($actions as $action) {
                    $permission_name = "$level $action $entity"; # {level} {action} {entity}
                    $permissions[] = $permission_name;

                    Permission::create(['name' => $permission_name]);
                }
            }
        }

        return $permissions;
    }
    
    /**
     * Create the roles and assign its permissions
     *
     * @param array $permissions
     * @return array
     */
    private function createRolesByPermissions(array $permissions): array
    {
        $roles = [
            'admin' => '/global\ .*/', 
            'supervisor' => '/global\ (list|show)\ .*/', 
            'user' => '/user\ .*/'
        ];

        foreach ($roles as $role => $pattern) {
            $permissions_granded = preg_grep($pattern, $permissions);
            Role::create(['name' => $role])
                ->givePermissionTo($permissions_granded)
            ;
        }

        return array_keys($roles);
    }
}

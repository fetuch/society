<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ACLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $roles = [
            'Super Admin',
            'Redaktor',

            'Członek Zarządu Towarzystwa',
            'Prezes Towarzystwa',
            'Sekretarz Towarzystwa',
            'Skarbnik Towarzystwa',
            'Prezes Elekt Towarzystwa',
            'Były Prezes Towarzystwa',

            'Członek Zarządu Oddziału',
            'Prezes Oddziału',
            'Sekretarz Oddziału',
            'Skarbnik Oddziału',
            'Prezes Elekt Oddziału',
            'Były Prezes Oddziału',

            'Członek Zarządu Sekcji',
            'Prezes Sekcji',
            'Sekretarz Sekcji',
            'Skarbnik Sekcji',
            'Prezes Elekt Sekcji',
            'Były Prezes Sekcji',
        ];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }

        $permissions = [
            'dostęp do panelu',
            'zarządzanie treściami',
            'zarządzanie użytkownikami',
            'zarządzanie oddziałami',
            'zarządzanie sekcjami',
            'zarządzanie deklaracjami',
            'zarządzanie składkami',
            'zarządzanie wpłatami członków',
            'zarządzanie zebraniami',
            'zarządzanie korespondencjami',
            'zarządzanie uprawnieniami',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        Role::findByName('Redaktor')->givePermissionTo([
            'dostęp do panelu',
            'zarządzanie treściami',
        ]);

        Role::findByName('Członek Zarządu Towarzystwa')->givePermissionTo([
            'dostęp do panelu',
            'zarządzanie użytkownikami',
            'zarządzanie oddziałami',
            'zarządzanie sekcjami',
            'zarządzanie deklaracjami',
            'zarządzanie zebraniami',
            'zarządzanie korespondencjami',
        ]);

        Role::findByName('Członek Zarządu Oddziału')->givePermissionTo([
            'dostęp do panelu',
            'zarządzanie użytkownikami',
            'zarządzanie oddziałami',
            'zarządzanie deklaracjami',
            'zarządzanie zebraniami',
            'zarządzanie korespondencjami',
        ]);

        Role::findByName('Członek Zarządu Sekcji')->givePermissionTo([
            'dostęp do panelu',
            'zarządzanie użytkownikami',
            'zarządzanie sekcjami',
            'zarządzanie zebraniami',
            'zarządzanie korespondencjami',
        ]);

        Role::findByName('Sekretarz Towarzystwa')->givePermissionTo([
            'zarządzanie deklaracjami',
            'zarządzanie składkami',
            'zarządzanie wpłatami członków',
        ]);

        Role::findByName('Skarbnik Towarzystwa')->givePermissionTo([
            'zarządzanie składkami',
            'zarządzanie wpłatami członków',
        ]);
    }
}

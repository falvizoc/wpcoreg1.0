<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleAbogado = Role::create(['name' => 'Abogado']);
        $roleBlogger = Role::create(['name' => 'Blogger']);

        // Dashboard
        Permission::create(['name' => 'admin.index',
                            'description' => 'Ver Dashboard'])->syncRoles([$roleAdmin,$roleBlogger,$roleAbogado]);

        // Usuarios
        Permission::create(['name' => 'admin.users.index',
                            'description' => 'Ver listado de Usuarios'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.users.edit',
                            'description' => 'Editar Usuario'])->syncRoles([$roleAdmin]);

        // Categories
        Permission::create(['name' => 'admin.categorias.index',
                            'description' => 'Ver listado de Categorias'])->syncRoles([$roleAdmin,$roleBlogger]);
        Permission::create(['name' => 'admin.categorias.create',
                            'description' => 'Crear Categorias'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.categorias.edit',
                            'description' => 'Editar Categorias'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.categorias.show',
                            'description' => 'Visualizar Categorias'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.categorias.destroy',
                            'description' => 'Eliminar Categorias'])->syncRoles([$roleAdmin]);

        // Etiquetas
        Permission::create(['name' => 'admin.etiquetas.index',
                            'description' => 'Ver listado de Etiquetas'])->syncRoles([$roleAdmin,$roleBlogger]);
        Permission::create(['name' => 'admin.etiquetas.create',
                            'description' => 'Crear Etiquetas'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.etiquetas.edit',
                            'description' => 'Editar Etiquetas'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.etiquetas.show',
                            'description' => 'Visualizar Etiquetas'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.etiquetas.destroy',
                            'description' => 'Eliminar Etiquetas'])->syncRoles([$roleAdmin]);

        // Post
        Permission::create(['name' => 'admin.posts.index',
                            'description' => 'Ver listado de Posts'])->syncRoles([$roleAdmin,$roleBlogger]);
        Permission::create(['name' => 'admin.posts.create',
                            'description' => 'Crear Posts'])->syncRoles([$roleAdmin,$roleBlogger]);
        Permission::create(['name' => 'admin.posts.edit',
                            'description' => 'Editar Posts'])->syncRoles([$roleAdmin,$roleBlogger]);
        Permission::create(['name' => 'admin.posts.show',
                            'description' => 'Visualizar Posts'])->syncRoles([$roleAdmin,$roleBlogger]);
        Permission::create(['name' => 'admin.posts.destroy',
                            'description' => 'Eliminar Posts'])->syncRoles([$roleAdmin,$roleBlogger]);

        // Consultas Webs
        Permission::create(['name' => 'admin.consultas.index',
        'description' => 'Ver listado de Consultas'])->syncRoles([$roleAdmin,$roleAbogado]);
        Permission::create(['name' => 'admin.consultas.show',
                'description' => 'Visualizar Consultas'])->syncRoles([$roleAdmin,$roleAbogado]);
        Permission::create(['name' => 'admin.consultas.destroy',
                'description' => 'Eliminar Consultas'])->syncRoles([$roleAdmin,$roleAbogado]);
                
        # Tareas
        Permission::create(['name' => 'admin.tareas.index',
        'description' => 'Ver listado de Tareas'])->syncRoles([$roleAdmin,$roleAbogado]);
        Permission::create(['name' => 'admin.tareas.create',
                'description' => 'Crear Tareas'])->syncRoles([$roleAdmin,$roleAbogado]);
        Permission::create(['name' => 'admin.tareas.edit',
                'description' => 'Editar Tareas'])->syncRoles([$roleAdmin,$roleAbogado]);
        Permission::create(['name' => 'admin.tareas.show',
                'description' => 'Visualizar Tareas'])->syncRoles([$roleAdmin,$roleAbogado]);
        Permission::create(['name' => 'admin.tareas.destroy',
                'description' => 'Eliminar Tareas'])->syncRoles([$roleAdmin,$roleAbogado]);

         # Clientes
        Permission::create(['name' => 'admin.clientes.index',
         'description' => 'Ver listado de Clientes'])->syncRoles([$roleAdmin,$roleAbogado]);
        Permission::create(['name' => 'admin.clientes.create',
                 'description' => 'Crear Clientes'])->syncRoles([$roleAdmin,$roleAbogado]);
        Permission::create(['name' => 'admin.clientes.edit',
                 'description' => 'Editar Clientes'])->syncRoles([$roleAdmin,$roleAbogado]);
        Permission::create(['name' => 'admin.clientes.show',
                 'description' => 'Visualizar Clientes'])->syncRoles([$roleAdmin,$roleAbogado]);
        Permission::create(['name' => 'admin.clientes.destroy',
                 'description' => 'Eliminar Clientes'])->syncRoles([$roleAdmin,$roleAbogado]);

        # Expedientes
        Permission::create(['name' => 'admin.expedientes.index',
         'description' => 'Ver listado de Expedientes'])->syncRoles([$roleAdmin,$roleAbogado]);
        Permission::create(['name' => 'admin.expedientes.create',
                 'description' => 'Crear Expedientes'])->syncRoles([$roleAdmin,$roleAbogado]);
        Permission::create(['name' => 'admin.expedientes.edit',
                 'description' => 'Editar Expedientes'])->syncRoles([$roleAdmin,$roleAbogado]);
        Permission::create(['name' => 'admin.expedientes.show',
                 'description' => 'Visualizar Expedientes'])->syncRoles([$roleAdmin,$roleAbogado]);
        Permission::create(['name' => 'admin.expedientes.destroy',
                 'description' => 'Eliminar Expedientes'])->syncRoles([$roleAdmin,$roleAbogado]);

        # Audiencias
        Permission::create(['name' => 'admin.audiencias.index',
         'description' => 'Ver listado de Audiencias'])->syncRoles([$roleAdmin,$roleAbogado]);
        Permission::create(['name' => 'admin.audiencias.create',
                'description' => 'Crear Audiencias'])->syncRoles([$roleAdmin,$roleAbogado]);
        Permission::create(['name' => 'admin.audiencias.edit',
                'description' => 'Editar Audiencias'])->syncRoles([$roleAdmin,$roleAbogado]);
        Permission::create(['name' => 'admin.audiencias.show',
                'description' => 'Visualizar Audiencias'])->syncRoles([$roleAdmin,$roleAbogado]);
        Permission::create(['name' => 'admin.audiencias.destroy',
                'description' => 'Eliminar Audiencias'])->syncRoles([$roleAdmin,$roleAbogado]);
    }
}

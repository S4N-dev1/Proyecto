<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Producto;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class MigrarFotosProductos extends Command
{
    /**
     * Nombre del comando para Artisan.
     *
     * @var string
     */
    protected $signature = 'productos:migrar-fotos';

    /**
     * Descripción del comando.
     *
     * @var string
     */
    protected $description = 'Migrar fotos desde public/imgenes a storage/app/public/fotos_productos';

    /**
     * Ejecuta el comando.
     */
    public function handle()
    {
        $fotosMigradas = 0;

        // Obtener todos los productos con foto
        $productos = Producto::whereNotNull('foto')->get();

        foreach ($productos as $producto) {
            $fotoOrigen = public_path('imgenes/' . $producto->foto);
            if (File::exists($fotoOrigen)) {
                $nuevoPath = 'fotos_productos/' . $producto->foto;
                Storage::disk('public')->put($nuevoPath, File::get($fotoOrigen));
                $producto->foto = $nuevoPath;
                $producto->save();
                File::delete($fotoOrigen);
                $fotosMigradas++;
            }
        }

        // Mostrar mensaje indicando cuántas fotos se migraron
        $this->info("Se migraron $fotosMigradas fotos correctamente.");
    }
}

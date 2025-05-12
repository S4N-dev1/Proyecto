<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Persona;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class MigrarFotosPersonas extends Command
{
    /**
     * Nombre del comando para Artisan.
     *
     * @var string
     */
    protected $signature = 'personas:migrar-fotos';

    /**
     * Descripción del comando.
     *
     * @var string
     */
    protected $description = 'Migrar fotos desde public/imgenes a storage/app/public/personas';

    /**
     * Ejecuta el comando.
     */
    public function handle()
    {
        $fotosMigradas = 0;

        $personas = Persona::whereNotNull('foto')->get();

        foreach ($personas as $persona) {
            $fotoOrigen = public_path('imgenes/' . $persona->foto);

            if (File::exists($fotoOrigen)) {
                $nuevoPath = 'personas/' . $persona->foto;
                Storage::disk('public')->put($nuevoPath, File::get($fotoOrigen));
                $persona->foto = $nuevoPath;
                $persona->save();
                File::delete($fotoOrigen);
                $fotosMigradas++;
            }
        }

        $this->info("Se migraron $fotosMigradas fotos correctamente.");
    }
}

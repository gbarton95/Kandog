<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerrosTableSeeder extends Seeder
{
    
    public function run(): void
    {

        DB::table('perros')->insert([
            'user_id' => 1,
            'nombre' => 'Rocky',
            'edad' => '12',
            'sexo' => 'Macho',
            'raza' => 'Pitbull',
            'peso' => 25,
            'PPP' => true,
            'anotaciones' => 'Es un poco nervioso. Mejor con bozal.',
            'tutor_nombre' => 'Fernando',
            'tutor_apellidos' => 'Balboa Gimeno',
            'telefono' => 666666111,
            'email' => 'ejemplo@algo.es',
            'codigo_postal' => 50009,
            'calle' => 'Juan Pablo II 22, 4C',
            'active' => true
        ]);

        DB::table('perros')->insert([
            'user_id' => 1,
            'nombre' => 'Max',
            'edad' => 4,
            'sexo' => 'Macho',
            'raza' => 'Labrador',
            'peso' => 30,
            'PPP' => true,
            'anotaciones' => 'Juguetón y amigable con otros perros.',
            'tutor_nombre' => 'Ana',
            'tutor_apellidos' => 'Martínez',
            'telefono' => 667778899,
            'email' => 'ana@example.com',
            'codigo_postal' => 28001,
            'calle' => 'Calle Mayor 123, Madrid',
            'active' => true
        ]);

        DB::table('perros')->insert([
            'user_id' => 1,
            'nombre' => 'Luna',
            'edad' => 3,
            'sexo' => 'Hembra',
            'raza' => 'Golden Retriever',
            'peso' => 28,
            'PPP' => true,
            'anotaciones' => 'Cariñosa y bien educada.',
            'tutor_nombre' => 'Pedro',
            'tutor_apellidos' => 'García',
            'telefono' => 678990011,
            'email' => 'pedro@example.com',
            'codigo_postal' => 41001,
            'calle' => 'Plaza Nueva 1, Sevilla',
            'active' => true
        ]);

        DB::table('perros')->insert([
            'user_id' => 1,
            'nombre' => 'Toby',
            'edad' => 2,
            'sexo' => 'Macho',
            'raza' => 'Bulldog Francés',
            'peso' => 12,
            'PPP' => false,
            'anotaciones' => 'Muy juguetón y activo.',
            'tutor_nombre' => 'María',
            'tutor_apellidos' => 'López',
            'telefono' => 645432123,
            'email' => 'maria@example.com',
            'codigo_postal' => 46002,
            'calle' => 'Calle Mayor 45, Valencia',
            'active' => true
        ]);

        DB::table('perros')->insert([
            'user_id' => 1,
            'nombre' => 'Bella',
            'edad' => 5,
            'sexo' => 'Hembra',
            'raza' => 'Chihuahua',
            'peso' => 3,
            'PPP' => false,
            'anotaciones' => 'Pequeña y cariñosa.',
            'tutor_nombre' => 'David',
            'tutor_apellidos' => 'Fernández',
            'telefono' => 622334455,
            'email' => 'david@example.com',
            'codigo_postal' => 8001,
            'calle' => 'Rambla Catalunya 100, Barcelona',
            'active' => true
        ]);

        DB::table('perros')->insert([
            'user_id' => 1,
            'nombre' => 'Rex',
            'edad' => 6,
            'sexo' => 'Macho',
            'raza' => 'Pastor Alemán',
            'peso' => 35,
            'PPP' => true,
            'anotaciones' => 'Entrenado en obediencia básica.',
            'tutor_nombre' => 'Laura',
            'tutor_apellidos' => 'Pérez',
            'telefono' => 688776655,
            'email' => 'laura@example.com',
            'codigo_postal' => 29001,
            'calle' => 'Calle Larios 20, Málaga',
            'active' => true
        ]);

        DB::table('perros')->insert([
            'user_id' => 1,
            'nombre' => 'Max',
            'edad' => 4,
            'sexo' => 'Macho',
            'raza' => 'Labrador',
            'peso' => 30,
            'PPP' => true,
            'anotaciones' => 'Juguetón y amigable con otros perros.',
            'tutor_nombre' => 'Ana',
            'tutor_apellidos' => 'Martínez',
            'telefono' => 667778899,
            'email' => 'ana@example.com',
            'codigo_postal' => 28001,
            'calle' => 'Calle Mayor 123, Madrid',
            'active' => true
        ]);

        DB::table('perros')->insert([
            'user_id' => 1,
            'nombre' => 'Bruno',
            'edad' => 4,
            'sexo' => 'Macho',
            'raza' => 'Border Collie',
            'peso' => 20,
            'PPP' => true,
            'anotaciones' => 'Es muy inteligente y necesita mucho ejercicio.',
            'tutor_nombre' => 'David',
            'tutor_apellidos' => 'Martínez',
            'telefono' => 611223344,
            'email' => 'david@example.com',
            'codigo_postal' => 50007,
            'calle' => 'Paseo de Sagasta 50, Zaragoza',
            'active' => true
        ]);

        DB::table('perros')->insert([
            'user_id' => 1,
            'nombre' => 'Luna',
            'edad' => 2,
            'sexo' => 'Hembra',
            'raza' => 'Shih Tzu',
            'peso' => 8,
            'PPP' => true,
            'anotaciones' => 'Es muy cariñosa y le encanta pasear.',
            'tutor_nombre' => 'Elena',
            'tutor_apellidos' => 'González',
            'telefono' => 622334455,
            'email' => 'elena@example.com',
            'codigo_postal' => 50008,
            'calle' => 'Calle Alcalá 15, Zaragoza',
            'active' => true
        ]);

        DB::table('perros')->insert([
            'user_id' => 1,
            'nombre' => 'Thor',
            'edad' => 5,
            'sexo' => 'Macho',
            'raza' => 'Bullmastiff',
            'peso' => 40,
            'PPP' => false,
            'anotaciones' => 'Es muy protector y leal.',
            'tutor_nombre' => 'Sergio',
            'tutor_apellidos' => 'Hernández',
            'telefono' => 633445566,
            'email' => 'sergio@example.com',
            'codigo_postal' => 50009,
            'calle' => 'Avenida de Gaudí 25, Zaragoza',
            'active' => true
        ]);

        DB::table('perros')->insert([
            'user_id' => 1,
            'nombre' => 'Canela',
            'edad' => 3,
            'sexo' => 'Hembra',
            'raza' => 'Dachshund (Teckel)',
            'peso' => 7,
            'PPP' => true,
            'anotaciones' => 'Es una excelente cazadora de ratones.',
            'tutor_nombre' => 'Laura',
            'tutor_apellidos' => 'Rodríguez',
            'telefono' => 655667788,
            'email' => 'laura@example.com',
            'codigo_postal' => 50010,
            'calle' => 'Calle Alfonso I 20, Zaragoza',
            'active' => true
        ]);

        DB::table('perros')->insert([
            'user_id' => 1,
            'nombre' => 'Luna',
            'edad' => 3,
            'sexo' => 'Hembra',
            'raza' => 'Golden Retriever',
            'peso' => 28,
            'PPP' => true,
            'anotaciones' => 'Cariñosa y bien educada.',
            'tutor_nombre' => 'Pedro',
            'tutor_apellidos' => 'García',
            'telefono' => 678990011,
            'email' => 'pedro@example.com',
            'codigo_postal' => 41001,
            'calle' => 'Plaza Nueva 1, Sevilla',
            'active' => true
        ]);

        DB::table('perros')->insert([
            'user_id' => 1,
            'nombre' => 'Toby',
            'edad' => 2,
            'sexo' => 'Macho',
            'raza' => 'Bulldog Francés',
            'peso' => 12,
            'PPP' => false,
            'anotaciones' => 'Muy juguetón y activo.',
            'tutor_nombre' => 'María',
            'tutor_apellidos' => 'López',
            'telefono' => 645432123,
            'email' => 'maria@example.com',
            'codigo_postal' => 46002,
            'calle' => 'Calle Mayor 45, Valencia',
            'active' => true
        ]);

        DB::table('perros')->insert([
            'user_id' => 1,
            'nombre' => 'Bella',
            'edad' => 5,
            'sexo' => 'Hembra',
            'raza' => 'Chihuahua',
            'peso' => 3,
            'PPP' => false,
            'anotaciones' => 'Pequeña y cariñosa.',
            'tutor_nombre' => 'David',
            'tutor_apellidos' => 'Fernández',
            'telefono' => 622334455,
            'email' => 'david@example.com',
            'codigo_postal' => 8001,
            'calle' => 'Rambla Catalunya 100, Barcelona',
            'active' => true
        ]);

        DB::table('perros')->insert([
            'user_id' => 1,
            'nombre' => 'Bobby',
            'edad' => 3,
            'sexo' => 'Macho',
            'raza' => 'Bulldog Inglés',
            'peso' => 20,
            'PPP' => true,
            'anotaciones' => 'Adora jugar en el parque.',
            'tutor_nombre' => 'Laura',
            'tutor_apellidos' => 'García',
            'telefono' => 666778899,
            'email' => 'laura@example.com',
            'codigo_postal' => 50001,
            'calle' => 'Paseo de la Independencia 10, Zaragoza',
            'active' => true
        ]);

        DB::table('perros')->insert([
            'user_id' => 1,
            'nombre' => 'Lola',
            'edad' => 5,
            'sexo' => 'Hembra',
            'raza' => 'Labrador Retriever',
            'peso' => 28,
            'PPP' => true,
            'anotaciones' => 'Le encanta nadar en el río Ebro.',
            'tutor_nombre' => 'Manuel',
            'tutor_apellidos' => 'Martínez',
            'telefono' => 677889900,
            'email' => 'manuel@example.com',
            'codigo_postal' => 50002,
            'calle' => 'Plaza del Pilar 1, Zaragoza',
            'active' => true
        ]);

        DB::table('perros')->insert([
            'user_id' => 1,
            'nombre' => 'Rex',
            'edad' => 4,
            'sexo' => 'Macho',
            'raza' => 'Boxer',
            'peso' => 30,
            'PPP' => false,
            'anotaciones' => 'Tiene mucha energía y le gusta correr.',
            'tutor_nombre' => 'Elena',
            'tutor_apellidos' => 'Sánchez',
            'telefono' => 688776655,
            'email' => 'elena@example.com',
            'codigo_postal' => 50003,
            'calle' => 'Avenida Goya 50, Zaragoza',
            'active' => true
        ]);

        DB::table('perros')->insert([
            'user_id' => 1,
            'nombre' => 'Coco',
            'edad' => 2,
            'sexo' => 'Hembra',
            'raza' => 'Cocker Spaniel',
            'peso' => 15,
            'PPP' => true,
            'anotaciones' => 'Es muy sociable y le gusta jugar con niños.',
            'tutor_nombre' => 'Sofía',
            'tutor_apellidos' => 'Gómez',
            'telefono' => 611223344,
            'email' => 'sofia@example.com',
            'codigo_postal' => 50004,
            'calle' => 'Calle Alfonso 10, Zaragoza',
            'active' => true
        ]);

        DB::table('perros')->insert([
            'user_id' => 1,
            'nombre' => 'Lucky',
            'edad' => 6,
            'sexo' => 'Macho',
            'raza' => 'Dálmata',
            'peso' => 25,
            'PPP' => false,
            'anotaciones' => 'Es un gran compañero de ejercicio.',
            'tutor_nombre' => 'Carlos',
            'tutor_apellidos' => 'López',
            'telefono' => 622334455,
            'email' => 'carlos@example.com',
            'codigo_postal' => 50005,
            'calle' => 'Avenida de la Libertad 20, Zaragoza',
            'active' => true
        ]);

        DB::table('perros')->insert([
            'user_id' => 1,
            'nombre' => 'Lola',
            'edad' => 3,
            'sexo' => 'Hembra',
            'raza' => 'Bichón Frisé',
            'peso' => 10,
            'PPP' => true,
            'anotaciones' => 'Es muy juguetona y obediente.',
            'tutor_nombre' => 'Ana',
            'tutor_apellidos' => 'Rodríguez',
            'telefono' => 633445566,
            'email' => 'ana@example.com',
            'codigo_postal' => 50006,
            'calle' => 'Calle Don Jaime 5, Zaragoza',
            'active' => true
        ]);

    }
}

?>
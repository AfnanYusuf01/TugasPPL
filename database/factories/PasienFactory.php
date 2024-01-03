<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pasien;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pasien>
 */
class PasienFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pasien::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ktpFiles = Storage::files('public/files_ktp');
        $ktpFileName = $this->faker->randomElement($ktpFiles);
        $ktpFilePath = Storage::url($ktpFileName);

        return [
            'nik' => $this->faker->unique()->numerify('############'),
            'nama' => $this->faker->name,
            'tempat_lahir' => $this->faker->city,
            'tanggal_lahir' => $this->faker->date,
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'alamat' => $this->faker->address,
            'nomor_telepon' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'pekerjaan' => $this->faker->jobTitle,
            'nomor_kk' => $this->faker->numerify('############'),
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Hindu', 'Buddha']),
            'status_kawin' => $this->faker->randomElement(['Belum Menikah', 'Menikah', 'Duda', 'Janda']),
            'file_ktp' => $ktpFilePath,
            'user_id' => \App\Models\User::factory(),
        ];
    }
}

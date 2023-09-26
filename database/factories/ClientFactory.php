<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $ville=$this->faker->city;
        $pays=$this->faker->country;

        return [

            "nom"=>$this->faker->lastname,
            "prenom"=>$this->faker->firstname,
            "prenom"=>$this->faker->firstname,
            "sexe"=>array_rand(["M","F"],1),
            "dateNaissance"=>$this->faker->dateTimeBetween("1980-12-30","2001-12-30"),
            "lieuNaissance"=>"$ville, $pays",
            "nationalite"=>$this->faker->country,
            "pays"=>$pays,
            "ville"=>$ville,
            "adresse"=>$this->faker->address,
            "telephone1"=>$this->faker->phoneNumber,
            "telephone2"=>$this->faker->phoneNumber,
            "pideceIdentite"=>array_rand(["CARTE D'ELECTEUR","PASSPORT","PERMIS DE CONDUITE"],1),
            "noPieceIdentite"=>$this->faker->creditCardNumber
        ];
    }
}

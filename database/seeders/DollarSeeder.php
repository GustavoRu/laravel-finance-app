<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DollarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dollars')->insert([
            [
                'type' => 'Oficial',
                'icon' => '💵',
                'buy_price' => 0,
                'sell_price' => 0,
                'description' => 'El dólar oficial es el tipo de cambio establecido por el Banco Central de Argentina.',
                'date' => Carbon::now(), // Fecha actual
            ],
            [
                'type' => 'Blue',
                'icon' => '💵',
                'buy_price' => 0,
                'sell_price' => 0,
                'description' => 'El dólar blue es un tipo de cambio paralelo y no oficial, que generalmente tiene un precio más alto que el oficial.',
                'date' => Carbon::now(), // Fecha actual
            ],
            [
                'type' => 'Cripto',
                'icon' => '₿',
                'buy_price' => 0,
                'sell_price' => 0,
                'description' => 'Este es el precio del dólar que se obtiene a través de criptomonedas como Bitcoin. Suele reflejar un tipo de cambio libre que no está influenciado directamente por los controles cambiarios.',
                'date' => Carbon::now(), // Fecha actual
            ],
            [
                'type' => 'Bolsa',
                'icon' => '📈',
                'buy_price' => 0,
                'sell_price' => 0,
                'description' => 'El dólar bolsa o MEP se obtiene mediante la compra de bonos en pesos y su venta en dólares a través de la bolsa. Es utilizado principalmente por inversionistas que buscan obtener dólares de manera legal sin pasar por el mercado oficial',
                'date' => Carbon::now(), // Fecha actual
            ],
            [
                'type' => 'Turista',
                'icon' => '🏖️',
                'buy_price' => 0,
                'sell_price' => 0,
                'description' => 'Este es el dólar que incluye un recargo sobre el dólar oficial para aquellos que compran bienes y servicios en el extranjero, como viajes o compras en dólares desde Argentina.',
                'date' => Carbon::now(), // Fecha actual
            ],
            [
                'type' => 'Ahorro',
                'icon' => '💰',
                'buy_price' => 0,
                'sell_price' => 0,
                'description' => 'Es el tipo de cambio que aplica a quienes desean comprar hasta 200 dólares mensuales de manera oficial, aplicando un recargo sobre el dólar oficial.',
                'date' => Carbon::now(), // Fecha actual
            ],
            [
                'type' => 'MEP',
                'icon' => '🏦',
                'buy_price' => 0,
                'sell_price' => 0,
                'description' => 'El dólar blue es un tipo de cambio paralelo y no oficial, que generalmente tiene un precio más alto que el oficial.',
                'date' => Carbon::now(), // Fecha actual
            ],
            [
                'type' => 'CCL',
                'icon' => '🔗',
                'buy_price' => 0,
                'sell_price' => 0,
                'description' => 'Similar al MEP, pero el CCL permite obtener dólares y depositarlos fuera del país. Se utiliza para la fuga de capitales y operaciones internacionales.',
                'date' => Carbon::now(), // Fecha actual
            ],
            [
                'type' => 'Tarjeta',
                'icon' => '💳',
                'buy_price' => 0,
                'sell_price' => 0,
                'description' => 'Es un tipo de dólar que incluye el dólar oficial más los impuestos adicionales que se aplican a las compras realizadas en el extranjero con tarjetas de crédito.',
                'date' => Carbon::now(), // Fecha actual
            ]
        ]);
    }
}

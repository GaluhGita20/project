<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert(
            [
            'title' => 'Release Buku Panduan',
            'color' => '#40E0D0',
            'start' => '2021-08-22 00:00:00',
            'end' => '2021-08-23 00:00:00',
            ],

            [
            'title' => 'Pendaftaran dan Validasi Mala dan SNMPTN',
            'color' => '#008000',
            'start' => '2021-08-14 00:00:00',
            'end' => '2021-08-18 00:00:00',
            ],

            [
            'title' => 'Penugasan Individu SBMPTN',
            'color' => '#0071C5',
            'start' => '2021-08-31 00:00:00',
            'end' => '2021-09-01 00:00:00',
            ],

            [
            'title' => 'Temu Pangus',
            'color' => '#FF0000',
            'start' => '2021-08-26 00:00:00',
            'end' => '2021-08-27 00:00:00',
            ],

            [
            'title' => 'Mentoring',
            'color' => '#FF8C00',
            'start' => '2021-08-27 00:00:00',
            'end' => '2021-08-29 00:00:00',
            ],

            [
            'title' => 'Penugasan Individu & Kelompok SNMPTN',
            'color' => '#0071c5',
            'start' => '2021-08-27 00:00:00',
            'end' => '2021-08-28 00:00:00',
            ],

            [
            'title' => 'Capacity Building',
            'color' => '#000',
            'start' => '2021-08-29 00:00:00',
            'end' => '2021-08-30 00:00:00',
            ],

            [
            'title' => 'Pendaftaran & Validasi SBMPTN',
            'color' => '#008000',
            'start' => '2021-08-27 00:00:00',
            'end' => '2021-08-30 00:00:00',
            ],

            [
            'title' => 'Pengumuman Jalur Mandiri',
            'color' => '#FFD700',
            'start' => '2021-08-31 00:00:00',
            'end' => '2021-09-01 00:00:00',
            ],

            [
            'title' => 'Pengumuman Gugus SNMPTN',
            'color' => '#0071c5',
            'start' => '2021-08-20 00:00:00',
            'end' => '2021-08-22 00:00:00',
            ],

            [
            'title' => 'STUDENT DAY 2021 UNIVERSITAS UDAYANA',
            'color' => '#FF0000',
            'start' => '2021-09-08 00:00:00',
            'end' => '2021-09-10 00:00:00',
            ],

            [
            'title' => 'Kampanye Penugasan Individu SBMPTN',
            'color' => '#0071c5',
            'start' => '2021-09-07 00:00:00',
            'end' => '2021-09-08 00:00:00',
            ],

            [
            'title' => 'Pendaftaran & Validasi Jalur Mandiri',
            'color' => '#008000',
            'start' => '2021-09-01 00:00:00',
            'end' => '2021-09-04 00:00:00',
            ],

            [
            'title' => 'Pengumuman Gugus SBMPTN',
            'color' => '#0071c5',
            'start' => '2021-09-01 00:00:00',
            'end' => '2021-09-02 00:00:00',
            ],

            [
            'title' => 'Temu Pangus dan Mentoring SBMPTN',
            'color' => '#FF8C00',
            'start' => '2021-09-03 00:00:00',
            'end' => '2021-09-05 00:00:00',
            ],

            [
            'title' => 'Pengumpulan Penugasan Individu & Kelompok SNMPTN',
            'color' => '#000',
            'start' => '2021-09-04 00:00:00',
            'end' => '2021-09-05 00:00:00',
            ],

            [
            'title' => 'Pengumuman Gugus Mandiri',
            'color' => '#0071c5',
            'start' => '2021-09-05 00:00:00',
            'end' => '2021-09-06 00:00:00',
            ],

            [
            'title' => 'Pengumpulan Penugasan Individu SBMPTN',
            'color' => '#0071c5',
            'start' => '2021-09-06 00:00:00',
            'end' => '2021-09-07 00:00:00',
            ]
        );
    }
}

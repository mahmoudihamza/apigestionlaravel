<?php

use Illuminate\Database\Seeder;
use App\Team;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Team::create([
            'name'=>'Hamza Mahmoudi',
            'role'=>'Web Developer',
            'avatar'=>'avatar-1.png',



        ]) ;
        Team::create([
            'name'=>'Peinl  Oliver',
            'role'=>'Sale Manager',
            'avatar'=>'avatar-2.png',



        ]) ;
        Team::create([
            'name'=>'Tobias Irlmeier',
            'role'=>'Head VDI',
            'avatar'=>'avatar-3.png',



        ]) ;
        Team::create([
            'name'=>'Daniel Ryou',
            'role'=>'Graphic designer',
            'avatar'=>'avatar-4.png',



        ]) ;
        Team::create([
            'name'=>'Peter Travolski',
            'role'=>'Consultant IT',
            'avatar'=>'avatar-5.png',



        ]) ;


    }
}

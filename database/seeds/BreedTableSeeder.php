<?php

use Illuminate\Database\Seeder;
use App\Breed;

class BreedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	// 1
        DB::table('breeds')->insert([
        	'breed' 	=> 'Abyssinian',
        	'country' 	=> 'Ethiopia',
        	'origin'	=> 'Natural/Standard',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Ticked',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
		
		// 2
        DB::table('breeds')->insert([
        	'breed' 	=> 'Aegean',
        	'country' 	=> 'Greece',
        	'origin'	=> 'Natural/Standard',
        	'coat'		=> 'Semi-long',
        	'pattern'	=> 'Bi- or tri-colored',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 3
        DB::table('breeds')->insert([
        	'breed' 	=> 'American Curl',
        	'country' 	=> 'United States',
        	'origin'	=> 'Mutation',
        	'coat'		=> 'Short/Long',
        	'pattern'	=> 'All',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 4
        DB::table('breeds')->insert([
        	'breed' 	=> 'American Bobtail',
        	'country' 	=> 'United States',
        	'origin'	=> 'Mutation',
        	'coat'		=> 'Short/Long',
        	'pattern'	=> 'All',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 5
        DB::table('breeds')->insert([
        	'breed' 	=> 'American Shorthair',
        	'country' 	=> 'United States',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Short',
        	'pattern'	=> 'All but colorpoint',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 6
        DB::table('breeds')->insert([
        	'breed' 	=> 'American Wirehair',
        	'country' 	=> 'United States',
        	'origin'	=> 'Mutation',
        	'coat'		=> 'Rex',
        	'pattern'	=> 'All but colorpoint',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 7
        DB::table('breeds')->insert([
        	'breed' 	=> 'Arabian Mau',
        	'country' 	=> 'Arabian Peninsula',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Short',
        	'pattern'	=> '',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 8
        DB::table('breeds')->insert([
        	'breed' 	=> 'Australian Mist',
        	'country' 	=> 'Australia',
        	'origin'	=> 'Crossbreed',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Spotted and Classic tabby',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 9
        DB::table('breeds')->insert([
        	'breed' 	=> 'Asian',
        	'country' 	=> 'Asian',
        	'origin'	=> '',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Evenly solid',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 10
        DB::table('breeds')->insert([
        	'breed' 	=> 'Asian Semi-longhair',
        	'country' 	=> 'United Kingdom',
        	'origin'	=> 'Crossbreed',
        	'coat'		=> 'Semi-long',
        	'pattern'	=> 'Solid',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 11
        DB::table('breeds')->insert([
        	'breed' 	=> 'Balinese',
        	'country' 	=> 'Asia',
        	'origin'	=> 'Hybrid',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Spotted/Marbled',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 12
        DB::table('breeds')->insert([
        	'breed' 	=> 'Birman',
        	'country' 	=> 'Burma',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Semi Long',
        	'pattern'	=> 'Colourpoint',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 13
        DB::table('breeds')->insert([
        	'breed' 	=> 'Bombay',
        	'country' 	=> 'Asia',
        	'origin'	=> 'Crossbred',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Solid',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 14
        DB::table('breeds')->insert([
        	'breed' 	=> 'Brazilian Shorthair',
        	'country' 	=> 'Brazil',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Short',
        	'pattern'	=> 'All',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 15
        DB::table('breeds')->insert([
        	'breed' 	=> 'British Semi-longhair',
        	'country' 	=> 'United Kingdom',
        	'origin'	=> '',
        	'coat'		=> 'Medium',
        	'pattern'	=> 'All',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 16
        DB::table('breeds')->insert([
        	'breed' 	=> 'British Shorthair',
        	'country' 	=> 'United Kingdom',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Short',
        	'pattern'	=> 'All',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 17
        DB::table('breeds')->insert([
        	'breed' 	=> 'British Longhair',
        	'country' 	=> 'United Kingdom',
        	'origin'	=> '',
        	'coat'		=> 'Long',
        	'pattern'	=> '',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 18
        DB::table('breeds')->insert([
        	'breed' 	=> 'Burmese',
        	'country' 	=> 'Burma and Thailand',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Solid',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 19
        DB::table('breeds')->insert([
        	'breed' 	=> 'Burmilla',
        	'country' 	=> 'United Kingdom',
        	'origin'	=> 'Crossbreed',
        	'coat'		=> 'Short/Long',
        	'pattern'	=> '',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 20
        DB::table('breeds')->insert([
        	'breed' 	=> 'California Spangled',
        	'country' 	=> 'United States',
        	'origin'	=> 'Crossbreed',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Spotted',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 21
        DB::table('breeds')->insert([
        	'breed' 	=> 'Chantilly-Tiffany',
        	'country' 	=> 'United States',
        	'origin'	=> 'Crossbreed',
        	'coat'		=> 'Semi-long',
        	'pattern'	=> '',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 22
        DB::table('breeds')->insert([
        	'breed' 	=> 'Chartreux',
        	'country' 	=> 'France',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Solid',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 23
        DB::table('breeds')->insert([
        	'breed' 	=> 'Chausie',
        	'country' 	=> 'France',
        	'origin'	=> 'Hybrid',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Ticked',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 24
        DB::table('breeds')->insert([
        	'breed' 	=> 'Cheetoh',
        	'country' 	=> 'United States',
        	'origin'	=> 'Hybrid/Crossbreed',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Spotted',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 25
        DB::table('breeds')->insert([
        	'breed' 	=> 'Colorpoint Shorthair',
        	'country' 	=> '',
        	'origin'	=> '',
        	'coat'		=> 'Short',
        	'pattern'	=> '',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 26
        DB::table('breeds')->insert([
        	'breed' 	=> 'Cornish Rex',
        	'country' 	=> 'United Kingdom (England)',
        	'origin'	=> 'Mutation',
        	'coat'		=> 'Rex',
        	'pattern'	=> 'All',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 27
        DB::table('breeds')->insert([
        	'breed' 	=> 'Cymric',
        	'country' 	=> 'United Kingdom (Isle of Man)',
        	'origin'	=> 'Natural/Mutation',
        	'coat'		=> 'Long',
        	'pattern'	=> '',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 28
        DB::table('breeds')->insert([
        	'breed' 	=> 'Cyprus',
        	'country' 	=> 'Cyprus',
        	'origin'	=> 'Natural',
        	'coat'		=> 'All',
        	'pattern'	=> 'All',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 29
        DB::table('breeds')->insert([
        	'breed' 	=> 'Devon Rex',
        	'country' 	=> 'United Kingdom (England)',
        	'origin'	=> 'Mutation',
        	'coat'		=> 'Rex',
        	'pattern'	=> 'All',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 30
        DB::table('breeds')->insert([
        	'breed' 	=> 'Donskoy',
        	'country' 	=> 'Russia',
        	'origin'	=> '',
        	'coat'		=> 'Hairless',
        	'pattern'	=> '',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 31
        DB::table('breeds')->insert([
        	'breed' 	=> 'Dragon Li',
        	'country' 	=> 'China',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Striped tabby',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 32
        DB::table('breeds')->insert([
        	'breed' 	=> 'Dwelf',
        	'country' 	=> '',
        	'origin'	=> '',
        	'coat'		=> '',
        	'pattern'	=> 'Hairless',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 33
        DB::table('breeds')->insert([
        	'breed' 	=> 'Egyptian Mau',
        	'country' 	=> 'Egypt',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Spotted',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 34
        DB::table('breeds')->insert([
        	'breed' 	=> 'European Shorthair',
        	'country' 	=> 'Finland and Sweden',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Short',
        	'pattern'	=> '',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 35
        DB::table('breeds')->insert([
        	'breed' 	=> 'Exotic Shorthair',
        	'country' 	=> 'United States',
        	'origin'	=> 'Crossbreed',
        	'coat'		=> 'Short',
        	'pattern'	=> 'All',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 36
        DB::table('breeds')->insert([
        	'breed' 	=> 'Foldex',
        	'country' 	=> 'Canada',
        	'origin'	=> 'Crossbreed',
        	'coat'		=> 'Short',
        	'pattern'	=> 'All',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 37
        DB::table('breeds')->insert([
        	'breed' 	=> 'German Rex',
        	'country' 	=> 'East Germany',
        	'origin'	=> 'Mutation',
        	'coat'		=> 'Rex',
        	'pattern'	=> '',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 38
        DB::table('breeds')->insert([
        	'breed' 	=> 'Havana Brown',
        	'country' 	=> 'United Kingdom',
        	'origin'	=> '',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Solid',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 39
        DB::table('breeds')->insert([
        	'breed' 	=> 'Highlander',
        	'country' 	=> 'United States',
        	'origin'	=> 'Crossbreed',
        	'coat'		=> 'Short/Long',
        	'pattern'	=> 'All',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 40
        DB::table('breeds')->insert([
        	'breed' 	=> 'Himalayan',
        	'country' 	=> 'Nepal',
        	'origin'	=> 'Crossbreed',
        	'coat'		=> 'Long',
        	'pattern'	=> 'Colorpoint',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 41
        DB::table('breeds')->insert([
        	'breed' 	=> 'Abyssinian',
        	'country' 	=> 'Ethiopia',
        	'origin'	=> 'Natural/Standard',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Ticked',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 42
        DB::table('breeds')->insert([
        	'breed' 	=> 'Japanese Bobtail',
        	'country' 	=> 'Japan',
        	'origin'	=> 'Natural/Standard',
        	'coat'		=> 'Short/Long',
        	'pattern'	=> 'All but colorpoint and ticked',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 43
        DB::table('breeds')->insert([
        	'breed' 	=> 'Javanese',
        	'country' 	=> 'United States',
        	'origin'	=> 'Crossbreed',
        	'coat'		=> 'Long/Short',
        	'pattern'	=> 'Colorpoint',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 44
        DB::table('breeds')->insert([
        	'breed' 	=> 'Kurilian Bobtail',
        	'country' 	=> 'Western Russia',
        	'origin'	=> 'Natural',
        	'coat'		=> '',
        	'pattern'	=> '',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 45
        DB::table('breeds')->insert([
        	'breed' 	=> 'Khao Manee',
        	'country' 	=> 'Thailand',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Solid',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 46
        DB::table('breeds')->insert([
        	'breed' 	=> 'Korat',
        	'country' 	=> 'Thailand',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Solid',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 47
        DB::table('breeds')->insert([
        	'breed' 	=> 'Korean Bobtail',
        	'country' 	=> 'Korea',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Short/Long',
        	'pattern'	=> 'Colorprint',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 48
        DB::table('breeds')->insert([
        	'breed' 	=> 'Korn Ja',
        	'country' 	=> 'Thailand',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Solid',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 49
        DB::table('breeds')->insert([
        	'breed' 	=> 'Kurilian Bobtail',
        	'country' 	=> 'Eastern Russia, Japan',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Short/Long',
        	'pattern'	=> '',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 50
        DB::table('breeds')->insert([
        	'breed' 	=> 'LaPerm',
        	'country' 	=> 'United States',
        	'origin'	=> 'Mutation',
        	'coat'		=> 'Rex',
        	'pattern'	=> 'All',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 51
        DB::table('breeds')->insert([
        	'breed' 	=> 'Lykoi',
        	'country' 	=> 'United States',
        	'origin'	=> 'Natural/Mutation',
        	'coat'		=> 'Partly Hairless',
        	'pattern'	=> 'Ticked',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 52
        DB::table('breeds')->insert([
        	'breed' 	=> 'Maine Coon',
        	'country' 	=> 'United States',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Long',
        	'pattern'	=> 'All but colorpoint and ticked',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 53
        DB::table('breeds')->insert([
        	'breed' 	=> 'Manx',
        	'country' 	=> 'United Kingdom (Isle of Man)',
        	'origin'	=> 'Natural/Mutation',
        	'coat'		=> 'Short/Long',
        	'pattern'	=> 'All but colorpoint',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 54
        DB::table('breeds')->insert([
        	'breed' 	=> 'Mekong Bobtail',
        	'country' 	=> 'Russia',
        	'origin'	=> 'Natural/Mutation',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Colorpoint',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 55
        DB::table('breeds')->insert([
        	'breed' 	=> 'Minskin',
        	'country' 	=> 'United States',
        	'origin'	=> 'Crossbreed',
        	'coat'		=> 'Short/Hairless',
        	'pattern'	=> 'All',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 56
        DB::table('breeds')->insert([
        	'breed' 	=> 'Munchkin',
        	'country' 	=> 'United States',
        	'origin'	=> 'Mutation',
        	'coat'		=> '',
        	'pattern'	=> '',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 57
        DB::table('breeds')->insert([
        	'breed' 	=> 'Nebelung',
        	'country' 	=> 'United States',
        	'origin'	=> '',
        	'coat'		=> 'Semi-long',
        	'pattern'	=> 'Solid',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 58
        DB::table('breeds')->insert([
        	'breed' 	=> 'Napoleon',
        	'country' 	=> '',
        	'origin'	=> '',
        	'coat'		=> 'Long/short',
        	'pattern'	=> 'Varied',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 59
        DB::table('breeds')->insert([
        	'breed' 	=> 'Norwegian Forest cat',
        	'country' 	=> 'Norway',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Long',
        	'pattern'	=> 'All but colorpoint',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 60
        DB::table('breeds')->insert([
        	'breed' 	=> 'Ocicat',
        	'country' 	=> 'United States',
        	'origin'	=> 'Crossbreed',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Spotted',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 61
        DB::table('breeds')->insert([
        	'breed' 	=> 'Ojos Azules',
        	'country' 	=> 'United States',
        	'origin'	=> '',
        	'coat'		=> '',
        	'pattern'	=> '',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 62
        DB::table('breeds')->insert([
        	'breed' 	=> 'Oregon Rex',
        	'country' 	=> 'United States',
        	'origin'	=> 'Mutation',
        	'coat'		=> 'Rex',
        	'pattern'	=> '',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 63
        DB::table('breeds')->insert([
        	'breed' 	=> 'Oriental Bicolor',
        	'country' 	=> '',
        	'origin'	=> '',
        	'coat'		=> '',
        	'pattern'	=> 'Bicolor',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 64
        DB::table('breeds')->insert([
        	'breed' 	=> 'Oriental Shorthair',
        	'country' 	=> '',
        	'origin'	=> '',
        	'coat'		=> 'Short',
        	'pattern'	=> 'All but colorpoint',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 65
        DB::table('breeds')->insert([
        	'breed' 	=> 'Oriental Longhair',
        	'country' 	=> '',
        	'origin'	=> '',
        	'coat'		=> 'Semi-long',
        	'pattern'	=> '',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 66
        DB::table('breeds')->insert([
        	'breed' 	=> 'PerFold Cat',
        	'country' 	=> 'Europe',
        	'origin'	=> 'Crossbreed',
        	'coat'		=> 'Long',
        	'pattern'	=> 'All',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 67
        DB::table('breeds')->insert([
        	'breed' 	=> 'Persian (Modern Persian Cat)',
        	'country' 	=> 'Iran (Persia)',
        	'origin'	=> 'Crossbreed',
        	'coat'		=> 'Long',
        	'pattern'	=> 'All',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 68
        DB::table('breeds')->insert([
        	'breed' 	=> 'Persian (Traditional Persian Cat)',
        	'country' 	=> 'Greater Iran',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Long',
        	'pattern'	=> 'All',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 69
        DB::table('breeds')->insert([
        	'breed' 	=> 'Peterbald',
        	'country' 	=> 'Russia',
        	'origin'	=> 'Crossbreed',
        	'coat'		=> 'Hairless',
        	'pattern'	=> 'All',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 70
        DB::table('breeds')->insert([
        	'breed' 	=> 'Pixie-bob',
        	'country' 	=> 'United States',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Spotted',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 71
        DB::table('breeds')->insert([
        	'breed' 	=> 'Raas',
        	'country' 	=> 'Indonesia',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Short',
        	'pattern'	=> '',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 72
        DB::table('breeds')->insert([
        	'breed' 	=> 'Ragamuffin',
        	'country' 	=> 'United States',
        	'origin'	=> 'Crossbreed',
        	'coat'		=> 'Long',
        	'pattern'	=> 'All',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 73
        DB::table('breeds')->insert([
        	'breed' 	=> 'Ragdoll',
        	'country' 	=> 'United States',
        	'origin'	=> 'Crossbreed',
        	'coat'		=> 'Long',
        	'pattern'	=> 'Colorpoint/Mitted/Bicolor',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 74
        DB::table('breeds')->insert([
        	'breed' 	=> 'Russian Blue',
        	'country' 	=> 'Russia',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Solid',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 75
        DB::table('breeds')->insert([
        	'breed' 	=> 'Russian White, Black and Tabby',
        	'country' 	=> 'Australia',
        	'origin'	=> 'Crossbreed',
        	'coat'		=> 'Short',
        	'pattern'	=> '',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 76
        DB::table('breeds')->insert([
        	'breed' 	=> 'Sam Sawet',
        	'country' 	=> 'Thailand',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Solid',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 77
        DB::table('breeds')->insert([
        	'breed' 	=> 'Savannah',
        	'country' 	=> 'United States',
        	'origin'	=> 'Hybrid',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Spotted',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 78
        DB::table('breeds')->insert([
        	'breed' 	=> 'Scottish Fold',
        	'country' 	=> 'United Kingdom (Scotland)',
        	'origin'	=> 'Natural/Mutation',
        	'coat'		=> 'Short/Long',
        	'pattern'	=> 'All',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);

        // 79
        DB::table('breeds')->insert([
        	'breed' 	=> 'Selkirk Rex',
        	'country' 	=> 'United States',
        	'origin'	=> 'Mutation/Cross',
        	'coat'		=> 'Rex (Short/Long)',
        	'pattern'	=> 'All',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 80
        DB::table('breeds')->insert([
        	'breed' 	=> 'Serengeti',
        	'country' 	=> 'United States',
        	'origin'	=> 'Hybrid Crossbreed',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Spotted',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 81
        DB::table('breeds')->insert([
        	'breed' 	=> 'Serrade petit',
        	'country' 	=> 'France',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Short',
        	'pattern'	=> '',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 82
        DB::table('breeds')->insert([
        	'breed' 	=> 'Siamese',
        	'country' 	=> 'Thailand',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Colorpoint',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 83
        DB::table('breeds')->insert([
        	'breed' 	=> 'Siberian',
        	'country' 	=> 'Russia',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Semi-long',
        	'pattern'	=> 'All',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 84
        DB::table('breeds')->insert([
        	'breed' 	=> 'Singapura',
        	'country' 	=> 'Singapore',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Ticked',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 85
        DB::table('breeds')->insert([
        	'breed' 	=> 'Snowshoe',
        	'country' 	=> 'United States',
        	'origin'	=> 'Crossbreed',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Colorpoint',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 86
        DB::table('breeds')->insert([
        	'breed' 	=> 'Sokoke',
        	'country' 	=> 'Kenya',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Classic tabby with ticking',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 87
        DB::table('breeds')->insert([
        	'breed' 	=> 'Somali',
        	'country' 	=> 'Somalia',
        	'origin'	=> 'Mutation',
        	'coat'		=> 'Long',
        	'pattern'	=> 'Ticked',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 88
        DB::table('breeds')->insert([
        	'breed' 	=> 'Sphynx',
        	'country' 	=> 'Canada',
        	'origin'	=> 'Mutation',
        	'coat'		=> 'Hairless',
        	'pattern'	=> 'All',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 89
        DB::table('breeds')->insert([
        	'breed' 	=> 'Suphalak',
        	'country' 	=> 'Thailand',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Solid',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 90
        DB::table('breeds')->insert([
        	'breed' 	=> 'Thai',
        	'country' 	=> 'Thailand',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Colorpoint',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 91
        DB::table('breeds')->insert([
        	'breed' 	=> 'Thai Lilac',
        	'country' 	=> 'Thailand',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Solid',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 92
        DB::table('breeds')->insert([
        	'breed' 	=> 'Tonkinese',
        	'country' 	=> 'Canada',
        	'origin'	=> 'Crossbreed',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Colorpoint/Mink/Solid',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 93
        DB::table('breeds')->insert([
        	'breed' 	=> 'Toyger',
        	'country' 	=> 'United States',
        	'origin'	=> 'Crossbreed',
        	'coat'		=> 'Short',
        	'pattern'	=> 'Mackerel',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 94
        DB::table('breeds')->insert([
        	'breed' 	=> 'Turkish Angora',
        	'country' 	=> 'Turkey',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Semi-long',
        	'pattern'	=> 'All but colorpoint',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 95
        DB::table('breeds')->insert([
        	'breed' 	=> 'Turkish Van',
        	'country' 	=> 'Turkey',
        	'origin'	=> 'Natural',
        	'coat'		=> 'Semi-long',
        	'pattern'	=> 'Van',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
        
        // 96
        DB::table('breeds')->insert([
        	'breed' 	=> 'Ukrainian Levkoy',
        	'country' 	=> 'Ukraine',
        	'origin'	=> '',
        	'coat'		=> 'Hairless',
        	'pattern'	=> '',
        	'created_at'=> date('Y-m-d H:m:s'),
            'updated_at'=> date('Y-m-d H:m:s')
        ]);
    }
}

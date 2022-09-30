<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'sihab',
            'email' => 'sihab@gmail.com',
            'password' => bcrypt(12345678),
            'image' => 'post/user/superman.jpeg',
            'role_as' => true,
        ]);
        User::create([
            'name' => 'nabilah',
            'email' => 'nabilah@gmail.com',
            'password' => bcrypt('nabilahsri'),
            'image' => 'post/user/thor.jpeg',
        ]);
        Category::create([
            'id' => 1,
            'name'=> 'School',
            'slug' => 'school',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque accusamus totam nisi tenetur corporis animi asperiores atque aliquid, corrupti ut eveniet?',
            'status' => false,
            'popular' =>true,
            'image' => 'post/product/sepatunike.jpeg',
            'meta_title' => 'consectetur adipisicing elit. Doloremque accusamus tota',
            'meta_descrip' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque accusamus totam nisi tenetur corporis animi asperiores atque aliquid, corrupti ut eveni',
            'meta_keywords' => 'school shoes'
        ]);
        Category::create([
            'id' => 2,
            'name'=> 'Product Digital',
            'slug' => 'product-digital',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque accusamus totam nisi tenetur corporis animi asperiores atque aliquid, corrupti ut eveniet?',
            'status' => false,
            'popular' =>true,
            'image' => 'post/product/laptop.jpeg',
            'meta_title' => 'consectetur adipisicing elit. Doloremque accusamus tota',
            'meta_descrip' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque accusamus totam nisi tenetur corporis animi asperiores atque aliquid, corrupti ut eveni',
            'meta_keywords' => 'hp laptop digital'
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'Sepatu Nike Original',
            'slug' => 'sepatu-nike',
            'small_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis doloribus enim blanditiis!',
            'description' => 'naLorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam deleniti voluptatum nobis cum consequuntur dolorum quo quia alias modi aut.me', 
            'original_price' => 400000,
            'selling_price' => 340000,
            'image' => 'post/product/sepatunike.jpeg',
            'qty' => 27,
            'tax' => 2000,
            'status' => false,
            'trending' => true,
            'meta_title'=> 'Lorem ipsum dolor sit amet.',
            'meta_keywords'=> 'tas school sekolah',
            'meta_description'=> 'nLorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus debitis possimus facere qui autem et vero eos fugit ducimus officiis unde, excepturi sed id alias vitae! Vitae fugiat hic magnam?ame',
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'Tas Untuk Sekolah, Kuliah',
            'slug' => 'tas-sekolah',
            'small_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis doloribus enim blanditiis!',
            'description' => 'naLorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam deleniti voluptatum nobis cum consequuntur dolorum quo quia alias modi aut.me', 
            'original_price' => 200000,
            'selling_price' => 187000,
            'image' => 'post/product/tas.jpeg',
            'qty' => 283,
            'tax' => 2000,
            'status' => false,
            'trending' => true,
            'meta_title'=> 'Lorem ipsum dolor sit amet.',
            'meta_keywords'=> 'tas school sekolah.',
            'meta_description'=> 'nLorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus debitis possimus facere qui autem et vero eos fugit ducimus officiis unde, excepturi sed id alias vitae! Vitae fugiat hic magnam?ame',
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'Buku Sinar Dunia',
            'slug' => 'buku-sekolah',
            'small_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis doloribus enim blanditiis!',
            'description' => 'naLorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam deleniti voluptatum nobis cum consequuntur dolorum quo quia alias modi aut.me', 
            'original_price' => 3000,
            'selling_price' => 3000,
            'image' => 'post/product/buku.jpeg',
            'qty' => 1076,
            'tax' => 500,
            'status' => false,
            'trending' => true,
            'meta_title'=> 'Lorem ipsum dolor sit amet.',
            'meta_keywords'=> 'tas school sekolah.',
            'meta_description'=> 'nLorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus debitis possimus facere qui autem et vero eos fugit ducimus officiis unde, excepturi sed id alias vitae! Vitae fugiat hic magnam?ame',
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'Tempat Pensil Murah',
            'slug' => 'lopa-murah',
            'small_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis doloribus enim blanditiis!',
            'description' => 'naLorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam deleniti voluptatum nobis cum consequuntur dolorum quo quia alias modi aut.me', 
            'original_price' => 25000,
            'selling_price' => 19000,
            'image' => 'post/product/lopa.jpeg',
            'qty' => 292,
            'tax' => 1000,
            'status' => false,
            'trending' => true,
            'meta_title'=> 'Lorem ipsum dolor sit amet.',
            'meta_keywords'=> 'tas school sekolah.',
            'meta_description'=> 'nLorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus debitis possimus facere qui autem et vero eos fugit ducimus officiis unde, excepturi sed id alias vitae! Vitae fugiat hic magnam?ame',
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'Penghapus Pensil Berkualitas',
            'slug' => 'penghapus-pensil',
            'small_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis doloribus enim blanditiis!',
            'description' => 'naLorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam deleniti voluptatum nobis cum consequuntur dolorum quo quia alias modi aut.me', 
            'original_price' => 2000,
            'selling_price' => 2000,
            'image' => 'post/product/penghapus.jpeg',
            'qty' => 283,
            'tax' => 200,
            'status' => false,
            'trending' => true,
            'meta_title'=> 'Lorem ipsum dolor sit amet.',
            'meta_keywords'=> 'tas school sekolah.',
            'meta_description'=> 'nLorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus debitis possimus facere qui autem et vero eos fugit ducimus officiis unde, excepturi sed id alias vitae! Vitae fugiat hic magnam?ame',
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'Tipe X',
            'slug' => 'tipe-x',
            'small_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis doloribus enim blanditiis!',
            'description' => 'naLorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam deleniti voluptatum nobis cum consequuntur dolorum quo quia alias modi aut.me', 
            'original_price' => 4000,
            'selling_price' => 3300,
            'image' => 'post/product/tipex.jpeg',
            'qty' => 283,
            'tax' => 300,
            'status' => false,
            'trending' => true,
            'meta_title'=> 'Lorem ipsum dolor sit amet.',
            'meta_keywords'=> 'tas school sekolah.',
            'meta_description'=> 'nLorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus debitis possimus facere qui autem et vero eos fugit ducimus officiis unde, excepturi sed id alias vitae! Vitae fugiat hic magnam?ame',
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'I Phone 13 Pro Max',
            'slug' => 'ip-pro',
            'small_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis doloribus enim blanditiis!',
            'description' => 'naLorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam deleniti voluptatum nobis cum consequuntur dolorum quo quia alias modi aut.me', 
            'original_price' => 25000000,
            'selling_price' => 23000000,
            'image' => 'post/product/hp.jpeg',
            'qty' => 76,
            'tax' => 200000,
            'status' => false,
            'trending' => true,
            'meta_title'=> 'Lorem ipsum dolor sit amet.',
            'meta_keywords'=> 'iphone digital HP.',
            'meta_description'=> 'nLorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus debitis possimus facere qui autem et vero eos fugit ducimus officiis unde, excepturi sed id alias vitae! Vitae fugiat hic magnam?ame',
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'Mac Book Air 2015',
            'slug' => 'mac-pro',
            'small_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis doloribus enim blanditiis!',
            'description' => 'naLorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam deleniti voluptatum nobis cum consequuntur dolorum quo quia alias modi aut.me', 
            'original_price' => 77000000,
            'selling_price' => 75000000,
            'image' => 'post/product/laptop.jpeg',
            'qty' => 10,
            'tax' => 700000,
            'status' => false,
            'trending' => true,
            'meta_title'=> 'Lorem ipsum dolor sit amet.',
            'meta_keywords'=> 'iphone digital HP Laptop Mac book.',
            'meta_description'=> 'nLorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus debitis possimus facere qui autem et vero eos fugit ducimus officiis unde, excepturi sed id alias vitae! Vitae fugiat hic magnam?ame',
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'Kacamata Anti Radiasi',
            'slug' => 'kacamata-anti-radiasi',
            'small_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis doloribus enim blanditiis!',
            'description' => 'naLorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam deleniti voluptatum nobis cum consequuntur dolorum quo quia alias modi aut.me', 
            'original_price' => 200000,
            'selling_price' => 200000,
            'image' => 'post/product/kacamata.png',
            'qty' => 1087,
            'tax' => 5000,
            'status' => false,
            'trending' => true,
            'meta_title'=> 'Lorem ipsum dolor sit amet.',
            'meta_keywords'=> 'keren cool antiradiasi kacamata.',
            'meta_description'=> 'nLorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus debitis possimus facere qui autem et vero eos fugit ducimus officiis unde, excepturi sed id alias vitae! Vitae fugiat hic magnam?ame',
        ]);
    }
}

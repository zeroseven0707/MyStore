<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
            'image' => 'post/user/profile.png',
            'role_as' => true,
        ]);
        User::create([
            'name' => 'nabilah',
            'email' => 'nabilah@gmail.com',
            'password' => bcrypt('nabilahsri'),
            'image' => 'post/user/profile.png',
        ]);
        Category::create([
            'id' => 1,
            'name'=> 'Sekolah',
            'slug' => Str::random(40),
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque accusamus totam nisi tenetur corporis animi asperiores atque aliquid, corrupti ut eveniet?',
            'popular' =>true,
            'image' => 'post/category/sepatunike.jpeg',
            'meta_title' => 'consectetur adipisicing elit. Doloremque accusamus tota',
            'meta_descrip' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque accusamus totam nisi tenetur corporis animi asperiores atque aliquid, corrupti ut eveni',
            'meta_keywords' => 'sekolah sepatu buku tas'
        ]);
        Category::create([
            'id' => 2,
            'name'=> 'Product Digital',
            'slug' => Str::random(40),
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque accusamus totam nisi tenetur corporis animi asperiores atque aliquid, corrupti ut eveniet?',
            'popular' =>true,
            'image' => 'post/category/laptop.jpeg',
            'meta_title' => 'consectetur adipisicing elit. Doloremque accusamus tota',
            'meta_descrip' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque accusamus totam nisi tenetur corporis animi asperiores atque aliquid, corrupti ut eveni',
            'meta_keywords' => 'hp laptop digital smart'
        ]);
        Category::create([
            'id' => 3,
            'name'=> 'Makanan',
            'slug' => Str::random(40),
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque accusamus totam nisi tenetur corporis animi asperiores atque aliquid, corrupti ut eveniet?',
            'popular' =>true,
            'image' => 'post/category/makanan.jpg',
            'meta_title' => 'consectetur adipisicing elit. Doloremque accusamus tota',
            'meta_descrip' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque accusamus totam nisi tenetur corporis animi asperiores atque aliquid, corrupti ut eveni',
            'meta_keywords' => 'makanan makanan ringan enak'
        ]);
        Category::create([
            'id' => 4,
            'name'=> 'Musik',
            'slug' => Str::random(40),
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque accusamus totam nisi tenetur corporis animi asperiores atque aliquid, corrupti ut eveniet?',
            'popular' =>true,
            'image' => 'post/category/musik.jpg',
            'meta_title' => 'consectetur adipisicing elit. Doloremque accusamus tota',
            'meta_descrip' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque accusamus totam nisi tenetur corporis animi asperiores atque aliquid, corrupti ut eveni',
            'meta_keywords' => 'musik alat musik'
        ]);
        Category::create([
            'id' => 5,
            'name'=> 'Kecantikan',
            'slug' => Str::random(40),
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque accusamus totam nisi tenetur corporis animi asperiores atque aliquid, corrupti ut eveniet?',
            'popular' =>true,
            'image' => 'post/category/kecantikan.jpg',
            'meta_title' => 'consectetur adipisicing elit. Doloremque accusamus tota',
            'meta_descrip' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque accusamus totam nisi tenetur corporis animi asperiores atque aliquid, corrupti ut eveni',
            'meta_keywords' => 'skin care kecantikan'
        ]);
        Category::create([
            'id' => 6,
            'name'=> 'Pakaian',
            'slug' => Str::random(40),
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque accusamus totam nisi tenetur corporis animi asperiores atque aliquid, corrupti ut eveniet?',
            'popular' =>true,
            'image' => 'post/category/pakaian.jpeg',
            'meta_title' => 'consectetur adipisicing elit. Doloremque accusamus tota',
            'meta_descrip' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque accusamus totam nisi tenetur corporis animi asperiores atque aliquid, corrupti ut eveni',
            'meta_keywords' => 'outfit pakaian keren'
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'Sepatu Nike Original',
            'slug' => Str::random(40),
            'small_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis doloribus enim blanditiis!',
            'description' => 'naLorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam deleniti voluptatum nobis cum consequuntur dolorum quo quia alias modi aut.me', 
            'original_price' => 400000,
            'selling_price' => 340000,
            'image' => 'post/product/sepatunike.jpeg',
            'qty' => 27,
            'trending' => true,
            'meta_title'=> 'Lorem ipsum dolor sit amet.',
            'meta_keywords'=> 'tas school sekolah',
            'meta_description'=> 'nLorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus debitis possimus facere qui autem et vero eos fugit ducimus officiis unde, excepturi sed id alias vitae! Vitae fugiat hic magnam?ame',
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'Tas Untuk Sekolah, Kuliah',
            'slug' => Str::random(40),
            'small_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis doloribus enim blanditiis!',
            'description' => 'naLorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam deleniti voluptatum nobis cum consequuntur dolorum quo quia alias modi aut.me', 
            'original_price' => 200000,
            'selling_price' => 187000,
            'image' => 'post/product/tas.jpeg',
            'qty' => 283,
            'trending' => true,
            'meta_title'=> 'Lorem ipsum dolor sit amet.',
            'meta_keywords'=> 'tas school sekolah.',
            'meta_description'=> 'nLorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus debitis possimus facere qui autem et vero eos fugit ducimus officiis unde, excepturi sed id alias vitae! Vitae fugiat hic magnam?ame',
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'Buku Sinar Dunia',
            'slug' => Str::random(40),
            'small_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis doloribus enim blanditiis!',
            'description' => 'naLorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam deleniti voluptatum nobis cum consequuntur dolorum quo quia alias modi aut.me', 
            'original_price' => 3000,
            'selling_price' => 3000,
            'image' => 'post/product/buku.jpeg',
            'qty' => 1076,
            'trending' => true,
            'meta_title'=> 'Lorem ipsum dolor sit amet.',
            'meta_keywords'=> 'tas school sekolah.',
            'meta_description'=> 'nLorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus debitis possimus facere qui autem et vero eos fugit ducimus officiis unde, excepturi sed id alias vitae! Vitae fugiat hic magnam?ame',
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'Tempat Pensil Murah',
            'slug' => Str::random(40),
            'small_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis doloribus enim blanditiis!',
            'description' => 'naLorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam deleniti voluptatum nobis cum consequuntur dolorum quo quia alias modi aut.me', 
            'original_price' => 25000,
            'selling_price' => 19000,
            'image' => 'post/product/lopa.jpeg',
            'qty' => 292,
            'trending' => true,
            'meta_title'=> 'Lorem ipsum dolor sit amet.',
            'meta_keywords'=> 'tas school sekolah.',
            'meta_description'=> 'nLorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus debitis possimus facere qui autem et vero eos fugit ducimus officiis unde, excepturi sed id alias vitae! Vitae fugiat hic magnam?ame',
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'Penghapus Pensil Berkualitas',
            'slug' => Str::random(40),
            'small_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis doloribus enim blanditiis!',
            'description' => 'naLorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam deleniti voluptatum nobis cum consequuntur dolorum quo quia alias modi aut.me', 
            'original_price' => 2000,
            'selling_price' => 2000,
            'image' => 'post/product/penghapus.jpeg',
            'qty' => 283,
            'trending' => true,
            'meta_title'=> 'Lorem ipsum dolor sit amet.',
            'meta_keywords'=> 'tas school sekolah.',
            'meta_description'=> 'nLorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus debitis possimus facere qui autem et vero eos fugit ducimus officiis unde, excepturi sed id alias vitae! Vitae fugiat hic magnam?ame',
        ]);
        Product::create([
            'category_id' => 1,
            'name' => 'Tipe X',
            'slug' => Str::random(40),
            'small_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis doloribus enim blanditiis!',
            'description' => 'naLorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam deleniti voluptatum nobis cum consequuntur dolorum quo quia alias modi aut.me', 
            'original_price' => 4000,
            'selling_price' => 3300,
            'image' => 'post/product/tipex.jpeg',
            'qty' => 283,
            'trending' => true,
            'meta_title'=> 'Lorem ipsum dolor sit amet.',
            'meta_keywords'=> 'tas school sekolah.',
            'meta_description'=> 'nLorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus debitis possimus facere qui autem et vero eos fugit ducimus officiis unde, excepturi sed id alias vitae! Vitae fugiat hic magnam?ame',
        ]);
        Product::create([
            'category_id' => 2,
            'name' => 'I Phone 13 Pro Max',
            'slug' => Str::random(40),
            'small_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis doloribus enim blanditiis!',
            'description' => 'naLorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam deleniti voluptatum nobis cum consequuntur dolorum quo quia alias modi aut.me', 
            'original_price' => 25000000,
            'selling_price' => 23000000,
            'image' => 'post/product/hp.jpeg',
            'qty' => 76,
            'trending' => true,
            'meta_title'=> 'Lorem ipsum dolor sit amet.',
            'meta_keywords'=> 'iphone digital HP.',
            'meta_description'=> 'nLorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus debitis possimus facere qui autem et vero eos fugit ducimus officiis unde, excepturi sed id alias vitae! Vitae fugiat hic magnam?ame',
        ]);
        Product::create([
            'category_id' => 2,
            'name' => 'Mac Book Air 2015',
            'slug' => Str::random(40),
            'small_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis doloribus enim blanditiis!',
            'description' => 'naLorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam deleniti voluptatum nobis cum consequuntur dolorum quo quia alias modi aut.me', 
            'original_price' => 77000000,
            'selling_price' => 75000000,
            'image' => 'post/product/laptop.jpeg',
            'qty' => 10,
            'trending' => true,
            'meta_title'=> 'Lorem ipsum dolor sit amet.',
            'meta_keywords'=> 'iphone digital HP Laptop Mac book.',
            'meta_description'=> 'nLorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus debitis possimus facere qui autem et vero eos fugit ducimus officiis unde, excepturi sed id alias vitae! Vitae fugiat hic magnam?ame',
        ]);
        Product::create([
            'category_id' => 2,
            'name' => 'Kacamata Anti Radiasi',
            'slug' => Str::random(40),
            'small_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis doloribus enim blanditiis!',
            'description' => 'naLorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam deleniti voluptatum nobis cum consequuntur dolorum quo quia alias modi aut.me', 
            'original_price' => 200000,
            'selling_price' => 200000,
            'image' => 'post/product/kacamata.png',
            'qty' => 1087,
            'trending' => true,
            'meta_title'=> 'Lorem ipsum dolor sit amet.',
            'meta_keywords'=> 'keren cool antiradiasi kacamata.',
            'meta_description'=> 'nLorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus debitis possimus facere qui autem et vero eos fugit ducimus officiis unde, excepturi sed id alias vitae! Vitae fugiat hic magnam?ame',
        ]);
    }
}

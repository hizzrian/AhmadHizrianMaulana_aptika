<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;

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
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);
        // \App\Models\User::factory(3)->create();
        Category::create([
            'name' => 'Minyak Goreng',
            'slug' => 'minyak-goreng',
        ]);
        Category::create([
            'slug' => 'gula-pasir',
            'name' => 'Gula Pasir',
        ]);
        Category::create([
            'name' => 'Beras',
            'slug' => 'beras',
        ]);
        Category::create([
            'name' => 'Daging',
            'slug' => 'daging',
        ]);
        Product::factory(20)->create();
        // Product::create([
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'title' => 'Product 1',
        //     'slug' => 'product1',
        //     'mini_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore voluptatibus assumenda consequatur eligendi culpa placeat iusto repudiandae optio.',
        //     'description' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis magni nam omnis unde! Velit atque odit quidem modi vel ad consectetur vero molestiae debitis, commodi quaerat voluptates rem itaque optio est libero incidunt cum placeat quas, mollitia dolores aliquid eos? Sed labore, facilis magni ad optio similique corrupti consequatur tenetur, asperiores necessitatibus non iste. </p><p>Quidem sequi deleniti aut ex, illum, illo atque vero, quasi doloribus quia consequuntur. Quas quibusdam adipisci molestias inventore alias. Dolorem, ex aspernatur repellat voluptatum voluptate obcaecati aperiam veritatis quae at, magni dolorum quia. Quasi hic, eaque iusto officia odit recusandae neque, voluptatum earum laboriosam reiciendis, repellendus quas.</p><p>Ad quam ratione molestiae assumenda nihil perferendis saepe possimus aperiam optio odit debitis eveniet alias et velit sint dolor, sapiente tempore? Ratione facilis sint voluptate odio, amet laborum recusandae nemo quas placeat dolores in architecto eligendi quis, tenetur veritatis rem eaque quibusdam natus numquam beatae dicta, tempora reiciendis maxime! Dolores quae assumenda magni dignissimos hic unde incidunt atque quis aliquid amet dolorum impedit mollitia voluptatem nihil, aspernatur voluptas? Facilis deleniti, veritatis iusto quod sunt maiores veniam autem quos animi deserunt repellendus, voluptatum, velit quis corrupti assumenda. Hic dolorem consectetur dolore! Doloribus ipsum necessitatibus ea et earum nisi fugiat explicabo.</p>',
        //     'sku' => 'SKU 1',
        //     'price' => '100',
        //     'height' => '10',
        //     'stock' => '10',
        //     'link' => 'http://example.com',
        // ]);
        // Product::create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'title' => 'Product 2',
        //     'slug' => 'product2',
        //     'mini_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore voluptatibus assumenda consequatur eligendi culpa placeat iusto repudiandae optio.',
        //     'description' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis magni nam omnis unde! Velit atque odit quidem modi vel ad consectetur vero molestiae debitis, commodi quaerat voluptates rem itaque optio est libero incidunt cum placeat quas, mollitia dolores aliquid eos? Sed labore, facilis magni ad optio similique corrupti consequatur tenetur, asperiores necessitatibus non iste. </p><p>Quidem sequi deleniti aut ex, illum, illo atque vero, quasi doloribus quia consequuntur. Quas quibusdam adipisci molestias inventore alias. Dolorem, ex aspernatur repellat voluptatum voluptate obcaecati aperiam veritatis quae at, magni dolorum quia. Quasi hic, eaque iusto officia odit recusandae neque, voluptatum earum laboriosam reiciendis, repellendus quas.</p><p>Ad quam ratione molestiae assumenda nihil perferendis saepe possimus aperiam optio odit debitis eveniet alias et velit sint dolor, sapiente tempore? Ratione facilis sint voluptate odio, amet laborum recusandae nemo quas placeat dolores in architecto eligendi quis, tenetur veritatis rem eaque quibusdam natus numquam beatae dicta, tempora reiciendis maxime! Dolores quae assumenda magni dignissimos hic unde incidunt atque quis aliquid amet d</p>',
        //     'sku' => 'SKU 2',
        //     'price' => '200',
        //     'height' => '20',
        //     'stock' => '20',
        //     'link' => 'http://example.com',
        // ]);
        // Product::create([
        //     'category_id' => 3,
        //     'user_id' => 1,
        //     'title' => 'Product 3',
        //     'slug' => 'product3',
        //     'mini_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore voluptatibus assumenda consequatur eligendi culpa placeat iusto repudiandae optio.',
        //     'description' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis magni nam omnis unde! Velit atque odit quidem modi vel ad consectetur vero molestiae debitis, commodi quaerat voluptates rem itaque optio est libero incidunt cum placeat quas, mollitia dolores aliquid eos? Sed labore, facilis magni ad optio similique corrupti consequatur tenetur, asperiores necessitatibus non iste. </p><p>Quidem sequi deleniti aut ex, illum, illo atque vero, quasi doloribus quia consequuntur. Quas quibusdam adipisci molestias inventore alias. Dolorem, ex aspernatur repellat voluptatum voluptate obcaecati aperiam veritatis quae at, magni dolorum quia. Quasi hic, eaque iusto officia odit recusandae neque, voluptatum, velit quis corrupti assumenda. Hic dolorem consectetur dolore! Doloribus ipsum necessitatibus ea et earum nisi fugiat explicabo.</p><p>Ad quam ratione molestiae assumenda nihil perferendis saepe possimus aperiam optio odit debitis eveniet alias et velit sint dolor, sapiente tempore? Ratione facilis sint voluptate odio, amet laborum recusandae nemo quas placeat dolores in architecto eligendi quis, tenetur veritatis rem eaque quibusdam natus numquam beatae dicta, tempora reiciendis max</p>',
        //     'sku' => 'SKU 3',
        //     'price' => '300',
        //     'height' => '30',
        //     'stock' => '30',
        //     'link' => 'http://example.com',
        // ]);
        // Product::create([
        //     'category_id' => 3,
        //     'user_id' => 1,
        //     'title' => 'Product 4',
        //     'slug' => 'product4',
        //     'mini_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore voluptatibus assumenda consequatur eligendi culpa placeat iusto repudiandae optio.',
        //     'description' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis magni nam omnis unde! Velit atque odit quidem modi vel ad consectetur vero molestiae debitis, commodi quaerat voluptates rem itaque optio est libero incidunt cum placeat quas, mollitia dolores aliquid eos? Sed labore, facilis magni ad optio similique corrupti consequatur tenetur, asperiores necessitatibus non iste. </p><p>Quidem sequi deleniti aut ex, illum, illo atque vero, quasi doloribus quia consequuntur. Quas quibusdam adipisci molestias inventore alias. Dolorem, ex aspernatur repellat voluptatum voluptate obcaecati aperiam veritatis quae at, magni dolorum quia. Quasi hic, eaque iusto officia odit recusandae neque, voluptatum, velit quis corrupti assumenda. Hic dolorem consectetur dolore! Doloribus ipsum necessitatibus ea et earum nisi fugiat explicabo.</p><p>Ad quam ratione molestiae assumenda nihil perferendis saepe possimus aperiam optio odit debitis eveniet alias et velit sint dolor, sapiente tempore? Ratione facilis sint voluptate odio, amet laborum recusandae nemo quas placeat dolores in architecto eligendi quis, tenetur veritatis rem eaque quibusdam natus numquam beatae dicta, tempora reiciendis max</p>',
        //     'sku' => 'SKU 4',
        //     'price' => '400',
        //     'height' => '40',
        //     'stock' => '40',
        //     'link' => 'http://example.com',
        // ]);
    }
}

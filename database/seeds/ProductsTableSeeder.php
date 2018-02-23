<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product1 = [
            'name' => 'Laravel 5.6 for beginners',
            'image' => 'uploads/products/product.jpg',
            'price' => '5000',
            'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. 
            It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 
            years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, 
            looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, 
            and going through the cites of the word in classical literature, discovered the 
            undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus 
            Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book 
            is a treatise on the theory of ethics, very popular during the Renaissance. The first line
             of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.'
        ];

        $product2 = [
            'name' => 'Getting started with Node JS and React JS',
            'image' => 'uploads/products/product.jpg',
            'price' => '3000',
            'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. 
            It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 
            years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, 
            looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, 
            and going through the cites of the word in classical literature, discovered the 
            undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus 
            Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book 
            is a treatise on the theory of ethics, very popular during the Renaissance. The first line
             of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.'
        ];

        $product3 = [
            'name' => 'HTML5/CSS3 for Dumming',
            'image' => 'uploads/products/product.jpg',
            'price' => '4000',
            'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. 
            It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 
            years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, 
            looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, 
            and going through the cites of the word in classical literature, discovered the 
            undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus 
            Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book 
            is a treatise on the theory of ethics, very popular during the Renaissance. The first line
             of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.'
        ];

        $product4 = [
            'name' => 'Procedural PHP in your palm hand',
            'image' => 'uploads/products/product.jpg',
            'price' => '1000',
            'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. 
            It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 
            years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, 
            looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, 
            and going through the cites of the word in classical literature, discovered the 
            undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus 
            Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book 
            is a treatise on the theory of ethics, very popular during the Renaissance. The first line
             of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.'
        ];

        Product::create($product1);
        Product::create($product2);
        Product::create($product3);
        Product::create($product4);

    }
}

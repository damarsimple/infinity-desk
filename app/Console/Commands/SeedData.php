<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class SeedData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seed:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $seller = new User();

        $seller->name = 'Seller';
        $seller->email = 'seller@gmail.com';
        $seller->bank_detail = '123456';
        $seller->password = Hash::make('password');
        $seller->save();

        $colors = ['merah', 'kuning'];
        $sizes = ['S', 'M', 'L', 'XL'];
        $types = ['kursi'];
        $materials = ['karet', 'karet kuning', 'karet merah', 'kayu'];
        $price_type = 'IDR';
        $stock = 10;
        $description = fn ($product) => $product . " dari Swedia dibuat oleh seniman ternama earthenware dan kaca. $product ini memiliki ukuran yang sangat lumayan dan sangat bagus untuk dibawa ke tempat yang tidak terlalu luas. $product ini memiliki kaca yang sangat bagus untuk menjaga kualitas kaca dan kualitas.";

        $declarations = [
            'Kursi' => ['Pendek', 'Panjang', 'Kantor', 'Kayu', 'Plastik', 'Murah'],
            'Meja' => ['Makan', 'Tamu', 'Kantor', 'Kerja', 'Berdiri', 'Murah'],
            'Rak' => ['Panjang', 'Kecil', 'Piring'],
            'Lemari' => ['Besar', 'Kecil', 'Baju'],
            'Keranjang' => ['Besar', 'Kecil', 'Baju'],
            'Pot Bunga' => ['Besar', 'Kecil', 'Piring'],
            'Wallpaper' => ['Melati', 'Wibu', 'Kerang'],
        ];

        $products = [];

        $getProductName = fn ($cat, $prod) => $cat . ' ' . $prod;

        foreach ($declarations as $category => $products) {
            $categoryCreate = new Category();
            $categoryCreate->name = $category;
            $categoryCreate->save();

            $productsData = [];

            foreach ($products as $product) {
                $productStaging = [];
                $productStaging['seller_id'] = $seller->id;
                $productStaging['name'] = $getProductName($category, $product);
                $productStaging['code'] = $product;
                $productStaging['serial'] = $product;
                $productStaging['materials'] = $materials;
                $productStaging['images'] = [
                    'https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60',
                    'https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60',
                    'https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60',
                    'https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60',
                    'https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60',
                    'https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60',
                    'https://images.unsplash.com/photo-1518791841217-8f162f1'
                ];
                $productStaging['price'] = rand(1, 100);
                $productStaging['price_type'] = $price_type;
                $productStaging['stock'] = $stock;
                $productStaging['description'] = $description($product);
                $productStaging['colors'] = $colors;
                $productStaging['sizes'] = $sizes;
                $productStaging['types'] = $types;
                $productsData[] = $productStaging;
            }

            $categoryCreate->products()->createMany($productsData);
        }
        return 0;
    }
}

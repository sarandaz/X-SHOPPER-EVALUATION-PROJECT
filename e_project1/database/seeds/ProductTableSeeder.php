<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         $product = new \App\Product([
        	'name' => 'IdeaPad S540',
        	'slug' => 'product-d',
        	'imagePath' => 'https://i.gadgets360cdn.com/products/laptops/large/1546456010_635_lenovo_ideapad-330.jpg',
        	'details' => 'Powered by 10th Gen Intel® Core™ processors and optional NVIDIA® GeForce® graphics, the 14-inch IdeaPad S540 offers you heavy-duty performance in addition to its premium look and feel.',
        	'price' => 1200,
        	'description' => 'Style and ability in one.',
        ]);
        $product->save();
        

         $product = new \App\Product([
        	'name' => 'Lenovo ThinkPad X1 Carbon',
        	'slug' => 'product-e',
        	'imagePath' => 'https://www.notebookcheck.net/uploads/tx_nbc2/csm_DSC03447_74da5d8438.jpg',
        	'details' => 'Core i5-8265U CPU, 8GB of RAM and a 256GB M.2 PCIe NVMe SSD',
        	'price' => 1400,
        	'description' => 'The best business laptop on the market.',
        ]);
        $product->save();

         $product = new \App\Product([
        	'name' => 'HP Laptop - 15t',
        	'slug' => 'product-f',
        	'imagePath' => 'https://store.hp.com/app/assets/images/product/7FQ32AV_1/center_facing.png?_=1581500130822',
        	'details' => 'Windows 10 Home 64, 10th Gen Intel® Core™ i7 processor, Intel® UHD Graphics, 8 GB memory; 128 GB SSD storage',
        	'price' => 600,
        	'description' => 'Built to keep you productive and entertained from anywhere.',
        ]);
        $product->save();

         $product = new \App\Product([
        	'name' => 'Lenovo Laptop',
        	'slug' => 'product-b',
        	'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/911dhIY2SCL._SL1500_.jpg',
        	'details' => 'Lenovo Ideapad S540 8th Gen Intel Core I5 15.6 inch FHD Thin and Light Laptop ( 8GB/1TBHDD + 128GB SSD/Win ',
        	'price' => 500,
        	'description' => 'Flexible to fit your needs'
        ]);
        $product->save();

         $product = new \App\Product([
        	'name' => 'Dell',
        	'slug' => 'product-a',
        	'imagePath' => 'https://i.dell.com/is/image/DellContent//content/dam/global-site-design/product_images/dell_client_products/notebooks/inspiron_notebooks/15_7591/general/dell-inspiron-15-7591-laptop-category-card.jpg?fmt=jpg',
        	'details' => '0th Generation Intel® Core™ i5-10210U Processor, 8 GB, 1 x 8 GB, DDR4, 2666 MHz, 256GB M.2 PCIe NVMe Solid State Drive',
        	'price' => 600,
        	'description' => 'Flexible to fit your needs'
        ]);
        $product->save();

         $product = new \App\Product([
        	'name' => 'Dell Laptop',
        	'slug' => 'product-c',
        	'imagePath' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTeKwdEz1qebXClIjKoiegFrb3GiB7AjaVlFw&usqp=CAU',
        	'details' => '9th Generation Intel® Core™ i5-9300H
					    Windows 10 Home
					    Intel® UHD Graphics 630
					    8GB DDR4-2666MHz, 2x4G
					    256GB M.2 PCIe NVMe Solid State Drive',
        	'price' => 1000,
        	'description' => 'Pushing innovation to the edge.',
        ]);
        $product->save();
    }
}

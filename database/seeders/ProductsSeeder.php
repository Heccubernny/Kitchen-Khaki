<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // or Products::crate([])
        DB::table('products')->insert([
            'title' => 'Samsung Galaxy S9',
            'desc' => 'A brand new, sealed Lilac Purple Verizon Global Unlocked Galaxy S9 by Samsung. This is an upgrade. Clean ESN and activation ready.',
            'image' => 'https://i.ebayimg.com/00/s/ODY0WDgwMA==/z/9S4AAOSwMZRanqb7/$_35.JPG?set_id=89040003C1',
            'price' => 698.88,
            'quantity' => 200,
         ]);
         DB::table('products')->insert([
             'title' => 'Apple iPhone X',
             'desc' => 'GSM & CDMA FACTORY UNLOCKED! WORKS WORLDWIDE! FACTORY UNLOCKED. iPhone x 64gb. iPhone 8 64gb. iPhone 8 64gb. iPhone X with iOS 11.',
             'image' => 'https://i.ebayimg.com/00/s/MTYwMFg5OTU=/z/9UAAAOSwFyhaFXZJ/$_35.JPG?set_id=89040003C1',
             'price' => 983.00,
             'quantity' => 200,
         ]);
         DB::table('products')->insert([
             'title' => 'Google Pixel 2 XL',
             'desc' => 'New condition • No returns,image backed by eBay Money back guarantee',
             'image' => 'https://i.ebayimg.com/00/s/MTYwMFg4MzA=/z/G2YAAOSwUJlZ4yQd/$_35.JPG?set_id=89040003C1',
             'price' => 675.00,
             'quantity' => 200,
         ]);
         DB::table('products')->insert([
             'title' => 'LG V10 H900',
             'desc' => 'NETWORK Technology GSM. Protection Corning Gorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, Ocean Blue, Opal Blue. SAR EU 0.59 W/kg (image.',
             'image' => 'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1',
             'price' => 159.99,
             'quantity' => 200,
            //  'created_at' =>
         ]);
         DB::table('products')->insert([
             'title' => 'Huawei Elate',
             'desc' => 'Cricket Wireless - Huawei Elate. New Sealed Huawei Elate Smartphone.',
             'image' => 'https://ssli.ebayimg.com/images/g/aJ0AAOSw7zlaldY2/s-l640.jpg',
             'price' => 68.00,
             'quantity' => 200,
         ]);
         DB::table('products')->insert([
             'title' => 'HTC One M10',
             'desc' => 'The device is in good cosmetic condition and will show minor scratches and/or scuff marks.',
             'image' => 'https://i.ebayimg.com/images/g/u-kAAOSw9p9aXNyf/s-l500.jpg',
             'price' => 129.99,
             'quantity' => 200,
         ]);
         DB::table('products')->insert([
            'title' => 'Samsung Galaxy S9',
            'desc' => 'A brand new, sealed Lilac Purple Verizon Global Unlocked Galaxy S9 by Samsung. This is an upgrade. Clean ESN and activation ready.',
            'image' => 'https://i.ebayimg.com/00/s/ODY0WDgwMA==/z/9S4AAOSwMZRanqb7/$_35.JPG?set_id=89040003C1',
            'price' => 698.88,
            'quantity' => 200,
         ]);
    }
}

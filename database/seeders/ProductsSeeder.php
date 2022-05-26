<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::query()->create([
            "title" => "Men's Backpack, Fits 15 Laptops",
            "price" => 109.95,
            "description" => "Your perfect pack for everyday use and walks in the forest. Stash your laptop (up to 15 inches) in the padded sleeve, your everyday",
            "category" => "men's clothing",
            "image" => "https://i.imgur.com/1uKSqrX.jpg",
            "rating" => 4.2,
            "count" => 12
        ]);
        Products::query()->create([
            "title" => "Mens Casual Premium Slim Fit T-Shirts",
            "price" => 22.3,
            "description" => "Slim-fitting style, contrast raglan long sleeve, three-button henley placket, light weight & soft fabric for breathable and comfortable wearing. And Solid stitched shirts with round neck made for durability and a great fit for casual fashion wear and diehard baseball fans. The Henley style round neckline includes a three-button placket.",
            "category" => "men's clothing",
            "image" => "https://i.imgur.com/4Ms5q87.jpg",
            "rating" => 3.1,
            "count" => 120
        ]);
        Products::query()->create( [
            "title" => "Mens Cotton Jacket",
            "price" => 90.95,
            "description" => "great outerwear jackets for Spring/Autumn/Winter, suitable for many occasions, such as working, hiking, camping, mountain/rock climbing, cycling, traveling or other outdoors. Good gift choice for you or your family member. A warm hearted love to Father, husband or son in this thanksgiving or Christmas Day.",
            "category" => "men's clothing",
            "image" => "https://i.imgur.com/qNHvMeN.jpg",
            "rating" => 4.5,
            "count" => 22
        ]);
        Products::query()->create([
            "title" => "Mens Casual Slim Fit",
            "price" => 45.92,
            "description" => "The color could be slightly different between on the screen and in practice. / Please note that body builds vary by person, therefore, detailed size information should be reviewed below on the product description.",
            "image" => "https://i.imgur.com/vaql4DN.jpg",
            "category" => "jewelery",
            "rating" => 4.1,
            "count" => 43
        ]);
        Products::query()->create( [
            "title" => "John Hardy Women's Legends Naga Gold & Silver Dragon Station Chain Bracelet",

            "price" => 640.95,
            "description" => "From our Legends Collection, the Naga was inspired by the mythical water dragon that protects the ocean's pearl. Wear facing inward to be bestowed with love and abundance, or outward for protection.",
            "category" => "jewelery",
            "image" => "https://i.imgur.com/3s8Xqit.jpg",
            "rating" => 4.0,
            "count" => 33
        ]);
        Products::query()->create([
            "title" => "Solid Gold Petite Micropave",
            "price" => 234.95,
            "description" => "Satisfaction Guaranteed. Return or exchange any order within 30 days.Designed and sold by Hafeez Center in the United States. Satisfaction Guaranteed. Return or exchange any order within 30 days.",
            "category" => "jewelery",
            "image" => "https://i.imgur.com/xBqqjtP.jpg",
            "rating" => 4.2,
            "count" => 146
        ]);
        Products::query()->create( [
            "title" => "White Gold Plated Princess",
            "price" => 99.95,
            "description" => "Classic Created Wedding Engagement Solitaire Diamond Promise Ring for Her. Gifts to spoil your love more for Engagement, Wedding, Anniversary, Valentine's Day...",

            "category" => "jewelery",
            "image" => "https://i.imgur.com/fvudtxm.jpg",
            "rating" => 4.2,
            "count" => 33
        ]);
        Products::query()->create( [
            "title" => "Pierced Owl Rose Gold Plated Stainless Steel Double",
            "price" => 29.00,
            "description" => "Rose Gold Plated Double Flared Tunnel Plug Earrings. Made of 316L Stainless Steel",

            "category" => "jewelery",
            "image" => "https://i.imgur.com/OA7A7Y7.jpg",
            "rating" => 3.9,
            "count" => 43
        ]);
        Products::query()->create( [
            "title" => "WD 2TB Elements Portable External Hard Drive - USB 3.0",
            "price" => 109.95,
            "description" => "USB 3.0 and USB 2.0 Compatibility Fast data transfers Improve PC Performance High Capacity; Compatibility Formatted NTFS for Windows 10, Windows 8.1, Windows 7; Reformatting may be required for other operating systems; Compatibility may vary depending on user’s hardware configuration and operating system",
            "category" => "electronics",
            "image" => "https://i.imgur.com/JtexXkx.jpg",
            "rating" => 3.4,
            "count" => 192
        ]);
        Products::query()->create( [
            "title" => "SanDisk SSD PLUS 1TB Internal SSD - SATA III 6 Gb/s",
            "price" => 109,
            "description" => "Easy upgrade for faster boot up, shutdown, application load and response (As compared to 5400 RPM SATA 2.5” hard drive; Based on published specifications and internal benchmarking tests using PCMark vantage scores) Boosts burst write performance, making it ideal for typical PC workloads The perfect balance of performance and reliability Read/write speeds of up to 535MB/s/450MB/s (Based on internal testing; Performance may vary depending upon drive capacity, host device, OS and application.)",
            "category" => "electronics",
            "image" => "https://i.imgur.com/7ue4D3n.jpg",
            "rating" => 4.2,
            "count" => 67
        ]);
        Products::query()->create( [
            "title" => "Silicon Power 256GB SSD 3D NAND A55 SLC Cache Performance Boost SATA III 2.5",
            "price" => 109,
            "description" => "3D NAND flash are applied to deliver high transfer speeds Remarkable transfer speeds that enable faster bootup and improved overall system performance. The advanced SLC Cache Technology allows performance boost and longer lifespan 7mm slim design suitable for Ultrabooks and Ultra-slim notebooks. Supports TRIM command, Garbage Collection technology, RAID, and ECC (Error Checking & Correction) to provide the optimized performance and enhanced reliability.",
            "category" => "electronics",
            "image" => "https://i.imgur.com/JfnRUZR.jpg",
            "rating" => 4.6,
            "count" => 126
        ]);
        Products::query()->create( [
            "title" => "WD 4TB Gaming Drive Works with Playstation 4 Portable External Hard Drive",
            "price" => 114,
            "description" => "Expand your PS4 gaming experience, Play anywhere Fast and easy, setup Sleek design with high capacity, 3-year manufacturer's limited warranty",
            "category" => "electronics",
            "image" => "https://i.imgur.com/UpR1fi4.jpg",
            "rating" => 4.5,
            "count" => 195
        ]);
        Products::query()->create( [
            "title" => "Acer SB220Q bi 21.5 inches Full HD (1920 x 1080) IPS Ultra-Thin",
            "price" => 599,
            "description" => "21. 5 inches Full HD (1920 x 1080) widescreen IPS display And Radeon free Sync technology. No compatibility for VESA Mount Refresh Rate: 75Hz - Using HDMI port Zero-frame design | ultra-thin | 4ms response time | IPS panel Aspect ratio - 16: 9. Color Supported - 16. 7 million colors. Brightness - 250 nit Tilt angle -5 degree to 15 degree. Horizontal viewing angle-178 degree. Vertical viewing angle-178 degree 75 hertz",
            "category" => "electronics",
            "image" => "https://i.imgur.com/bKQZjd6.jpg",
            "rating" => 4.2,
            "count" => 12
        ]);
        Products::query()->create( [
            "title" => "Samsung 49-Inch CHG90 144Hz Curved Gaming Monitor (LC49HG90DMNXZA) – Super Ultrawide Screen QLED ",
            "price" => 999.99,
            "description" => "49 INCH SUPER ULTRAWIDE 32:9 CURVED GAMING MONITOR with dual 27 inch screen side by side QUANTUM DOT (QLED) TECHNOLOGY, HDR support and factory calibration provides stunningly realistic and accurate color and contrast 144HZ HIGH REFRESH RATE and 1ms ultra fast response time work to eliminate motion blur, ghosting, and reduce input lag",
            "category" => "electronics",
            "image" => "https://i.imgur.com/fWDsRZH.jpg",
            "rating" => 2.2,
            "count" => 345
        ]);
        Products::query()->create( [

            "title" => "BIYLACLESEN Women's 3-in-1 Snowboard Jacket Winter Coats",
            "price" => 56.99,
            "description" => "Note:The Jackets is US standard size, Please choose size as your usual wear Material: 100% Polyester; Detachable Liner Fabric: Warm Fleece. Detachable Functional Liner: Skin Friendly, Lightweigt and Warm.Stand Collar Liner jacket, keep you warm in cold weather. Zippered Pockets: 2 Zippered Hand Pockets, 2 Zippered Pockets on Chest (enough to keep cards or keys)and 1 Hidden Pocket Inside.Zippered Hand Pockets and Hidden Pocket keep your things secure. Humanized Design: Adjustable and Detachable Hood and Adjustable cuff to prevent the wind and water,for a comfortable fit. 3 in 1 Detachable Design provide more convenience, you can separate the coat and inner as needed, or wear it together. It is suitable for different season and help you adapt to different climates",
            "category" => "women's clothing",
            "image" => "https://i.imgur.com/dvgeqSc.jpg",
            "rating" => 3.6,
            "count" => 456
        ]);
        Products::query()->create( [
            "title" => "Lock and Love Women's Removable Hooded Faux Leather Moto Biker Jacket",
            "price" => 29.95,
            "description" => "100% POLYURETHANE(shell) 100% POLYESTER(lining) 75% POLYESTER 25% COTTON (SWEATER), Faux leather material for style and comfort / 2 pockets of front, 2-For-One Hooded denim style faux leather jacket, Button detail on waist / Detail stitching at sides, HAND WASH ONLY / DO NOT BLEACH / LINE DRY / DO NOT IRON",
            "category" => "women's clothing",
            "image" => "https://i.imgur.com/XSXqdjX.jpg",
            "rating" => 4.9,
            "count" => 52
        ]);
        Products::query()->create( [
            "title" => "Rain Jacket Women Windbreaker Striped Climbing Raincoats",
            "price" => 39.99,
            "description" => "Lightweight perfet for trip or casual wear---Long sleeve with hooded, adjustable drawstring waist design. Button and zipper front closure raincoat, fully stripes Lined and The Raincoat has 2 side pockets are a good size to hold all kinds of things, it covers the hips, and the hood is generous but doesn't overdo it.Attached Cotton Lined Hood with Adjustable Drawstrings give it a real styled look.",
            "category" => "women's clothing",
            "image" => "https://i.imgur.com/pp7HNm1.jpg",
            "rating" => 4.4,
            "count" => 212
        ]);
        Products::query()->create( [
            "title" => "MBJ Women's Solid Short Sleeve Boat Neck V ",
            "price" => 9.85,
            "description" => "95% RAYON 5% SPANDEX, Made in USA or Imported, Do Not Bleach, Lightweight fabric with great stretch for comfort, Ribbed on sleeves and neckline / Double stitching on bottom hem",
            "category" => "women's clothing",
            "image" => "https://i.imgur.com/Us7I8WC.jpg",
            "rating" => 2.9,
            "count" => 312
        ]);
        Products::query()->create( [
            "id" => 19,
            "title" => "Opna Women's Short Sleeve Moisture",
            "price" => 7.95,
            "description" => "100% Polyester, Machine wash, 100% cationic polyester interlock, Machine Wash & Pre Shrunk for a Great Fit, Lightweight, roomy and highly breathable with moisture wicking fabric which helps to keep moisture away, Soft Lightweight Fabric with comfortable V-neck collar and a slimmer fit, delivers a sleek, more feminine silhouette and Added Comfort",
            "category" => "women's clothing",
            "image" => "https://i.imgur.com/DkHv4fg.jpg",
            "rating" => 3.0,
            "count" => 33
        ]);
        Products::query()->create( [
            "title" => "DANVOUY Womens T Shirt Casual Cotton Short",
            "price" => 12.99,
            "description" => "95%Cotton,5%Spandex, Features: Casual, Short Sleeve, Letter Print,V-Neck,Fashion Tees, The fabric is soft and has some stretch., Occasion: Casual/Office/Beach/School/Home/Street. Season: Spring,Summer,Autumn,Winter.",
            "category" => "women's clothing",
            "image" => "https://i.imgur.com/4nP5vSU.jpg",
            "rating" => 4.2,
            "count" => 622
        ]);
    }
}

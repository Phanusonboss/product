<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $products = [
        ['id' => 1, 'name' => 'Sparking Pink Bow Ring',
         'description' => 'Meet the Sparkling Pink Bow Ring: an elegant piece crafted from sterling silver. This versatile ring features two prong-set heart-cut fancy pink cubic zirconia stones as the centrepiece, with a delicate bow motif symbolizing light and festivity. The band is adorned with 14 bead-set round brilliant-cut clear cubic zirconia for added sparkle. Perfect for pairing with both casual and formal outfits, this ring adds a touch of colour to any look.',
         'price' => '60.35', 'image' => 'https://us.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dwf178cf0d/productimages/singlepackshot/193510C01_RGB.jpg?sw=900&sh=900&sm=fit&sfrm=png&bgcolor=F5F5F5'],
        ['id' => 2, 'name' => 'Sparkling Bow Double-row Rin',
         'description' => 'The Sparkling Bow Double-row Ring, crafted from sterling silver, adds a festive touch to any outfit. This ring features a contemporary bow motif surrounded by clear cubic zirconia, as well as a double row of pavé stones on the band’s exterior. Ideal for special occasions or to brighten up your everyday look, this design symbolizes joy and celebration. Style it with your go-to pieces to elevate your outfit.',
         'price' => '35.34', 'image' => 'https://us.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dwdf57dd07/productimages/singlepackshot/193552C01_RGB.jpg?sw=900&sh=900&sm=fit&sfrm=png&bgcolor=F5F5F5'],
        ['id' => 3, 'name' => 'Double Heart Sparkling Ring',
         'description' => 'The Double Heart Sparkling Ring features two heart-shaped clear cubic zirconia nestled together at different angles to symbolize the love between a mother and child. The ring shank is accented with a half row of pavé and is asymmetrically attached to the two hearts for a more modern look. A gift that celebrates everything Mom’s done for you.',
         'price' => '124.00', 'image' => 'https://us.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw2ca5a558/productimages/singlepackshot/191198C01_RGB.jpg?sw=900&sh=900&sm=fit&sfrm=png&bgcolor=F5F5F5'],
         ['id' => 4, 'name' => 'Celestial Heart Clasp Bangle',
         'description' => 'Fall in love with our Celestial Heart Clasp Bangle. Plated in 14k gold, our iconic heart clasp gets a stellar update, featuring a moonlit night sky complete with sparkling stones. Whether you wear it with or without charms, alone or as part of a layered look, it destined to be a forever favourite.',
         'price' => '137.00', 'image' => 'https://us.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dwbb72ec5e/productimages/singlepackshot/593400C01_RGB.jpg?sw=900&sh=900&sm=fit&sfrm=png&bgcolor=F5F5F5'],
         ['id' => 5, 'name' => 'Pink & Clear Sparkle Slider Bracelet',
         'description' => 'Add a sophisticated pink note to your look with this sparkling sterling silver slider bracelet. Hand-finished with two tones of shimmering details, this tennis bracelet features clear cubic zirconia and pink synthetic sapphires in alternating sizes, adding a layer of contrast to the piece. The bracelet features a handy adjustable slider clasp for a perfect fit. Add a classic and versatile staple to your collection and wear this stylish piece years to come.',
         'price' => '98.55', 'image' => 'https://us.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw8bafab12/productimages/singlepackshot/599377C02_RGB.jpg?sw=900&sh=900&sm=fit&sfrm=png&bgcolor=F5F5F5'],
         ['id' => 6, 'name' => 'Moments Sparkling Moon Clasp Snake Chain Bracelet',
         'description' => 'Bring a celestial touch to your style with the Pandora Moments Sparkling Moon Clasp Snake Chain Bracelet. With a clasp shaped like a crescent moon, this sterling silver snake chain bracelet has a "Dream big" engraving on the clasps back. The intricate clasp features cut-out stars and circles set with six blue man-made crystals and five clear cubic zirconia, as well as microbeading and imprinted detailing. Two asymmetrical stars set with sparkling stones dangle from the clasp, adding a dash of movement to this essential piece.',
         'price' => '66.33', 'image' => 'https://us.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dwe0601f1b/productimages/singlepackshot/592819C01_RGB.jpg?sw=900&sh=900&sm=fit&sfrm=png&bgcolor=F5F5F5'],
         ['id' => 7, 'name' => 'Double Heart Split Dangle Charm',
         'description' => 'Celebrate one of life’s most special bonds with the Double Heart Split Dangle Charm. Hand-finished in sterling silver, one disc includes a cut-out heart with the engravings “In my heart” and “Mother.” On the other, there’s a hand-applied pink enamel heart with the engravings “Daughter” and “Forever.” When the discs overlap, the enamel heart fits perfectly within the cut-out shape. Give half of this charm to your loved one as a reminder of how much you mean to one other.',
         'price' => '135.00', 'image' => 'https://us.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw6fb13c5a/productimages/singlepackshot/799187C01_RGB.jpg?sw=900&sh=900&sm=fit&sfrm=png&bgcolor=F5F5F5'],
         ['id' => 8, 'name' => 'Lucky Star & Heart Charm',
         'description' => 'Love and luck unite in our mixed-metal Lucky Star & Heart Charm. A 14k gold-plated star dangles from a sterling silver openwork heart charm, engraved with the message "MY LUCKY STAR." Carry it as a reminder that you create your own luck everywhere you go or gift it to whoever needs a little extra luck in your life.',
         'price' => '120.00', 'image' => 'https://us.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dwac68ee03/productimages/singlepackshot/763513C00_RGB.jpg?sw=900&sh=900&sm=fit&sfrm=png&bgcolor=F5F5F5'],
         ['id' => 9, 'name' => 'Glow-in-the-dark Firefly Dangle Charm',
         'description' => 'Light up your look with the Glow-in-the-dark Firefly Dangle Charm. Hand-finished in sterling silver, this firefly charm features rounded glow-in-the-dark glass – white in the daylight and milky green at night – which recharges when exposed to sunlight or UV light. A second silver disc reads You light up my life. This engraved charm makes the perfect gift for the one you love, or a stylish statement of self-love to remind you of the light you carry within.',
         'price' => '56.23', 'image' => 'https://us.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw8070bf37/productimages/singlepackshot/799352C01_RGB.jpg?sw=900&sh=900&sm=fit&sfrm=png&bgcolor=F5F5F5'],
         ['id' => 10, 'name' => 'Shooting Star Pavé Collier Necklace',
         'description' => 'Our Shooting Star Pavé Collier Necklace in 14k gold-plating will bring a warm glow to your styling. This modern, graphic approach to the shooting star motif features a simple silhouette with a row of pavé on the tail. A tiny star dangles from the end of the chain, adding an extra touch of stardust to the piece. Wear yours as a trail of holiday magic in your looks, or gift it to your shining star as a symbol of how special they are.',
         'price' => '122.30', 'image' => 'https://us.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dwc6e574cd/productimages/singlepackshot/362374C01_RGB.jpg?sw=900&sh=900&sm=fit&sfrm=png&bgcolor=F5F5F5'],
         ['id' => 11, 'name' => 'Curb Chain Necklace',
         'description' => 'No jewellery collection is complete without a simple versatile necklace that can be worn by itself or accessorised with your favourite pendants. One of the most essential pieces for any wardrobe, our sterling silver necklace features a sliding clasp, flat interlocking chain links and a dangling curb chain. Wear the slider necklace on its own or layer it for a fashion forward look and adjust to suit your desired length.',
         'price' => '155.00', 'image' => 'https://us.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dweec82fd2/productimages/singlepackshot/398283_RGB.jpg?sw=900&sh=900&sm=fit&sfrm=png&bgcolor=F5F5F5'],
         ['id' => 12, 'name' => 'Blue Murano Glass Butterfly Necklace Set',
         'description' => 'Transform into your best self with the Blue Murano Glass Butterfly Necklace Set. This set features the Blue Murano Glass Butterfly Dangle Charm paired with a sterling silver Curb Chain Necklace with a sliding clasp to adjust it to your ideal length. Add this set to your styling as a powerful symbol of hope, transformation and new beginnings.',
         'price' => '34.00', 'image' => 'https://us.pandora.net/dw/image/v2/AAVX_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw71ee317b/productimages/singlepackshot/NAMPS0437.jpg?sw=900&sh=900&sm=fit&sfrm=png&bgcolor=F5F5F5'],
     ];

    public function index()
    {
        return Inertia::render('Products/Index', ['products' => $this->products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = collect($this->products)->firstWhere('id', $id);

        if (!$product) {
            abort(404, 'Product not found');
        }
        return Inertia::render('Products/Show', ['product' => $product]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}

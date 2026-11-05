<?php
// All facts, contact details and image paths live here. Edit this file to change content.

const IMG_BASE = 'https://touchwoodbliss.com';
const SITE_URL = 'https://www.touchwoodlifespaces.com';

function img(string $path): string { return IMG_BASE . $path; }
function e(string $s): string { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }
function tel(string $p): string { return 'tel:' . preg_replace('/\s+/', '', $p); }

$nav = [
    ['Home', SITE_URL],
    ['About Us', SITE_URL],
    ['Smart Investment', SITE_URL],
    ['Hillnest', SITE_URL],
    ['Projects', SITE_URL],
    ['Blog', SITE_URL],
    ['Contact', '#contact'],
];

$contact = [
    'phones'    => ['+91 7030060922', '+91 7030292900', '+91 7030242400'],
    'email'     => 'invest@touchwoodlifespaces.com',
    'corporate' => 'Business Bay JITO, Office No: 12, 2nd Floor, Mumbai Naka, Matoshree Nagar, Nashik, Maharashtra',
    'site'      => 'Touchwood Bliss, Bhavali Dam Road, Bhagatwadi Igatpuri Nashik, Maharashtra',
    'social'    => [
        ['Facebook', 'f',  'https://www.facebook.com/touchwoodbliss'],
        ['Instagram', 'ig', 'https://www.instagram.com/touchwoodbliss'],
        ['YouTube', 'yt', 'https://youtube.com/@touchwoodbliss5950'],
    ],
];

$images = [
    'hero'     => img('/images/common/droneshot1.webp'),
    'amora'    => img('/images/home/amora.webp'),
    'band'     => img('/images/common/poolbg.webp'),
    'farmsyde' => img('/images/stay/farmsyde/farmsyde1.webp'),
];

$reasons = [
    ['A real change of air', 'Mornings with misty hills instead of traffic noise, cool mountain air with your tea, golden sunsets and nights under a sky full of stars. A second home gives you that on tap.'],
    ['Close enough to actually use', 'Touchwood Bliss in Igatpuri is about 120 km from Mumbai, around three hours on the Mumbai–Nashik highway, and a short drive from Nashik. A home you can reach easily is a home you will visit.'],
    ['Time together, not time scheduled', 'Open lawns, a kids’ play area, indoor and outdoor games, bonfire evenings and pet-friendly villas make it easy to spend real time as a family.'],
];

$stats = [
    [120, '', ' km', 'from Mumbai'],
    [3, '~', ' hrs', 'by the Mumbai–Nashik highway'],
    [2100, '~', ' ft', 'in the Western Ghats'],
    [3, '', '', 'villa styles to choose from'],
];

$villas = [
    [
        'id' => 'amora', 'name' => 'Amora Villa', 'tagline' => 'India’s first biophilic villa',
        'blurb' => 'Built to bring nature into every corner, Amora is the villa for slow mornings, private time and a stay that feels like your own.',
        'bullets' => ['Perfect for couples and intimate family stays', 'Private pool access', 'Private garden space with serene views', 'Interiors designed with natural elements'],
        'photos' => [img('/images/home/amora2.webp'), img('/images/stay/amora/amora5.webp'), img('/images/stay/amora/amora4.webp'), img('/images/stay/amora/amora2.webp')],
    ],
    [
        'id' => 'farmsyde', 'name' => 'Farmsyde Villa', 'tagline' => 'Where urban aesthetics meet rural vibes',
        'blurb' => 'Two-storey villas set beside working farmland, with courts, verandas and rooftop machans made for families who want room to spread out and be together.',
        'bullets' => ['Ideal for families and group getaways', 'Private pool', 'Open spaces for connection and togetherness', 'Spacious, comfortable and homely'],
        'photos' => [img('/images/stay/farmsyde/farmsyde1.webp'), img('/images/stay/farmsyde/farmsyde2.webp'), img('/images/stay/farmsyde/farmsyde3.webp')],
    ],
    [
        'id' => 'courtyard', 'name' => 'Courtyard Villa', 'tagline' => 'The soul of Kerala living',
        'blurb' => 'Light, stillness and nature in balance. The Courtyard Villa is built around relaxing and sharing moments, with an infinity pool facing the mountains.',
        'bullets' => ['Infinity pool with scenic mountain views', 'Perfect for relaxation and leisure', 'Nature-inspired living', 'Ideal for shared moments'],
        'photos' => [img('/images/stay/courtyard/courtyard1.webp'), img('/images/stay/courtyard/courtyard2.webp'), img('/images/stay/courtyard/courtyard3.webp'), img('/images/stay/courtyard/courtyard4.webp')],
    ],
];

$matcher = [
    ['A quiet couple’s retreat', 'amora'],
    ['Family time, all together', 'farmsyde'],
    ['Slow, shared moments', 'courtyard'],
];

$gallery = [
    [img('/images/stay/pool.webp'), 'Swimming pool with mountain views at Touchwood Bliss'],
    [img('/images/stay/machan.webp'), 'A machan stay with views over the hills'],
    [img('/images/dining/newfood.jpeg'), 'Pure vegetarian food at Touchwood Bliss'],
    [img('/images/home/rootscafe.webp'), 'Roots Cafe, the nature-integrated cafe'],
    [img('/images/stay/courtyard/courtyard1.webp'), 'Courtyard Villa'],
    [img('/images/stay/farmsyde/farmsyde2.webp'), 'Farmsyde Villa'],
    [img('/images/common/best_nature_stay.webp'), 'Nature-inspired stay at Touchwood Bliss'],
    [img('/images/stay/amora/amora4.webp'), 'Amora Villa, the biophilic villa'],
];

$faqs = [
    ['How far is Igatpuri from Mumbai and Nashik?', 'Touchwood Bliss is about 120 km from Mumbai, roughly a three-hour drive on the Mumbai–Nashik highway, and a short drive from Nashik city. Igatpuri railway station is also well connected if you would rather take a train.'],
    ['When is the best time to spend time at a hill-side second home?', 'The monsoon, from June to September, is the best-known season, when the hills turn green and the waterfalls come alive. October to February brings cool, clear weather that suits long weekends and family celebrations.'],
    ['Will the whole family be comfortable?', 'That is how the place is planned. There is a kids’ play area, indoor and outdoor games, open lawns, bonfire evenings and pet-friendly villas, so nobody has to be left behind.'],
    ['What about food?', 'Touchwood Bliss is a pure vegetarian property, with Jain meals available on request. Dishes begin with ingredients grown on the farm or sourced from trusted local growers, and evenings often slow down at Roots Cafe.'],
    ['What is there to explore nearby?', 'Bhavali Dam, Camel Valley, Vihigaon Waterfall and the trek to Kalsubai, the highest peak in Maharashtra, are all within an easy drive. A guided nature trail also leads to Touchwood Valley, a quiet valley retreat close to the property.'],
    ['How do I find out about current availability and options?', 'Speak to the Touchwood Lifespaces team. Call any of the numbers below or write to invest@touchwoodlifespaces.com and they will walk you through what is currently open.'],
];

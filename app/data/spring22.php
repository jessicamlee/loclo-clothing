<?php 

    require_once(get_project_path('/Classes/FeatureProducts.php'));

    $slip_dress = new FeatureProducts ([
        "image_url" => "pexels-polina-tankilevitch-6945618.jpg",
        "alt" => "Two women in sage silk dresses",
        "name" => "Summer Slip Dress",
        "price" => 85.00,
    ]);

    $classic_hoodie = new FeatureProducts ([
        "image_url" => "pexels-angela-roma-7479835.jpg",
        "alt" => "Two women in black and sand hoodies",
        "name" => "Classic Hoodie",
        "price" => 110.00,
    ]);

    $cropped_tee = new FeatureProducts ([
        "image_url" => "pexels-anna-shvets-4557402.jpg",
        "alt" => "Two women in white tank tops",
        "name" => "Summer Slip Dress",
        "price" => 65.00,
    ]);

    $classic_pullover = new FeatureProducts ([
        "image_url" => "pexels-cottonbro-6626903.jpg",
        "alt" => "Man with pullover and bucket hat",
        "name" => "Classic Pullover",
        "price" => 95.00,
    ]); 

    $classic_tee = new FeatureProducts ([
        "image_url" => "pexels-monstera-6311599.jpg",
        "alt" => "Woman in round-neck tee shirt",
        "name" => "Classic Tee",
        "price" => 60.00,
    ]); 

    $frill_dress = new FeatureProducts ([
        "image_url" => "pexels-polina-kovaleva-5885670.jpg",
        "alt" => "Woman in white dress with frilled edges",
        "name" => "Spring Frill Dress",
        "price" => 90.00,
    ]);

    $spring22collect = [
        $slip_dress,
        $classic_hoodie,
        $cropped_tee,
        $classic_pullover,
        $classic_tee,
        $frill_dress
    ];
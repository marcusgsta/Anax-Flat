<?php
/**
 * Config file for theme selector.
 *
 */
return [

    "separator" => "------------------------------------------------",

    "themes" => [

        "separator0" => "------------------------------------------------",

        "base"      => [
            "title"      => "Minimal style, only the plain base",
            "class"      => "",
            "stylesheets" => [
                "css/modules.min.css"
            ]
        ],

        "default"   => [
            "title"      => "Your own selected default theme",
            "class"      => "",
            "stylesheets" => [
                "css/modules.min.css",
                "css/style.min.css"
            ]
        ],

        "separator01" => "------------------------------------------------",

        "vgrid"      => [
            "title"      => "Vertikalt grid",
            "class"      => "",
            "stylesheets" => [
                "css/vgrid.min.css"
            ]
        ],

        "hgrid"      => [
            "title"      => "Typografiskt grid",
            "class"      => "",
            "stylesheets" => [
                "css/hgrid.min.css"
            ]
        ],

        "separator1" => "------------------------------------------------",

        "light"     =>  [
            "title"      => "Very light theme, white, black and nuances of grey",
            "class"      => "light",
            "stylesheets" => [
              "css/modules.min.css",
              "css/light.min.css"
            ]
        ],

        "color"     => [
            "title"      => "Enhance the light theme by adding a tiny bit of color",
            "class"      => "color",
            "stylesheets" => [
              "css/color.min.css"
            ]
        ],

        "dark"      => [
            "title"      => "Dark background and light text",
            "class"      => "dark",
            "stylesheets" => [
              // "css/modules.min.css",
              "css/dark.min.css"
            ]
        ],

        "colorful"  => [
            "title"      => "Make a very colorful theme",
            "class"      => "colorful",
            "stylesheets" => [
              "css/colorful.min.css"
            ]
        ],

        "typography" => [
            "title"      => "A theme where the typography really stands out",
            "class"      => "light",
            "stylesheets" => [
              "css/typography.min.css"
            ]
        ],

        "separator2" => "------------------------------------------------",

        "fun"       => [
            "title"      => "All fun, test and play, make it stand out!",
            "class"      => "fun",
            "stylesheets" => [
              "css/fun.min.css"
            ]
        ],

        "separator02" => "------------------------------------------------",

        "unity"       => [
            "title"      => "Unity",
            "class"      => "unity",
            "stylesheets" => [
              "css/unity.min.css"
            ]
        ],

        "movement"       => [
            "title"      => "Movement",
            "class"      => "movement",
            "stylesheets" => [
              "css/movement.min.css"
            ]
        ],

        "frame"       => [
            "title"      => "Frame",
            "class"      => "frame",
            "stylesheets" => [
              "css/frame.min.css"
            ]
        ],
    ]
];

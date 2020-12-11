<?php

function get_social() {
    return array(
        array(
            'id' => 'twitter',
            'link' => 'https://twitter.com/SeanJA',
        ),
        array(
            'id' => 'blog',
            'link' => 'http://blog.seanja.com',
        ),
        array(
            'id' => 'github',
            'link' => 'http://github.com/SeanJA/',
        ),
        array(
            'id' => 'strava',
            'link' => 'https://www.strava.com/athletes/7421948',
        ),
        array(
            'id' => 'goodreads',
            'link' => 'http://www.goodreads.com/user/show/5570357-seanja',
        ),
        array(
            'id' => 'stackoverflow',
            'link' => 'http://stackoverflow.com/users/75924/seanja',
        ),
        array(
            'id' => 'bgg',
            'link' => 'http://boardgamegeek.com/user/SeanJA',
        ),
        array(
            'id' => 'steam',
            'link' => 'http://steamcommunity.com/id/SeanJA'
        ),
        array(
            'id' => 'drupal',
            'link' => 'http://drupal.org/user/387072',
        ),
        array(
            'id' => 'flickr',
            'link' => 'http://www.flickr.com/photos/96381253@N00/',
        ),
        array(
            'id' => 'youtube',
            'link' => 'http://www.youtube.com/user/SeanJA',
        ),
        array(
            'id' => 'linkedin',
            'link' => 'http://www.linkedin.com/in/seansandy',
        ),
        array(
            'id' => 'facebook',
            'link' => 'https://www.facebook.com/squirrelhacker',
        ),
    );
}

function get_slogan() {
    $slogans = array(
        'He is on the internets',
        'What are the haps?',
        'He is from the past',
        'A cautionary tale',
        "There's a party at the bottom of the vortex",
        'Clever girl&hellip;',
        '<a title="Pew Pew Pew" href="javascript:var%20s%20=%20document.createElement(\'script\');s.type=\'text/javascript\';document.body.appendChild(s);s.src=\'http://erkie.github.com/asteroids.min.js\';void(0);" id="doit">Pew Pew Pew</a>',
        'Interface 2037 ready for inquiry',
        'Can you dig it?',
        'Who ever heard of a worm skin rug?',
        'Description of website here&hellip;',
        'Kill it with fire!',
        '*{position: relative;} /*all the things!*/',
        'Horizontal Flavor!',
        '<a href="#" onclick="show_helicopter(); return false;">ch-ch-ch-ch-ch</a>',
        'Dexterous mamal',
        '<a target="_blank" href="http://blog.ravis.org/post/22671558317/if-you-try-really-hard-to-fuck-up-a-job-application">The sorrow is yours</a>',
        'A Half-orc-barbarian-wizard-tax-accountant.',
        'Abandon shop! This is not a daffodil!',
        'Not completely incompetant under proper supervision',
        'Space Corps directive <a href="http://en.wikipedia.org/wiki/Space_Corps_Directives#Directives_from_the_TV_Series" target="_blank">1742</a>',
        'Error, unexpected number',
        'I write English in strict K&amp;R',
    );

    $mod =  ((int)date('z')) % count($slogans);

    return $slogans[$mod];
}
<?php
const USER_LOGIN = 'Alan';
const USER_PASS = 'Wake';

$movieDocument = [
    1 => [
        'title' => 'Scream',
        'description' => 'A year after the murder of her mother, a teenage girl is terrorized by a new killer, who targets 
            the girl and her friends by using horror films as part of a deadly game. ... Along with much scary movie trivia, 
            ending with bloody pieces of innocent lives scattered around the small town of Woodsboro.',
        'tags' => ['horror', 'action', 'suspense']
    ],
    2 => [
        'title' => 'Indiana jones last crusade',
        'description' => 'In 1938, after his father Professor Henry Jones, Sr. finds himself up against Adolf Hitler\'s 
            Nazis again to stop them from obtaining its powers.In 1938, after his father Professor Henry Jones, Sr. ... goes 
            missing while pursuing the Holy Grail, Professor Henry "Indiana" Jones, Jr.',
        'tags' => ['action', 'suspense']
    ],
    3 => [
        'title' => 'La cité de la peur',
        'description' => 'The story takes place in the 1990s during the Cannes Film Festival, the projectionists of a bad 
            horror film called Red Is Dead are successively assassinated by a mysterious killer armed with a hammer and a 
            sickle as in the film.',
        'tags' => ['comedy']
    ],
    4 => [
        'title' => 'Die Hard',
        'description' => 'Die Hard follows New York City police detective John McClane (Willis) who is caught up in a 
            terrorist takeover of a Los Angeles skyscraper while visiting his estranged wife. ... The role of McClane was 
            turned down by a host of the decade\'s most popular actors, including Arnold Schwarzenegger and 
            Sylvester Stallone.',
        'tags' => ['action', 'suspense']
    ]
];

if ($_POST['USER_LOGIN'] && $_POST['PASS']) {
    if ($_POST['USER_LOGIN'] === USER_LOGIN) {
        if ($_POST['USER_PASS'] === USER_PASS) {
            return 'Admin page';
        }
    }
}

if ($_POST['movie_id']) {
    $currentMovie = $movieDocument[$_POST['movie_id']];

    // Display current movie
    echo '<div>Ce soir votre film: ' . $currentMovie['title'] . '</div>';
    echo '<div>Description: ' . $currentMovie['description'] . '</div>';
    echo '<div>Genre: ' . $currentMovie['description'];
    foreach ($currentMovie['tags'] as $tag) {
        echo '<tag>' . $tag . '</tag>';
    }
    echo '</div>';
}

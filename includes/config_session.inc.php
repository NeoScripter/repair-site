<?php

ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

session_start();

if (isset($_SESSION["user_id"])) {
    handle_session_regeneration('logged_in');
} else {
    handle_session_regeneration('guest');
}

function handle_session_regeneration($type) {
    $interval = 1800; // 30 minutes

    if (!isset($_SESSION['last_regeneration']) || time() - $_SESSION['last_regeneration'] >= $interval) {
        regenerate_session_id($type);
    }
}

function regenerate_session_id($type) {
    session_regenerate_id(true);
    if ($type === 'logged_in') {
        $userId = $_SESSION["user_id"];
        $newSessionId = session_create_id();
        session_id($newSessionId . "_" . $userId);
    }
    $_SESSION['last_regeneration'] = time();
}

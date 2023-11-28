<?php
$sessionFile = 'active_sessions.txt';
$maxSessions = 3;

function getActiveSessionsCount() {
    global $sessionFile;
    if (file_exists($sessionFile)) {
        $sessions = file($sessionFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        return count($sessions);
    }
    return 0;
}

function isAllowedToStartSession() {
    global $maxSessions;
    return getActiveSessionsCount() < $maxSessions;
}

function registerSession() {
    global $sessionFile;
    if (isAllowedToStartSession()) {
        file_put_contents($sessionFile, session_id() . PHP_EOL, FILE_APPEND | LOCK_EX);
        return true;
    }
    return false;
}

function endSession() {
    global $sessionFile;
    $sessions = file($sessionFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $key = array_search(session_id(), $sessions);
    if ($key !== false) {
        unset($sessions[$key]);
        file_put_contents($sessionFile, implode(PHP_EOL, $sessions), LOCK_EX);
    }
}

session_start();

if (isset($_POST['start_session'])) {
    if (registerSession()) {
        echo "Session started successfully!";
    } else {
        echo "Maximum concurrent sessions reached!";
    }
}

echo "<br>";
echo "Active Sessions: " . getActiveSessionsCount();
?>


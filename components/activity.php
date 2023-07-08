<?php

$context = stream_context_create(
    array(
        "http" => array(
            "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
        )
    )
);

$ghuser = 'isabelroses';
$ghapi_events = 'https://api.github.com/users/' . $ghuser . '/events';

$api_events_result = json_decode((file_get_contents("$ghapi_events", false, $context)), true);

foreach ($api_events_result as $key => $value) {
    if ($value['type'] == 'PushEvent') {
        $repo = $value['repo']['name'];
        $message = end($value['payload']['commits'])['message'];
        $head = $value['payload']['head'];
        $time_given = $value['created_at'];
        break;
    }
}

if (isset($repo)) {
    $time_now = new DateTime("now");
    $time_given = new DateTime($time_given);
    $time_to = $time_given->diff($time_now);

    if ($time_to->format("%y") > 0) {
        $time = $time_to->format("%y years ago");
    } elseif ($time_to->format("%m") > 0) {
        $time = $time_to->format("%m months ago");
    } elseif ($time_to->format("%d") > 0) {
        $time = $time_to->format("%d days ago");
    } elseif ($time_to->format("%h") > 0) {
        $time = $time_to->format("%h hours ago");
    } elseif ($time_to->format("%i") > 0) {
        $time = $time_to->format("%i minutes ago");
    }

    echo "<p>Latest commit: <a href='https://github.com/$repo'>$repo</a>, $time:
    </br><a href='https://github.com/$repo/commit/$head'>$message</a></p>";
} else {
    echo "Failed to retrieve latest commit";
}

<?php

header('X-Frame-Options: DENY');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Strict-Transport-Security: max-age=63072000');
header('Content-type:application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
header('X-Robots-Tag: noindex, nofollow', true);

require('functions.php');
require('randomagent.php');

$url = '';
$trim = '';
$match_url = '';
$msg = [];
$score= [];

if(isset($_GET['url'])){
    $url = $_GET['url'];
}

try
{

    if (empty($url))
    {
        throw new Exception('false');
    }

    $trim = $url;
    $match_url = str_replace('www','m',$trim);

    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_URL, $match_url);
    curl_setopt( $ch, CURLOPT_POST, false);
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt( $ch, CURLOPT_FRESH_CONNECT, 1);
    curl_setopt( $ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    curl_setopt( $ch, CURLOPT_ENCODING, 'gzip');
    curl_setopt( $ch, CURLOPT_TIMEOUT, 20);
    curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt( $ch, CURLOPT_USERAGENT, $randoagent);
    curl_setopt( $ch, CURLOPT_HEADER, false);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    curl_close($ch);
    $html_encoded = htmlentities($data);

    $msg['success'] = true;

    if ($string = getTitle($data))
    {   

        $msg['livescore']['title'] = $string;

    } elseif ($string == null)
    {
        $msg['livescore']['title'] = 'Data Not Found';

    } else {

        $msg = false;
    }

    if ($string = getLive($data))
    {   

        $msg['livescore']['current'] = $string;

    } elseif ($string == null)
    {
        $msg['livescore']['current'] = 'Data Not Found';

    } else {

        $msg = false;
    }

    if ($string = getBatBowl($data))
    {   

        $msg['livescore']['batsman'] = isset($string[0]) ? $string[0] : 'Data Not Found';

    } elseif ($string == null)
    {
        $msg['livescore']['batsman'] = 'Data Not Found';

    } else {

        $msg = false;
    }

    if ($string = getBatRun($data))
    {   

        $msg['livescore']['batsmanrun'] = isset($string[0]) ? $string[0] : 'Data Not Found';

    } elseif ($string == null)
    {
        $msg['livescore']['batsmanrun'] = 'Data Not Found';

    } else {

        $msg = false;
    }

    if ($string = getBatRuns($data))
    {   

        $msg['livescore']['ballsfaced'] = isset($string[0]) ? $string[0] : 'Data Not Found';

    } elseif ($string == null)
    {
        $msg['livescore']['ballsfaced'] = 'Data Not Found';

    } else {

        $msg = false;
    }

    if ($string = getBowleruns($data))
    {   

        $msg['livescore']['fours'] = isset($string[0]) ? $string[0] : 'Data Not Found';

    } elseif ($string == null)
    {
        $msg['livescore']['fours'] = 'Data Not Found';

    } else {

        $msg = false;
    }

    if ($string = getBowleruns($data))
    {   

        $msg['livescore']['sixes'] = isset($string[1]) ? $string[1] : 'Data Not Found';

    } elseif ($string == null)
    {
        $msg['livescore']['sixes'] = 'Data Not Found';

    } else {

        $msg = false;
    }

    if ($string = getBatBowl($data))
    {   

        $msg['livescore']['bowler'] = isset($string[2]) ? $string[2] : 'Data Not Found';

    } elseif ($string == null)
    {
        $msg['livescore']['bowler'] = 'Data Not Found';

    } else {

        $msg = false;
    }

    if ($string = getBowlerover($data))
    {   

        $msg['livescore']['bowlerover'] = isset($string[0]) ? $string[0] : 'Data Not Found';

    } elseif ($string == null)
    {
        $msg['livescore']['bowlerover'] = 'Data Not Found';

    } else {

        $msg = false;
    }

    if ($string = getBowleruns($data))
    {   

        $msg['livescore']['bowlerruns'] = isset($string[5]) ? $string[5] : 'Data Not Found';

    } elseif ($string == null)
    {
        $msg['livescore']['bowlerruns'] = 'Data Not Found';

    } else {

        $msg = false;
    }

    if ($string = getBowlerwickets($data))
    {   

        $msg['livescore']['bowlerwickets'] = isset($string[0]) ? $string[0] : 'Data Not Found';

    } elseif ($string == null)
    {
        $msg['livescore']['bowlewickets'] = 'Data Not Found';

    } else {

        $msg = false;
    }

    if ($string = getTimeline($data))
    {   

        $msg['livescore']['timeline'] = isset($string[2]) ? $string[2] : 'Data Not Found';

    } elseif ($string == null)
    {
        $msg['livescore']['timeline'] = 'Data Not Found';

    } else {

        $msg = false;
    }


    if ($string = getRunrate($data))
    {   

        $clear_json = str_replace("&nbsp;", " ", $string);
        $runrate = trim(preg_replace('/\s+/', ' ', $clear_json));
        $msg['livescore']['runrate'] = $runrate;

    } elseif ($string == null)
    {
        $msg['livescore']['runrate'] = 'Data Not Found';

    } else {

        $msg = false;
    }

    if ($string = getTeamOne($data))
    {   

        $msg['livescore']['teamone'] = $string;

    } elseif ($string == null)
    {
        $msg['livescore']['teamone'] = 'Data Not Found';

    } else {

        $msg = false;
    }

    if ($string = getTeamTwo($data))
    {   

        $msg['livescore']['teamtwo'] = $string;

    } elseif ($string == null)
    {
        $msg['livescore']['teamtwo'] = 'Data Not Found';

    } else {

        $msg = false;
    }

    if ($string = getDetails($data))
    {   

        $msg['livescore']['update'] = $string;

    } elseif ($string == null)
    {
        $msg['livescore']['update'] = 'Data Not Found';

    } else {

        $msg = false;
    }

      echo json_encode($msg, JSON_PRETTY_PRINT);
}

catch(Exception $e)
{
    echo $e->getMessage();
}

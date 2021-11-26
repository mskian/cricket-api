<?php

function getTeamOne($curl_content)
{
    $regexRateLimit = "|<span class='ui-allscores ui-bowl-team-scores'>([^<]*)<br></span>|i";
    $regexSrc = "|<span class='ui-allscores ui-bowl-team-scores'>([^<]*)<br></span>|i";

    if (preg_match($regexRateLimit, $curl_content, $match))
    {
        return $match[1];
    }
    elseif (preg_match($regexSrc, $curl_content, $match))
    {
        return $match[1];
    }
    else
    {
        return false;
    }
}

function getTeamTwo($curl_content)
{
    $regexRateLimit = "|<span class='ui-allscores ui-bat-team-scores'>([^<]*)</span>|i";
    $regexSrc = "|<span class='ui-allscores ui-bat-team-scores'>([^<]*)</span>|i";

    if (preg_match($regexRateLimit, $curl_content, $match))
    {
        return $match[1];
    }
    elseif (preg_match($regexSrc, $curl_content, $match))
    {
        return $match[1];
    }
    else
    {
        return false;
    }
}

function getDetails($curl_content)
{
    $regexRateLimit = "|<div class='cbz-ui-status'>([^<]*)</div>|i";
    $regexSrc = "|<div class='cbz-ui-status'>([^<]*)</div>|i";

    if (preg_match($regexRateLimit, $curl_content, $match))
    {
        return $match[1];
    }
    elseif (preg_match($regexSrc, $curl_content, $match))
    {
        return $match[1];
    }
    else
    {
        return false;
    }
}

function getLive($curl_content)
{
    $regexRateLimit = "|<span class='miniscore-teams ui-bat-team-scores'>([^<]*)</span>|i";
    $regexSrc = "|<span class='miniscore-teams ui-bat-team-scores'>([^<]*)</span>|i";

    if (preg_match($regexRateLimit, $curl_content, $match))
    {
        return $match[1];
    }
    elseif (preg_match($regexSrc, $curl_content, $match))
    {
        return $match[1];
    }
    else
    {
        return false;
    }
}

function getTitle($curl_content)
{
    $regexRateLimit = '|<h4 class="cb-list-item ui-header ui-branding-header">([^<]*)</h4>|i';
    $regexSrc = '|<h4 class="cb-list-item ui-header ui-branding-header">([^<]*)</h4>|i';

    if (preg_match($regexRateLimit, $curl_content, $match))
    {
        return $match[1];
    }
    elseif (preg_match($regexSrc, $curl_content, $match))
    {
        return $match[1];
    }
    else
    {
        return false;
    }
}

function getRunrate($curl_content)
{
    $regexRateLimit = "|<span class='crr'>([^<]*)</span>|i";
    $regexSrc = "|<span class='crr'>([^<]*)</span>|i";

    if (preg_match($regexRateLimit, $curl_content, $match))
    {
        return $match[1];
    }
    elseif (preg_match($regexSrc, $curl_content, $match))
    {
        return $match[1];
    }
    else
    {
        return false;
    }
}

function getBatBowl($curl_content)
{
    $regexRateLimit = "|<span class='bat-bowl-miniscore'>([^<]*)</span>|i";
    $regexSrc = "|<span class='bat-bowl-miniscore'>([^<]*)</span>|i";

    if (preg_match_all($regexRateLimit, $curl_content, $match))
    {
        return $match[1];
    }
    elseif (preg_match_all($regexSrc, $curl_content, $match))
    {
        return $match[1];
    }
    else
    {
        return false;
    }
}

function getBatRuns($curl_content)
{
    $regexRateLimit = "|<span style='font-weight:normal'>([^<]*)</span>|i";
    $regexSrc = "|<span style='font-weight:normal'>([^<]*)</span>|i";

    if (preg_match_all($regexRateLimit, $curl_content, $match))
    {
        return $match[1];
    }
    elseif (preg_match_all($regexSrc, $curl_content, $match))
    {
        return $match[1];
    }
    else
    {
        return false;
    }
}

function getBatRun($curl_content)
{
    $regexRateLimit = '|<td colspan="1" class="cbz-grid-table-fix " style="width:20%;" ><b>([^<]*)|i';
    $regexSrc = '|<td colspan="1" class="cbz-grid-table-fix " style="width:20%;" ><b>([^<]*)|i';

    if (preg_match_all($regexRateLimit, $curl_content, $match))
    {
        return $match[1];
    }
    elseif (preg_match_all($regexSrc, $curl_content, $match))
    {
        return $match[1];
    }
    else
    {
        return false;
    }
}

function getBowlerover($curl_content)
{
    $regexRateLimit = '|<td colspan="1" class="cbz-grid-table-fix " style="width:20%;" >([^<]*)</td>|i';
    $regexSrc = '|<td colspan="1" class="cbz-grid-table-fix " style="width:20%;" >([^<]*)</td>|i';

    if (preg_match_all($regexRateLimit, $curl_content, $match))
    {
        return $match[1];
    }
    elseif (preg_match_all($regexSrc, $curl_content, $match))
    {
        return $match[1];
    }
    else
    {
        return false;
    }
}

function getTimeline($curl_content)
{
    $regexRateLimit = "|<span style='color:#333'>([^<]*)</span>|i";
    $regexSrc = "|<span style='color:#333'>([^<]*)</span>|i";

    if (preg_match_all($regexRateLimit, $curl_content, $match))
    {
        return $match[1];
    }
    elseif (preg_match_all($regexSrc, $curl_content, $match))
    {
        return $match[1];
    }
    else
    {
        return false;
    }
}

function getBowleruns($curl_content)
{
    $regexRateLimit = '|<td colspan="1" class="cbz-grid-table-fix " style="width:11%;" >([^<]*)</td>|i';
    $regexSrc = '|<td colspan="1" class="cbz-grid-table-fix " style="width:11%;" >([^<]*)</td>|i';

    if (preg_match_all($regexRateLimit, $curl_content, $match))
    {
        return $match[1];
    }
    elseif (preg_match_all($regexSrc, $curl_content, $match))
    {
        return $match[1];
    }
    else
    {
        return false;
    }
}

function getBowlerwickets($curl_content)
{
    $regexRateLimit = '|<td colspan="1" class="cbz-grid-table-fix " style="width:18%;" ><b>([^<]*)</b></td>|i';
    $regexSrc = '|<td colspan="1" class="cbz-grid-table-fix " style="width:18%;" ><b>([^<]*)</b></td>|i';

    if (preg_match_all($regexRateLimit, $curl_content, $match))
    {
        return $match[1];
    }
    elseif (preg_match_all($regexSrc, $curl_content, $match))
    {
        return $match[1];
    }
    else
    {
        return false;
    }
}

function getCommentary($curl_content)
{
    $regexRateLimit = "|<p class='commtext'>([^<]*)</p>|i";
    $regexSrc = "|<p class='commtext'>([^<]*)</p>|i";

    if (preg_match_all($regexRateLimit, $curl_content, $match))
    {
        return $match[1];
    }
    elseif (preg_match_all($regexSrc, $curl_content, $match))
    {
        return $match[1];
    }
    else
    {
        return false;
    }
}

function getSR($curl_content)
{
    $regexRateLimit = '|<td colspan="1" class="cbz-grid-table-fix " style="width:18%;" >([^<]*)</td>|i';
    $regexSrc = '|<td colspan="1" class="cbz-grid-table-fix " style="width:18%;" >([^<]*)</td>|i';

    if (preg_match_all($regexRateLimit, $curl_content, $match))
    {
        return $match[1];
    }
    elseif (preg_match_all($regexSrc, $curl_content, $match))
    {
        return $match[1];
    }
    else
    {
        return false;
    }
}

?>
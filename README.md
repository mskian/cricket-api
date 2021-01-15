# Free Cricket API 🍔

Live Cricket Score API 🏏

unofficial API Data Fetched from `Cricbuzz.com`

This is an unofficial API and not Linked or Partnered with Any Brands/Company.

## How it Works? 🤔

We are just fetching the data from Cricbuzz using PHP cURL `preg_match` and `preg_math_all`. It's kind of scraping but we are not storing any data or link in our end.

Everything is scraped live and shown to end users in realtime.

**API URL**

```sh
https://cricket-api.vercel.app/cri.php?url=<Live Match URL>
```

## Requirements 📑

- Server with PHP Support  
- PHP 7.2 or 7.3 or 7.4  
- PHP cURL  
- Nginx, Apache2 or  Lightspeed  
- HTTPS (For Secure SSL Connections)  

## Installation 🍯

- Download or Clone Repo to your Server

```sh
git clone https://github.com/mskian/cricket-api.git
```

- Install the API Separately on your server
- Download or clone the script in `/var/www/`
- Server Root Directory Pointed to script folder (Different on Some Hostings and server)

```sh
/var/www/cricket-api/cri ## Script Folder
```

## Usage 🍟

- Get the Live Match Score URL from - `https://www.cricbuzz.com/cricket-match/live-scores`
- Enter them Directly or replace `www` with `m`

### Example 📋

```sh
https://cri.example.com/cri.php?url=https://www.cricbuzz.com/live-cricket-scores/30524/53rd-match-indian-premier-league-2020
```

(OR)

```sh
https://cri.example.com/cri.php?url=https://m.cricbuzz.com/live-cricket-scores/30524/53rd-match-indian-premier-league-2020
```

### Example Response 🌐

![Cricket API](https://raw.githubusercontent.com/mskian/cricket-api/main/images/screenshot1.png)  

```json
{
    "success": true,
    "livescore": {
        "title": "Sunrisers Hyderabad vs Mumbai Indians, 56th Match",
        "current": "SRH - 145\/0 (16.2)",
        "batsman": "Wriddhiman Saha*",
        "batsmanrun": "57",
        "ballsfaced": "(43)",
        "fours": "7",
        "sixes": "1",
        "bowler": "Nathan Coulter-Nile*",
        "bowlerover": "3.2",
        "bowlerruns": "25",
        "bowlerwickets": "0",
        "partnership": "145(98)",
        "recentballs": "Data Not Found",
        "lastwicket": "... 0 0 4 1 | 0 4 1 1 0 1 | 1 0",
        "runrate": "CRR: 8.88",
        "commentary": [
            "16.2 Coulter-Nile to W Saha, no run, 139.1kph, ",
            "16.1 Coulter-Nile to Warner, 1 run, 124.4kph, length, nipping in off the pitch onto middle. Warner makes room and slaps it to deep point ",
            "15.5 Pattinson to Warner, no run, 139.7kph, backs away, cuts, but ends up miscuing it back down the pitch ",
            "15.4 Pattinson to W Saha, 1 run, swivels, one-legged, pulling it to the man in the deep behind square ",
            "15.3 Pattinson to Warner, 1 run, 118.2kph, back of a length, taking pace off, keeping it outside off for Warner to have to reach out. And he does connect this time, to guide it to third man ",
            "15.1 Pattinson to Warner, no run, 134.5kph, full, outside off, quick, just inside the tramline. Warner stretches, but can't quite connect ",
            "14.6 Coulter-Nile to Warner, 1 run, 130.6kph, length, nips back in, and Warner jumps away at the last moment with an opened bat face to steer it through point ",
            "14.4 Coulter-Nile to Warner, no run, skids through as it seams back in sharply to go under Warner's crouched swat, thudding off his thighs towards backward point ",
            "14.3 Coulter-Nile to Warner, no run, 136.4kph, serious bouncer, climbing back in. Nope, it's the circumstances that determines its ferocity, and with an 18 runs | 33 balls equation, this is gently left alone ",
            "14.2 Coulter-Nile to W Saha, 1 run, 136.9kph, full, on middle with the angle-in. Saha goes wristy, through mid-wicket ",
            "14.1 Coulter-Nile to W Saha, no run, 117kph, in-cutter into the tummy. Saha gets cramped in what looked like an initial attempt to cut, and so drops his wrists, opens his bat face and runs out to short third man ",
            "13.6 D Kulkarni to Warner, 2 runs, 105.4kph, and very comfortable. Around the fourth-stump, which Warner lines up to and punches through point ",
            "13.5 D Kulkarni to W Saha, 1 run, 127.6kph, full, on off, quiet flick, long-on "
        ],
        "teamone": "Data Not Found",
        "teamtwo": "Data Not Found",
        "update": "Sunrisers Hyderabad need 5 runs in 22 balls"
    }
}
```

## Code Examples ☕

- WordPress

```php
## API Auth and Get data
function display_api_response() {
  $base_url = 'https://YOUR-API-Domain.com/cri.php?url=';
  $score_path = 'https://www.cricbuzz.com/live-cricket-scores/30524/53rd-match-indian-premier-league-2020';
  $url = $base_url.$score_path;
  $response = wp_remote_get($url);
  global $body;
  $body = json_decode( $response['body'], true );
}
add_action( 'init', 'display_api_response' );
```

Replace `YOUR-API-Domain` with your actual API Domain

- Fetch API (Javascript)

```js
var url = 'https://www.cricbuzz.com/live-cricket-scores/30524/53rd-match-indian-premier-league-2020';

async function fetchscore() {
    try {
        const response = await fetch('https://api.example.com/cri.php?url=' + url);
        const data = await response.json();
        console.log(data);
    } catch (exception) {
        console.log('Connection issue');
    }
}
fetchscore();
```

## Development 🍩

```sh
git clone https://github.com/mskian/cricket-api.git
cd cricket-api
cd cri
php -S localhost:3001
```

## Contributing 🙌

Your PR's are Welcome

## Disclaimer 🗃

- This is not an Offical API from Cricbuzz - it's an Unofficial API
- This is for Education Purpose only - use at your own risk on Production Site

All Credits Goes to <https://www.cricbuzz.com/>

## My other Projects 🤓

| # | Project Name | Description |
|---|:------|-------------|
| 01 | [Live Cricket Score Static Site](https://github.com/mskian/livescore) | A Simple Scrape Method - Fetch the Live Cricket Score from `espncricinfo.com` using Nodejs and Cheerio.js |
| 02 | [IPL Special](https://github.com/mskian/iplscore) | Cricket API for Get the Live IPL Cricket Score |
| 03 | [Live IPL Score Update on Telegram](https://github.com/mskian/score-update) | Get Live IPL cricket Score on Telegram  |
| 04 | [Live Cricket Score Wordpress Plugin (JS Version)](https://github.com/mskian/hello-cricket) | Get Live Cricket Score on Wordpress site call API using Javascript Fetch API |
| 05 | [Live Cricket Score Wordpress Plugin (Wp Remote URL)](https://github.com/mskian/san-cricket) | Get Live Cricket Score on Wordpress site call API using Wordpress HTTP Remote URL |  
| 06 | [PWA Web App](https://github.com/mskian/vue-cricket) | Real-time Live Cricket Score Web app + PWA Built using Nuxt.js |  

## LICENSE 📕

MIT

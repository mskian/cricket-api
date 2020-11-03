# Cricket API 🍔

Live Cricket Score API 🏏

unofficial API Data Fetched from `Cricbuzz.com`

This is an unofficial API and not Linked or Partnered with Any Brands/Company.

## How it Works? 🤔

We are just fetching the data from Cricbuzz using PHP cURL `preg_match` and `preg_math_all`. It's kind of scraping but we are not storing any data or link in our end.

Everything is scraped live and shown to end users in realtime.

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

### Example

```sh
https://cri.example.com/cri.php?url=https://www.cricbuzz.com/live-cricket-scores/30524/53rd-match-indian-premier-league-2020
```

(OR)

```sh
https://cri.example.com/cri.php?url=https://m.cricbuzz.com/live-cricket-scores/30524/53rd-match-indian-premier-league-2020
```

### Example Response

![Cricket API](https://raw.githubusercontent.com/mskian/cricket-api/main/images/screenshot.png)  

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

## LICENSE 📕

MIT

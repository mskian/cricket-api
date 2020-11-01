# Cricket API 🍔

Live Cricket Score API 🏏

unofficial API Data Fetched from `Cricbuzz.com`

This is an unofficial API and not Linked or Partnered with Any Brands/Company.

## How it Works? 🤔

We Just Fetch the Certain data from Cricbuzz using PHP cURL `Preg_match` and `preg_match_all` in other word we can say this as Scraping but here we not store any data's or link the Cricbuzz in our Script.

We Just access the Live Score URL via cURL & Get the Certain data's from the Webpage.

## Requirements 📑

- Server with PHP Support  
- PHP 7.2 or 7.3 or 7.4  
- PHP cURL  
- Nginx, Apache2 or  Lightspeed  
- HTTPS (For Secure SSL Secure Connections)  

## Installation 🍯

- Download or Clone Repo to your Server

```sh
git clone https://github.com/mskian/cricket-api.git
```

- install the API Separately on your server
- Download or clone the script in `/var/www/`
- Server Root Directory Pointed to script folder (Different on Some Hostings and server)

```sh
/var/www/cricket-api/cri ## Script Folder
```

## Usage 🍟

- Get the Live Match Score URL from - `https://www.cricbuzz.com/cricket-match/live-scores`
- Enter them Directly or replace `www` with `m`

#### Example

```sh
https://cri.example.com/cri.php?url=https://www.cricbuzz.com/live-cricket-scores/30524/53rd-match-indian-premier-league-2020
```

(OR)

```sh
https://cri.example.com/cri.php?url=https://m.cricbuzz.com/live-cricket-scores/30524/53rd-match-indian-premier-league-2020
```

#### Example Response

![Cricket API](https://raw.githubusercontent.com/mskian/cricket-api/main/images/screenshot.png)  

## Code Examples ☕

- Wordpress

```php
## API Auth and Get data
function display_api_response() {
  $base_url = 'https://api.example.com/cri.php?url=';
  $score_path = 'https://www.cricbuzz.com/live-cricket-scores/30524/53rd-match-indian-premier-league-2020';
  $url = $base_url.$score_path;
  $response = wp_remote_get($url);
  global $body;
  $body = json_decode( $response['body'], true );
}
add_action( 'init', 'display_api_response' );
```

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

- This is Not an Offical API from Cricbuzz - it's an unofficial API
- This is for Education Purpose only - use at your own risk on Production Site

All Credits Goes to <https://www.cricbuzz.com/>

## LICENSE 📕

MIT

import sys
import json
import time
import requests
from halo import Halo

spinner = Halo(text='Loading...', color='green', spinner='hamburger')

try:
    spinner.start()
    time.sleep(2)
    spinner.text = 'Fetching Live Score...'
    r = requests.get('http://localhost:6001/live.php')
    DATA = json.loads(r.content.decode())
    time.sleep(2)
    spinner.stop()
except json.decoder.JSONDecodeError as e:
    spinner.start()
    time.sleep(2)
    spinner.color = 'red'
    spinner.text = 'JSON Decode Error'
    time.sleep(2)
    spinner.stop()
    print("OOPS!! JSON Decode Error")
except requests.ConnectionError as e:
    spinner.start()
    time.sleep(2)
    spinner.color = 'red'
    spinner.text = 'URL Error - Empty URL or Wrong URL'
    time.sleep(2)
    spinner.stop()
    print("OOPS!! Connection Error")
except requests.Timeout as e:
    print("OOPS!! Timeout Error")
except requests.RequestException as e:
    spinner.start()
    time.sleep(2)
    spinner.color = 'red'
    spinner.text = 'Wrong URL or Empty Field'
    time.sleep(2)
    spinner.stop()
    print("OOPS!! General Error")
except (KeyboardInterrupt, SystemExit):
    spinner.stop()
    print("Ok ok, quitting")
    sys.exit(1)
else:
    if DATA["livescore"]["current"] == "Data Not Found":
        print("Currently No Live Match")
    else:
        print("Match:", DATA["livescore"]["title"], "\nStatus:", DATA["livescore"]["update"], "\nCurrent Score:", DATA["livescore"]["current"])

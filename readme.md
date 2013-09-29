# Twine temperature

This code fetches JSON from your public twine device, and displays it on a clean HTML page.

## Usage
Your Twine needs to be publically available for this code to work. On the twine you with to get the temperature from, click the share button, and make shure that "Let others view my data" is checked. Next you need to find your Twine's ID and the access key. If you click the "Email a link"-button you will see an URL that looks something like this:

    https://twine.cc/0000000aa1bbb2cc/widget/?access_key=111111a2222b3ccc333333d444ee

The first part after "twine.cc/" is your Twine's ID. The numbers and letters after "access_key=" is your access key. Substitute these in the code, and everything should work.
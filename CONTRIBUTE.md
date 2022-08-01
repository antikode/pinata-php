### Contribution:
Add this line at your composer.json files and change the URL to the package.
```json
{
  "repositories": {
    "pinata-cloud": {
        "type": "path",
        "url": "/home/masiting/Codes/PHP/Packages/pinata-php",
        "options": {
            "symlink": true
        }
    }
  }
}
```
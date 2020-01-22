# WhiteLabel

Set a custom logo for [Cockpit CMS][1]. Maybe I'll add some more options in the future. 

## Installation

Copy this repository into `/addons` and name it `WhiteLabel` or

```bash
cd path/to/cockpit
git clone https://github.com/raffaelj/cockpit_WhiteLabel.git addons/WhiteLabel
```

## Configuration

Upload an image, copy it's url and set a config variable in `/config/config.yaml`.

```yaml
whitelabel:
    logo: "#uploads:2019/11/08/5dc548b41c0cdlogo.png"
    logoWidth: 8em    # optional, default: 30px
    logoHeight: 3em   # optional, default: 30px
    hideName: true    # hide app name
```

I didn't write a user interface, because normally you do this task once and forget about it.

The logo url can be in the following formats

* internal paths (my favourite, because it works on local and production host without changes)
  * `#uploads:2019/11/08/5dc548b41c0cdlogo.png`
  * `assets:app/media/icons/code.svg`
* full url
  * `https://example.com/storage/uploads/2019/11/08/5dc548b41c0cdlogo.png`
  * `https://example.com/logo.png`
* relative path to site url
  * `/logo.png`
* full path
  * `/var/www/virtual/username/html/storage/uploads/2019/11/08/5dc548b41c0cdlogo.png`
  * `/var/www/virtual/username/html/logo.png`

[1]: https://github.com/agentejo/cockpit/

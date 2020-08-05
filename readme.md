# Shoreline Refresh

## Development

- `cd ~/Homestead`
- `vagrant up`
- `vagrant ssh` - log in to vagrant
- `cd code/test`
- `npm run watch` or  `npm run watch-poll` - Watch and compile changes, must be done from vagrant server
- use `http://localhost:3000/` for dev

### Put on Github:

- `rm -rf docs`
- `npm run prod`
- `npm run docs`

### Autoprefixed CSS

- Uncomment lines 21-26 in webpack.mix.js (postCss)
- `npm run prod`
- Get CSS from assets/css/main-support.css
- Comment lines 21-26 in webpack.mix.js (postCss)

### Stylelinting
- All .scss comments should be on their own line to prevent bugs
- `npx stylelint source/_assets/sass/FILE.scss --fix` to autofix
 
## New Dev Environments

- Install Vagrant and VirtualBox per [Laravel Homestead guide](https://laravel.com/docs/5.6/homestead), currently using Ubuntu 16.04.3 LTS (GNU/Linux 4.4.0-112-generic x86_64)
- `cd ~/Homestead`
- `vagrant up` (and if everything's missing reload provision)
- Add site path (homestead.test) to /etc/hosts`192.168.10.10 shoreline.test`
- Add path to /etc/hosts 
- `npm install` or see Windows (below) if errors
- `composer install` (untested)

### Windows:

- Add site path to C:\Windows\System32\drivers\etc\hosts
- `npm install --no-bin-links` from Windows bash (or `npm update --no-bin-links` for updates)
- `sudo npm rebuild node-sass --no-bin-links` from Vagrant bash  
- `browser-sync start -p "shoreline.test" -f "build_local, assets"` from Windows bash (http://localhost:3000/)
- Add to vagrant file: `config.vm.network :forwarded_port, guest: 3000, host: 3000, auto_correct: true` (reload prov)
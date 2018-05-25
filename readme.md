# Shoreline Refresh

## Development

- `cd ~/Homestead`
- `vagrant up`
- `vagrant ssh` - log in to vagrant
- `cd code/test`
- `$ ./vendor/bin/jigsaw serve`
- `npm run watch` - Watch and compile changes, must be done from vagrant server
 
## New Dev Environments

- Install Vagrant and VirtualBox per [Laravel Homestead guide](https://laravel.com/docs/5.6/homestead)
- `cd ~/Homestead`
- `vagrant up` (and if everything's missing reload provision)
- Add site path (homestead.test) to /etc/hosts (C:\Windows\System32\drivers\etc\hosts):  `192.168.10.10 shoreline.test`
- Add path to /etc/hosts 
- `npm install` or see Windows (below) if errors
- `composer install` (untested)

Windows:

- `npm install --no-bin-links` from Windows bash  
- `sudo npm rebuild node-sass --no-bin-link` from Vagrant bash  
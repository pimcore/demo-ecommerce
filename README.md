# ecommerce-demo
E-Commerce Demo Application


TODOs for install (will we improved)
- download zip and unzip it into /install-profiles/demo-ecommerce
- modify `web/install.php` and add entry in order to be able to select ecommerce-demo during install - to do so 
  add following line to store in line 434: ["demo-ecommerce", "Ecommerce Demo Applikation"] 
- install Pimcore
- run composer update (in order to add additional packages)
- add `validLanguages` in `var/config/system.php` (`en_GB`, `de_AT`)
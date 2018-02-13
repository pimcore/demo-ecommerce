# Ecommerce-Demo for Pimcore 5

E-Commerce Demo Application for Pimcore 5.

## Caveats (will be improved)

**Important** : in order to install this profile, your DB and DB user needs to support the `LOAD DATA INFILE` command. See
the following issues for details:

* https://github.com/pimcore/demo-ecommerce/issues/1 
* https://github.com/pimcore/demo-ecommerce/issues/5

## Installation

* Download latest [Pimcore 5 build](https://www.pimcore.org/download-5/pimcore-unstable.zip)
* Install this package via composer:

  ```
  $ composer require pimcore/demo-ecommerce --no-scripts
  ```

* Install Pimcore (via web or CLI installer) - it should now list this install profile as available
* If you want to use the AdvancedObjectSearchBundle, you need to make sure to have an elastic search instance available and update 
the config file `/app/config/pimcore/advancedobjectsearch/config.php` respectively. If not, you can deactivate the bundle to avoid problems when creating, updating or deleting objects.


## Useful Hints

If MySQL cannot acceess your project folder due to permission issues, this might help: https://bbs.archlinux.org/viewtopic.php?id=227181
``` bash
 mkdir /etc/systemd/system/mariadb.service.d
 cd /etc/systemd/system/mariadb.service.d
 pico -w load_data.conf
```
Insert following content
```
[Service]

# Override default directive with prevents  accessing /home, /root and /run/user
ProtectHome=false
```

```bash
systemctl daemon-reload
systemctl restart mysqld
```

How to install and use Backup and Migrate Module for restoring database class files throughout course

Backup and Migrate simplifies the task of backing up and restoring your Drupal database or copying your database from one Drupal site to another. It supports gzip, bzip and zip compression as well as automatic scheduled backups.

With Backup and Migrate you can dump some or all of your database tables to a file download or save to a file on the server, and to restore from an uploaded or previously saved database dump. You can chose which tables and what data to backup and cache data is excluded by default.

http://drupal.org/project/backup_migrate


Directions
-------------------

Downloading, installing and enabling Backup Migrate module
1) Browse to http://drupal.org/project/backup_migrate
2) Download the latest Drupal 7 version of module
3) Browse to http://samoca:8082/admin/modules
4) Choose "Install new module" link
5) Choose Browse from the "Upload a module or theme archive to install"
6) Select the backup_migrate module file you downloaded
7) Click the "Install" button
8) Click "Enable newly added modules"
9) Scroll down to "Other" fieldset and check "Backup and Migrate"
10)Click "Save Configuration" button

Setting Permissions to Backup Migrate Module
1) From Modules interface, click "Permissions" next to "Backup and Migrate"
2) Confirm that "Administrator" role has permissions to use Backup and Migrate module

Configuring Backup Migrate Module
1) Browse to http://samoca:8082/admin/config/system/backup_migrate
2) Review various options

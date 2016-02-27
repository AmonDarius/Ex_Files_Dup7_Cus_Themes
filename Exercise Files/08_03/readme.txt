How to enable caching and future caching solutions

1) Browse to samoca:8082/admin/config/development/performance
2) Under Caching - Check "Cache pages for anonymous users" and  "Cache blocks"
3) Under "Minimum cache lifetime" choose 1 hour
4) Under "Expiration of cached pages" choose 3 hours
5) Click "Save configuration"

APC - Alternative PHP Cache
---------------------------
http://drupal.org/project/apc

The Alternative PHP Cache (APC) is a free and open opcode cache for PHP. Its goal is to provide a free, open, and robust framework for caching and optimizing PHP intermediate code. Besides a opcode cache it provides a user cache for storing application data. This module uses the APC user cache as a cache backend for Drupal.

Pressflow 7
----------------------------
 - http://fourkitchens.com/pressflow-makes-drupal-scale

Pressflow is a distribution of Drupal with integrated performance, scalability, availability, and testing enhancements.
Pressflow addresses a long-standing problem: High-traffic sites use stable versions of Drupal, and stable versions of Drupal are ineligible for enhancements to solve performance bottlenecks discovered after widespread deployment.

Memcache
-----------------------------
http://memcached.org/

Free & open source, high-performance, distributed memory object caching system, generic in nature, but intended for use in speeding up dynamic web applications by alleviating database load.

Varnish
-----------------------------
https://www.varnish-cache.org/

Varnish Cache is an open source, state of the art web application accelerator. It is installed in front of your webserver where it will cache the content, resulting in a huge performance boost.

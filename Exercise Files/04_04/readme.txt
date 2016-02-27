Explain how theme registry works to cache output and how to clear the cache

The theme registry
-------------------

Drupal's theme registry maintains cached data on the available theming hooks and how to handle them.

For most theme developers, the registry does not have to be dealt with directly. Just remember to clear it when adding or removing theme functions and templates. Editing existing functions and templates does not require a registry rebuild.

To clear the theme registry, do one of the following things:

1) Browse to http://samoca:8082/admin/config/development/performance
2) Click "Clear all caches" button from the Clear Cache fieldset

If you have the Admin Menu toolbar module enabled:
1) Click on the "Flush all caches" link under the Drupal Icon on the Admin Menu Toolbar.

How to deactivate and uninstall theming tool modules

Once our site is ready for production there are some basic steps that we need to make sure we perform to guarantee that our site runs as fast as it can.
This begins with deactivating and uninstalling modules that were used for development but not needed in production.

1) Browse to your Modules Administration page and uncheck the Theme Developer Module and click "Save configuration"
2) Next uncheck the "Devel" module and click "Save configuration"
3) Next click on the "Uninstall Tab" and check all options and click "Uninstall"
4) Click "Uninstall" again on the Confirmation screen
5) Next click on remaining items on "Uninstall Tab" and click "Uninstall"
6) Click "Uninstall" again on the Confirmation screen
7) Finally "Navigate to your "sites/all/modules" folder and delete the "devel" and "devel_themer" folders to ensure these modules cannot be reenabled

You can gain performances by disabling unnecessary contributed modules from your live site. Here is a list of modules you can safely disable on a production site:

    Devel
    Devel generate
    Devel node access
    Performance Logging
    Theme developer
    Advanced help example
    ImageCache UI
    Views UI


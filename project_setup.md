Once you checkout the project, you will need to run "composer update" from within the project.

This will download all the vendor libraries this app depends on, as they are not committed here.

To make sure everything is working then run "php artisan serve --host:0.0.0.0"

To get the ember stuff working:

You will need to run "npm install" in the ember folder, to grab all the grunt libraries.
You will need to run "bower update" in the ember folder, to get all the web libraries installed.

Then to test run "grunt --force" in the ember folder.  You can leave this running/watching as needed.

You need to include --force because grunt will be modifying files one level up.


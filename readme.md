Following tutorial from https://symfonycasts.com/

Install Symfony
```
#create symfony project
symfony new project_name
symfony new project_name --webapp
composer create-project symfony/skeleton project_name

#check symfony installation
symfony check:req

```

Start Symfony server
```
#start symfony server
symfony serve -d
```

Install Templates Engine
```
# install template engine
composer require templates
composer require symfony/twig-pack
```

View recipes
```
#List all recipes
composer recipes
composer recipes recipe_name
```

Install debug
```
#Debugger
composer require debug

#Asset for twig
composer require symfony/asset
```

Run Symfony Console
```
#Console
php bin/console
symfony console
```

Test Routes
```
php bin/console debug:router
php bin/console router:match /api/songs/11
php bin/console router:match /api/songs/11 --method=POST
```

Look for available services
```
symfony console debug:autowiring
symfony console debug:autowiring log
```

#Profile
Visit http://127.0.0.1:8000/_profiler

Install Webpack and Stimulus (JavaScript)
```
#Webpack
composer require encore
composer require symfony/webpack-encore-bundle
composer require symfony/stimulus-bundle
npm install
npm run watch
```

Add libraries to be handle by Stimulus
```
npm add bootstrap --dev
npm add @fontsource/roboto-condensed --dev
npm add @fortawesome/fontawesome-free --dev
```
Add Axios (ajax)- library
```
#Stimulus and Axios
npm install @symfony/stimulus-bridge
npm add axios --dev
```

Install UX Turbo
```
#UX turbo
composer require symfony/ux-turbo
npm install --force
```
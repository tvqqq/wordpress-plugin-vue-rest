## WordPress Plugin Vue Rest

### Instruction
1. Download the zip
2. Unzip and move to folder `wp-content/plugins`
3. Rename with your own name in:
    - /wpvr.php
    - app/Base/Constants.php
4. Run `npm install`
5. Route: Go to `app/Base/Routes.php`, add your custom route in function routes(), for example:
```php
// app/Base/Routes.php
[
    'slug' => 'home', // path
    'method' => 'GET', // verb HTTP
    'callback' => [new Home(), 'index'] // name of handle Controller and Function
]
```
6. Controller: All the controllers should be stored in `app/Api`, for example:
```php
// app/Api/Home.php
<?php

namespace Wpvr\Api;

class Home extends BaseController
{
    public function index()
    {
        $random = random_int(0, 999);
        return $this->ok("Your random number is: $random");
    }
}
```
7. View: Create a Vue component in `js/components` and take a look to `js/main.js` to integrate the new component by Vue Router.

### Development & Deployment
- When developing the plugin, run `npm run watch` to keep the js file updating in case any changes.
- When completed, run `webpack -p` to minify the bundle js with the smallest size.

### Dependencies
- Axios
- Bootstrap Vue
- Vue
- Vue Router
- Vue Loader
- Webpack

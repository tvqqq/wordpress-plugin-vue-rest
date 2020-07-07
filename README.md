## WordPress Plugin Vue Rest

### Instruction
1. Download the zip
2. Unzip and move to folder `wp-content/plugins`
3. Rename with your own name in:
    - /wpvr.php
    - app/Base/Constants.php
4. Run `npm install`
5. Route: _Updating_
6. Controller: _Updating_
7. View: _Updating_

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

# zip-wp

**Conveniently build, package, and create a .zip for your WordPress plugin.**

### Install
`composer require bszyk/zip-wp --dev`

update your project's `composer.json`:
```json
 "scripts": {
        "zip-wp": [
            "ZipWP\\ZipWP::run_script"
        ]
    }
```

To use, run `composer zip-wp` in the project's root folder.

###  What it does
Composer package that runs a `bash` script that: 

1. Gets the plugin slug from the home directory folder name.
2. Prompts user for the version number.
3. Creates and/or updates `changelog.txt`.
    - User may enter multiple lines.
    - To exit, use `CTRL D` when on a newline.
4. Runs `npm run build`.
5. Gathers all `.php` files, all content of `build` and `assets` folders, and other common files.
6. Compresses items into `./_releases/VERSION/PLUGIN-SLUG.zip`.

You will need to give the `.sh` permission via `chmod 775` et. al.
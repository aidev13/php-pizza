# php-pizza
PHP means Pre-HTML Processor || PHP: Hypertext Preprocessor || Personal Home Page... Yeah, its more complicated than NPM

## Techs:
* PHP
* XAMPP
* SQL
* HTML
* Materilize CSS Framework

## Form Validation
> Email is validated using the built-in PHP filter function => filter_var(). This function takes in two parameters. The first one is the value you want to check, and the second is the type of data you want to apply. PHP as a built in email validator. The following example looks as so per code: 

```php
 filter_var($email, FILTER_VALIDATE_EMAIL);
```
> Title and Ingredients is validated using the PHP function preg_match(). This takes in two parameters. The first one takes in the REGEX you want to use, and the second one is the variable you want match:

```regex
 preg_match('/^[a-zA-Z\s]+$/', $title),
 preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)
```
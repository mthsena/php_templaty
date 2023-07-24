# php_templaty
É uma ferramenta que facilita a criação de templates html no PHP.

## Exemplo de uso

### Arquivo PHP
```php
// composer autoload.
include __DIR__ . '/vendor/autoload.php';

// call a new template passing the file.
$homePage = new \mthsena\Templaty(__DIR__ . '/public/home.php');

// adds a param called title
$homePage->addParam('title', 'Home page');

// adds a param called message
$homePage->addParam('message', 'Welcome to the Home page!');

// adds a file called css
$homePage->addParamFromFile('css', __DIR__ . '/public/home.css');

// adds a file called js
$homePage->addParamFromFile('js', __DIR__ . '/public/home.js');

// shows the output.
echo $homePage->getOutput();

```

### Página em HTML
```html
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title; ?></title>
</head>

<style>
    <?php echo $style; ?>
</style>

<body>
    <p><?php echo $message; ?></p>
    <script>
        <?php echo $script; ?>
    </script>
</body>

</html>
```

### Arquivo CSS
```css
body {
    background-color: #111111;
    color: #00ff00;
}
```

### Arquivo JS
```js
alert('Templaty example works!');

```

## Resultado
```html
<!DOCTYPE html>
<html>

<head>
    <title>Home page</title>
</head>

<style>
    body {
    background-color: #111111;
    color: #00ff00;
}
</style>

<body>
    <p>Welcome to the Home page!</p>
    <script>
        alert('Templaty example works!');
    </script>
</body>

</html>
```

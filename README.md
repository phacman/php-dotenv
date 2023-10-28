# Dotenv Compact Version

Dotenv parses `.env` files to make environment variables stored in them accessible via `$_SERVER` or `$_ENV`.

History with a list of original committers/commits: [shortlog.txt](shortlog.txt)

## Getting Started

```php
use PhacMan\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

// you can also load several files
$dotenv->load(__DIR__.'/.env', __DIR__.'/.env.dev');

// overwrites existing env variables
$dotenv->overload(__DIR__.'/.env');

// loads .env, .env.local, and .env.$APP_ENV.local or .env.$APP_ENV
$dotenv->loadEnv(__DIR__.'/.env');

// print results
print_r($_ENV);
```

### Resources

 * Original repository: https://github.com/symfony/dotenv

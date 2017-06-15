# limiter
testing package

## Installation
```
composer require realreef/limiter
```
## Usage
You can import that class to make it
```
<?php

use Realreef\Limiter;

echo Limiter::words_limiter('Lorem ipsum dolor sit amet, ', 2); // Lorem ipsum...
```
##################

<h1>Running PHP machine learning algorithms</h1>

<h2>Requirements</h2>

<p> Have PHP 7.1 or later and install composer</p>

```
php -v
composer -v
```

<p> Configure a Gitlab personal token:</p>

<a href="https://gitlab.com/-/profile/personal_access_tokens"  target="_blank">Configure personal access token</a>

<p>You can configure your composer global config gitlab access token:</p>

```
composer config --global gitlab-token.gitlab.com [YOUR_GITLAB_ACCESS_TOKEN]
```

<p>You can check the global configuration:</p>

```
composer config --global --list
```

<p>Install the package php-ml:</p>
<a href="https://gitlab.com/php-ai/php-ml" target="_blank">php-ai/php-ml/</a>
```
composer require php-ai/php-ml
```

<p>Alternatively start a new project</p>

```
composer init
```
<p>Inside the command in the dependencies phase ask for the search of openai-php/client and guzzlehttp/guzzle </p>

<h2>How to use</h2>

<p>Run composer install:</p>
```
composer install
```
<p>Ready!</p>

```
require_once __DIR__ . '/vendor/autoload.php';
//it will return an instance of the Composer Autoloader

use Phpml\Classification\KNearestNeighbors;

$samples = [[1, 3], [1, 4], [2, 4], [3, 1], [4, 1], [4, 2]];
$labels = ['a', 'a', 'a', 'b', 'b', 'b'];

$classifier = new KNearestNeighbors();
$classifier->train($samples, $labels);

echo $classifier->predict([3, 2]);

```
<p></p>
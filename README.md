# 📦 Singleton helper package for php

A very simple and basic Singleton design pattern helper package.

## 🚀 Installation

`composer require unknownrori/singleton`

### Usage

By using `extends` keyword to inherit Singleton abstract class

```php
<?php

namespace UnknownRori\Singleton\Tests;

use UnknownRori\Singleton\Singleton;

class DummyClass extends Singleton
{
    //
}

```

Or by using trait

```php
<?php

namespace UnknownRori\Singleton\Tests;

use UnknownRori\Singleton\SingletonTrait;

class DummyClassTrait
{
    use SingletonTrait;
}

```

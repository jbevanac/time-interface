# ⏱ jbevanac/time-interface

A lightweight PHP library for **precise and consistent conversion between hours, minutes, and seconds**.

This package provides a simple and strict `TimeInterface` along with concrete implementations for **Hours**, **Minutes**, and **Seconds**, making time-based calculations predictable, readable, and safe.

---

## 📦 Installation

```bash
composer require jbevanac/time-interface
```

## Basic Usage
Creating Time Objects
```php
use Jbevanac\TimeInterface\Hours;
use Jbevanac\TimeInterface\Minutes;
use Jbevanac\TimeInterface\Seconds;

$hours   = Hours::create(1.5);
$minutes = Minutes::createFromHours(1.5);
$seconds = Seconds::createFromMinutes(90);
```
Converting between Units
```php
$time = Hours::create(1.5);

$time->getHours();   // 1.50
$time->getMinutes(); // 90.0
$time->getSeconds(); // 5400.0
```

## 📄 License
MIT © Jonathan Bevan

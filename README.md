# script-php-mode

A simple PHP script to find the most frequent number (mode) in an array.  
If there is a tie, it returns the smallest number among the most frequent ones.

## Description

Given an array of numbers, this script calculates and prints the number that appears most frequently.  
In case two or more numbers share the highest frequency, the smallest one is returned.

This project uses PHPUnit for unit testing and can be run from the command line.

## Requirements

- PHP 7.4 or higher  
- Composer  
- PHPUnit (installed via Composer)  

## Installation

Clone the repository and install dependencies:

```bash
git clone git@github.com:muniz-dev/script-php-mode.git
cd script-php-mode
composer install
```

## Usage

Run the CLI script providing numbers as arguments:

```bash
php script.php 1 2 2 3 4 5 2 1 3 3
```

## Testing

Run unit tests with PHPUnit:

```bash
vendor/bin/phpunit
```

## Project Structure

```
.
├── src/                  # Source code
│   └── ModeCalculator.php
├── tests/                # Unit tests
│   └── ModeCalculatorTest.php
├── script.php               # CLI executable script
├── composer.json
├── composer.lock
└── README.md
```
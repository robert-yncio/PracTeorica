# GildedRose Kata

Hi and welcome to team Gilded Rose. As you know, we are a small inn with a prime location in a prominent city ran by a friendly innkeeper named Allison. We also buy and sell only the finest goods. Unfortunately, our goods are constantly degrading in Quality as they approach their sell by date.

We have a system in place that updates our inventory for us. It was developed by a no-nonsense type named Leeroy, who has moved on to new adventures. Your task is to add the new feature to our system so that we can begin selling a new category of items. First an introduction to our system:

- All items have a SellIn value which denotes the number of days we have to sell the items
- All items have a Quality value which denotes how valuable the item is
- At the end of each day our system lowers both values for every item

Pretty simple, right? Well this is where it gets interesting:
- Once the sell by date has passed, Quality degrades twice as fast
- The Quality of an item is never negative
- "Aged Brie" actually increases in Quality the older it gets
- The Quality of an item is never more than 50
- "Sulfuras", being a legendary item, never has to be sold or decreases in Quality
- "Backstage passes", like aged brie, increases in Quality as its SellIn value approaches;
  - Quality increases by 2 when there are 10 days or less 
  - Quality increases by 3 when there are 5 days or less 
  - Quality drops to 0 after the concert


We have recently signed a supplier of conjured items. This requires an update to our system:

- "Conjured" items degrade in Quality twice as fast as normal items

Feel free to make any changes to the UpdateQuality method and add any new code as long as everything still works correctly. However, do not alter the Item class or Items property as those belong to the goblin in the corner who will insta-rage and one-shot you as he doesn't believe in shared code ownership (you can make the UpdateQuality method and Items property static if you like, we'll cover for you).

Just for clarification, an item can never have its Quality increase above 50, however "Sulfuras" is a legendary item and as such its Quality is 80 and it never alters.

## Installation

The kata uses:

- [8.0+](https://www.php.net/downloads.php)
- [Composer](https://getcomposer.org)

Recommended:

- [Git](https://git-scm.com/downloads)

See [GitHub cloning a repository](https://help.github.com/en/articles/cloning-a-repository) for details on how to
create a local copy of this project on your computer.

```sh
git clone git@github.com:emilybache/GildedRose-Refactoring-Kata.git
```

or

```shell script
git clone https://github.com/emilybache/GildedRose-Refactoring-Kata.git
```

Install all the dependencies using composer

```shell script
cd ./GildedRose-Refactoring-Kata/php
composer install
```

## Dependencies

The project uses composer to install:

- [PHPUnit](https://phpunit.de/)
- [ApprovalTests.PHP](https://github.com/approvals/ApprovalTests.php)
- [PHPStan](https://github.com/phpstan/phpstan)
- [Easy Coding Standard (ECS)](https://github.com/symplify/easy-coding-standard)

## Folders

- `src` - contains the two classes:
    - `Item.php` - this class should not be changed
    - `GildedRose.php` - this class needs to be refactored, and the new feature added
- `tests` - contains the tests
    - `GildedRoseTest.php` - starter test.
- `Fixture`
    - `texttest_fixture.php` this could be used by an ApprovalTests, or run from the command line

## Fixture

To run the fixture from the php directory:

```shell
php .\fixtures\texttest_fixture.php 10
```

Change **10** to the required days.

## Testing

PHPUnit is configured for testing, a composer script has been provided. To run the unit tests, from the root of the PHP
project run:

```shell script
composer tests
```

A Windows a batch file has been created, like an alias on Linux/Mac (e.g. `alias pu="composer tests"`), the same
PHPUnit `composer tests` can be run:

```shell script
pu.bat
```

### Tests with Coverage Report

To run all test and generate a html coverage report run:

```shell script
composer test-coverage
```

The test-coverage report will be created in /builds, it is best viewed by opening /builds/**index.html** in your
browser.

The [XDEbug](https://xdebug.org/download) extension is required for generating the coverage report.

## Code Standard

Easy Coding Standard (ECS) is configured for style and code standards, **PSR-12** is used. The current code is not upto
standard!

### Check Code

To check code, but not fix errors:

```shell script
composer check-cs
``` 

On Windows a batch file has been created, like an alias on Linux/Mac (e.g. `alias cc="composer check-cs"`), the same
PHPUnit `composer check-cs` can be run:

```shell script
cc.bat
```

### Fix Code

ECS provides may code fixes, automatically, if advised to run --fix, the following script can be run:

```shell script
composer fix-cs
```

On Windows a batch file has been created, like an alias on Linux/Mac (e.g. `alias fc="composer fix-cs"`), the same
PHPUnit `composer fix-cs` can be run:

```shell script
fc.bat
```

## Static Analysis

PHPStan is used to run static analysis checks:

```shell script
composer phpstan
```

On Windows a batch file has been created, like an alias on Linux/Mac (e.g. `alias ps="composer phpstan"`), the same
PHPUnit `composer phpstan` can be run:

```shell script
ps.bat
```

**Happy coding**!


cd game-02
composer isntall
composer test-coverage
composer tests
composer check-cs
php .\fixtures\texttest_fixture.php 10

->composer test-coverage
You are running Composer with SSL/TLS protection disabled.

phpunit --coverage-html build/coverage
PHPUnit 9.6.31 by Sebastian Bergmann and contributors.

Warning: No code coverage driver available

… 3 / 3 (100%)

Time: 00:00.025, Memory: 6.00 MB

OK (3 tests, 3 assertions)
-> composer tests
You are running Composer with SSL/TLS protection disabled.

phpunit
PHPUnit 9.6.31 by Sebastian Bergmann and contributors.

… 3 / 3 (100%)

Time: 00:00.023, Memory: 6.00 MB

OK (3 tests, 3 assertions)

-> composer check-cs
You are running Composer with SSL/TLS protection disabled.

ecs check

-> omposer fix-cs
You are running Composer with SSL/TLS protection disabled.

ecs check --fix

[OK] No errors found. Great job - your code is shiny in style!

-> php .\fixtures\texttest_fixture.php 10
OMGHAI!
-------- day 0 --------
name, sellIn, quality
+5 Dexterity Vest, 10, 20
Aged Brie, 2, 0
Elixir of the Mongoose, 5, 7
Sulfuras, Hand of Ragnaros, 0, 80
Sulfuras, Hand of Ragnaros, -1, 80
Backstage passes to a TAFKAL80ETC concert, 15, 20
Backstage passes to a TAFKAL80ETC concert, 10, 49
Backstage passes to a TAFKAL80ETC concert, 5, 49
Conjured Mana Cake, 3, 6

-------- day 1 --------
name, sellIn, quality
+5 Dexterity Vest, 9, 19
Aged Brie, 1, 1
Elixir of the Mongoose, 4, 6
Sulfuras, Hand of Ragnaros, 0, 80
Sulfuras, Hand of Ragnaros, -1, 80
Backstage passes to a TAFKAL80ETC concert, 14, 21
Backstage passes to a TAFKAL80ETC concert, 9, 50
Backstage passes to a TAFKAL80ETC concert, 4, 50
Conjured Mana Cake, 2, 4

-------- day 2 --------
name, sellIn, quality
+5 Dexterity Vest, 8, 18
Aged Brie, 0, 2
Elixir of the Mongoose, 3, 5
Sulfuras, Hand of Ragnaros, 0, 80
Sulfuras, Hand of Ragnaros, -1, 80
Backstage passes to a TAFKAL80ETC concert, 13, 22
Backstage passes to a TAFKAL80ETC concert, 8, 50
Backstage passes to a TAFKAL80ETC concert, 3, 50
Conjured Mana Cake, 1, 2

-------- day 3 --------
name, sellIn, quality
+5 Dexterity Vest, 7, 17
Aged Brie, -1, 4
Elixir of the Mongoose, 2, 4
Sulfuras, Hand of Ragnaros, 0, 80
Sulfuras, Hand of Ragnaros, -1, 80
Backstage passes to a TAFKAL80ETC concert, 12, 23
Backstage passes to a TAFKAL80ETC concert, 7, 50
Backstage passes to a TAFKAL80ETC concert, 2, 50
Conjured Mana Cake, 0, 0

-------- day 4 --------
name, sellIn, quality
+5 Dexterity Vest, 6, 16
Aged Brie, -2, 6
Elixir of the Mongoose, 1, 3
Sulfuras, Hand of Ragnaros, 0, 80
Sulfuras, Hand of Ragnaros, -1, 80
Backstage passes to a TAFKAL80ETC concert, 11, 24
Backstage passes to a TAFKAL80ETC concert, 6, 50
Backstage passes to a TAFKAL80ETC concert, 1, 50
Conjured Mana Cake, -1, 0

-------- day 5 --------
name, sellIn, quality
+5 Dexterity Vest, 5, 15
Aged Brie, -3, 8
Elixir of the Mongoose, 0, 2
Sulfuras, Hand of Ragnaros, 0, 80
Sulfuras, Hand of Ragnaros, -1, 80
Backstage passes to a TAFKAL80ETC concert, 10, 25
Backstage passes to a TAFKAL80ETC concert, 5, 50
Backstage passes to a TAFKAL80ETC concert, 0, 50
Conjured Mana Cake, -2, 0

-------- day 6 --------
name, sellIn, quality
+5 Dexterity Vest, 4, 14
Aged Brie, -4, 10
Elixir of the Mongoose, -1, 0
Sulfuras, Hand of Ragnaros, 0, 80
Sulfuras, Hand of Ragnaros, -1, 80
Backstage passes to a TAFKAL80ETC concert, 9, 27
Backstage passes to a TAFKAL80ETC concert, 4, 50
Backstage passes to a TAFKAL80ETC concert, -1, 0
Conjured Mana Cake, -3, 0

-------- day 7 --------
name, sellIn, quality
+5 Dexterity Vest, 3, 13
Aged Brie, -5, 12
Elixir of the Mongoose, -2, 0
Sulfuras, Hand of Ragnaros, 0, 80
Sulfuras, Hand of Ragnaros, -1, 80
Backstage passes to a TAFKAL80ETC concert, 8, 29
Backstage passes to a TAFKAL80ETC concert, 3, 50
Backstage passes to a TAFKAL80ETC concert, -2, 0
Conjured Mana Cake, -4, 0

-------- day 8 --------
name, sellIn, quality
+5 Dexterity Vest, 2, 12
Aged Brie, -6, 14
Elixir of the Mongoose, -3, 0
Sulfuras, Hand of Ragnaros, 0, 80
Sulfuras, Hand of Ragnaros, -1, 80
Backstage passes to a TAFKAL80ETC concert, 7, 31
Backstage passes to a TAFKAL80ETC concert, 2, 50
Backstage passes to a TAFKAL80ETC concert, -3, 0
Conjured Mana Cake, -5, 0

-------- day 9 --------
name, sellIn, quality
+5 Dexterity Vest, 1, 11
Aged Brie, -7, 16
Elixir of the Mongoose, -4, 0
Sulfuras, Hand of Ragnaros, 0, 80
Sulfuras, Hand of Ragnaros, -1, 80
Backstage passes to a TAFKAL80ETC concert, 6, 33
Backstage passes to a TAFKAL80ETC concert, 1, 50
Backstage passes to a TAFKAL80ETC concert, -4, 0
Conjured Mana Cake, -6, 0

PS C:\Users\pc\Desktop\reevalua\challenge\game-02> php .\fixtures\texttest_fixture.php 10
OMGHAI!
-------- day 0 --------
name, sellIn, quality
+5 Dexterity Vest, 10, 20
Aged Brie, 2, 0
Elixir of the Mongoose, 5, 7
Sulfuras, Hand of Ragnaros, 0, 80
Sulfuras, Hand of Ragnaros, -1, 80
Backstage passes to a TAFKAL80ETC concert, 15, 20
Backstage passes to a TAFKAL80ETC concert, 10, 49
Backstage passes to a TAFKAL80ETC concert, 5, 49
Conjured Mana Cake, 3, 6

-------- day 1 --------
name, sellIn, quality
+5 Dexterity Vest, 9, 19
Aged Brie, 1, 1
Elixir of the Mongoose, 4, 6
Sulfuras, Hand of Ragnaros, 0, 80
Sulfuras, Hand of Ragnaros, -1, 80
Backstage passes to a TAFKAL80ETC concert, 14, 21
Backstage passes to a TAFKAL80ETC concert, 9, 50
Backstage passes to a TAFKAL80ETC concert, 4, 50
Conjured Mana Cake, 2, 4

-------- day 2 --------
name, sellIn, quality
+5 Dexterity Vest, 8, 18
Aged Brie, 0, 2
Elixir of the Mongoose, 3, 5
Sulfuras, Hand of Ragnaros, 0, 80
Sulfuras, Hand of Ragnaros, -1, 80
Backstage passes to a TAFKAL80ETC concert, 13, 22
Backstage passes to a TAFKAL80ETC concert, 8, 50
Backstage passes to a TAFKAL80ETC concert, 3, 50
Conjured Mana Cake, 1, 2

-------- day 3 --------
name, sellIn, quality
+5 Dexterity Vest, 7, 17
Aged Brie, -1, 4
Elixir of the Mongoose, 2, 4
Sulfuras, Hand of Ragnaros, 0, 80
Sulfuras, Hand of Ragnaros, -1, 80
Backstage passes to a TAFKAL80ETC concert, 12, 23
Backstage passes to a TAFKAL80ETC concert, 7, 50
Backstage passes to a TAFKAL80ETC concert, 2, 50
Conjured Mana Cake, 0, 0

-------- day 4 --------
name, sellIn, quality
+5 Dexterity Vest, 6, 16
Aged Brie, -2, 6
Elixir of the Mongoose, 1, 3
Sulfuras, Hand of Ragnaros, 0, 80
Sulfuras, Hand of Ragnaros, -1, 80
Backstage passes to a TAFKAL80ETC concert, 11, 24
Backstage passes to a TAFKAL80ETC concert, 6, 50
Backstage passes to a TAFKAL80ETC concert, 1, 50
Conjured Mana Cake, -1, 0

-------- day 5 --------
name, sellIn, quality
+5 Dexterity Vest, 5, 15
Aged Brie, -3, 8
Elixir of the Mongoose, 0, 2
Sulfuras, Hand of Ragnaros, 0, 80
Sulfuras, Hand of Ragnaros, -1, 80
Backstage passes to a TAFKAL80ETC concert, 10, 25
Backstage passes to a TAFKAL80ETC concert, 5, 50
Backstage passes to a TAFKAL80ETC concert, 0, 50
Conjured Mana Cake, -2, 0

-------- day 6 --------
name, sellIn, quality
+5 Dexterity Vest, 4, 14
Aged Brie, -4, 10
Elixir of the Mongoose, -1, 0
Sulfuras, Hand of Ragnaros, 0, 80
Sulfuras, Hand of Ragnaros, -1, 80
Backstage passes to a TAFKAL80ETC concert, 9, 27
Backstage passes to a TAFKAL80ETC concert, 4, 50
Backstage passes to a TAFKAL80ETC concert, -1, 0
Conjured Mana Cake, -3, 0

-------- day 7 --------
name, sellIn, quality
+5 Dexterity Vest, 3, 13
Aged Brie, -5, 12
Elixir of the Mongoose, -2, 0
Sulfuras, Hand of Ragnaros, 0, 80
Sulfuras, Hand of Ragnaros, -1, 80
Backstage passes to a TAFKAL80ETC concert, 8, 29
Backstage passes to a TAFKAL80ETC concert, 3, 50
Backstage passes to a TAFKAL80ETC concert, -2, 0
Conjured Mana Cake, -4, 0

-------- day 8 --------
name, sellIn, quality
+5 Dexterity Vest, 2, 12
Aged Brie, -6, 14
Elixir of the Mongoose, -3, 0
Sulfuras, Hand of Ragnaros, 0, 80
Sulfuras, Hand of Ragnaros, -1, 80
Backstage passes to a TAFKAL80ETC concert, 7, 31
Backstage passes to a TAFKAL80ETC concert, 2, 50
Backstage passes to a TAFKAL80ETC concert, -3, 0
Conjured Mana Cake, -5, 0

-------- day 9 --------
name, sellIn, quality
+5 Dexterity Vest, 1, 11
Aged Brie, -7, 16
Elixir of the Mongoose, -4, 0
Sulfuras, Hand of Ragnaros, 0, 80
Sulfuras, Hand of Ragnaros, -1, 80
Backstage passes to a TAFKAL80ETC concert, 6, 33
Backstage passes to a TAFKAL80ETC concert, 1, 50
Backstage passes to a TAFKAL80ETC concert, -4, 0
Conjured Mana Cake, -6, 0

[OK] No errors found. Great job - your code is shiny in style!

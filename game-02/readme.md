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

--------------------------------------- X ---------------------------------------<br>
cd game-02<br>
composer isntall<br>
composer test-coverage<br>
composer tests<br>
composer check-cs<br>
php .\fixtures\texttest_fixture.php 10</p>
<p class="has-line-data" data-line-start="27" data-line-end="29">-&gt;composer test-coverage<br>
You are running Composer with SSL/TLS protection disabled.</p>
<blockquote>
<p class="has-line-data" data-line-start="29" data-line-end="31">phpunit --coverage-html build/coverage<br>
PHPUnit 9.6.31 by Sebastian Bergmann and contributors.</p>
</blockquote>
<p class="has-line-data" data-line-start="34" data-line-end="35">…                                                                 3 / 3 (100%)</p>
<p class="has-line-data" data-line-start="36" data-line-end="37">Time: 00:00.025, Memory: 6.00 MB</p>
<p class="has-line-data" data-line-start="38" data-line-end="41">OK (3 tests, 3 assertions)<br>
-&gt; composer tests<br>
You are running Composer with SSL/TLS protection disabled.</p>
<blockquote>
<p class="has-line-data" data-line-start="41" data-line-end="43">phpunit<br>
PHPUnit 9.6.31 by Sebastian Bergmann and contributors.</p>
</blockquote>
<p class="has-line-data" data-line-start="44" data-line-end="45">…                                                                 3 / 3 (100%)</p>
<p class="has-line-data" data-line-start="46" data-line-end="47">Time: 00:00.023, Memory: 6.00 MB</p>
<p class="has-line-data" data-line-start="48" data-line-end="49">OK (3 tests, 3 assertions)</p>
<p class="has-line-data" data-line-start="50" data-line-end="52">-&gt; composer check-cs<br>
You are running Composer with SSL/TLS protection disabled.</p>
<blockquote>
<p class="has-line-data" data-line-start="52" data-line-end="53">ecs check</p>
</blockquote>
<p class="has-line-data" data-line-start="54" data-line-end="56">-&gt; omposer fix-cs<br>
You are running Composer with SSL/TLS protection disabled.</p>
<blockquote>
<p class="has-line-data" data-line-start="56" data-line-end="57">ecs check --fix</p>
</blockquote>
<p class="has-line-data" data-line-start="58" data-line-end="59">[OK] No errors found. Great job - your code is shiny in style!</p>
<p class="has-line-data" data-line-start="61" data-line-end="74">-&gt; php .\fixtures\texttest_fixture.php 10<br>
OMGHAI!<br>
-------- day 0 --------<br>
name, sellIn, quality<br>
+5 Dexterity Vest, 10, 20<br>
Aged Brie, 2, 0<br>
Elixir of the Mongoose, 5, 7<br>
Sulfuras, Hand of Ragnaros, 0, 80<br>
Sulfuras, Hand of Ragnaros, -1, 80<br>
Backstage passes to a TAFKAL80ETC concert, 15, 20<br>
Backstage passes to a TAFKAL80ETC concert, 10, 49<br>
Backstage passes to a TAFKAL80ETC concert, 5, 49<br>
Conjured Mana Cake, 3, 6</p>
<p class="has-line-data" data-line-start="75" data-line-end="86">-------- day 1 --------<br>
name, sellIn, quality<br>
+5 Dexterity Vest, 9, 19<br>
Aged Brie, 1, 1<br>
Elixir of the Mongoose, 4, 6<br>
Sulfuras, Hand of Ragnaros, 0, 80<br>
Sulfuras, Hand of Ragnaros, -1, 80<br>
Backstage passes to a TAFKAL80ETC concert, 14, 21<br>
Backstage passes to a TAFKAL80ETC concert, 9, 50<br>
Backstage passes to a TAFKAL80ETC concert, 4, 50<br>
Conjured Mana Cake, 2, 4</p>
<p class="has-line-data" data-line-start="87" data-line-end="98">-------- day 2 --------<br>
name, sellIn, quality<br>
+5 Dexterity Vest, 8, 18<br>
Aged Brie, 0, 2<br>
Elixir of the Mongoose, 3, 5<br>
Sulfuras, Hand of Ragnaros, 0, 80<br>
Sulfuras, Hand of Ragnaros, -1, 80<br>
Backstage passes to a TAFKAL80ETC concert, 13, 22<br>
Backstage passes to a TAFKAL80ETC concert, 8, 50<br>
Backstage passes to a TAFKAL80ETC concert, 3, 50<br>
Conjured Mana Cake, 1, 2</p>
<p class="has-line-data" data-line-start="99" data-line-end="110">-------- day 3 --------<br>
name, sellIn, quality<br>
+5 Dexterity Vest, 7, 17<br>
Aged Brie, -1, 4<br>
Elixir of the Mongoose, 2, 4<br>
Sulfuras, Hand of Ragnaros, 0, 80<br>
Sulfuras, Hand of Ragnaros, -1, 80<br>
Backstage passes to a TAFKAL80ETC concert, 12, 23<br>
Backstage passes to a TAFKAL80ETC concert, 7, 50<br>
Backstage passes to a TAFKAL80ETC concert, 2, 50<br>
Conjured Mana Cake, 0, 0</p>
<p class="has-line-data" data-line-start="111" data-line-end="122">-------- day 4 --------<br>
name, sellIn, quality<br>
+5 Dexterity Vest, 6, 16<br>
Aged Brie, -2, 6<br>
Elixir of the Mongoose, 1, 3<br>
Sulfuras, Hand of Ragnaros, 0, 80<br>
Sulfuras, Hand of Ragnaros, -1, 80<br>
Backstage passes to a TAFKAL80ETC concert, 11, 24<br>
Backstage passes to a TAFKAL80ETC concert, 6, 50<br>
Backstage passes to a TAFKAL80ETC concert, 1, 50<br>
Conjured Mana Cake, -1, 0</p>
<p class="has-line-data" data-line-start="123" data-line-end="134">-------- day 5 --------<br>
name, sellIn, quality<br>
+5 Dexterity Vest, 5, 15<br>
Aged Brie, -3, 8<br>
Elixir of the Mongoose, 0, 2<br>
Sulfuras, Hand of Ragnaros, 0, 80<br>
Sulfuras, Hand of Ragnaros, -1, 80<br>
Backstage passes to a TAFKAL80ETC concert, 10, 25<br>
Backstage passes to a TAFKAL80ETC concert, 5, 50<br>
Backstage passes to a TAFKAL80ETC concert, 0, 50<br>
Conjured Mana Cake, -2, 0</p>
<p class="has-line-data" data-line-start="135" data-line-end="146">-------- day 6 --------<br>
name, sellIn, quality<br>
+5 Dexterity Vest, 4, 14<br>
Aged Brie, -4, 10<br>
Elixir of the Mongoose, -1, 0<br>
Sulfuras, Hand of Ragnaros, 0, 80<br>
Sulfuras, Hand of Ragnaros, -1, 80<br>
Backstage passes to a TAFKAL80ETC concert, 9, 27<br>
Backstage passes to a TAFKAL80ETC concert, 4, 50<br>
Backstage passes to a TAFKAL80ETC concert, -1, 0<br>
Conjured Mana Cake, -3, 0</p>
<p class="has-line-data" data-line-start="147" data-line-end="158">-------- day 7 --------<br>
name, sellIn, quality<br>
+5 Dexterity Vest, 3, 13<br>
Aged Brie, -5, 12<br>
Elixir of the Mongoose, -2, 0<br>
Sulfuras, Hand of Ragnaros, 0, 80<br>
Sulfuras, Hand of Ragnaros, -1, 80<br>
Backstage passes to a TAFKAL80ETC concert, 8, 29<br>
Backstage passes to a TAFKAL80ETC concert, 3, 50<br>
Backstage passes to a TAFKAL80ETC concert, -2, 0<br>
Conjured Mana Cake, -4, 0</p>
<p class="has-line-data" data-line-start="159" data-line-end="170">-------- day 8 --------<br>
name, sellIn, quality<br>
+5 Dexterity Vest, 2, 12<br>
Aged Brie, -6, 14<br>
Elixir of the Mongoose, -3, 0<br>
Sulfuras, Hand of Ragnaros, 0, 80<br>
Sulfuras, Hand of Ragnaros, -1, 80<br>
Backstage passes to a TAFKAL80ETC concert, 7, 31<br>
Backstage passes to a TAFKAL80ETC concert, 2, 50<br>
Backstage passes to a TAFKAL80ETC concert, -3, 0<br>
Conjured Mana Cake, -5, 0</p>
<p class="has-line-data" data-line-start="171" data-line-end="182">-------- day 9 --------<br>
name, sellIn, quality<br>
+5 Dexterity Vest, 1, 11<br>
Aged Brie, -7, 16<br>
Elixir of the Mongoose, -4, 0<br>
Sulfuras, Hand of Ragnaros, 0, 80<br>
Sulfuras, Hand of Ragnaros, -1, 80<br>
Backstage passes to a TAFKAL80ETC concert, 6, 33<br>
Backstage passes to a TAFKAL80ETC concert, 1, 50<br>
Backstage passes to a TAFKAL80ETC concert, -4, 0<br>
Conjured Mana Cake, -6, 0</p>
<p class="has-line-data" data-line-start="183" data-line-end="196">PS C:\Users\pc\Desktop\reevalua\challenge\game-02&gt; php .\fixtures\texttest_fixture.php 10<br>
OMGHAI!<br>
-------- day 0 --------<br>
name, sellIn, quality<br>
+5 Dexterity Vest, 10, 20<br>
Aged Brie, 2, 0<br>
Elixir of the Mongoose, 5, 7<br>
Sulfuras, Hand of Ragnaros, 0, 80<br>
Sulfuras, Hand of Ragnaros, -1, 80<br>
Backstage passes to a TAFKAL80ETC concert, 15, 20<br>
Backstage passes to a TAFKAL80ETC concert, 10, 49<br>
Backstage passes to a TAFKAL80ETC concert, 5, 49<br>
Conjured Mana Cake, 3, 6</p>
<p class="has-line-data" data-line-start="197" data-line-end="208">-------- day 1 --------<br>
name, sellIn, quality<br>
+5 Dexterity Vest, 9, 19<br>
Aged Brie, 1, 1<br>
Elixir of the Mongoose, 4, 6<br>
Sulfuras, Hand of Ragnaros, 0, 80<br>
Sulfuras, Hand of Ragnaros, -1, 80<br>
Backstage passes to a TAFKAL80ETC concert, 14, 21<br>
Backstage passes to a TAFKAL80ETC concert, 9, 50<br>
Backstage passes to a TAFKAL80ETC concert, 4, 50<br>
Conjured Mana Cake, 2, 4</p>
<p class="has-line-data" data-line-start="209" data-line-end="220">-------- day 2 --------<br>
name, sellIn, quality<br>
+5 Dexterity Vest, 8, 18<br>
Aged Brie, 0, 2<br>
Elixir of the Mongoose, 3, 5<br>
Sulfuras, Hand of Ragnaros, 0, 80<br>
Sulfuras, Hand of Ragnaros, -1, 80<br>
Backstage passes to a TAFKAL80ETC concert, 13, 22<br>
Backstage passes to a TAFKAL80ETC concert, 8, 50<br>
Backstage passes to a TAFKAL80ETC concert, 3, 50<br>
Conjured Mana Cake, 1, 2</p>
<p class="has-line-data" data-line-start="221" data-line-end="232">-------- day 3 --------<br>
name, sellIn, quality<br>
+5 Dexterity Vest, 7, 17<br>
Aged Brie, -1, 4<br>
Elixir of the Mongoose, 2, 4<br>
Sulfuras, Hand of Ragnaros, 0, 80<br>
Sulfuras, Hand of Ragnaros, -1, 80<br>
Backstage passes to a TAFKAL80ETC concert, 12, 23<br>
Backstage passes to a TAFKAL80ETC concert, 7, 50<br>
Backstage passes to a TAFKAL80ETC concert, 2, 50<br>
Conjured Mana Cake, 0, 0</p>
<p class="has-line-data" data-line-start="233" data-line-end="244">-------- day 4 --------<br>
name, sellIn, quality<br>
+5 Dexterity Vest, 6, 16<br>
Aged Brie, -2, 6<br>
Elixir of the Mongoose, 1, 3<br>
Sulfuras, Hand of Ragnaros, 0, 80<br>
Sulfuras, Hand of Ragnaros, -1, 80<br>
Backstage passes to a TAFKAL80ETC concert, 11, 24<br>
Backstage passes to a TAFKAL80ETC concert, 6, 50<br>
Backstage passes to a TAFKAL80ETC concert, 1, 50<br>
Conjured Mana Cake, -1, 0</p>
<p class="has-line-data" data-line-start="245" data-line-end="256">-------- day 5 --------<br>
name, sellIn, quality<br>
+5 Dexterity Vest, 5, 15<br>
Aged Brie, -3, 8<br>
Elixir of the Mongoose, 0, 2<br>
Sulfuras, Hand of Ragnaros, 0, 80<br>
Sulfuras, Hand of Ragnaros, -1, 80<br>
Backstage passes to a TAFKAL80ETC concert, 10, 25<br>
Backstage passes to a TAFKAL80ETC concert, 5, 50<br>
Backstage passes to a TAFKAL80ETC concert, 0, 50<br>
Conjured Mana Cake, -2, 0</p>
<p class="has-line-data" data-line-start="257" data-line-end="268">-------- day 6 --------<br>
name, sellIn, quality<br>
+5 Dexterity Vest, 4, 14<br>
Aged Brie, -4, 10<br>
Elixir of the Mongoose, -1, 0<br>
Sulfuras, Hand of Ragnaros, 0, 80<br>
Sulfuras, Hand of Ragnaros, -1, 80<br>
Backstage passes to a TAFKAL80ETC concert, 9, 27<br>
Backstage passes to a TAFKAL80ETC concert, 4, 50<br>
Backstage passes to a TAFKAL80ETC concert, -1, 0<br>
Conjured Mana Cake, -3, 0</p>
<p class="has-line-data" data-line-start="269" data-line-end="280">-------- day 7 --------<br>
name, sellIn, quality<br>
+5 Dexterity Vest, 3, 13<br>
Aged Brie, -5, 12<br>
Elixir of the Mongoose, -2, 0<br>
Sulfuras, Hand of Ragnaros, 0, 80<br>
Sulfuras, Hand of Ragnaros, -1, 80<br>
Backstage passes to a TAFKAL80ETC concert, 8, 29<br>
Backstage passes to a TAFKAL80ETC concert, 3, 50<br>
Backstage passes to a TAFKAL80ETC concert, -2, 0<br>
Conjured Mana Cake, -4, 0</p>
<p class="has-line-data" data-line-start="281" data-line-end="292">-------- day 8 --------<br>
name, sellIn, quality<br>
+5 Dexterity Vest, 2, 12<br>
Aged Brie, -6, 14<br>
Elixir of the Mongoose, -3, 0<br>
Sulfuras, Hand of Ragnaros, 0, 80<br>
Sulfuras, Hand of Ragnaros, -1, 80<br>
Backstage passes to a TAFKAL80ETC concert, 7, 31<br>
Backstage passes to a TAFKAL80ETC concert, 2, 50<br>
Backstage passes to a TAFKAL80ETC concert, -3, 0<br>
Conjured Mana Cake, -5, 0</p>
<p class="has-line-data" data-line-start="293" data-line-end="304">-------- day 9 --------<br>
name, sellIn, quality<br>
+5 Dexterity Vest, 1, 11<br>
Aged Brie, -7, 16<br>
Elixir of the Mongoose, -4, 0<br>
Sulfuras, Hand of Ragnaros, 0, 80<br>
Sulfuras, Hand of Ragnaros, -1, 80<br>
Backstage passes to a TAFKAL80ETC concert, 6, 33<br>
Backstage passes to a TAFKAL80ETC concert, 1, 50<br>
Backstage passes to a TAFKAL80ETC concert, -4, 0<br>
Conjured Mana Cake, -6, 0</p>
<p class="has-line-data" data-line-start="306" data-line-end="307">[OK] No errors found. Great job - your code is shiny in style!</p>

<h1 class="code-line" data-line-start=0 data-line-end=1 ><a id="PracTeorica_0"></a>PracTeorica</h1>
<p class="has-line-data" data-line-start="2" data-line-end="5">levantado en php PHP 8.2.28<br>
Composer version 2.8.8<br>
maridb 8</p>
<p class="has-line-data" data-line-start="7" data-line-end="15">game-01<br>
--------------------------------------- X ---------------------------------------<br>
cd game-01<br>
composer install<br>
cp .env.example .env<br>
php artisan key:generate<br>
php artisan migrate<br>
php artisan serve</p>
<p class="has-line-data" data-line-start="18" data-line-end="26">game-02<br>
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
<p class="has-line-data" data-line-start="32" data-line-end="33">Warning:       No code coverage driver available</p>
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

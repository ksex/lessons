
        
<div class="slide magenta invert white-border section">
    <h1 class="v-center bigger white">Javascript.</h1>
</div>

<div class="slide">
    <h4>Javascript.</h4>
    <h5>Javascript is a robust programming language, interpreted by all modern browsers, that allows developers to create dynamic websites.</h5>
    <p>Javascript...</p>
    <ul class="build">
        <li>Is Object-oriented</li>
        <li>Allows access to the DOM</li>
        <li>Creates dynamic websites!</li>
    </ul>
</div>

<div class="slide section">
    <h4>What is Object Oriented?</h4>
    <p>Object oriented is a programming language design paradigm where everything can be encapsulated in "objects".</p>
    <p>Instead of coding a set of instructions to happen in a row, object oriented programming allows you to model real-world objects and their various properties.</p>
    <p><strong>Why is this useful?</strong> Objects are closely linked with their properties, so instead of copying a bunch of step by step actions, you can just recreate the object elsewhere.</p>
</div>

<div class="slide section">
    <h4>What is the DOM? (briefly)</h4>
    <h5>Document Object Model.</h5>
    <p>An API for html or xml documents that allows developers to access parts of the page as "objects".</p>
    <p>Using javascript, you can inspect or change the various "properties" of divs, forms, tags, etc.</p>
<pre><code class="language-javascript">
document.getElementById('heading').innerHTML = 'New heading!';
</code></pre>
</div>

<div class="slide section">
    <h4>Inspecting.</h4>
    <p>In addition to inspecting html elements and css properties, you can inspect javascript in the dev tools "console" tab.</p>
    <p>If you click on the console tab, and type "document" and hit enter, you will see an "object" that represents the DOM of the current page.</p>
    <p>To inspect more specific things from your own javascript files, you can use the function "console.log()" to print things out for yourself.</p>
</div>
        
        <div class="slide black invert section">
            <h1 class="v-center bigger white">Data Types.</h1>
        </div>

        <div class="slide">
            <h4>Types.</h4>
            <p>In javascript, various kinds of variables are known as "types".  These types indicate what kind of value a variable or property can hold.</p>
            <p>A common type is "string", which is essentially any text that you'd be typing.</p>
        </div>

        <div class="slide">
            <h4>Strings.</h4>
            <p>"A sequence of characters".</p>
            <p>Used all over!  Grabbing user input, adding new user input, etc.</p>
            <p>Usually designated like so:</p>
<pre><code class="language-javascript">
var string = 'this is a string!';
var string2 = "this is also a string!";
</code></pre>
        </div>

        <div class="slide">
            <h4>Numbers.</h4>
            <p>Numbers are numeric values.  Commonly used in conjunction with the arithmetic operators.</p>
<pre><code class="language-javascript">
var number = 1;
console.log(number++);
console.log(4 + 2);
</code></pre>
        </div>

        <div class="slide">
            <h4>Arrays.</h4>
            <p>Arrays are a group of strings, numbers, arrays, or objects.</p>
<pre><code class="language-javascript">
var things = [];

things.push('cars', 'planes', 'trains', 2);

console.log(things);
console.log(things.length);
</code></pre>
        </div>

        <div class="slide">
            <h4>Array properties.</h4>
            <ul class="build">
                <li>Integer-based keys.</li>
                <li>Length.</li>
            </ul>
            <h4>Array methods.</h4>
            <ul class="build">
                <li>push.  Add to an array.</li>
                <li>pop.  Remove the last element from array.</li>
                <li>sort, reverse, splice...</li>
                <li>forEach.  Call a function for each element.</li>
            </ul>
        </div>

        <div class="slide">
            <h4>Objects.</h4>
            <p class="smaller">The data type only.</p>
            <p>Objects are similar to arrays, but require "keys" for various elements.</p>
            <p>Instead of "car, planes, trains", you would have something like "car: corvette", "plane: bomber", "train: amtrak".</p>
<pre><code class="language-javascript">
var things = {
    'car' : 'corvette',
    'plane' : 'bomber',
    'train' : 'amtrak'
};

console.log(things);
console.log(things.car);
</code></pre>
        </div>
        
        <div class="slide black invert section">
            <h1 class="v-center white">Doing stuff with data.</h1>
        </div>

        <div class="slide">
            <h4>Operators.</h4>
            <p>Similar to math operands, operators let you "assign" values, add, subtract, etc.</p>
            <p>Many types of operators, including:</p>
            <ul>
                <li>Arithmetic (ie, +, -, %, ++, --)</li>
                <li>Assignment (ie, =, *=, -=)</li>
                <li>Comparison (ie, ==, !=, >)</li>
                <li>Logical (&&, ||, !)</li>
                <li>String (+ and +=)</li>
            </ul>
        </div>

        <div class="slide">
            <h4>Important ones.</h4>
            <h5>=</h5>
            <p>Assignment operator.  Sets a variable to a value (including another variable, or function, etc.)</p>
            <h5>++</h5>
            <p>Essentially, take whatever value (numeric) and add one.  Useful for iterating.</p>
            <h5>==</h5>
            <p>Equality.  If two values, variables, or objects are equivalent.</p>
        </div>

        <div class="slide">
            <h5>!</h5>
            <p>Not.  For testing conditionals.</p>
            <h5>&&</h5>
            <p>"And".  For string two conditionals together.</p>
            <p>ie, blah == true && blah !== false
            <h5>||</h5>
            <p>Or. For stringing two conditionals together, either of which can be true.</p>
        </div>
        
        <div class="slide section">
            <h4>Keywords.</h4>
            <p>AKA: Reserved words.</p>
            <p>Words that have a defined meaning, and cannot be changed by the programmer.</p>
            <ul>
                <li>Designates "special behavior"</li>
                <li>All statements, control statements, etc. are "keywords" or "reserved words".</li>
            </ul>
        </div>

        <div class="slide section">
            <h4>Statements.</h4>
            <h5>Keywords + Syntax == Statement.</h5>
            <p class="smaller">Meaning, a mix of a key word, and the proper spacing, braces, expressions, semicolons, etc., to create a "statement" of <strong>what you want to do</strong> in your javascript.</p>
            <p>Let's start with something basic.</p>
<pre><code class="language-javascript">
var blah = 'foo';
</code></pre>
        </div>

        <div class="slide">
            <ul>
                <li><strong>var</strong> indicates that we are declaring a variable.</li>
                <li><strong>blah</strong> is the name of the variable.</li>
                <li><strong>=</strong> indicates that we are setting the variable to its initial value (OPTIONAL)</li>
                <li><strong>foo</strong> is the initial value.</li>
            </ul>
            <p>Thus, our "statement" means that we want to create a variable named blah, and set its value to the string 'foo'.</p>
        </div>

        <div class="slide">
            <p>We can easily declare variables such as:</p>
<pre><code class="language-javascript">var blah;</code></pre>
            <p>or a number</p>
<pre><code class="language-javascript">var blah = 3;</code></pre>
            <p>or a string</p>
<pre><code class="language-javascript">var blah = 'foo';</code></pre>
        </div>

        <div class="slide">
            <p>Open up a new html file and save it.</p>
            <p>Type the following, save, and load in your browser:</p>
<pre><code class="language-javascript"><script type="text/javascript">var blah;</script></code></pre>
            <p>Now in your console, type "blah" and hit enter.</p>
            <p>Now change set "blah" to 3 and inspect it in the console again.</p>
            <p>Now, type in something else, such as "foo", and inspect again.</p>
        </div>

        <div class="slide">
            <h4>Not declaring variables can lead to unexpected results (and thus errors in strict mode).  Declare your variables!</h4>
            <p>This is the best way to ensure that your variables are doing what you want them to.</p>
        </div>

        <div class="slide section">
            <h4>Functions.</h4>
            <p>Another basic statement is the "function" statement, which declares a function.<p>
            <p class="smaller">A function is a type of statement that does something.</p>
<pre><code class="language-javascript">
function initialize(){
    var blah = 5;
    console.log(blah);
}
</code></pre>
            <p class="smaller">(this one just prints out the value of "blah" in console)</p>
            <p>To call it, add this:</p>
<pre><code class="language-javascript">initialize();</code></pre>
        </div>

        <div class="slide section">
            <h4>Conditional Statements.</h4>
            <p><strong>if</strong></p>
            <p>If such and such is true, do something!</p>
<pre><code class="language-javascript">
var blah = 5;
if (blah == 5) {
    console.log('true!');
}
</code></pre>
        </div>

        <div class="slide section">
            <p><strong>if ... else</strong></p>
            <p>Similar to an if statement, but also does something if the condition is false.</p>
<pre><code class="language-javascript">
var blah = 5;
if (blah == 5) {
    console.log('true!');
} else {
    console.log('false =(');
}
</code></pre>
            <p>You can also do an <strong>if else if</strong> with a separate condition.</p>
        </div>

        <div class="slide">
<pre><code class="language-javascript">
var blah = 12;
if (blah == 5) {
    console.log('five!');
} else if (blah == 6) {
    console.log('six!');
} else {
    console.log('anything but five or six');
}
</code></pre>
            <ul class="build">
                <li>Useful for multiple conditions...</li>
                <li>And when you want a default or fallback behavior.</li>
            </ul>
        </div>

        <div class="slide">
            <p>Back to functions..</p>
<pre class="structure"><code class="language-javascript">
function initialize(){
    var blah = 5;
    for (var i = 0; i <= blah; i++) {
        console.log(i);
    }
}
</code></pre>
            <p>...which introduces control structures.</p>
            <p>Essentially: "for each value of i starting at 0 and ending where i is less than or equal to the value of variable blah"</p>
            <p>If you run this function, it should print in the console, 0, 1, 2, 3, 4, 5.</p>
        </div>

        <div class="slide section">
            <h4>Passing in values.</h4>
            <p>All functions can optionally accept values.  These values can be used inside of the scope of the function.</p>
<pre class="structure"><code class="language-javascript">
function initialize(blah){
    for (var i = 0; i <= blah; i++) {
        console.log(i);
    }
}

initialize(6);
</code></pre>
            <p>This function accepts a number, and then enters a loop, until the value of the number passed in is met.  Try it again with another number and see the output!</p>
        </div>

        <div class="slide section">
            <h4>Loop Statements.</h4>
            <p>A type of statement, which starts a "loop".  Basically, something that evaluates over and over until whatever conditions you give it return false.</p>
            <p>In our previous example, we are printing out the value of "i" until i <= blah returns false. </p>
            <p><strong>This means the loop stops when the value of i becomes equal to the value of blah.</strong></p>
            <p>Useful when consuming data until the data is gone, or until an outside condition is met.</p>
        </div>

        <div class="slide">
            <h4>Loop Statements, continued.</h4>
            <p><strong>do ... while</strong></p>
            <p>Let's rewrite our previous function using this type of loop statement.</p>
<pre class="structure"><code class="language-javascript">
var blah = 5;
var i = 0;
do {
    console.log(i);
    i++;
}
while (i <= blah);
</code></pre>
        </div>

        <div class="slide">
            <h4>Loop Statements, last one promise!</h4>
<pre class="structure"><code class="language-javascript">
var blah = 5;
var i = 0;
while (i <= blah) {
    console.log(i);
    i++;
}
</code></pre>
        </div>

        <div class="slide">
            <h4>So what's the difference?</h4>
            <p class="smaller">hint .. check out the order we are writing things in!</p>
            <p><strong>do ... while</strong> always executes once (because the condition is after the body).</p>
            <p><strong>while</strong>, the conditions are first, so it may never execute.</p>
            <p><strong>for</strong> loop, indicates that we are doing something "generative" in our conditions (in this case, adding one each time)</p>
        </div>


        <div class="slide invert black section">
    <h1 class="white">Literal Syntax.</h1>
</div>

<div class="slide">
    <h4>Literal Syntax</h4>
    <p>An object literal is a list of zero or more pairs of property names and associated values of an object, enclosed in curly braces ({}).</p>
    <pre><code class="language-javascript">
var object = {
    foo: 1,
    "bar": "some string"
};
</code></pre>
    <p>Properties can be accessed using dot and bracket notation.</p>
    <pre><code class="language-javascript">
object.foo = object.foo + 1; //dot notation
object["foo"] = object["foo"] + 1; //bracket notation
    </code></pre>
</div>

<div class="slide">
    <p>When a function is used as an object property, it is called a method. Like properties, methods can also be specified in object literal notation.</p>
    <pre><code class="language-javascript">
var object = {
    sum: function(foo, bar) {
        return foo + bar;
    }
};
    </code></pre>
    <p>Methods can also be invoked using dot and bracket notation.</p>
    <pre><code class="language-javascript">
object.sum(1, 2);
object["sum"](1, 2);
    </code></pre>

</div>
<div class="slide">
    <p>A full Object Literal Syntax example.</p>
            <pre class="full"><code class="language-javascript">
var DEMO = DEMO || {};
DEMO.global = {
    init: function(){
        DEMO.global.print();
    },
    print: function() {
        var print = document.getElementById('print_button');

            print.onclick = function () {
            window.print();
            };
    }
};
// using window ready is better than DOM ready
window.onload = function () {
    DEMO.global.init();
};
            </code></pre>

</div>
<div class="slide">
    <p>Literal vs. Classic</p>
            <pre class="full"><code class="language-javascript">
var candies = new Array();
candies.push('Snickers', 'Butterfinger', 'Twix');
var goodies = ['Munchos', 'Funyons', 'Cheetos']; //literal
console.log(candies);
console.log(goodies);
var kitten = new Object();
kitten.meow = function() { alert('meow'); };
kitten.monthsOld = 4;
var puppy = {
        bark: function() {
                alert('yap');
        },
        monthsOld: 6
}
kitten.meow();
puppy.bark();
console.log(kitten);
console.log(puppy);
            </code></pre>

</div>

                <div class="slide invert black section">
            <h1 class="white">Events.</h1>
        </div>
        <div class="slide">
            <h4>Events.</h4>

            Javascript can listen for user interactions. These interactions are called "events".

            <div style="width: 100px; height: 85px; padding-top: 15px; border: 1px black solid; margin: 0 auto; text-align: center; cursor: pointer;" id="click_me">Click me!</div>

            <pre><code class="language-javascript">
var element = document.getElementById('click_me');

element.onclick = function () {
    alert('Hello, World!');
};
</code></pre>
        </div>


        <script type="text/javascript">

            var element = document.getElementById('click_me');

            element.onclick = function () {
                alert('Hello, World!');
            };

        </script>
        
                <div class="slide">
            <h4>Events.</h4>
            
            Most Common events
        
            <ul class="build">
                <li><label>Load</label></li>
                <li><label>Click</label><button id="events_button">Click me!</button></li>
                <li><label>Mouseover</label><button id="events_mouseover" style="padding: 10px;">Mouse is out!</button></li>
                <li><label>Change</label><select id="events_change"><option value="ribs">Ribs</option><option value="brisket">Brikset</option><option value="mac_n_cheese">Mac & Cheese</option></select></li>
                <li>And lots more!</li>
            </ul>        
            
            <script type="text/javascript">
            
                var events_button = document.getElementById('events_button');
                
                events_button.onclick = function () { 
                    alert('Hello, World!');
                };
                
                var events_mouseover = document.getElementById('events_mouseover');
                
                events_mouseover.onmouseover = function () { 
                    events_mouseover.innerHTML = 'Mouse is In!'
                };
                events_mouseover.onmouseout = function () { 
                    events_mouseover.innerHTML = 'Mouse is Out!'
                };

                var events_change = document.getElementById('events_change');
                
                events_change.onchange = function (val) { 
                    alert(events_change.options[events_change.selectedIndex].value);
                };
            
            </script>
            
        </div>

<div class="slide black invert white-border">
	<h1 class="v-center bigger white">Event Model.</h1>
</div>

<div class="slide">
	<h4>Event listeners.</h4>
	<p>The preferred way of registering event listeners in the DOM is to use <pre>element.addEventListener</pre>
	This is similar to directly triggering via functions such as onclick(), but is a more modern and elegant solution.</p>
<pre class="language-javascript">
<code>
var btn = document.getElementById('button');

btn.addEventListener('click', function(){
	console.log('Button clicked!');
});
</code>
</pre>
</div>

<div class="slide">
	<h4>Common listeners.</h4>
	<p>It is very common to add event listeners to your page.  Some common listeners happen at:</p>
	<ul class="build">
		<li>Window.  For global events or things such as scrolling (window.scroll)</li>
		<li>KeyboardEvent.  To listen for things such as blur or hitting enter (keydown 13.)</li>
		<li>MouseEvent.  For mousing in or out of certain areas.</li>
	</ul>
</div>

<div class="slide">
	<h4>Custom Events.</h4>
	
</div>





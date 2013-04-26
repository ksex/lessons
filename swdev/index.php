
<!DOCTYPE html>
<html>
<head>
    <title>Get Schooled</title>
    
    <meta charset="utf-8">
    
    <link rel="stylesheet" type="text/css" href="libs/css/slideshow.css" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=' + 'Open+Sans:regular,semibold,italic,italicsemibold|Droid+Sans+Mono" />
    <script src="libs/js/slides.js"></script>
    
    <!-- references to custom stuff goes here. -->
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />


    <!-- syntax highlighting -->
    <script src="libs/js/prism.js"></script>
    <link rel="stylesheet" type="text/css" href="libs/css/prism.css" />
    
</head>

<body class="hidden">
    <div class="menu-container"><ul class="menu no-bullet"></ul></div>
    
    <div class="slides layout-regular template-huge">
        
        <div class="slide">
            <h1 class="thin-pink-bottom-border">
            Huge School
            </h1>
            <p class="smaller">Web Dev for Software Devs.</p>
        </div>
                
        <div class="slide magenta invert white-border">
            <h1 class="v-center bigger white">Get started.</h1>
        </div>
        
        <div class="slide">
            <h4>What we will cover in this course</h4>
            <ul class="build">
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
            </ul>
        </div>
        
        

<?php include('html.php') ?>

        
        

        <div class="slide magenta invert white-border">
            <h1 class="v-center bigger white">CSS.</h1>
        </div>

        <div class="slide section">
    <h4>What is CSS?</h4>
    <ul class="build">
        <li>Stands for Cascading Style Sheets</li>
        <li>Adds formatting/styling to html document</li>
        <li>Composed of <strong>selctors</strong> and <strong>properties</strong></li>
    </ul>
</div>


<div class="slide section">
    <h4>CSS - <small>Basic Syntax</small></h4>
    <ul class="build no-bullet">
        <li>
            CSS is generally written like this:
            <pre>
selector {
    property-name: value;
    property2: value;
}</pre>
        </li>
        <li>
            can also be written on a single line:
            <pre>
selector {property-name: value;property2: value;}</pre>
        </li>
    </ul>
</div>

<div class="slide section">
    <h4>Including CSS</h4>
    <ul class="build">
        <li>Inline <small>:(</small> </li>
        <li>Internal</li>
        <li>External/Linked <strong>preferred</strong></li>

    </ul>
</div>
        

<!-- <div class="slide">
    <h4>Including CSS - <small>Inline</small></h4>
    <pre>
<div style="color: blue;">This text will be blue
</div>    
    </pre>
    <div style="color: blue;">This text will be blue
    </div>    
</div> -->







        
        <div class="slide black section">
    <h1 class="white">Selectors and Properties</h1>
</div>

<div class="slide image">
    <img src="images/html-console.png" width="900" />
</div>

<div class="slide">
    <h4>Including CSS - <small>Internal</small></h4>
    <pre class="structure">
&lt;head>
     ...
     &lt;style type="text/css">
          /* This is a comment
          for an h1 style */
          h1 {
              color: red;
          }
     &lt;/style>
&lt;/head>
 </pre>
<small class="demo magenta">( demo )</small></div>

<div class="slide black invert">
    <h1 class="white">CSS Selectors</h1>
</div>

<div class="slide">
    <h4>Tag</h4>
    <p>The tag selector is used to apply styles to certain tags</p>
    <pre>
h2 {
    color: red;
}
h4 {
    color: blue;
}
    <h2>This will be red</h2>
    <h4>This will be blue</h4>
    <h2>This will also be red</h2>
    <h4>This will also be blue</h4>
</pre>
    <p>The above css would make the text of every h2 tag red and every h4 tag blue </p>
</div>

<div class="slide">
    <h4>Tag</h4>
    <pre>
h2 {
    color: red;
}
h4 {
    color: blue;
}
    </pre>
    <small class="demo magenta">( demo )</small></div>

<div class="slide">
    <h4>ID - <strong>#</strong></h4>
    <p>Any html tag, can be given a unique id attribute. The id selector,<strong>#</strong>, is used to target an element with a specified id</p>
    <pre>
#main-content {
    color: magenta;
}
#terms {
    color: green;
}

<div id="main-content">This text will be magenta</div>
<h1 id="terms">This text will be green</h1>
    </pre>
    <small class="demo magenta">( demo )</small></div>

<div class="slide">
    <h4>Class - <strong>.</strong></h4>
    <p>Any html tag can be given a class attribute with multiple values non-unique values. The class selector,<span style="font-size: 40px;"><strong>.</strong></span>,is used to target all elements with a specified class</p>
    <pre>
.sub-header {
     font-size: 29px;
}
.red-text {
     color: red;
}
.big-text {
    font-size: 40px;
}
        <h2 class="sub-header">This text will be big</h2>
        <p class="red-text">This text will be red</p>
        <p class="red-text big-text">This text will be big AND red</p>
    </pre>
<small class="demo magenta">( demo )</small></div>

<div class="slide">
    <h4>Attribute - <tag><strong>[attribute]</strong></h4>
    <p>Selects an html tag that has the attribute</p>
    <pre>
p[title] {
    color: blue
}
    <p>This text will be black</p>
    <p title="brisket">This text will be blue</p>
</div>
<div class="slide">
    <h4>Attribute equals- <tag><strong>[attribute="value"]</strong></h4>
    <p>Selects an html tag that has an attribute with the specified value</p>
    <pre>
p[title="waffles"] {
    color: blue
}
    <p>This text will be black</p>
    <p title="brisket">This text will be black</p>
    <p title="waffles">This text will be blue</p>
</div>

<div class="slide">
    <h4>Attribute value list contains- <tag><strong>[attribute~="value"]</strong></h4>
    <p>Selects an html tag that has an attribute whose value is the specified value or is a space delimited list containing that value </p>
    <pre>
p[title~="chicken"] {
    color: blue
}
    <p>This text will be black</p>
    <p title="waffles">This text will be black</p>
    <p title="waffles chicken">This text will be blue</p>
</div>

<div class="slide">
    <h4>Back to classes and ids.</h4>
    <p>Any class or id is an attribute.  You can also target these such as:</p>
<pre>
div[class="blue"] {
    color: blue;
}
</pre>
    <p># and . are shorthands for these commonly used attributes.</p>
</div>


<div class="slide">
    <h4>Descendant - <strong>Ancestor1 [Ancestor2...] Target</strong>.</h4>
    <p>Using a descendant is actually using multiple selectors where the last selector, the element to be styled, is
        a descendant of all the selectors before it.</p>
    <pre>
#address p .city {
    color: silver;
}
.pork li {
    color: salmon;
}
    </pre>
</div>

<div class="slide">
    <h4>Descendant cont.</h4>
    <pre>
#address p .city {
    color: silver;
}
<div id="address" >
    This text will be black
    <p>
        This text will be black
        <span class="city" >This text will be silver</span>
            This text will be black
    </p>
</div>
    </pre>
</div>
<div class="slide">
    <h4>Descendant cont.</h4>
    <pre>
.pork li {
    color: salmon;
}
<div class="pork">
    <ul>
        <li>This text will be salmon</li>
    </ul>
</div>
<div>
    <ul>
        <li>This text will be black</li>
    </ul>
</div>
    </pre>
</div>
<!-- <div class="slide">
    <h4>Child - <strong> > </strong></h4>
    <p>

</div>
<div class="slide">
    <h4>Adjacent Sibling - <strong> + </strong></h4>

</div>
<div class="slide">
    <h4>General Sibling - <strong> ~ </strong></h4>

</div>
<div class="slide">
    <h4>Psuedo Class - <strong>:</strong>Psuedo</h4>css3 except for link,visited hover,active,focus
    <p>Psuedo classes

</div>
<div class="slide">
    <h4>Combining Selectors</h4>

    #ID li.class > li.odd


</div> -->



        <div class="slide section">
    <h4>Specificity</h4>
    <p>When more than one CSS rule sets a given style property for an element, the most <em>specific</em> rule will be applied for that propery.</p>
    <ul class="build no-bullet">
        <li>The specificity of a given CSS rule is determined by exactly four factors, in decending order of importance:</li>
        <li>
            <ul class="no-bullet">
                <li>1. The element's style attribute</li>
                <li>2. The presence and quantity of IDs in the selector</li>
                <li>3. The presence and quantity of classes and pseudo-classes in the selector</li>
                <li>4. The presence and quantity of elements and pseudo-elements in the selector</li>
            </ul>
        </li>
    </ul>
</div>

        

<div class="slide black">
    <h1 class="white">CSS Properties</h1>
</div>

<div class="slide">
  <h4>Including CSS - <small>External/Linked</small></h4>
  <pre class="structure">
&lt;head>
    ...
    &lt;link rel="stylesheet" type="text/css" href="css/reset.css" />
    &lt;link rel="stylesheet" type="text/css" href="css/global.css" />
    ...
&lt;/head>
</pre>
  <ul class="build">
    <li>Create a new file save it as <strong>global.css</strong>, place it inside the css folder</li>
    <li>Copy your css rule from your internal css into global.css</li>
  </ul>
<small class="demo magenta">( demo )</small></div>

<div class="slide">
    <h4>CSS properties</h4>
    <ul class="build no-bullet">
        <li>Use CSS to modify properties of HTML elements</li>
        <li>
<pre class="structure">
nav {
  <strong>text-decoration</strong>: underline;
  <strong>height</strong>: 40px;
  <strong>margin-top</strong>: 20px;
  <strong>margin-right</strong>: auto;
  <strong>margin-bottom</strong>: 70px;
  <strong>margin-left</strong>: auto;
}
</pre>
        </li>
    </ul>
</div>


<div class="slide">
  <h4> CSS - <small>properties</small></h4>
<pre>
header {
    background-image: url('../images/header-bg.jpg');
    background-repeat: no-repeat;
    background-position: top left;
    width: 1400px;
    height: 777px;
    margin: 0px auto;
}</pre>
  <ul class="build no-bullet">
    <li style="list-style-type:none !important;"> 
<pre class="build">
header {
    background: url('../images/header-bg.jpg') no-repeat top left;
    width: 1400px;
    height: 777px;
}</pre>
    </li>
  </ul>
<small class="demo magenta">( demo )</small></div>






<div class="slide">
<pre>
footer {
    color: #d56161;
    background: #bc0505;
    padding: 15px 0;
    font-size: 14px;
}
</pre>
</div>        
        <div class="slide section">
    <h4>CSS - float</h4>
    <ul>
        <li>The <strong>float</strong> property is used to float an element to the left or right.</li>
        <li>Subsequent elements wrap around the floating element.</li>
    </ul>
    <ul class="build">
        <li>open <strong>float_lab.html</strong></li>
    </ul>
</div>



<div class="slide">
    <h4>float</h4>
    <ul class="build">
        <li>How to get block level elements to sit next to each other?</li>
        <li>Float them!</li>
    </ul>

</div>        
        <div class="slide">
    <h4>Fonts</h4>
    <ul class="build no-bullet">
        <li>
            <strong>Google Web Fonts</strong> allows you to embed fonts for free!
        </li>
        <li>
            <pre class="structure">
&lt;html>
    &lt;head>
    &lt;link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Bevan">
    &lt;/head>
&lt;/html>
            </pre>
        </li>
        <li>
            <pre class="structure">        
body {
    font-family: 'Bevan', arial, sans-serif;
    font-size: 48px;
}
            </pre>
        </li>
    </ul>
</div>
        <div class="slide section">
    <h4>Inheritance</h4>
    <p>Each element in an HTML document is part of a tree, and every element except the initial <html> element has a parent element that encloses it. Whatever styles are applied to that parent element can be applied to the elements enclosed in it if the properties are inherited</p>
    <ul class="build no-bullet">
        <li>
            <pre><h6>This is a <em>Big</em> Headline</h6></pre>
        </li>
        <li>The EM element is a child of the H1 element, and any styles on the H1 that are inherited will be passed on to the EM text as well. For example: h6 { color: red; }</li>
    </ul>
</div>
        <div class="slide section">
    <h4>Cascading</h4>
    <p>The CSS cascade assigns a weight to each style rule. When several rules apply, the one with the greatest weight takes precedence.</p>
    <ul class="build no-bullet">
        <li>
            <ul>
                <li>1. Browser default</li>
                <li>2. External style sheet</li>
                <li>3. Internal style sheet (in the head section)</li>
                <li>4. Inline style (inside an HTML element)</li>
            </ul>
        </li>
        <li>So, an inline style (inside an HTML element) has the highest priority, which means that it will override a style defined inside the <head> tag, or in an external style sheet, or in a browser (a default value).</li>
    </ul>
</div>
        <style type="text/css">
    #box-model{
        background: url('images/css-box-model.gif') #FFF  center 110px no-repeat;
    }
    .bottom {
        margin: 400px 0 0;
    }
</style>
<div id="box-model" class="slide section">
    <h4>Box Model</h4>
    <p class="bottom">All HTML elements can be considered as boxes. In CSS, the term "box model" is used when talking about design and layout.</p>
</div>
<div class="slide">
    <ul>
        <li>The CSS box model is essentially a box that wraps around HTML elements, and it consists of: margins, borders, padding, and the actual content.</li>
        <li>
            <pre>
Margin - Clears an area around the border.
Border - A border that goes around the padding and content.
Padding - Clears an area around the content.
Content - The content of the box, where text and images appear.
</pre>
        </li>
        <li>*Important: When you set the width and height properties of an element with CSS, you just set the width and height of the content area. To calculate the full size of an element, you must also add the padding, borders and margins.</li>
    </ul>
</div>
        <div class="slide black invert section">
    <h1 class="v-center bigger white">Media Queries.</h1>
</div>

<div class="slide">
    <h4>Media Queries.</h4>
    <p>Consists of a media type (such as screen, print, device) and various css rules to be applied.</p>
    <p>Allows a developer to target either devices or size-based breakpoints (or both) to customize a website's layout and appearance.</p>
    <p><strong>Media queries are one very important tool for creating a responsive design.</strong></p>
</div>

<div class="slide">
    <h4>Targeting a device.</h4>
    <ul>
        <li><strong>tv</strong>: for fancy tv owners</li>
        <li><strong>print</strong>: for print stylesheets</li>
        <li><strong>screen</strong>: for almost everything else!</li>
    </ul>
</div>

<div class="slide">
    <h4>Targeting a feature.</h4>
    <ul>
        <li><strong>min-color</strong>: if you require a certain number of colors for a style</li>
        <li><strong>max-device-width</strong>: to target a certain device size (note: only for devices!)</li>
        <li><strong>max-width</strong>: for all devices or browser needs</li>
    </ul>
</div>


<div class="slide">
    <h4>Why target a feature or size?</h4>
    <p>Retina display.  You can target based on <strong>-webkit-min-device-pixel-ratio: 2</strong> to serve up higher quality images.</p>
    <p>Any small device.  Target based on a max or min size to provide a more natural layout on small devices ie: <strong>max-width: 480px</strong>.</p>
</div>

<div class="slide">
    <h4>Example.</h4>
<pre>
@media screen and (max-width: 480px) {
    .menu-bbq {
        width: 100%;
        float: left;
    }
}
</pre>
    <p>Targets all screens (including browser) that are smaller than 480px.</p>
    <p>Useful for phones or smaller tablets.</p>
    <p><strong>Normal css goes into any media query.  Anything you can use normally can be put in a media query!</strong></p>
</div>

<div class="slide">
    <h4>Targeting strategies.</h4>
    <p class="smaller">If you have a lot of wide content, it may be smarter to target sizes based on the content than the sizes of common devices.</p>
    <p class="smaller">For example, our header image is 874px wide.  While this isn't a common breakpoint, it makes sense that for any screen smaller than this, we should hide the image.</p>
</div>

<div class="slide">
    <h4>Example.</h4>
    <pre>
@media screen and (max-width: 874px) {
    /* Update global areas for smaller screens */
    h1 {
        background: none;
    }

    header {
        background: none;
        height: 0px;
    }
}
</pre>
    <p>In this case, we are just hiding the image since we have another logo.  You could also stretch the image to scale, or serve up a smaller background image specifically for smaller devices.</p>
</div>

<div class="slide">
    <h4>Responsive Design and Responsive Web.</h4>

    <p>
        Responsive is the way the web is going at a rapid rate. Tablets, phones, desktops, gaming consoles, etc all view the same websites at different
        resolutions and screensizes. How do we ensure that our websites look good on all of these devices?
    </p>

    <p>Check <a href="http://mediaqueri.es">http://mediaqueri.es</a> for great examples of responsive sites.</p>

</div>
    
        



        
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
<pre>
document.getElementById('heading').innerHTML = 'New heading!';
</pre>
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
<pre>
var string = 'this is a string!';
var string2 = "this is also a string!";
</pre>
        </div>

        <div class="slide">
            <h4>Numbers.</h4>
            <p>Numbers are numeric values.  Commonly used in conjunction with the arithmetic operators.</p>
<pre>
var number = 1;
console.log(number++);
console.log(4 + 2);
</pre>
        </div>

        <div class="slide">
            <h4>Arrays.</h4>
            <p>Arrays are a group of strings, numbers, arrays, or objects.</p>
<pre>
var things = [];

things.push('cars', 'planes', 'trains', 2);

console.log(things);
console.log(things.length);
</pre>
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
<pre>
var things = {
    'car' : 'corvette',
    'plane' : 'bomber',
    'train' : 'amtrak'
};

console.log(things);
console.log(things.car);
</pre>
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
<pre>
var blah = 'foo';
</pre>
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
<pre>var blah;</pre>
            <p>or a number</p>
<pre>var blah = 3;</pre>
            <p>or a string</p>
<pre>var blah = 'foo';</pre>
        </div>

        <div class="slide">
            <p>Open up a new html file and save it.</p>
            <p>Type the following, save, and load in your browser:</p>
<pre><script type="text/javascript">var blah;</script></pre>
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
<pre>
function initialize(){
    var blah = 5;
    console.log(blah);
}
</pre>
            <p class="smaller">(this one just prints out the value of "blah" in console)</p>
            <p>To call it, add this:</p>
<pre>initialize();</pre>
        </div>

        <div class="slide section">
            <h4>Conditional Statements.</h4>
            <p><strong>if</strong></p>
            <p>If such and such is true, do something!</p>
<pre>
var blah = 5;
if (blah == 5) {
    console.log('true!');
}
</pre>
        </div>

        <div class="slide section">
            <p><strong>if ... else</strong></p>
            <p>Similar to an if statement, but also does something if the condition is false.</p>
<pre>
var blah = 5;
if (blah == 5) {
    console.log('true!');
} else {
    console.log('false =(');
}
</pre>
            <p>You can also do an <strong>if else if</strong> with a separate condition.</p>
        </div>

        <div class="slide">
<pre>
var blah = 12;
if (blah == 5) {
    console.log('five!');
} else if (blah == 6) {
    console.log('six!');
} else {
    console.log('anything but five or six');
}
</pre>
            <ul class="build">
                <li>Useful for multiple conditions...</li>
                <li>And when you want a default or fallback behavior.</li>
            </ul>
        </div>

        <div class="slide">
            <p>Back to functions..</p>
<pre class="structure">
function initialize(){
    var blah = 5;
    for (var i = 0; i <= blah; i++) {
        console.log(i);
    }
}
</pre>
            <p>...which introduces control structures.</p>
            <p>Essentially: "for each value of i starting at 0 and ending where i is less than or equal to the value of variable blah"</p>
            <p>If you run this function, it should print in the console, 0, 1, 2, 3, 4, 5.</p>
        </div>

        <div class="slide section">
            <h4>Passing in values.</h4>
            <p>All functions can optionally accept values.  These values can be used inside of the scope of the function.</p>
<pre class="structure">
function initialize(blah){
    for (var i = 0; i <= blah; i++) {
        console.log(i);
    }
}

initialize(6);
</pre>
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
<pre class="structure">
var blah = 5;
var i = 0;
do {
    console.log(i);
    i++;
}
while (i <= blah);
</pre>
        </div>

        <div class="slide">
            <h4>Loop Statements, last one promise!</h4>
<pre class="structure">
var blah = 5;
var i = 0;
while (i <= blah) {
    console.log(i);
    i++;
}
</pre>
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
    <pre>
var object = {
    foo: 1,
    "bar": "some string"
};
</pre>
    <p>Properties can be accessed using dot and bracket notation.</p>
    <pre>
object.foo = object.foo + 1; //dot notation
object["foo"] = object["foo"] + 1; //bracket notation
    </pre>
</div>

<div class="slide">
    <p>When a function is used as an object property, it is called a method. Like properties, methods can also be specified in object literal notation.</p>
    <pre>
var object = {
    sum: function(foo, bar) {
        return foo + bar;
    }
};
    </pre>
    <p>Methods can also be invoked using dot and bracket notation.</p>
    <pre>
object.sum(1, 2);
object["sum"](1, 2);
    </pre>

</div>
<div class="slide">
    <p>A full Object Literal Syntax example.</p>
            <pre class="full">
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
            </pre>

</div>
<div class="slide">
    <p>Literal vs. Classic</p>
            <pre class="full">
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
            </pre>

</div>

                <div class="slide invert black section">
            <h1 class="white">Events.</h1>
        </div>
        <div class="slide">
            <h4>Events.</h4>

            Javascript can listen for user interactions. These interactions are called "events".

            <div style="width: 100px; height: 85px; padding-top: 15px; border: 1px black solid; margin: 0 auto; text-align: center; cursor: pointer;" id="click_me">Click me!</div>

            <pre>
<code class="language-javascript">
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
        <h1 class="v-center bigger white">Questions?</h1>
        </div>
        
        <div class="slide">
        <h1 class="v-center bigger magenta">Done.</h1>
        </div>
        
    </div> <!-- /slides -->
</body>
</html>
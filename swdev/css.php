        

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
<pre><code class="language-css">
selector {
    property-name: value;
    property2: value;
}
</code></pre>
        </li>
        <li>
            can also be written on a single line:
<pre><code class="language-css">
selector {property-name: value;property2: value;}
</code></pre>
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
        
 <div class="slide black section">
    <h1 class="white">Selectors and Properties</h1>
</div>

<div class="slide image">
    <img src="images/html-console.png" width="900" />
</div>

<div class="slide">
    <h4>Including CSS - <small>Internal</small></h4>
    <pre class="structure"><code class="language-css">
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
 </code></pre>
<small class="demo magenta">( demo )</small></div>

<div class="slide black invert">
    <h1 class="white">CSS Selectors</h1>
</div>

<div class="slide">
    <h4>Tag</h4>
    <p>The tag selector is used to apply styles to certain tags</p>
    <pre><code class="language-css">
h2 {
    color: red;
}
h4 {
    color: blue;
}
&lt;h2&gt;This will be red&lt;/h2&gt;
&lt;h4&gt;This will be blue&lt;/h4&gt;
&lt;h2&gt;This will also be red&lt;/h2&gt;
&lt;h4&gt;This will also be blue&lt;/h4&gt;
</code></pre>
    <p>The above css would make the text of every h2 tag red and every h4 tag blue </p>
</div>


<div class="slide">
    <h4>ID - <strong>#</strong></h4>
    <p class="smaller">Any html tag, can be given a unique id attribute. The id selector,<strong>#</strong>, is used to target an element with a specified id</p>
    <pre><code class="language-css">
#main-content {
    color: magenta;
}
#terms {
    color: green;
}

&lt;div id="main-content"&gt;This text will be magenta&lt;/div&gt;
&lt;h1 id="terms"&gt;This text will be green&lt;/h1&gt;
    </code></pre>
    <small class="demo magenta">( demo )</small></div>

<div class="slide">
    <h4>Class - <strong>.</strong></h4>
    <p class="smaller">Any html tag can be given a class attribute with multiple values non-unique values. The class selector,<span style="font-size: 40px;"><strong>.</strong></span>,is used to target all elements with a specified class</p>
    <pre><code class="language-css">
.sub-header {
     font-size: 29px;
}
.red-text {
     color: red;
}
.big-text {
    font-size: 40px;
}
        &lt;h2 class="sub-header"&gt;This text will be big&lt;/h2&gt;
        &lt;p class="red-text"&gt;This text will be red&lt;/p&gt;
        &lt;p class="red-text big-text"&gt;This text will be big AND red&lt;/p&gt;
    </code></pre>
<small class="demo magenta">( demo )</small></div>

<div class="slide">
    <h4>Attribute - <strong>[attribute]</strong></h4>
    <p>Selects an html tag that has the attribute</p>
    <pre><code class="language-css">
p[title] {
    color: blue
}
    &lt;p&gt;This text will be black&lt;/p&gt;
    &lt;p title="brisket"&gt;This text will be blue&lt;/p&gt;
</code></pre>
</div>
<div class="slide">
    <h4>Attribute equals- <strong>[attribute="value"]</strong></h4>
    <p>Selects an html tag that has an attribute with the specified value</p>
    <pre><code class="language-css">
p[title="waffles"] {
    color: blue
}
    &lt;p&gt;This text will be black&lt;/p&gt;
    &lt;p title="brisket"&gt;This text will be black&lt;/p&gt;
    &lt;p title="waffles"&gt;This text will be blue&lt;/p&gt;
</code></pre>
</div>

<div class="slide">
    <h4>Attribute value list contains- <tag><strong>[attribute~="value"]</strong></h4>
    <p>Selects an html tag that has an attribute whose value is the specified value or is a space delimited list containing that value </p>
    <pre><code class="language-css">
p[title~="chicken"] {
    color: blue
}
    &lt;p&gt;This text will be black&lt;/p&gt;
    &lt;p title="waffles"&gt;This text will be black&lt;/p&gt;
    &lt;p title="waffles chicken"&gt;This text will be blue&lt;/p&gt;
</code></pre>
</div>

<div class="slide">
    <h4>Back to classes and ids.</h4>
    <p>Any class or id is an attribute.  You can also target these such as:</p>
<pre><code class="language-css">
div[class="blue"] {
    color: blue;
}
</code></pre>
    <p><strong># and . are shorthands for these commonly used attributes.</strong></p>
</div>


<div class="slide">
    <h4>Descendant - <strong>Ancestor1 [Ancestor2...] Target</strong>.</h4>
    <p>Using a descendant is actually using multiple selectors where the last selector, the element to be styled, is
        a descendant of all the selectors before it.</p>
    <pre><code class="language-css">
#address p .city {
    color: silver;
}
.pork li {
    color: salmon;
}
    </code></pre>
</div>

<div class="slide">
    <h4>Descendant cont.</h4>
    <pre><code class="language-css">
#address p .city {
    color: silver;
}
&lt;div id="address" &gt;
    This text will be black
    &lt;p&gt;
        This text will be black
        &lt;span class="city" &gt;This text will be silver&lt;/span&gt;
            This text will be black
    &lt;/p&gt;
&lt;/div&gt;
    </code></pre>
</div>
<div class="slide">
    <h4>Descendant cont.</h4>
    <pre><code class="language-css">
.pork li {
    color: salmon;
}
&lt;div class="pork"&gt;
    &lt;ul&gt;
        &lt;li&gt;This text will be salmon&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div&gt;
    &lt;ul&gt;
        &lt;li&gt;This text will be black&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
    </code></pre>
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
      
<div class="slide section">
    <h4>Inheritance</h4>
    <p>Each element in an HTML document is part of a tree, and every element except the initial <html> element has a parent element that encloses it. Whatever styles are applied to that parent element can be applied to the elements enclosed in it if the properties are inherited</p>
    <ul class="build no-bullet">
        <li>
            <pre><code class="language-css"><h6>This is a <em>Big</em> Headline</h6></code></pre>
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
            <pre><code class="language-css">
Margin - Clears an area around the border.
Border - A border that goes around the padding and content.
Padding - Clears an area around the content.
Content - The content of the box, where text and images appear.
</code></pre>
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
<pre><code class="language-css">
@media screen and (max-width: 480px) {
    .menu-bbq {
        width: 100%;
        float: left;
    }
}
</code></pre>
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
    <pre><code class="language-css">
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
</code></pre>
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
    
        

<div class="slide magenta invert white-border">
    <h1 class="v-center bigger white">HTML.</h1>
</div>
    
        
<div class="slide section">
    <h4>What is HTML?</h4>

    <ul class="build">
        <li>HTML stands for Hyper Text Markup Language</li>
        <li>It is a language that was invented solely for creating websites</li>
        <li>HTML is built by using a series of <strong>tags</strong></li>
        <li>HTML can be read by search engines</li>
        <li>HTML is generally referred to as <strong>markup</strong> by developers</li>
        <li>Without HTML, there is no World Wide Web as we know it!</li>
    </ul>

</div>
        
<div class="slide black invert">
    <h1 class="v-center bigger white">HTML Syntax.</h1>
</div>
<!-- syntax -->
<div class="slide">
    <h4>HTML</h4>
    <ul>
        <li>Tags</li>
        <li>Attributes</li>
        <li>Attribute values</li>
    </ul>
    <ul class="build no-bullet">
        <li>
<pre class="structure">
&lt;html> &lt;/html></code></pre>
        </li>
        <li>
<pre><code class="language-markup"><a> Anchor Tag </a> </code></pre>
        </li>
        <li>
        Adding an attribute:
<pre class="structure">&lt;a <strong>href="http://www.hugeinc.com"</strong>> Anchor Tag &lt;/a> </code></pre>
        </li>
    </ul>
</div>

<div class="slide">
    <h4>Common Attributes</h4>
    <ul class="build no-bullet">
        <li>
<pre class="structure">
&lt;a <strong>href="http://www.hugeinc.com" target="_blank"</strong>>  &lt;/a></code></pre>
        </li>
        <li>
<pre class="structure">
&lt;div <strong>class="menu-sides"</strong>>  &lt;/div>
</code></pre>
        </li>
        <li>
<pre class="structure">
&lt;section <strong>id="menu-drinks" class="menu clearfix"</strong>>  &lt;/section>
</code></pre>
        </li>
        <li>
<pre class="structure">
&lt;img <strong>src="images/coyboy.jpg" alt="Cowboy" width="202" height="201"</strong> />
</code></pre>
        </li>
        
    </ul>
</div>

<div class="slide">
    <h4>Setting up your environment</h4>
    <ul class="build">
        <li>Create a new Folder that will contain your project. Call it <strong>holdens_web</strong></li>
        <li>Copy the folder called <strong>css</strong> into your holdens_web folder</li>
        <li>Copy the folder called <strong>image</strong> into your holdens_web folder</li>
        <li>Sublime Text / Notepad ++</li>
        <li>File -> New File</li>
        <li>Save as <strong>index.html</strong></li>
    </ul>
</div>


<div class="slide">
    <h4>What every page needs</h4>
    <ul class="no-bullet">
        <li>
<pre class="structure">
&lt;!doctype html>
&lt;html>
    &lt;head>
        &lt;meta charset="utf-8" />
        &lt;title>Holden's Hog Tie&lt;/title>
    &lt;/head>
    &lt;body>
        &lt;!-- visible part of the site goes here -->
    &lt;/body>
&lt;/html></code></pre>
        </li>
    </ul>
    <small class="demo magenta">( demo )</small>
</div>

<!-- doctype -->
<div class="slide">
    <h4>Document type declaration</h4>
    <ul class="build">
        <li><strong>A Document Type Declaration</strong>, or <strong>DOCTYPE</strong>, is an instruction that tells the browser what kind of document it is rendering.</li>
        <li>
        HTML5 Doctype:
<pre class="structure">
&lt;!doctype html>
</code></pre>
        </li>
    </ul>
</div>

<!-- types of tags -->
<div class="slide">
    <h4>Types of tags</h4>
    <ul class="">
        <li>Tags can define the general page structure</li>
        <li>Tags can define sections of a page</li>
        <li>Tags can define elements on a page</li>
    </ul>
</div>



<div class="slide">
    <h4>More tags</h4>
    <ul class="build no-bullet">
        <li>
        Working within the <strong>&lt;body> &lt;/body></strong> tags
<pre><code class="language-markup">
<nav>
    <ul>
        <li><a href="#">About Holden's</a></li>
        <li><a href="#">Menu</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Location</a></li>
        <li><a href="#">Lorem Ipsum</a></li>
    </ul>
</nav>
</code></pre>
        </li>
        <li>
<pre><code class="language-markup">
<header>
    <h1><span>Holden's Hog Tie</span></h1>
</header>
</code></pre>
        </li>
    </ul>

<small class="demo magenta">( demo )</small></div>


<div class="slide">
    <h4>Even more tags!</h4>
    <ul class="no-bullet">
        <li>
<pre class="structure"><code class="language-markup">
<footer class="clearfix">
    <nav>
        <p>Holden's Hog Tie, 50 E Cesar Chavez St, Austin, TX (500) 867-5309</p>
        <ul>
            <li><a href="#">About Holden's</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Location</a></li>
            <li><a href="#">Lorem Ipsum</a></li>
        </ul>
    </nav>
</footer></code></pre>
        </li>
    </ul>    
<small class="demo magenta">( demo )</small></div>

<!--

<div class="slide">
    <h4>Even more tags!</h4>
    <ul class="build">
        <li>
        Headings
<pre class=""><h2>"No pork butts about it; The Best BBQ in Austin."<span>-Your Mom</span></h2></code></pre>
        </li>
        <li>
        Self closing tags
<pre><code class="language-markup"><img src="images/cowboy.jpg" alt="Cowboy" width="202" height="201"></code></pre>
        </li>
    </ul>
</div>


-->
        
        <div class="slide black invert section">
    <h1 class="v-center bigger white">Semantic Markup.</h1>
</div>
        <div class="slide">
            <h4>Semantic Markup</h4>

            <p>
            Semantic HTML is the use of HTML markup to reinforce the semantics, or meaning, of the information in webpages rather than merely to define its presentation (look).
            </p>

<pre class="structure">
<code class="language-markup">
<h2>Page Subtitle</h2>
<h1>Page Title</h1>
<p>Paragraph of text</p>
<p>Another paragraph of text</p>
</code>
</pre>

<pre>
<code class="language-markup">
<h1>Page Title</h1>
<h2>Page Subtitle</h2>
<p>Paragraph of text</p>
<p>Another paragraph of text</p>
</code>
</pre>

        </div>        
        <div class="slide section">
    <h4>Why is semantic markup important?</h4>
    <p>Think of your website like you would a newspaper</p>
    <p>
    <img src="images/html_semantics_paper.jpg" alt="html_semantics_paper" height="700" style="width: 400px; display: block; margin: 0 auto;" />
    </p>
</div>

<div class="slide section">
    <h4>Common Semantic Tags</h4>
    <ul>
        <li>header</li>
        <li>nav</li>
        <li>article</li>
        <li>ul</li>
        <li>ol</li>
        <li>a</li>
        <li>img</li>
        <li>table</li>
    </ul>
</div>

<div class="slide">
    <h4>Adding Semantics to Structural tags</h4>
    <pre>
<div class="main-content"></div>
<div id="advertisment"> </div>
    </pre>
</div>        
        <div class="slide section">
    <h4>Forms</h4>

    <p>
        Forms are what submits user entered data back to the webserver.
    </p>

<pre>
<form>
    <fieldset>
        <input type="checkbox">Agree to terms?
        <input type="text" />
        <input type="submit" />
    </fieldset>
</form>
</pre>

<form>
    <fieldset>
        <input type="checkbox"><span style="font-size: 12px;">Agree to terms?</span><br />
        <input type="text" />
        <input type="submit" />
    </fieldset>
</form>


</div>        
                <div class="slide section">
            <h4>Most common form input types</h4>
            <style type="text/css">
                .build label {
                    display: inline-block;
                    width: 200px;
                }
            </style>
            <ul class="build">
                <li><label>text</label><input type="text" value="Huge Rocks!" /></li>
                <li><label>password</label><input type="password" value="secret" /></li>
                <li><label>radio</label><input type="radio" /></li>
                <li><label>checkbox</label><input type="checkbox" /></li>
                <li><label>textarea</label><textarea cols="50"></textarea></li>
                <li><label>select</label><select><option>Ribs</option><option>Brikset</option><option>Mac & Cheese</option></select></li>
                <li><label>submit</label><input type="submit" /></li>
                <li><label>file</label><input type="file" /></li>
            </ul>
        </div>        
        

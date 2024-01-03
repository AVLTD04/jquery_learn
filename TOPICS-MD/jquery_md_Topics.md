<div id="content">

# Types

---

This page documents data types appearing in jQuery function signatures,
whether defined by JavaScript itself or further restricted by jQuery.
Unless explicitly stated otherwise, jQuery functions require primitive
values where applicable, and do not accept their Object-wrapped forms.
If you want to study these concepts in depth, take a look at
[MDN](https://developer.mozilla.org/en-US/docs/Web/JavaScript).

You should be able to try out most of the examples below by just copying
them to your browser's JavaScript Console.

Whenever an example mentions that a type defaults to a boolean value,
the result is good to know when using that type in a boolean context:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div>
<div class="line n4">
4
</div>
<div class="line n5">
5
</div>
<div class="line n6">
6
</div></td>
<td class="code"><pre><code>var x = &quot;&quot;;if ( x ) {  console.log( &quot;x defaulted to true&quot; );} else {  console.log( &quot;x defaulted to false&quot; );}</code></pre></td>
</tr>
</tbody>
</table>

</div>

In this case, `"x defaulted to false"` is printed.

To keep the examples short, the invert ("not") operator and
double-negation are used to show a boolean context:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div></td>
<td class="code"><pre><code>var x = &quot;&quot;;!x // true!!x // false (Double negation: Since &quot;not (empty string)&quot; is true, negating that makes it false)</code></pre></td>
</tr>
</tbody>
</table>

</div>

On to the actual types.

<div id="toctitle">

## Contents

</div>

1.  [<span class="toctext">Anything</span>](#Anything)
2.  [<span class="toctext">String</span>](#String)
    - [<span class="toctext">Quoting</span>](#Quoting)
    - [<span class="toctext">Built-in
      Methods</span>](#Built-in_Methods)
    - [<span class="toctext">Length Property</span>](#Length_Property)
    - [<span class="toctext">Boolean Default</span>](#Boolean_Default)
3.  [<span class="toctext">htmlString</span>](#htmlString)
4.  [<span class="toctext">Number</span>](#Number)
    - [<span class="toctext">Boolean
      Default</span>](#Boolean_Default_2)
    - [<span class="toctext">Math</span>](#Math)
    - [<span class="toctext">Parsing Numbers</span>](#Parsing_Numbers)
    - [<span class="toctext">Numbers to
      Strings</span>](#Numbers_to_Strings)
    - [<span class="toctext">NaN and
      Infinity</span>](#NaN_and_Infinity)
    - [<span class="toctext">Integer</span>](#Integer)
    - [<span class="toctext">Float</span>](#Float)
5.  [<span class="toctext">Boolean</span>](#Boolean)
6.  [<span class="toctext">Object</span>](#Object)
    - [<span class="toctext">Dot Notation</span>](#Dot_Notation)
    - [<span class="toctext">Array Notation</span>](#Array_Notation)
    - [<span class="toctext">Iteration</span>](#Iteration)
    - [<span class="toctext">Boolean
      default</span>](#Boolean_default_3)
    - [<span class="toctext">Prototype</span>](#Prototype)
7.  [<span class="toctext">Array</span>](#Array)
    - [<span class="toctext">Iteration</span>](#Iteration_2)
    - [<span class="toctext">Boolean
      Default</span>](#Boolean_Default_4)
    - [<span class="toctext">Array\<Type\>
      Notation</span>](#Array.3CType.3E_Notation)
8.  [<span class="toctext">Array-Like Object</span>](#ArrayLikeObject)
9.  [<span class="toctext">PlainObject</span>](#PlainObject)
10. [<span class="toctext">Date</span>](#Date)
11. [<span class="toctext">Function</span>](#Function)
    - [<span class="toctext">Arguments</span>](#Arguments)
    - [<span class="toctext">Context, Call and
      Apply</span>](#Context.2C_Call_and_Apply)
    - [<span class="toctext">Scope</span>](#Scope)
    - [<span class="toctext">Closures</span>](#Closures)
    - [<span class="toctext">Proxy Pattern</span>](#Proxy_Pattern)
12. [<span class="toctext">Error</span>](#Error)
13. [<span class="toctext">Selector</span>](#Selector)
14. [<span class="toctext">Event</span>](#Event)
15. [<span class="toctext">Element</span>](#Element)
16. [<span class="toctext">Text</span>](#Text)
17. [<span class="toctext">jQuery</span>](#jQuery)
18. [<span class="toctext">XMLHttpRequest</span>](#XMLHttpRequest)
19. [<span class="toctext">jqXHR</span>](#jqXHR)
20. [<span class="toctext">Thenable</span>](#Thenable)
21. [<span class="toctext">Deferred Object</span>](#Deferred)
22. [<span class="toctext">Promise Object</span>](#Promise)
23. [<span class="toctext">Callbacks Object</span>](#Callbacks)
24. [<span class="toctext">XML Document</span>](#XMLDocument)
25. [<span class="toctext">Qunit's Assert Object</span>](#Assert)

## Anything

The **Anything** virtual type is used in jQuery documentation to
indicate that any type can be used or should be expected.

## String

A string in JavaScript is an immutable primitive value that contains
none, one or many characters.

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div></td>
<td class="code"><pre><code>&quot;I&#39;m a String in JavaScript!&quot;&#39;So am I!&#39;</code></pre></td>
</tr>
</tbody>
</table>

</div>

The type of a string is "string".

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div></td>
<td class="code"><pre><code>typeof &quot;some string&quot;; // &quot;string&quot;</code></pre></td>
</tr>
</tbody>
</table>

</div>

### Quoting

A string can be defined using single or double quotes. You can nest
single quotes inside of double quotes, and the other way around. To mix
double quotes with double quotes (or single with single), the nested
ones have to be escaped with a backslash.

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div></td>
<td class="code"><pre><code>&quot;You make &#39;me&#39; sad.&quot;&#39;That\&#39;s &quot;cranking&quot; good fun!&#39;&quot;&lt;a href=\&quot;home\&quot;&gt;Home&lt;/a&gt;&quot;</code></pre></td>
</tr>
</tbody>
</table>

</div>

### Built-in Methods

A string in JavaScript has some built-in methods to manipulate the
string, though the result is always a new string - or something else,
eg. split returns an [array](/Types/#Array "Types").

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div>
<div class="line n4">
4
</div>
<div class="line n5">
5
</div></td>
<td class="code"><pre><code>&quot;hello&quot;.charAt( 0 ) // &quot;h&quot;&quot;hello&quot;.toUpperCase() // &quot;HELLO&quot;&quot;Hello&quot;.toLowerCase() // &quot;hello&quot;&quot;hello&quot;.replace( /e|o/g, &quot;x&quot; ) // &quot;hxllx&quot;&quot;1,2,3&quot;.split( &quot;,&quot; ) // [ &quot;1&quot;, &quot;2&quot;, &quot;3&quot; ]</code></pre></td>
</tr>
</tbody>
</table>

</div>

### Length Property

All strings have a length property.

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div></td>
<td class="code"><pre><code>&quot;Hello&quot;.length // 5&quot;&quot;.length // 0</code></pre></td>
</tr>
</tbody>
</table>

</div>

### Boolean Default

An empty string defaults to false:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div>
<div class="line n4">
4
</div>
<div class="line n5">
5
</div></td>
<td class="code"><pre><code>!&quot;&quot; // true!!&quot;&quot; // false!&quot;hello&quot; // false!&quot;true&quot; // false!new Boolean( false ) // false</code></pre></td>
</tr>
</tbody>
</table>

</div>

## htmlString

A string is designated **htmlString** in jQuery documentation when it is
used to represent one or more DOM elements, typically to be created and
inserted in the document. When passed as an argument of the `jQuery()`
function, the string is identified as HTML if it starts with
`<tag ... >`) and is parsed as such until the final `>` character. Prior
to jQuery 1.9, a string was considered to be HTML if it contained
`<tag ... >` _anywhere within the string_.

When a string is passed as an argument to a manipulation method such as
`.append()`, it is always considered to be HTML since jQuery's other
common interpretation of a string (CSS selectors) does not apply in
those contexts.

For explicit parsing of a string to HTML, the `$.parseHTML()` method is
available as of jQuery 1.8.

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div>
<div class="line n4">
4
</div>
<div class="line n5">
5
</div>
<div class="line n6">
6
</div>
<div class="line n7">
7
</div>
<div class="line n8">
8
</div>
<div class="line n9">
9
</div>
<div class="line n10">
10
</div>
<div class="line n11">
11
</div>
<div class="line n12">
12
</div>
<div class="line n13">
13
</div>
<div class="line n14">
14
</div></td>
<td class="code"><pre><code>// Appends &lt;b&gt;hello&lt;/b&gt;:$( &quot;&lt;b&gt;hello&lt;/b&gt;&quot; ).appendTo( &quot;body&quot; ); // Appends &lt;b&gt;hello&lt;/b&gt;:$( &quot;&lt;b&gt;hello&lt;/b&gt;bye&quot; ).appendTo( &quot;body&quot; ); // Syntax error, unrecognized expression: bye&lt;b&gt;hello&lt;/b&gt;$( &quot;bye&lt;b&gt;hello&lt;/b&gt;&quot; ).appendTo( &quot;body&quot; ); // Appends bye&lt;b&gt;hello&lt;/b&gt;:$( $.parseHTML( &quot;bye&lt;b&gt;hello&lt;/b&gt;&quot; ) ).appendTo( &quot;body&quot; ); // Appends &lt;b&gt;hello&lt;/b&gt;wait&lt;b&gt;bye&lt;/b&gt;:$( &quot;&lt;b&gt;hello&lt;/b&gt;wait&lt;b&gt;bye&lt;/b&gt;&quot; ).appendTo( &quot;body&quot; );</code></pre></td>
</tr>
</tbody>
</table>

</div>

## Number

Numbers in JavaScript are double-precision 64-bit format IEEE 754
values. They are immutable primitive values, just like
[strings](#String). All operators common in c-based languages are
available to work with numbers (+, -, \*, /, %, =, +=, -=, \*=, /=, ++,
--).

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div></td>
<td class="code"><pre><code>123.543</code></pre></td>
</tr>
</tbody>
</table>

</div>

The type of a number is "number".

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div></td>
<td class="code"><pre><code>typeof 12 // &quot;number&quot;typeof 3.543 // &quot;number&quot;</code></pre></td>
</tr>
</tbody>
</table>

</div>

### Boolean Default

If a number is zero, it defaults to false:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div>
<div class="line n4">
4
</div></td>
<td class="code"><pre><code>!0 // true!!0 // false!1 // false!-1 // false</code></pre></td>
</tr>
</tbody>
</table>

</div>

Due to the implementation of numbers as double-precision values, the
following result is not an error:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div></td>
<td class="code"><pre><code>0.1 + 0.2 // 0.30000000000000004</code></pre></td>
</tr>
</tbody>
</table>

</div>

### Math

JavaScript provides utilities to work with numbers in the Math object:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div></td>
<td class="code"><pre><code>Math.PI // 3.141592653589793Math.cos( Math.PI ) // -1</code></pre></td>
</tr>
</tbody>
</table>

</div>

### Parsing Numbers

parseInt and parseFloat help parsing strings into numbers. Both do some
implicit conversion if the base isn't specified:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div>
<div class="line n4">
4
</div>
<div class="line n5">
5
</div>
<div class="line n6">
6
</div></td>
<td class="code"><pre><code>parseInt( &quot;123&quot; ) = 123 // (implicit decimal)parseInt( &quot;010&quot; ) = 8 // (implicit octal)parseInt( &quot;0xCAFE&quot; ) = 51966 // (implicit hexadecimal)parseInt( &quot;010&quot;, 10 ) = 10 // (explicit decimal)parseInt( &quot;11&quot;, 2 ) = 3 // (explicit binary)parseFloat( &quot;10.10&quot; ) = 10.1</code></pre></td>
</tr>
</tbody>
</table>

</div>

### Numbers to Strings

When appending numbers to string, the result is always a string. The
operator is the same, so be careful: If you want to add numbers and then
append them to a string, put parentheses around the numbers:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div>
<div class="line n4">
4
</div></td>
<td class="code"><pre><code>&quot;&quot; + 1 + 2; // &quot;12&quot;&quot;&quot; + ( 1 + 2 ); // &quot;3&quot;&quot;&quot; + 0.0000001; // &quot;1e-7&quot;parseInt( 0.0000001 ); // 1 (!)</code></pre></td>
</tr>
</tbody>
</table>

</div>

Or you use the String class provided by javascript, which try to parse a
value as string:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div></td>
<td class="code"><pre><code>String( 1 ) + String( 2 ); // &quot;12&quot;String( 1 + 2 ); // &quot;3&quot;</code></pre></td>
</tr>
</tbody>
</table>

</div>

### NaN and Infinity

Parsing something that isn't a number results in NaN. isNaN helps to
detect those cases:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div></td>
<td class="code"><pre><code>parseInt( &quot;hello&quot;, 10 ) // NaNisNaN( parseInt(&quot;hello&quot;, 10) ) // true</code></pre></td>
</tr>
</tbody>
</table>

</div>

Division by zero results in Infinity:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div></td>
<td class="code"><pre><code>1 / 0 // Infinity</code></pre></td>
</tr>
</tbody>
</table>

</div>

Both NaN and Infinity are of type "number":

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div></td>
<td class="code"><pre><code>typeof NaN // &quot;number&quot;typeof Infinity // &quot;number&quot;</code></pre></td>
</tr>
</tbody>
</table>

</div>

Note that NaN compares in a strange way:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div></td>
<td class="code"><pre><code>NaN === NaN // false (!)</code></pre></td>
</tr>
</tbody>
</table>

</div>

But:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div></td>
<td class="code"><pre><code>Infinity === Infinity // true</code></pre></td>
</tr>
</tbody>
</table>

</div>

### Integer

An integer is a plain Number type, but whenever explicitly mentioned,
indicates that a non-floating-point number is expected.

### Float

A float is a plain Number type, just as Integer, but whenever explicitly
mentioned, indicates that a floating-point number is expected.

## Boolean

A boolean in JavaScript can be either true or false:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div></td>
<td class="code"><pre><code>if ( true ) console.log( &quot;always!&quot; );if ( false ) console.log( &quot;never!&quot; );</code></pre></td>
</tr>
</tbody>
</table>

</div>

## Object

Everything in JavaScript is an object, though some are more objective
(haha). The easiest way to create an object is the object literal:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div>
<div class="line n4">
4
</div>
<div class="line n5">
5
</div></td>
<td class="code"><pre><code>var x = {};var y = {  name: &quot;Pete&quot;,  age: 15};</code></pre></td>
</tr>
</tbody>
</table>

</div>

The type of an object is "object":

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div></td>
<td class="code"><pre><code>typeof {} // &quot;object&quot;</code></pre></td>
</tr>
</tbody>
</table>

</div>

### Dot Notation

You can write and read properties of an object using the dot notation:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div>
<div class="line n4">
4
</div></td>
<td class="code"><pre><code>y.name // &quot;Pete&quot;y.age // 15x.name = y.name + &quot; Pan&quot; // &quot;Pete Pan&quot;x.age = y.age + 1 // 16</code></pre></td>
</tr>
</tbody>
</table>

</div>

### Array Notation

Or you write and read properties using the array notation, which allows
you to dynamically choose the property:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div>
<div class="line n4">
4
</div>
<div class="line n5">
5
</div>
<div class="line n6">
6
</div>
<div class="line n7">
7
</div></td>
<td class="code"><pre><code>var operations = {  increase: &quot;++&quot;,  decrease: &quot;--&quot;};var operation = &quot;increase&quot;;operations[ operation ] // &quot;++&quot;operations[ &quot;multiply&quot; ] = &quot;*&quot;; // &quot;*&quot;</code></pre></td>
</tr>
</tbody>
</table>

</div>

### Iteration

Iterating over objects is easy with the for-in-loop:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div>
<div class="line n4">
4
</div>
<div class="line n5">
5
</div>
<div class="line n6">
6
</div>
<div class="line n7">
7
</div></td>
<td class="code"><pre><code>var obj = {  name: &quot;Pete&quot;,  age: 15};for( key in obj ) {  alert( &quot;key is &quot; + [ key ] + &quot;, value is &quot; + obj[ key ] );}</code></pre></td>
</tr>
</tbody>
</table>

</div>

Note that for-in-loop can be spoiled by extending `Object.prototype`
(see <a
href="https://web.archive.org/web/20200416084623/https://erik.eae.net/archives/2005/06/06/22.13.54/"
class="external text"
title="https://web.archive.org/web/20200416084623/https://erik.eae.net/archives/2005/06/06/22.13.54/">Object.prototype
is verboten</a>) so take care when using other libraries.

jQuery provides a generic [_each_ function](/jQuery.each/) to iterate
over properties of objects, as well as elements of arrays:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div></td>
<td class="code"><pre><code>jQuery.each( obj, function( key, value ) {  console.log( &quot;key&quot;, key, &quot;value&quot;, value );});</code></pre></td>
</tr>
</tbody>
</table>

</div>

The drawback is that the callback is called in the context of each value
and you therefore lose the context of your own object if applicable.
More on this below at Functions.

### Boolean default

An object, no matter if it has properties or not, never defaults to
false:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div></td>
<td class="code"><pre><code>!{} // false!!{} // true</code></pre></td>
</tr>
</tbody>
</table>

</div>

### Prototype

All objects have a prototype property. Whenever the interpreter looks
for a property, it also checks in the object's prototype if the property
is not found on the object itself. jQuery uses the prototype extensively
to add methods to jQuery instances. Internally, jQuery makes `jQuery.fn`
an alias of `jQuery.prototype` so you can use either one (though plugin
developers have standardized on `fn`).

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div>
<div class="line n4">
4
</div>
<div class="line n5">
5
</div>
<div class="line n6">
6
</div>
<div class="line n7">
7
</div>
<div class="line n8">
8
</div>
<div class="line n9">
9
</div>
<div class="line n10">
10
</div>
<div class="line n11">
11
</div>
<div class="line n12">
12
</div>
<div class="line n13">
13
</div>
<div class="line n14">
14
</div></td>
<td class="code"><pre><code>var form = $(&quot;#myform&quot;);console.log( form.clearForm ); // undefined // jQuery.fn === jQuery.prototypejQuery.fn.clearForm = function() {  return this.find( &quot;:input&quot; ).each(function() {    this.value = &quot;&quot;;  }).end();}; // works for all instances of jQuery objects, because// the new method was added to the prototypeconsole.log( form.clearForm ); // functionform.clearForm();</code></pre></td>
</tr>
</tbody>
</table>

</div>

## Array

Arrays in JavaScript are mutable lists with a few built-in methods. You
can define arrays using the array literal:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div></td>
<td class="code"><pre><code>var x = [];var y = [ 1, 2, 3 ];</code></pre></td>
</tr>
</tbody>
</table>

</div>

The type of an array is "object":

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div></td>
<td class="code"><pre><code>typeof []; // &quot;object&quot;typeof [ 1, 2, 3 ]; // &quot;object&quot;</code></pre></td>
</tr>
</tbody>
</table>

</div>

Reading and writing elements to an array uses the array-notation:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div></td>
<td class="code"><pre><code>x[ 0 ] = 1;y[ 2 ] // 3</code></pre></td>
</tr>
</tbody>
</table>

</div>

### Iteration

An array has a length property that is useful for iteration:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div></td>
<td class="code"><pre><code>for ( var i = 0; i &lt; a.length; i++ ) {  // Do something with a[i]}</code></pre></td>
</tr>
</tbody>
</table>

</div>

When performance is critical, reading the length property only once can
help to speed things up. This should be used only when a performance
bottleneck was discovered:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div></td>
<td class="code"><pre><code>for ( var i = 0, j = a.length; i &lt; j; i++ ) {  // Do something with a[i]}</code></pre></td>
</tr>
</tbody>
</table>

</div>

Another variation defines a variable that is filled for each iteration,
removing the array-notation from the loop-body. It does not work when
the array contains 0 or empty strings!

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div></td>
<td class="code"><pre><code>for ( var i = 0, item; item = a[i]; i++ ) {  // Do something with item}</code></pre></td>
</tr>
</tbody>
</table>

</div>

jQuery provides a generic [_each_ function](/jQuery.each/) to iterate
over element of arrays, as well as properties of objects:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div>
<div class="line n4">
4
</div></td>
<td class="code"><pre><code>var x = [ 1, 2, 3 ];jQuery.each( x, function( index, value ) {  console.log( &quot;index&quot;, index, &quot;value&quot;, value );});</code></pre></td>
</tr>
</tbody>
</table>

</div>

The drawback is that the callback is called in the context of each value
and you therefore lose the context of your own object if applicable.
More on this below at Functions.

The length property can also be used to add elements to the end of an
array. That is equivalent to using the push-method:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div>
<div class="line n4">
4
</div></td>
<td class="code"><pre><code>var x = [];x.push( 1 );x[ x.length ] = 2;x // [ 1, 2 ]</code></pre></td>
</tr>
</tbody>
</table>

</div>

You'll see both variations a lot when looking through JavaScript library
code.

Other built-in methods are reverse, join, shift, unshift, pop, slice,
splice and sort:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div>
<div class="line n4">
4
</div>
<div class="line n5">
5
</div>
<div class="line n6">
6
</div>
<div class="line n7">
7
</div>
<div class="line n8">
8
</div></td>
<td class="code"><pre><code>var x = [ 0, 3, 1, 2 ];x.reverse()      // [ 2, 1, 3, 0 ]x.join(&quot; – &quot;)    // &quot;2 - 1 - 3 - 0&quot;x.pop()          // [ 2, 1, 3 ]x.unshift( -1 )  // [ -1, 2, 1, 3 ]x.shift()        // [ 2, 1, 3 ]x.sort()         // [ 1, 2, 3 ]x.splice( 1, 2 ) // [ 2, 3 ]</code></pre></td>
</tr>
</tbody>
</table>

</div>

Note: .unshift() method does not return a length property in Internet
Explorer.

### Boolean Default

An array, no matter if it has elements or not, never defaults to false:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div></td>
<td class="code"><pre><code>![] // false!![] // true</code></pre></td>
</tr>
</tbody>
</table>

</div>

### Array\<Type\> Notation

In the jQuery API you'll often find the notation of Array\<Type\>:

    dragPrevention    Array<String>

This indicates that the method doesn't only expect an array as the
argument, but also specifies the expected type. The notation is borrowed
from Java 5's generics notation (or C++ templates).

## Array-Like Object

Either a true JavaScript Array or a JavaScript Object that contains a
nonnegative integer `length` property and index properties from `0` up
to `length - 1`. This latter case includes array-like objects commonly
encountered in web-based code such as the `arguments` object and the
`NodeList` object returned by many DOM methods.

When a jQuery API accepts either plain Objects or Array-Like objects, a
plain Object with a numeric `length` property will trigger the
Array-Like behavior.

## PlainObject

The PlainObject type is a JavaScript object containing zero or more
key-value pairs. The plain object is, in other words, an `Object`
object. It is designated "plain" in jQuery documentation to distinguish
it from other kinds of JavaScript objects: for example, `null`,
user-defined arrays, and host objects such as `document`, all of which
have a `typeof` value of "object." The `jQuery.isPlainObject()` method
identifies whether the passed argument is a plain object or not, as
demonstrated below:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div>
<div class="line n4">
4
</div>
<div class="line n5">
5
</div>
<div class="line n6">
6
</div>
<div class="line n7">
7
</div>
<div class="line n8">
8
</div>
<div class="line n9">
9
</div>
<div class="line n10">
10
</div>
<div class="line n11">
11
</div></td>
<td class="code"><pre><code>  var a = [];  var d = document;  var o = {};   typeof a; // object  typeof d; // object  typeof o; // object   jQuery.isPlainObject( a ); // false  jQuery.isPlainObject( d ); // false  jQuery.isPlainObject( o ); // true</code></pre></td>
</tr>
</tbody>
</table>

</div>

## Null

The `null` keyword is a JavaScript literal that is commonly used to
express the absence of an intentional value.

## Date

The Date type is a JavaScript object that represents a single moment in
time. Date objects are instantiated using their constructor function,
which by default creates an object that represents the current date and
time.

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div></td>
<td class="code"><pre><code>new Date();</code></pre></td>
</tr>
</tbody>
</table>

</div>

To create a Date object for an alternative date and time, pass numeric
arguments in the following order: year, month, day, hour, minute,
second, millisecond — although note that the month is zero-based,
whereas the other arguments are one-based. The following creates a Date
object representing January 1st, 2014, at 8:15.

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div></td>
<td class="code"><pre><code>new Date( 2014, 0, 1, 8, 15 );</code></pre></td>
</tr>
</tbody>
</table>

</div>

## Function

A function in JavaScript can be either named or anonymous. Any function
can be assigned to a variable or passed to a method, but passing member
functions this way can cause them to be called in the context of another
object (i.e. with a different "this" object).

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div></td>
<td class="code"><pre><code>function named() {}var handler = function() {}</code></pre></td>
</tr>
</tbody>
</table>

</div>

You see a lot of anonymous functions in jQuery code:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div>
<div class="line n4">
4
</div>
<div class="line n5">
5
</div>
<div class="line n6">
6
</div></td>
<td class="code"><pre><code>$( document ).ready(function() {});$( &quot;a)&quot; ).on( &quot;click&quot;, function() {});$.ajax({  url: &quot;someurl.php&quot;,  success: function() {}});</code></pre></td>
</tr>
</tbody>
</table>

</div>

The type of a function is "function".

### Arguments

Inside a function a special variable "arguments" is always available.
It's similar to an array in that it has a length property, but it lacks
the built-in methods of an array. The elements of the pseudo-array are
the argument of the function call.

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div>
<div class="line n4">
4
</div>
<div class="line n5">
5
</div>
<div class="line n6">
6
</div></td>
<td class="code"><pre><code>function log( x ) {  console.log( typeof x, arguments.length );}log(); // &quot;undefined&quot;, 0log( 1 ); // &quot;number&quot;, 1log( &quot;1&quot;, &quot;2&quot;, &quot;3&quot; ); // &quot;string&quot;, 3</code></pre></td>
</tr>
</tbody>
</table>

</div>

The arguments object also has a callee property, which refers to the
function you're inside of. For instance:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div></td>
<td class="code"><pre><code>var awesome = function() { return arguments.callee; }awesome() === awesome // true</code></pre></td>
</tr>
</tbody>
</table>

</div>

### Context, Call and Apply

In JavaScript, the variable "this" always refers to the current context.
By default, "this" refers to the window object. Within a function this
context can change, depending on how the function is called.

All event handlers in jQuery are called with the handling element as the
context.

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div>
<div class="line n4">
4
</div>
<div class="line n5">
5
</div>
<div class="line n6">
6
</div></td>
<td class="code"><pre><code>$( document ).ready(function() {  // this refers to window.document});$( &quot;a)&quot; ).on( &quot;click&quot;, function() {  // this refers to an anchor DOM element});</code></pre></td>
</tr>
</tbody>
</table>

</div>

You can specify the context for a function call using the
function-built-in methods call and apply. The difference between them is
how they pass arguments. Call passes all arguments through as arguments
to the function, while apply accepts an array as the arguments.

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div>
<div class="line n4">
4
</div>
<div class="line n5">
5
</div>
<div class="line n6">
6
</div></td>
<td class="code"><pre><code>function scope() {  console.log( this, arguments.length );}scope() // window, 0scope.call( &quot;foobar&quot;, [ 1, 2 ] ); // &quot;foobar&quot;, 1scope.apply( &quot;foobar&quot;, [ 1, 2 ] ); // &quot;foobar&quot;, 2</code></pre></td>
</tr>
</tbody>
</table>

</div>

### Scope

In JavaScript, all variables defined inside a function are only visible
inside that function scope. Consider the following example:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div>
<div class="line n4">
4
</div>
<div class="line n5">
5
</div>
<div class="line n6">
6
</div>
<div class="line n7">
7
</div>
<div class="line n8">
8
</div></td>
<td class="code"><pre><code>// globalvar x = 0;(function() {  // private  var x = 1;  console.log( x ); // 1})();console.log( x ); // 0</code></pre></td>
</tr>
</tbody>
</table>

</div>

It defines a variable _x_ in the global scope, then defines an anonymous
function and executes it immediately (the additional parentheses are
required for immediate execution). Inside the function another variable
_x_ is defined with a different value. It is only visible within that
function and doesn't overwrite the global variable.

### Closures

Closures are created whenever a variable that is defined outside the
current scope is accessed from within some inner scope. In the following
example, the variable _counter_ is visible within the create, increment,
and print functions, but not outside of them.

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div>
<div class="line n4">
4
</div>
<div class="line n5">
5
</div>
<div class="line n6">
6
</div>
<div class="line n7">
7
</div>
<div class="line n8">
8
</div>
<div class="line n9">
9
</div>
<div class="line n10">
10
</div>
<div class="line n11">
11
</div>
<div class="line n12">
12
</div>
<div class="line n13">
13
</div>
<div class="line n14">
14
</div></td>
<td class="code"><pre><code>function create() {  var counter = 0;  return {    increment: function() {      counter++;    },    print: function() {      console.log( counter );    }  }}var c = create();c.increment();c.print(); // 1</code></pre></td>
</tr>
</tbody>
</table>

</div>

The pattern allows you to create objects with methods that operate on
data that isn't visible to the outside—the very basis of object-oriented
programming.

### Proxy Pattern

Combining the above knowledge gives you as a JavaScript developer quite
a lot of power. One way to combine that is to implement a proxy pattern
in JavaScript, enabling the basics of aspect-oriented programming (AOP):

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div>
<div class="line n4">
4
</div>
<div class="line n5">
5
</div>
<div class="line n6">
6
</div>
<div class="line n7">
7
</div>
<div class="line n8">
8
</div></td>
<td class="code"><pre><code>(function() {  // log all calls to setArray  var proxied = jQuery.fn.setArray;  jQuery.fn.setArray = function() {    console.log( this, arguments );    return proxied.apply( this, arguments );  };})();</code></pre></td>
</tr>
</tbody>
</table>

</div>

The above wraps its code in a function to hide the "proxied"-variable.
It saves jQuery's setArray-method in a closure and overwrites it. The
proxy then logs all calls to the method and delegates the call to the
original. Using apply(this, arguments) guarantees that the caller won't
be able to notice the difference between the original and the proxied
method.

## Callback

A callback is a plain JavaScript function passed to some method as an
argument or option. Some callbacks are just events, called to give the
user a chance to react when a certain state is triggered. jQuery's event
system uses such callbacks everywhere:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div></td>
<td class="code"><pre><code>$( &quot;body&quot; ).on( &quot;click&quot;, function( event ) {  console.log( &quot;clicked: &quot; + event.target );});</code></pre></td>
</tr>
</tbody>
</table>

</div>

Most callbacks provide arguments and a context. In the event-handler
example, the callback is called with one argument, an Event. The context
is set to the handling element, in the above example, document.body.

Some callbacks are required to return something, others make that return
value optional. To prevent a form submission, a submit event handler can
return false:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div></td>
<td class="code"><pre><code>$( &quot;#myform&quot; ).on( &quot;submit&quot;, function() {  return false;} );</code></pre></td>
</tr>
</tbody>
</table>

</div>

Instead of always returning false, the callback could check fields of
the form for validity, and return false only when the form is invalid.

## Error

An instance of an Error object is thrown as an exception when a runtime
error occurs. Error can also be used as base to define user custom
exception classes. In JavaScript an error can be thrown as shown below:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div></td>
<td class="code"><pre><code>throw new Error( &quot;The argument provided is incorrect&quot; );</code></pre></td>
</tr>
</tbody>
</table>

</div>

An error can also be thrown by the engine under some circumstances. For
example, when trying to access a property of `null`:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div></td>
<td class="code"><pre><code>var obj = null;console.log( obj.foo() );</code></pre></td>
</tr>
</tbody>
</table>

</div>

## Selector

A selector is used in jQuery to select DOM elements from a DOM document.
That document is, in most cases, the DOM document present in all
browsers, but can also be an XML document received via Ajax.

The selectors are a composition of CSS and custom additions. All
selectors available in jQuery are documented on the [Selectors API
page](/category/selectors/ "Selectors").

There are lot of plugins that leverage jQuery's selectors in other ways.
The validation plugin accepts a selector to specify a dependency,
whether an input is required or not:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div></td>
<td class="code"><pre><code>emailrules: {  required: &quot;#email:filled&quot;}</code></pre></td>
</tr>
</tbody>
</table>

</div>

This would make a checkbox with name "emailrules" required only if the
user entered an email address in the email field, selected via its id,
filtered via a custom selector ":filled" that the validation plugin
provides.

If Selector is specified as the type of an argument, it accepts
everything that the jQuery constructor accepts, eg. Strings, Elements,
Lists of Elements.

## Event

jQuery's event system normalizes the event object according to W3C
standards. The event object is guaranteed to be passed to the event
handler (no checks for window.event required). It normalizes the target,
relatedTarget, which, metaKey and pageX/Y properties and provides both
stopPropagation() and preventDefault() methods.

Those properties are all documented, and accompanied by examples, on the
[Event object](/category/events/event-object/ "Events") page.

The standard events in the Document Object Model are: `blur`, `focus`,
`load`, `resize`, `scroll`, `unload`, `beforeunload`, `click`,
`dblclick`, `mousedown`, `mouseup`, `mousemove`, `mouseover`,
`mouseout`, `mouseenter`, `mouseleave`, `change`, `select`, `submit`,
`keydown`, `keypress,` and `keyup`. Since the DOM event names have
predefined meanings for some elements, using them for other purposes is
not recommended. jQuery's event model can trigger an event by any name
on an element, and it is propagated up the DOM tree to which that
element belongs, if any.

## Element

An element in the Document Object Model (DOM) can have attributes, text,
and children. It provides methods to traverse the parent and children
and to get access to its attributes. Due to inconsistencies in DOM API
specifications and implementations, however, those methods can be a
challenge to use. jQuery provides a "wrapper" around those elements to
help interacting with the DOM. But sometimes you will be working
directly with DOM elements, or see methods that (also) accept DOM
elements as arguments.

Whenever you call jQuery's `.each()` method or one of its event methods
on a jQuery collection, the context of the callback function — `this` —
is set to a DOM element.

Some properties of DOM elements are quite consistent among browsers.
Consider this example of a simple onblur validation:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div>
<div class="line n2">
2
</div>
<div class="line n3">
3
</div>
<div class="line n4">
4
</div>
<div class="line n5">
5
</div></td>
<td class="code"><pre><code>$( &quot;input[type=&#39;text&#39;]&quot; ).on( &quot;blur&quot;, function() {  if( !this.value ) {    alert( &quot;Please enter some text!&quot; );  }});</code></pre></td>
</tr>
</tbody>
</table>

</div>

You could replace `this.value` with `$(this).val()` to access the value
of the text input via jQuery, but in that case you wouldn't gain
anything.

## Text

Text is a node of the Document Object Model (DOM) that represents the
textual content of an [element](#Element) or an attribute. Consider the
following code:

<div class="syntaxhighlighter xml">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div></td>
<td class="code"><pre><code>&lt;p id=&quot;target&quot;&gt;&lt;b&gt;Hello&lt;/b&gt; world&lt;/p&gt;</code></pre></td>
</tr>
</tbody>
</table>

</div>

If you retrieve the children of the paragraph of the example as follows:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div></td>
<td class="code"><pre><code>var children = document.getElementById( &quot;target&quot; ).childNodes;</code></pre></td>
</tr>
</tbody>
</table>

</div>

you obtain two children. The first one is the [element](#Element)
representing the `b` tag. The second child is a text node containing the
string " world".

## jQuery

A jQuery object contains a collection of Document Object Model (DOM)
elements that have been created from an HTML string or selected from a
document. Since jQuery methods often use CSS selectors to match elements
from a document, the set of elements in a jQuery object is often called
a set of "matched elements" or "selected elements".

The jQuery object itself behaves much like an array; it has a `length`
property and the elements in the object can be accessed by their numeric
indices `[0]` to `[length-1]`. Note that a jQuery object is not actually
a Javascript Array object, so it does not have all the methods of a true
Array object such as `join()`.

Most frequently, you will use the jQuery() function to create a jQuery
object. `jQuery()` can also be accessed by its familiar single-character
alias of `$()`, unless you have called `jQuery.noConflict()` to disable
this option. Many jQuery methods return the jQuery object itself, so
that method calls can be chained:

In API calls that return `jQuery`, the value returned will be the
original jQuery object unless otherwise documented by that API. API
methods such as `.filter()` or `.not()` modify their incoming set and
thus return a new jQuery object.

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div></td>
<td class="code"><pre><code>$( &quot;p&quot; ).css( &quot;color&quot;, &quot;red&quot; ).find( &quot;.special&quot; ).css( &quot;color&quot;, &quot;green&quot; );</code></pre></td>
</tr>
</tbody>
</table>

</div>

Whenever you use a "destructive" jQuery method that potentially changes
the set of elements in the jQuery object, such as `.filter()` or
`.find()`, that method actually returns a new jQuery object with the
resulting elements. To return to the previous jQuery object, you use the
`.end()` method.

A jQuery object may be empty, containing no DOM elements. You can create
an empty jQuery object with `$()` (that is, passing no arguments at
all). A jQuery object may also be empty if a selector doesn't select any
elements, or if a chained method filters out all the elements. It is not
an error; any further methods called on that jQuery object simply have
no effect since they have no elements to act upon. So, in this example
if there are no bad entries on the page then no elements will be colored
red:

<div class="syntaxhighlighter javascript">

<table>
<colgroup>
<col style="width: 50%" />
<col style="width: 50%" />
</colgroup>
<tbody>
<tr class="odd">
<td class="gutter"><div class="line n1">
1
</div></td>
<td class="code"><pre><code>$( &quot;.badEntry&quot; ).css({ color: &quot;red&quot; });</code></pre></td>
</tr>
</tbody>
</table>

</div>

## XMLHttpRequest

Some of jQuery's Ajax functions return the native XMLHttpRequest (XHR)
object, or pass it as an argument to success/error/complete handlers, so
that you can do additional processing or monitoring on the request. Note
that Ajax functions only return or pass an XHR object when an XHR object
is actually used in the request. For example, JSONP requests and
cross-domain GET requests use a script element rather than an XHR
object.

Although the XHR object is a standard, there are variations in its
behavior on different browsers. Refer to the WHATWG site and Mozilla
Developer Network for more information:

- <a href="https://xhr.spec.whatwg.org/" class="external text"
  title="https://xhr.spec.whatwg.org/">WHATWG living standard</a>
- <a
  href="https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest"
  class="external text"
  title="https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest">Mozilla
  Developer Network</a>

## jqXHR

As of jQuery 1.5, the [$.ajax()](/jQuery.ajax/) method returns the jqXHR
object, which is a superset of the XMLHTTPRequest object. For more
information, see the [jqXHR section of the $.ajax
entry](/jQuery.ajax/#jqXHR)

## Thenable

Any object that has a `then` method.

## Deferred Object

As of jQuery 1.5, the [Deferred](/category/deferred-object/) object
provides a way to register multiple callbacks into self-managed callback
queues, invoke callback queues as appropriate, and relay the success or
failure state of any synchronous or asynchronous function.

## Promise Object

This object provides a subset of the methods of the
[Deferred](/category/deferred-object/) object
([`then`](/deferred.then/), [`done`](/deferred.done/),
[`fail`](/deferred.fail/), [`always`](/deferred.always/),
[`pipe`](/deferred.pipe/), [`progress`](/deferred.progress/),
[`state`](/deferred.state/) and [`promise`](/deferred.promise/)) to
prevent users from changing the state of the Deferred.

## Callbacks Object

A multi-purpose object that provides a powerful way to manage callback
lists. It supports adding, removing, firing, and disabling callbacks.
The Callbacks object is created and returned by the `$.Callbacks`
function and subsequently returned by most of that function's methods.

## Document

A document object created by the browser's DOM parser, usually from a
string representing HTML or XML.

## XML Document

A document object created by the browser's XML DOM parser, usually from
a string representing XML. XML documents have different semantics than
HTML documents, but most of the traversing and manipulation methods
provided by jQuery will work with them.

## Assert

A reference to or instance of the object holding all of QUnit's
assertions. See the [API documentation for
`QUnit.assert`](https://api.qunitjs.com/config/QUnit.assert) for
details.

</div>

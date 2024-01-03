<div id="post-5452" role="main">

<div class="mega-header">

# How nth-child Works

</div>

<div class="article-sponsor">

UGURUS offers elite coaching and mentorship for agency owners looking to
grow. [Start with the free Agency Accelerator
today.](https://www.ugurus.com/start-here/?utm_source=belowbanner&utm_id=csstricks)

</div>

<div class="article-content">

There is a CSS selector, really a pseudo-selector, called
[`:nth-child`](https://css-tricks.com/almanac/selectors/n/nth-child/).
Here is an example of using it:

``` wp-block-csstricks-code-block
ul li:nth-child(3n+3) {  
  color: #ccc;
}
```

What the above CSS does, is select every third list item inside
unordered lists. That is, the 3rd, 6th, 9th, 12th, etc. But how does
that work? And what other kinds of things can you do with `:nth-child`?
Let’s take a look.

<span id="more-5452"></span>

It boils down to what is in between those parentheses. nth-child accepts
two keywords in that spot: **even** and **odd**. Those should be pretty
obvious. “Even” selects even numbered elements, like the 2nd, 4th, 6th,
etc. “Odd” selects odd numbered elements, like 1st, 3rd, 5th, etc.

As seen in the first example, nth-child also accepts *expressions* in
between those parentheses. The simplest possible expression? Just a
number. If you put simply a number in the parentheses, it will match
only that number element. For example, here is how to select only the
5th element:

``` wp-block-csstricks-code-block
ul li:nth-child(5) {  
  color: #ccc;
}
```

Let’s get back to the `3n+3` from the original example though. How does
that work? Why does it select every third element? The trick is
understanding the “n” and algebraic expression that represents. Think of
`n` as starting at zero and then a set of all positive integers. Then
complete the expression. So the `3n` is “3xn”, and the whole expression
together is “(3xn)+3”. Now substituting in the zero and positive
integers, we get:

``` wp-block-csstricks-code-block
(3 x 0) + 3 = 3 = 3rd Element
(3 x 1) + 3 = 6 = 6th Element
(3 x 2) + 3 = 9 = 9th Element
etc.
```

How about the `:nth-child(2n+1)`?

``` wp-block-csstricks-code-block
(2 x 0) + 1 = 1 = 1st Element
(2 x 1) + 1 = 3 = 3rd Element
(2 x 2) + 1 = 5 = 5th Element
etc.
```

Hey wait! That’s the same as “odd”, so probably don’t need to use that
one very often. But wait now. Haven’t we exposed our original example as
being overly complicated? What if instead of “3n+3”, we used `3n+0`, or
even simpler `3n`.

``` wp-block-csstricks-code-block
(3 x 0) = 0 = no match
(3 x 1) = 3 = 3rd Element
(3 x 2) = 6 = 6th Element
(3 x 3) = 9 = 9th Element
etc.
```

So as you can see, the matches are exactly the same, no need for the
“+3”. We can use negative n values, as well as use subtraction in the
expressions. For example, `4n-1`:

``` wp-block-csstricks-code-block
(4 x 0) - 1 = -1 = no match
(4 x 1) - 1 = 3 = 3rd Element
(4 x 2) - 1 = 7 = 7th Element
etc.
```

Using `-n` values seems a little weird, because if the end result is
negative there is no match, so you’ll need to add to the expression to
get it back positive again. As it turns out, this is a rather clever
technique. You can use it to select the “first n elements” with `-n+3`:

``` wp-block-csstricks-code-block
-0 + 3 = 3 = 3rd Element
-1 + 3 = 2 = 2nd Element
-2 + 3 = 1 = 1st Element
-3 + 3 = 0 = no match
etc.
```

Sitepoint has a nice reference guide, which includes this <a
href="http://reference.sitepoint.com/css/understandingnthchildexpressions"
rel="noopener">handy-dandy table</a> which I’ll shamelessly republish
here:

<figure class="wp-block-table">
<table>
<thead>
<tr class="header">
<th><code>n</code></th>
<th><code>2n+1</code></th>
<th><code>4n+1</code></th>
<th><code>4n+4</code></th>
<th><code>4n</code></th>
<th><code>5n-2</code></th>
<th><code>-n+3</code></th>
</tr>
</thead>
<tbody>
<tr class="odd">
<th>0</th>
<td>1</td>
<td>1</td>
<td>4</td>
<td>–</td>
<td>–</td>
<td>3</td>
</tr>
<tr class="even">
<th>1</th>
<td>3</td>
<td>5</td>
<td>8</td>
<td>4</td>
<td>3</td>
<td>2</td>
</tr>
<tr class="odd">
<th>2</th>
<td>5</td>
<td>9</td>
<td>12</td>
<td>8</td>
<td>8</td>
<td>1</td>
</tr>
<tr class="even">
<th>3</th>
<td>7</td>
<td>13</td>
<td>16</td>
<td>12</td>
<td>13</td>
<td>–</td>
</tr>
<tr class="odd">
<th>4</th>
<td>9</td>
<td>17</td>
<td>20</td>
<td>16</td>
<td>18</td>
<td>–</td>
</tr>
<tr class="even">
<th>5</th>
<td>11</td>
<td>21</td>
<td>24</td>
<td>20</td>
<td>23</td>
<td>–</td>
</tr>
</tbody>
</table>
</figure>



I’m not a big fan of the phrase “I’m a visual learner.” Of course you
are, everybody is. Visual aids are enormously helpful in situations just
like this. To help, I put together a little [`:nth-child` tester
page](https://css-tricks.com/examples/nth-child-tester/). There, you can
type in expressions and see the results of what it selects below.

Also see this page of [useful `:nth-child`
recipes](https://css-tricks.com/useful-nth-child-recipies/) for quick
copy-and-paste code on the most common positional selecting needs.

</div>

</div>

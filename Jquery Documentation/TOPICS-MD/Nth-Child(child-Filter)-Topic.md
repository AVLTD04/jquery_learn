Category: Child Filter
:first-child Selector
Selects all elements that are the first child of their parent.

:first-of-type Selector
Selects all elements that are the first among siblings of the same element name.

:last-child Selector
Selects all elements that are the last child of their parent.

:last-of-type Selector
Selects all elements that are the last among siblings of the same element name.

:nth-child() Selector
Selects all elements that are the nth-child of their parent.

:nth-last-child() Selector
Selects all elements that are the nth-child of their parent, counting from the last element to the first.

:nth-last-of-type() Selector
Selects all the elements that are the nth-child of their parent in relation to siblings with the same element name,
counting from the last element to the first.

:nth-of-type() Selector
Selects all elements that are the nth child of their parent in relation to siblings with the same element name.

:only-child Selector
Selects all elements that are the only child of their parent.

:only-of-type Selector
Selects all elements that have no siblings with the same element name.

/***********************************************
*
* 1. :nth-child() Selector
*
* =&gt; :nth-child(even)
* =&gt; :nth-child(odd)
* =&gt; :nth-child(3n)
* =&gt; :nth-child(2)
* =&gt; :nth-child(3n+1)
* =&gt; :nth-child(3n+2)
* =&gt; .even()
* =&gt; .odd()
*******************************************
*
* 2. :nth-last-child() Selector
*
* =&gt; :nth-last-child(even)
* =&gt; :nth-last-child(odd)
* =&gt; :nth-last-child(3n)
* =&gt; :nth-last-child(2)
* =&gt; :nth-last-child(3n+1)
* =&gt; :nth-last-child(3n+2)
***********************************************
*
* 3. :nth-last-of-type() Selector
*
* =&gt; :nth-last-of-type(even)
* =&gt; :nth-last-of-type(odd)
* =&gt; :nth-last-of-type(3n)
* =&gt; :nth-last-of-type(2)
* =&gt; :nth-last-of-type(3n+1)
* =&gt; :nth-last-of-type(3n+2)
*****************************************************
*
* 4. :nth-of-type() Selector
*
* =&gt; :nth-last-of-type(even)
* =&gt; :nth-last-of-type(odd)
* =&gt; :nth-last-of-type(3n)
* =&gt; :nth-last-of-type(2)
* =&gt; :nth-last-of-type(3n+1)
* =&gt; :nth-last-of-type(3n+2)
*
************************************************************
*/


How nth-child Works




There is a CSS selector, really a pseudo-selector, called :nth-child. Here is an example of using it:

ul li:nth-child(3n+3) {
color: #ccc;
}
What the above CSS does, is select every third list item inside unordered lists. That is, the 3rd, 6th, 9th, 12th, etc.
But how does that work? And what other kinds of things can you do with :nth-child? Let’s take a look.

It boils down to what is in between those parentheses. nth-child accepts two keywords in that spot: even and odd. Those
should be pretty obvious. “Even” selects even numbered elements, like the 2nd, 4th, 6th, etc. “Odd” selects odd numbered
elements, like 1st, 3rd, 5th, etc.

As seen in the first example, nth-child also accepts expressions in between those parentheses. The simplest possible
expression? Just a number. If you put simply a number in the parentheses, it will match only that number element. For
example, here is how to select only the 5th element:

ul li:nth-child(5) {
color: #ccc;
}

Let’s get back to the 3n+3 from the original example though. How does that work? Why does it select every third element?
The trick is understanding the “n” and algebraic expression that represents. Think of n as starting at zero and then a
set of all positive integers. Then complete the expression. So the 3n is “3xn”, and the whole expression together is
“(3xn)+3”. Now substituting in the zero and positive integers, we get:

(3 x 0) + 3 = 3 = 3rd Element
(3 x 1) + 3 = 6 = 6th Element
(3 x 2) + 3 = 9 = 9th Element
etc.


How about the :nth-child(2n+1)?

(2 x 0) + 1 = 1 = 1st Element
(2 x 1) + 1 = 3 = 3rd Element
(2 x 2) + 1 = 5 = 5th Element
etc.


Hey wait! That’s the same as “odd”, so probably don’t need to use that one very often. But wait now. Haven’t we exposed
our original example as being overly complicated? What if instead of “3n+3”, we used 3n+0, or even simpler 3n.

(3 x 0) = 0 = no match
(3 x 1) = 3 = 3rd Element
(3 x 2) = 6 = 6th Element
(3 x 3) = 9 = 9th Element
etc.


So as you can see, the matches are exactly the same, no need for the “+3”. We can use negative n values, as well as use
subtraction in the expressions. For example, 4n-1:

(4 x 0) - 1 = -1 = no match
(4 x 1) - 1 = 3 = 3rd Element
(4 x 2) - 1 = 7 = 7th Element
etc.


Using -n values seems a little weird, because if the end result is negative there is no match, so you’ll need to add to
the expression to get it back positive again. As it turns out, this is a rather clever technique. You can use it to
select the “first n elements” with -n+3:

-0 + 3 = 3 = 3rd Element
-1 + 3 = 2 = 2nd Element
-2 + 3 = 1 = 1st Element
-3 + 3 = 0 = no match
etc.


Sitepoint has a nice reference guide, which includes this handy-dandy table which I’ll shamelessly republish here:

n 2n+1 4n+1 4n+4 4n 5n-2 -n+3
0 1 1 4 – – 3
1 3 5 8 4 3 2
2 5 9 12 8 8 1
3 7 13 16 12 13 –
4 9 17 20 16 18 –
5 11 21 24 20 23 –
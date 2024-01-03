Category: Attribute The CSS specification allows elements to be
identified by their attributes. While not supported by some older
browsers for the purpose of styling documents, jQuery allows you to
employ them regardless of the browser being used.

When using any of the following attribute selectors, you should account
for attributes that have multiple, space-separated values. Since these
selectors see attribute values as a single string, this selector, for
example, \$("a\[rel='nofollow'\]"), will select
`<a href="example.html" rel="nofollow">`{=html}Some text`</a>`{=html}
but not `<a href="example.html" rel="nofollow foe">`{=html}Some
text`</a>`{=html}.

Attribute values in selector expressions must follow the rules for W3C
CSS selectors; in general, that means anything other than a valid
identifier should be surrounded by quotation marks.

double quotes inside single quotes: \$('a\[rel="nofollow self"\]')
single quotes inside double quotes: \$("a\[rel='nofollow self'\]")
escaped single quotes inside single quotes: \$('a\[rel=\'nofollow
self\'\]') escaped double quotes inside double quotes:
\$("a\[rel=\"nofollow self\"\]") The variation you choose is generally a
matter of style or convenience.

Note: In jQuery 1.3 [@attr] style selectors were removed (they were
previously deprecated in jQuery 1.2). Simply remove the "@" symbol from
your selectors in order to make them work again.

1.  Attribute Contains Prefix Selector \[name\|="value"\] =\> Selects
    elements that have the specified attribute with a value either equal
    to a given string or starting with that string followed by a hyphen
    (-).

2.  Attribute Contains Selector \[name\*="value"\] =\> Selects elements
    that have the specified attribute with a value containing a given
    substring.

3.  Attribute Contains Word Selector \[name\~="value"\] =\> Selects
    elements that have the specified attribute with a value containing a
    given word, delimited by spaces.

4.  Attribute Ends With Selector \[name\$="value"\] =\> Selects elements
    that have the specified attribute with a value ending exactly with a
    given string. The comparison is case sensitive.

5.  Attribute Equals Selector \[name="value"\] =\> Selects elements that
    have the specified attribute with a value exactly equal to a certain
    value.

6.  Attribute Not Equal Selector \[name!="value"\] =\> Select elements
    that either don't have the specified attribute, or do have the
    specified attribute but not with a certain value.

7.  Attribute Starts With Selector \[name\^="value"\] =\> Selects
    elements that have the specified attribute with a value beginning
    exactly with a given string.

8.  Has Attribute Selector \[name\] =\> Selects elements that have the
    specified attribute, with any value.

9.  Multiple Attribute Selector \[name="value"\]\[name2="value2″\] =\>
    Matches elements that match all of the specified attribute filters.

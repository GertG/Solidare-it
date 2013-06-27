For those CSS files that have a SCSS file, the CSS file should never be edited
directly. These are generated from the SCSS file.

```
sass solidare-it.scss:solidare-it.css
```

To install the tool that does this transformation : [SASS](http://sass-lang.com/docs.html)
you can do

```
gem install sass
```

When working on the CSS it can be the easiest to have the CSS update itself
automatically based on the SCSS. In this case use

```
sass --watch solidare-it.scss:solidare-it.css
```

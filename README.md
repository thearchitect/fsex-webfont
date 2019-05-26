# Fixedsys Excelsior web font hosted on GitHub intended for JSDelvr CDN access

## Credit

* made Fixedsys Excelsior: Darien Gavin Valentine.
* for conversion of TrueType font to web font formats: FontSquirrel Web Font Generator
* Microsoft/IBM: the original Fixedsys system/hardware font
* CDN access API for fast web font linking: JSDelivr + GitHub

## Usage

### Optional:

In between your HTML file's &lt;head&gt; tag

```html
<link rel="dns-prefetch" href="//cdn.jsdelivr.net">
```

### Main use

```html
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kneedeepincode/fsex-webfont@latest/fsex300.css">
```

Then using &quot;font-family&quot; in CSS:

```css
.fsex{font-family:"Fixedsys Excelsior 3.00",monospace;}
```

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

Use tag v1.0.1 for better caching:

```html
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kneedeepincode/fsex-webfont@v1.0.1/fsex300.css">
```

or use latest commit (_**NOT**_ recommended!):

```html
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kneedeepincode/fsex-webfont@latest/fsex300.css">
```

Then using &quot;font-family&quot; in CSS:

```css
.fsex{font-family:"Fixedsys Excelsior 3.01",monospace;}
```

**&quot;font-size&quot; recommendations:**

* _regular_: 16px (12pt)
* _medium_: 32px (24pt)
* _large_: 48px (36pt)
* _larger_: 64px (48pt)
* _huge_: 96px (72pt)

Fixedsys Excelsior page recommended pixel font-size's due to wonky older MacOS rendering. Testing with fsex-webfont has not been done. Open an issue on this repo if you have any input.

**&quot;font-weight&quot; recommendation:**

```css
font-size:400;
```

('bold' preset == 600, looks a little too heavy)

**&quot;font-style&quot; recommendation:**

```css
font-style:italic;
```


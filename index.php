@charset "UTF-8";
@font-face {
    font-family: 'Griffin';
    src: url('griffinhandwriting-webfont.woff2') format('woff2'),
         url('griffinhandwriting-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
input, button {
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
}
input[type="radio"] {
	-webkit-appearance: radio;
	-moz-appearance: radio;
	appearance: radio;
}
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
	display: block;
}
html {
	height: 100%;
}
body {
	line-height: 1;
	font-size: 16px;
	font-family: 'Muli', sans-serif;
	color: #f3eded;
	margin: 0px;
	padding: 0px;
	min-height: 100%;
	background-color: #111;
}
body.home {
	background: url('img/homepage-background.jpg');
	background-size: cover;
	background-attachment: fixed;
	background-position: top center;
	background-color: #111;
}
body.beerlist {
	background: url('img/beerlist-background.jpg');
	background-size: cover;
	background-attachment: fixed;
	background-position: top center;
	background-color: #111;
}
body.about {
	background: url('img/about-background.jpg');
	background-size: cover;
	background-attachment: fixed;
	background-position: top center;
	background-color: #111;
}
body.taproom {
	background: url('img/taproom-background.jpg');
	background-size: cover;
	background-attachment: fixed;
	background-position: top center;
	background-color: #111;
}
body.contact {
	background: url('img/contact-background.jpg');
	background-size: cover;
	background-attachment: fixed;
	background-position: top center;
	background-color: #111;
}
p {
	font-size: 1em;
	line-height: 1.25em;
	margin-bottom: 1em;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
img {
	width: 100%;
}
#content a {
	color: #c62f27;
	text-decoration: none;
	transition: color .3s ease;
}
h1, h2, h3 {
	font-family: 'Alegreya SC', sans-serif;
	margin: 0 0 .5em 0;
}
h1 {
	font-size: 2.5em;
	margin: 0 0 .25em 0;
}
h2 {
	font-size: 1.5em;
}
h3 {
	font-size: 1.5em;
}
.clear {
	clear: both;
}
#content {
	width: 100%;
	max-width: 980px;
	margin: 0 auto;
	background: rgba(0,0,0,.85);
	padding-top: 150px;
}
.content {
	width: 100%;
	max-width: 980px;
	margin: 0 auto;
	background: rgba(0,0,0,.85);
}
.row, .column, .col {
	box-sizing: border-box;
}
.row {
	width: 100%;
}
.row:before, .row:after {
	clear: both;
	float: none;
	content: '';
	display: block;
}
.column {
	width: 100%;
	max-width: 980px;
	margin: 0 auto;
}
.col {
	float: left;
	margin: 0 auto;
}
.col-1 {
	width: 100%;
	max-width: 980px;
}
.col-2 {
	width: 50%;
	max-width: 490px;
}
.col-3 {
	width: 33.33333333333%;
	max-width: 326px;
}
.col-4 {
	width: 25%;
	max-width: 245px;
}
.col-6 {
	width: 16.66666666667%;
	max-width: 163px;
}
.col-2-3 {
	width: 66.66666666667%;
	max-width: 652px;
}
.col-3-4 {
	width: 75%;
	max-width: 735px;
}
.pad-20 {
	padding: 20px;
}
.orange {
	color: #f29b4e;
}
#header {
	position: fixed;
	top: 40px;
	left: 0px;
	width: 100%;
	background: #c62f27;
	height: 60px;
	box-sizing: border-box;
	padding-top: 18px;
	box-shadow: 0px 0px 10px rgba(0,0,0,.6);
	transition: all .2s ease;
	z-index: 100;
}
.scrolled {
	top: 0px !important;
}
.scrolled #logo {
	width: 70px;
	top: -10px;
}
#logo {
	float: left;
	position: relative;
	top: -50px;
	left: 20px;
	width: 200px;
	transition: all .2s ease;
}
nav {
	text-align: right;
	font-family: 'Alegreya SC', serif;
	font-size: 1.5em;
	background: none;
	transition: background .2s ease;
}
nav a {
	color: #310000;
	text-decoration: none;
	margin: 0 20px;
	transition: color .3s linear;
}
nav a.active {
	color: #f3eded !important;
}
.cta {
	text-align: center;
}
.cta a {
	display: inline-block;
	padding: 10px 20px;
	background: #c62f27;
	color: #f3eded !important;
	font-family: 'Griffin', sans-serif;
	font-size: 1.375em;
	text-decoration: none;
	letter-spacing: .1em;
	box-shadow: 0px 0px 10px rgba(0,0,0,.5);
	transition: background .3s ease;
	cursor: pointer;
}
#home-beer-list a {
	color: #f3eded;
}
.home-beer-list-head {
	text-align: center;
	background: #000 !important;
	font-size: 1.2em;
	margin: 0;
	padding: 10px 0;
}
.beer-list {
	position: relative;
	font-family: 'Griffin', sans-serif;
	font-size: 1.7em;
	letter-spacing: .1em;
	width: 100%;
	background: url('img/metal.jpg') no-repeat;
	background-size: cover;
	margin-bottom: 30px;
	z-index: 10 !important;
}
.beer-list li {
	box-sizing: border-box;
	padding: 5px 50px;
	border-bottom: 1px solid rgba(243,237,237,.07);
	border-top: 2px solid #000;
}
.beer-item {
	position: relative;
	text-shadow: 0px 0px 0px transparent;
	transition: all .5s ease;
	cursor: pointer;
}
.beer-item-details {
	height: 0px;
	overflow: hidden;
	font-size: .5em;
	font-family: 'Muli', sans-serif !important;
}
#holder {
	position: absolute;
	left: 0px;
	opacity: 0;
	width: 100%;
	background: url('img/metal.jpg') no-repeat;
	background-size: cover;
	padding: 20px;
	border-top: 1px solid #f3eded;
	border-bottom: 1px solid #f3eded;
	box-shadow: 0px 0px 20px rgba(243,237,237,.7);
	box-sizing: border-box;
}
#holder .number {
	display: none;
}
#holder .abv {
	display: none;
}
#holder .beer-details {
	font-size: 1.5em;
	letter-spacing: .1em;
	text-align: center;
	display: block;
}
#holder .beer-item-details {
	height: auto !important;
	font-size: .5em;
	font-family: 'Muli', sans-serif;
	text-align: center;
	margin: 10px 0 0 0;
	padding: 0 2em .5em 2em;
}
.abv-ibu {
	display: block;
	font-family: 'Griffin', sans-serif;
	color: #83def1;
	font-size: 1.5em;
}
.hops-malt {
	margin: .5em 0;
}
.beer-description {
	line-height: 1.5em;
	font-size: 1.25em;
	margin: 1em 0 0 0;
}
#holder .beer-item-details b {
	font-weight: bold;
	display: inline;
}
#close-beer {
	position: absolute;
	top: 10px;
	right: 10px;
	display: block;
	width: 20px;
	height: 20px;
	border: 1px solid #f3eded;
	box-sizing: border-box;
	cursor: pointer;
	transition: border .3s ease;
}
#close-beer::before {
	content: '';
	display: block;
	transform: rotate(-45deg);
	position: relative;
	top: 8px;
	left: 0px;
	height: 2px;
	background: #f3eded;
	transition: background .3s ease;
}
#close-beer::after {
	content: '';
	display: block;
	transform: rotate(45deg);
	position: relative;
	top: 6px;
	left: 0px;
	height: 2px;
	background: #f3eded;
	transition: background .3s ease;
}
.beer-item-details span {
	padding: 10px;
	box-sizing: border-box;
}
.beer-list .beer-head {
	font-size: .75em !important;
	color: #ccc;
}
.beer-head h1 {
	font-size: 1em !important;
	font-family: 'Griffin', sans-serif !important;
	display: inline-block !important;
	margin: 0 !important;
}
.beer-list li.cap {
	padding: 3px 0 0 0;
}
.abv, .ibu {
	float: right;
	color: #83def1;
	font-size: .75em;
}
.on-deck-beers {
	width: 70%;
	margin: 0 auto;
	text-align: center;
}
.on-deck-beers h2 {
	text-align: center;
}
.beer {
	display: inline-block;
	margin: 20px 2em;
	font-family: 'Griffin', sans-serif;
	font-size: 1.5em;
	letter-spacing: .1em;
}
.res-image {
	width: 100%;
	max-width: inherit;
}
.featured-beer {
	border: 3px solid #f3eded;
}
.bio {
	border: 3px solid #f3eded;
	max-width: 400px;
}
#spread {
	width: 100%;
	max-width: 980px;
	margin: 0 auto;
	background: rgba(0,0,0,.85);
}
footer {
	min-height: 200px;
	padding-top: 60px;
	background: url('img/gear.png') bottom left no-repeat;
}
footer li {
	line-height: 1.5em;
}
footer li span {
	padding: 0 0 0 1em;
}
.white {
	color: #f3eded;
}
#map p {
	text-align: right;
	line-height: 1.6em !important;
	font-size: .813em;
}
#map a {
	color: #f3eded;
	text-decoration: none;
}
.ralign {
	text-align: right;
}
#menu {
	display: none;
	position: relative;
	width: 40px;
	height: 40px;
	border: 1px solid #310000;
	cursor: pointer;
	transition: border .2s ease;
}
#menu.ex {
	border: 1px solid #f3eded;
}
#line1, #line2, #line3 {
	position: absolute;
	display: block;
	width: 30px;
	height: 4px;
	background: #310000;
	transition: all .3s ease;
}
.hamburger #line1 {
	top: 10px;
	left: 5px;
}
.hamburger #line2 {
	top: 18px;
	left: 5px;
}
.hamburger #line3 {
	top: 26px;
	left: 5px;
}
.ex #line1 {
	transform: rotate(-45deg);
	top: 18px;
	left: 5px;
	background: #f3eded;
}
.ex #line2 {
	transform: rotate(45deg);
	top: 18px;
	left: 5px;
	background: #f3eded;
}
.ex #line3 {
	transform: rotate(-45deg);
	top: 18px;
	left: 5px;
	background: #f3eded;
}
#newsletter-signup {
	background: #000;
	width: 100%;
	padding: 10px;
	box-sizing: border-box;
}
#newsletter-signup:after {
	content: '';
	display: block;
	clear: both;
}
#newsletter-signup input[type=email] {
	width: 70%;
	border: none;
	outline: none;
	float: left;
	font-family: 'Muli', sans-serif;
	font-size: 1em;
	padding: 10px;
	box-sizing: border-box;
	text-align: center;
	border-radius: 0px !important;
}
#newsletter-signup input[type=submit] {
	border: none;
	outline: none;
	background: #c62f27;
	color: #f3eded;
	font-family: 'Griffin', sans-serif;
	font-size: 1.375em;
	text-decoration: none;
	letter-spacing: .1em;
	float: right;
	width: 28%;
	padding: 10px;
	box-sizing: border-box;
	cursor: pointer;
	transition: background .2s ease;
	border-radius: 0px !important;
}
#mc-embedded-subscribe {
	margin: 0 !important;
	clear: none !important;
}
.response {
	text-align: center;
	padding: 1em;
}
::-webkit-input-placeholder {
	font-family: 'Griffin', sans-serif;
	font-size: 1.375em;
	color: #1b0000;
}
::-moz-placeholder {
	font-family: 'Griffin', sans-serif;
	font-size: 1.375em;
	color: #1b0000;
}
:-ms-input-placeholder {
	font-family: 'Griffin', sans-serif;
	font-size: 1.375em;
	color: #1b0000;
}
:-moz-placeholder {
	font-family: 'Griffin', sans-serif;
	font-size: 1.375em;
	color: #1b0000;
}
#form-success {
	display: block;
	text-align: center;
	font-size: 1.2em;
}
#contact-form {
	padding: 10px;
	background: #000;
}
#contact-form label {
	display: block;
	margin: .35em 0 .35em 0;
}
#contact-form input[type="text"], #contact-form input[type="email"], #contact-form textarea {
	margin-bottom: 1em;
	border: 1px solid #f3eded;
	outline: none;
	background: rgba(243,237,237,.1);
	width: 100%;
	box-sizing: border-box;
	padding: 10px;
	font-family: 'Muli', sans-serif;
	font-size: 1em;
	color: #f3eded;
	text-align: center;
}
#contact-form textarea {
	height: 180px;
}
.radio-buttons {
	margin: 0 0 1em 0;
}
.radio-buttons label {
	display: inline-block !important;
}
button {
	border: none;
	outline: none;
	background: #c62f27;
	color: #f3eded;
	font-family: 'Griffin', sans-serif;
	font-size: 1.375em;
	text-decoration: none;
	letter-spacing: .1em;
	width: 100%;
	padding: 10px;
	box-sizing: border-box;
	cursor: pointer;
	transition: background .2s ease;
	border-radius: 0px !important;
}
#beerlist-stripe {
	background-image: url('img/beer-flight.jpg');
}
#taproom-stripe {
	background-image: url('img/growlers.jpg');
}
#beerlist-stripe, #taproom-stripe {
	width: 100%;
	height: 250px;
	background-position: center;
	background-size: cover;
	background-repeat: no-repeat;
}
b {
	display: block;
	font-family: 'Alegreya SC', serif;
	font-size: 1.25em;
	letter-spacing: .1em;
	margin: .5em 0;
}
i {
	font-style: italic;
}
strong {
	font-weight: bold;
}
.event-hidden {
	display: none;
}
.event {
	padding-top: 1em;
	border-top: 1px solid #f3eded;
}
.date-location {
	font-size: .813em;
	color: rgba(243,237,237,.8);
	margin: 0 0 .5em 0;
}
.date-divide {
	padding: 0 1em;
}
.center {
	text-align: center !important;
	margin: 0 auto;
}
.grecaptcha-badge {
	display: none !important;
}
#social {
	margin: 2em 0 0 0;
}
#social li {
	display: inline-block;
}
#facebook {
	background: url('img/icon-facebook.png') no-repeat;
}
#instagram {
	background: url('img/icon-instagram.png') no-repeat;
}
#twitter {
	background: url('img/icon-twitter.png') no-repeat;
}
#facebook, #instagram, #twitter {
	display: inline-block;
	width: 40px;
	height: 40px;
	background-size: contain;
}
#show-all-events {
	margin: 2em 0;
}
/* Hover Actions */
@media (hover:hover) {
	#content a:hover {
		color: #f3eded;
	}
	nav a:hover {
		color: #f3eded !important;
	}
	.cta a:hover {
		background: #94201a;
	}
	.beer-item:hover {
		background: #c62f27;
	}
	.beer-item:hover .abv {
		color: #f3eded;
	}
	#close-beer:hover {
		border: 1px solid #c62f27;
	}
	#close-beer:hover::before, #close-beer:hover::after {
		background: #c62f27;
	}
	#menu:hover {
		border: 1px solid #f3eded;
	}
	#menu:hover #line1, #menu:hover #line2, #menu:hover #line3 {
		background: #f3eded !important;
	}
	#newsletter-signup input[type=submit]:hover {
		background: #94201a;
	}
	button:hover {
		background: #94201a;
	}
	#social a:hover {
		opacity: .8;
	}
}

/* Large Screen Dimensions */
@media (min-width: 768px) and (max-width: 1070px) {

}

/* Medium Screen Dimensions */
@media (max-width: 768px) {
	.col-1, .col-2, .col-2-3, .col-3-4, .col-3, .col-4, .col-6 {
		text-align: center !important;
		margin: 0 auto;
	}
	.col-2, .col-2-3, .col-3-4, .col-3 {
		width: 100%;
		max-width: 768px;
	}
	.col-4 {
		width: 50%;
		max-width: 384px;
	}
	.col-6 {
		width: 33.33333333333%;
		max-width: 256px;
	}
	#header {
		top: 0px !important;
	}
	#header #logo {
		width: 70px;
		top: -10px;
	}
	#menu {
		display: block;
		float: right;
		top: -8px;
		right: 20px;
	}
	#nav {
		display: block;
		position: fixed;
		top: 60px;
		left: -20000px;
		background: rgba(0,0,0,.85);
		width: 100%;
		height: 100%;
	}
	#nav.overlay {
		left: 0px;
	}
	#nav a {
		color: #f3eded;
		display: block;
		text-align: center;
		line-height: 2em;
		font-size: 1.5em;
	}
	#nav a:hover {
		color: #c62f27 !important;
	}
	#content {
		padding-top: 80px;
	}
	.beer-list li {
		padding: 5px 20px;
	}
	.beer-details {
		display: inline-block;
		max-width: 80%;
	}
	#holder .beer-details {
		max-width: 100% !important;
	}
	footer .col-2-3, footer .col-3 {
		width: 50%;
	}
	#map iframe {
		height: 300px;
	}
	#map p {
		text-align: center;
	}
	#newsletter-signup input[type=email] {
		width: 100%;
		border: none;
		outline: none;
		float: none;
		font-family: 'Muli', sans-serif;
		font-size: 1em;
		padding: 10px;
		box-sizing: border-box;
		text-align: center;
	}
	#newsletter-signup input[type=submit] {
		border: none;
		outline: none;
		background: #c62f27;
		color: #f3eded;
		font-family: 'Griffin', sans-serif;
		font-size: 1.375em;
		text-decoration: none;
		letter-spacing: .1em;
		float: none;
		width: 100%;
		padding: 10px;
		box-sizing: border-box;
		cursor: pointer;
		transition: background .2s ease;
		margin-top: 10px;
	}
	#mc-embedded-subscribe {
		margin-top: 15px !important;
	}
	.on-deck-beers {
		width: 100%;
		margin: 0 auto;
		text-align: center;
	}
	.beer {
		display: block;
		margin: .2em 0;
	}
	#taproom-stripe {
		background-attachment: inherit !important;
	}
	.max-60 {
		width: 60% !important;
	}
	#spread {
		display: none !important;
	}
}

/* Small Screen Dimensions */
@media (max-width: 569px) {
	.col-1, .col-2, .col-2-3, .col-3, .col-3-4, .col-4, .col-6 {
		text-align: center;
		margin: 0 auto;
	}
	.col-1 {
		width: 100%;
		max-width: 570px;
	}
	.col-2, .col-2-3, .col-3-4, .col-3 {
		width: 100%;
		max-width: 570px;
	}
	.col-4, .col-6 {
		width: 100%;
		max-width: 570px;
	}
	h1 {
		font-size: 1.75em;
	}
	h2, h3 {
		font-size: 1.25em;
	}
	.cta {
		margin: 15px auto;
	}
	.beer-list {
		font-size: 1.3em !important;
	}
	footer {
		background: none;
	}
	#map iframe {
		width: 80%;
		height: 190px;
	}
	.date-time {
		display: block;
	}
	.date-divide {
		display: none;
	}
	.home-beer-list-head {
		font-size: .75em !important;
	}
}
/* Extra Small Screen Dimensions */
@media (max-width: 374px) {
	.beer-head h1 span {
		display: block;
	}
	.beer-head .abv {
		margin-top: 15px;
	}
}

<?php
include(__DIR__."/../../classes/LogHit.php");
LogHit::LogAHit("ZenGardens");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>My HTML5 and CSS3 CSS Zen Gardens</title>
			<!--[if lt IE 9]>
			<script src="html5shiv.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="css/style3.css">
	</head>
	<body>
		<div id="container">
			<header id="mainheading">
				<h1>CSS Zen Garden Mark 2</h1>
				<h2 id="subheading">The Beauty of Cascading Style Sheet (CSS) Design</h2>
				<h3>Using HTML5 and CSS3</h3>
			</header>
			<nav id="navigation">
				<section id="subnav1">
				<header class="navheader">
					<h2 class="select">Select a Design:</h2>
				</header>
					<ul id="styles">
						<li><a href="ZenGarden.htm?style1#css/nostyle.css">No Design</a></li>
						<li><a href="ZenGarden.htm?style2#css/style1.css">First Design</a></li>
						<li><a href="ZenGarden.htm?style3#css/style2.css">Second Design</a></li>
						<li><a href="ZenGarden.htm?style4#css/style3.css">Third Design</a></li>
						<li><a href="#">Dummy Link 5</a></li>
						<li><a href="#">Dummy Link 6</a></li>
						<li><a href="#">Dummy Link 7</a></li>
						<li><a href="#">Dummy Link 8</a></li>
						<li><a href="#">Dummy Link 9</a></li>
						<li><a href="#">Dummy Link 10</a></li>
					</ul>
				</section>
				<section id="subnav2">
				<header class="navheader">
					<h2 class="select">Useful Links:</h2>
				</header>
					<ul>
					<!-- Change the name of the page below to your home page name -->
						<li><a href="/PortfolioWebsite/index.php#projects">Link back to my page</a></li>
						<li><a href="http://www.w3.org/Style/CSS/current-work">W3 CSS Current Work</a></li>
						<li><a href="http://www.csszengarden.com/">Original Zen Gardens</a></li>
						<li><a href="http://caniuse.com/">Can I Use...</a></li>
					</ul>
				</section>
				</nav>
			<section id="quicksummary">
				<p class="p1">A demonstration of what can be accomplished visually through CSS-based design. Select any style sheet from the list to load it into this page.</p>
				<p class="p2">Download the sample <a href="ZenGarden.htm">html file</a></p>
			</section>
			<section id="maincontent">
				<article id="a1" class="mainarticle">
					<header class="articleheader">
						<h2>The Road to Enlightenment</h2>
					</header>
					<p class="p1">Littering a dark and dreary road lay the past relics of browser-specific tags, incompatible DOMs, and broken CSS support.</p>
					<p class="p2">Today, we must clear the mind of past practices. Web enlightenment has been achieved thanks to the tireless efforts of folk like the the World Wide Web Consortium (W3C) and the major browser creators.</p>
					<p class="p3">The css Zen Garden invites you to relax and meditate on the important lessons of the masters. Begin to see with clarity. Learn to use the (yet to be) time-honored techniques in new and invigorating fashion. Become one with the web.</p>
				</article>
				<article id="a2" class="mainarticle">
					<header class="articleheader">
						<h2>So What is This About?</h2>
					</header>
					<p class="p1">There is clearly a need for CSS to be taken seriously. The Original Zen Garden aimed to excite, inspire, and encourage participation by showing how a page could look different by just changing the CSS file. Now, we must think forward to responsive design, adapting the page to enhance the user experience and the device / browser <em>THEY</em> choose to use.</p>
					<p class="p2">CSS allows complete and total control over the style of a hypertext document. The only way this can be illustrated in a way that gets people excited is by demonstrating what it can truly be, once the reins are placed in the hands of those able to create beauty from structure. To date, most examples of neat tricks and hacks have been demonstrated by structurists and coders. Designers have yet to make their mark. This needs to change.</p>
				</article>
				<article id="a3" class="mainarticle">
					<header class="articleheader">
						<h2>Participation</h2>
					</header>
					<p class="p1">You should show your graphics skills, design flair and your CSS skills. Please use the original <a href="http://http://www.csszengarden.com/">CSS Zen Gardens  </a> for inspiration, but do not copy these designs as this will not fulfill the new brief</p>
					<p class="p2">You may modify the style sheet in any way you wish, but not the HTML. Although this is not the usual way to work, it shows your skills in CSS and what you have learnt.</p>
					<p class="p3">Copy the HTML code and work on it on the university web server or another server of your choice. You need to alter the THREE style sheets called <span class="file">style1.css</span>, <span class="file">style2.css</span> and <span class="file">style3.css</span> and change the file name of the link back to your web page (the line below the comment). Once you have completed your masterpiece test it in all the browsers in the lab, and link the web page to your own portfolio site. The best submissions for the assignment will be showcased with your student details on an external web server</p>
				</article>
				<article id="a4" class="mainarticle">
					<header class="articleheader">
						<h2>Benefits</h2>
					</header>
					<p class="p1">Why participate? Well its part of your assignment, but hopefully will also be a source of recognition, inspiration, and a resource we can all refer to when showing what you can do with CSS alone. With the advent of CSS3 and HTML5, and the difference between browser support this is a challenge!</p>
				</article>
				<article id="a5" class="mainarticle">
					<header class="articleheader">
						<h2>Requirements</h2>
					</header>
					<p class="p1">This is where we move away from the original brief for CSS Zen Gardens. This version is to show cutting-edge use of CSS, that also degrades where necessary. Content is king. Accessibility is important. Good designs are what you should aspire to. Use as much CSS2 and CSS3 as you need to show off your good design. You will use this to show your skills in CSS, so try to be creative in its use. You want people to look and say &quot;Wow that is cool! How did they do that!&quot;. If your CSS does not validate due to making it future proof, we can cope with that. If it doesn't for any other reason then fix it!!!</p>
					<p class="p2">When designing this way you must think of earlier and later browsers to make your CSS as robust as possible. We don't expect your design to look the same in older browsers or browsers that don't have that latest feature as long as the content is still available, and you have done all you can to give them the best experience. If you forget some of the browser extensions to get it to work - then thats not good. </p>
					<div id="bulletlist">
						<p>Make sure it will work in the following.(use <a href="http://caniuse.com/">caniuse.com</a> for guidance)</p>
						<ul id="browserversions">
							<li class="browserlist">
								Chrome, Firefox and Opera - Current version, last 5 versions, near future and farther future versions
							</li>
							<li class="browserlist">
								Safari - Versions 3.1 to farther future on the mac, latest version on a PC
							</li>
							<li class="browserlist">
								IE - IE8 to Farther future for assignment. IE6 and IE7 for your own satisfaction
							</li>
							<li class="browserlist">
								Mobile Browsers - Any ones you think appropriate for your own satisfaction
							</li>
						</ul>
					</div>
					<p class="p3">Please respect copyright laws for artwork, and add comments in the CSS to show the original source of the material. Although there is no set age limit this page is aimed at, any graphics used should not be offensive to a child or any adult in respect to gender, country or religion. <em>Any graphics used that are deemed to be against this will result in this section not being marked in the assignment</em></p>
					<p class="p4">This is a learning exercise as well as a demonstration, so please use this to improve your skills in CSS - a useful skill to show off to any future employer in Web Development</p>
				</article>
			</section>
			<footer>
				<p class="p1">This page was created for an assignment in Web Design And Development at Staffordshire University</p>
			</footer>
		</div>

		<script src="js/main.js" defer></script>
	</body>
</html>

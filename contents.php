<?php
switch($_GET['target']){
	case 'home':
	?>
	<div id="home">
		<h2>Welcome to Ian Cooper's website!</h2>
		<p class="index_text">I am a hillbilly raised in Eastern Washington. I brew my own beer, I hike, I climb, I run, but mostly, I sit in front of my computer. I grew up as the son of two Mathematicians. As such, I tend toward the nerdy. I love everything that gives my brain pause(imagine a brain with paws!). Give me a puzzle and I won't bother you until it is solved.</p>
		<p class="index_text">Enough about what I AM, though. Let's talk about what I want to BE - at least in a professional sense. I love Front-End Web Development - despite everything Microsoft does to dissuade me. I have taught myself virtually everything that I know about it. I want to be part of a team that tackles projects of a much grander scale than those I have been involved in. I want to have a much better sense of the pitfalls ahead of me on any project, rather than constantly stumbling through them. Ultimately, I want to be an expert.</p>
		<p class="index_text">Wow, that got serious. <a href="http://imgur.com/gallery/omzJa">Here's</a> a picture of a guy in a panda costume.</p>
		<p class="index_text">Feel free to take a look around. The navigation should be fairly self-explanatory.</p>
	</div>
	<?
		break;
	case 'resume':
	?>
		<div id="resume_wrapper" class="leftFloat">
			<div id="resume_header">
				<p id="resume_i" class="leftFloat">I</p>
				<!--Fix this space -->
				<div class="rightFloat box">
					<div id="resume_name" class="resume_underline">
						<h1>an Cooper</h1>
					</div>
					<div id="resume_floatHold">
						<div class="resume_underline leftFloat fifty">

						</div>
						<div id="resume_contact" class="rightFloat fifty">
							<p>2120 S. Sixth St. Unit 6, Berkeley, CA 94710</p>
							<p>509.432.1814  | cooperia.ian@gmail.com</p>
							<a href="http://lankyrabit.com">lankyrabit.com</a>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="resume_section">
				<div class="resume_underline resume_sectionTitle">
					<h2>Objective</h2>
				</div>
				<div class="resume_sectionContent">
					<p>To further a career in web development with a focus on Javascript and its applications.</p>
				</div>
			</div>
			<div class="resume_section">
				<div class="resume_underline resume_sectionTitle">
					<h2>Education</h2>
				</div>
				<div class="resume_sectionContent">
					<p>BA in Applied Mathematics, May 2010<Br/>
					Whitman College, Walla Walla, WA<br/>
					Minor: Economics</p>
				</div>
			</div>
		<div class="resume_section">
			<div class="resume_underline resume_sectionTitle">
				<h2>Experience</h2>
			</div>
			<div class="resume_sectionContent">
				<div class="resume_experienceWrap">
					<p><span class="bold">Developer/Data Analyst:</span> Premier Cellar EMA/AmericanWinery.com</p>
					<p class="italic">March 2011 - Present</p>
					<ul class="resume_outerList box">
						<li><p>Design, develop, and test email campaigns</p></li>
						<li>
							<p>Collect, organize, analyze, and report metrics pertaining to marketing campaigns</p>
							<ul class="resume_innerList box">
								<li>
									<p>To help speed this process up, I built an application in Ruby On Rails to interface with the Google Analytics API as well as our EM platform's API</p>
								</li>
							</ul>
						</li>
						<li><p>Explore new possibilities in social and email marketing, including interfacing 	with the Facebook API through small PHP applications and IFrames.</p></li>
						<li><p>Re-skin various product landing pages using HTML/JS(JQuery)/CSS, Git for VC</p></li>
						<li><p>Perform email list and database management tasks as needed</p></li>
					</ul>
				</div>
				<div class="resume_experienceWrap">
					<p><span class="bold">Harvest Assistant:</span> Artifex Wine Co.</p>
					<p class="italic">September 2010 - March 2011</p>
					<ul class="resume_outerList box">
						<li><p>Worked closely with Winemakers and Artifex management to facilitate and streamline production</p></li>
						<li>
							<p>Learned all necessary lab procedures and managed the lab through malolactic fermentation</p>
						</li>
					</ul>
				</div>
				<div class="resume_experienceWrap">
					<p><span class="bold">Technology Services Summer Intern (Developer)</span> Whitman College</p>
					<p class="italic">May 2008 – September 2008 and May 2009 – September 2009</p>
					<ul class="resume_outerList box">
						<li>
							<p>Developed web applications for internal WCTS purposes using Coldfusion, Postgresql, JS(JQuery), HTML, CSS, AJAX, and Subversion</p>
							<ul class="resume_innerList box">
								<li>
									<p>Rebuilt, modernized, and streamlined the checkout system used by all lab                                                                  				   managers during the school year.</p>
								</li>
							</ul>
						</li>
						<li>
							<p>Updated and redesigned current web content</p>
						</li>
						<li>
							<p>During the school year, I also worked for WCTS managing student labs and doing 			occasional web work. </p>
						</li>
					</ul>
				</div>
			</div>
			<div class="resume_section">
				<div class="resume_underline resume_sectionTitle">
					<h2>Academic Experience</h2>
				</div>
				<div class="resume_sectionContent">
					<p><span class="bold">Data Structures in C++:</span> Whitman College, <span class="italic">Fall 2008</span></p>
					<p><span class="bold">Programming in C++:</span> Whitman College, <span class="italic">Spring 2008</span></p>
				</div>
			</div>
			<div class="resume_section">
				<div class="resume_underline resume_sectionTitle">
					<h2>Technical Skills</h2>
				</div>
				<div class="resume_sectionContent">
					<p>HTML, CSS, JavaScript, JQuery, AJAX, Photoshop, Illustrator, Ruby on Rails, PHP, Coldfusion (ColdBox), Basic CMS (Drupal, Wordpress, Refinery), Git, Subversion, Mysql, postgresql</p>
				</div>
			</div>
		</div>
		</div>
	<?
		break;
	case 'bubbles':
	?>
	<div id="#bubbles_text">
		<h2 class="bubbles_header">Bubbles!</h2>
		<p>This is the project that has probably been the most fun for me lately. I set out wanting to see if I could make something that looked vaguely like beer, and it ended up giving me an opportunity to practice and learn quite a few new things.</p>
		<h3 class="bubbles_subHeader">Concept and Construction</h3>
		<p>I built the beer mug image in Adobe Illustrator and tweaked it in Photoshop. I also originally had a bubble graphic that was just used over and over again. I decided that was not necessary given the size and detail of the bubbles, and ended up going with a CSS-only approach. The original logic was a series of functions that just cascaded down calling each other. After I read around a little, I rebuilt it using objects. At some point, I plan to stress-test the two side by side and see if there is a noticeable difference. </p>
		<h3 class="bubbles_subHeader">Challenges</h3>
		<p>The most challenging aspect of this project has been dealing with resizing the display space. I'm still working on how best to deal with any bubbles that pass out of relevance when the space gets smaller. I have a few work-arounds, but none of the seem quite good enough.</p>
		<h3 class="bubbles_subHeader">Future</h3>
		<p>Aside from continuing to iron out any bugs I discover and improving the handling of window resizing, I would like to turn this into a simple game at some point. I figure it would be relatively simple to create a game where a user could click bubbles to pop them before they reach the top. Each bubble that reached the top would increase the head of the beer and eventually it would foam over. That is a project for the future, though. </p>
	</div>
	<div id="bubbleWrap">
		<figure><img id="mug" class="box" src="images/beer-forbubbles.png"></figure>
		<div class="clear"></div>
	</div>
	<?
		break;
	case 'other':
	?>
		<div id="projects_wrapper">
				<article class="project_wrapper box">
					<dt class="project_title box leftFloat">
						<a href="http://bartonarch.com">Bart's Portfolio</a>
					</dt>
					<dd class="project_img box rightFloat">
						<a href="http://bartonarch.com"><figure><img src="images/bartsPort.jpg" class="box"></figure></a>
					</dd>
					<dd class="project_description box">
						<p>I built this site as a favor for a friend of mine. He has a degree in Architecture and needed his portfolio rebuilt and updated with recent projects. The design was entirely his - I gave advice on structure, functional animations, and eventually rebuilt the site from the ground up. I have learned a lot since I built the site - I have learned a lot since then. Here are a few things I learned from or would like to improve upon in the future:</p>
						<ul class="project_list">
							<li>The navigation is entirely Javascript based right now. I would like to build in static link backup for web crawlers as well as make it usable for anyone who doesn't have Javascript enabled.</li>
							<li>
								The Javascript that I used for navigation works - however, it certainly isn't as efficient as it could be. The current implementation simply checks for a hash change on an interval and acts accordingly. I have learned to use HTML5's History API since completing the site. It's use could greatly increase stability.
							</li>
							<li>
								I used em's for my base unit of measurement. This has its advantages for some designs, but the right-side navigation presented a significant challenge in the cross-browser arena. In the future, I will keep this in mind when deciding how to proceed with someone else's design. 
							</li>
							<li>
								I would like to extend my use of HTML5 in general. Link prefetching would be very beneficial for all the images that make up Bart's Portfolio.
							</li>
						</ul>
					</dd>
					<div class="clear"></div>
				</article>
				<article class="project_wrapper box">
					<dt class="project_title box leftFloat">
						<a href="https://www.facebook.com/MeeshaAndBriansWedding/app_277683662322884">Countdown</a>
					</dt>
					<dd class="project_img box rightFloat">
						<a href="https://www.facebook.com/MeeshaAndBriansWedding/app_277683662322884"><figure><img src="images/countdown.jpg" class="box"></figure></a>
					</dd>
					<dd class="project_description box">
						<p>One of my close friends had a wedding, and I chose to use it as an excuse to practice a few things. This countdown originally ended at the date of their wedding, but I have since changed it to the New Year. This was a very rough piece of Javascript behind a fun opportunity to do some Photoshop work and teach myself a few things about HTML and CSS. I will focus on the things I would like to change in the Javascript:</p>
						<ul class="project_list">
							<li>Currently, the countdown has no logic to handle reaching its destination. Instead, it just keeps decrementing and it doesn't do THAT well. These are just simple oversights on my part and were probably intentional as I didn't intend it to live on, but it would be nice to build these features in for future use.</li>
							<li>
								Since I built this, I have learned a lot about Javascript. I read 'Javascript: The Good Parts' by Douglas Crockford and have been itching to put what I learned to use. This project could benefit from a complete overhaul in light of my new knowledge of the prototype model and objects in Javascript. 
							</li>
							
						</ul>
					</dd>
					<div class="clear"></div>
				</article>
				<article class="project_wrapper box">
					<dt class="project_title box leftFloat">
						<a href="https://www.facebook.com/MeeshaAndBriansWedding/app_324908094241151">Wedding Party</a>
					</dt>
					<dd class="project_img box rightFloat">
						<a href="https://www.facebook.com/MeeshaAndBriansWedding/app_324908094241151"><figure><img src="images/party.jpg" class="box"></figure></a>
					</dd>
					<dd class="project_description box">
						<p>This project originated from the same motivation as the countdown app. This was one of my first stabs at Javascript as a method for presenting information - AKA AJAX. This app is essentially just a bunch of get requests. I used AJAX a bit in College at WCTS, but the majority of my loading and querying was done in Coldfusion.</p>
						<p>This app could greatly benefit from use of the HTML5 History API as well as link prefetching for images.</p>
					</dd>
					<div class="clear"></div>
				</article>
				<article class="project_wrapper box">
					<dt class="project_title box leftFloat">
						<span>Rails API app</span>
					</dt>
					<dd class="project_img box rightFloat">
						<figure><img src="images/rails.gif" class="box"></figure>
					</dd>
					<dd class="project_description box">
						<p>I built this to help me with reporting at American Winery. I routinely had to compile reports from both our email platform and Google Analytics, and it was very tedious to extract the necessary data from both sources and compile it in a meaningful way. This app communicated with both platforms and used parameters pulled from the email platform to query GA. Unfortunately, it would be remiss of me to put the app on Github so you will just have to take my word on its existence and function!</p>
						<p>I have no illusions about the ninja-ness of this app. Suffice it to say, I can read and edit Ruby/Rails and have built simple things in it, but I am no rails guru. </p>
					</dd>
					<div class="clear"></div>
				</article>
				<article class="project_wrapper box">
					<dt class="project_title box leftFloat">
						<a href="https://github.com/cooperia/Intro-and-Datastructures-HW">HomeWork from College</a>
					</dt>
					<dd class="project_img box rightFloat">
						<a href="https://github.com/cooperia/Intro-and-Datastructures-HW"><figure><img src="images/C++.gif" class="box"></figure></a>
					</dd>
					<dd class="project_description box">
						<p>If you are interested in looking at any of my homework from college, I have put all my assignments on Github.</p>
					</dd>
					<div class="clear"></div>
				</article>
		</div>
	<?
		break;
	?>
	<?
}?>
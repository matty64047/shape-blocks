<?php
/**
 * Shape Hero — animated H1, intro paragraph, CTAs.
 *
 * Matches the madebyshape.co.uk hero:
 * - H1 72px fw:400 lh:1 tracking:-0.025em
 * - Intro 43.2px (2.7rem) fw:400 lh:1
 * - CTA buttons: green (#d0ff71) and border variant
 * - Founder avatar CTA
 */
?>
<section class="pt-20 pb-10 lg:pt-32 lg:pb-16 xl:pt-40 relative overflow-hidden" id="top" aria-labelledby="shape-hero-heading">

	<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10">

		<!-- H1: 72px / 4.5rem, fw:400, lh:1 -->
		<h1 id="shape-hero-heading" class="text-[3.5rem] lg:text-[4.5rem] leading-none font-normal tracking-[-0.025em] mb-8 max-w-[900px] text-[#010202] dark:text-white">
			A web design and&nbsp;
			<a href="/branding/" class="underline underline-offset-[6px] decoration-1 hover:text-[#d0ff71] transition">branding agency</a>
			<br>in Manchester
		</h1>

		<!-- Intro paragraph: 2.7rem, fw:400 -->
		<p class="text-[1.7rem] lg:text-[2.7rem] leading-none font-normal max-w-[800px] mb-10 text-[#010202] dark:text-white">
			An independent
			<a href="/web-design/" class="underline decoration-1 hover:text-[#d0ff71] transition">web design</a>
			and
			<a href="/branding/" class="underline decoration-1 hover:text-[#d0ff71] transition">branding agency</a>
			located in Manchester, UK, working with clients from all around the world.
		</p>

		<!-- CTAs -->
		<div class="flex flex-wrap items-center gap-4 mb-12">
			<a href="/project-planner/"
			   class="inline-flex items-center justify-center bg-[#d0ff71] text-black text-lg font-normal py-3 px-8 rounded-full hover:bg-opacity-80 transition">
				Start a project
			</a>
			<a href="/work/"
			   class="inline-flex items-center justify-center border border-black/10 dark:border-white/20 text-[#010202] dark:text-white text-lg font-normal py-3 px-8 rounded-full hover:bg-black/5 dark:hover:bg-white/10 transition">
				View our work
			</a>
		</div>

		<!-- Founder avatar CTA -->
		<a href="/meet-the-team/"
		   class="inline-flex items-center bg-black/5 dark:bg-white/10 rounded-full py-1.5 pl-1.5 pr-8 gap-3 hover:bg-black/10 dark:hover:bg-white/20 transition">
			<div class="w-12 h-12 rounded-full bg-gray-300 dark:bg-gray-600 flex-shrink-0 overflow-hidden flex items-center justify-center text-xl" aria-hidden="true">
				👤
			</div>
			<span class="text-base font-normal text-[#010202] dark:text-white">
				Hear from Andy, Co-Founder of Shape
			</span>
		</a>

	</div>
</section>
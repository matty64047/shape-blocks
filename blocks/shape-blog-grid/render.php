<?php
/**
 * Shape Blog Grid — latest posts cards.
 */
$blog_posts = [
	[ 'title' => 'Why did Rise at Seven choose MadeByShape?',      'read' => '2 min read', 'url' => '/web-design-blog/why-did-rise-at-seven-choose-madebyshape/' ],
	[ 'title' => 'Our Culture, Our Value & Our Studio',             'read' => '6 min read', 'url' => '/web-design-blog/our-culture-our-value-our-studio/' ],
	[ 'title' => 'Why haven\'t we upscaled our web design agency?', 'read' => '10 min read', 'url' => '/web-design-blog/why-havent-we-upscaled-our-web-design-agency/' ],
	[ 'title' => 'Why our studio outside of Manchester works',       'read' => '4 min read', 'url' => '/web-design-blog/why-our-studio-just-outside-of-manchester-works-for-us/' ],
	[ 'title' => 'Types of clients we want to work with',           'read' => '6 min read', 'url' => '/web-design-blog/types-of-clients-we-want-to-work-with/' ],
	[ 'title' => 'Why I chose to work for a small design agency',   'read' => '4 min read', 'url' => '/web-design-blog/why-i-chose-to-work-for-a-small-design-agency/' ],
];
?>
<section class="py-12 lg:py-20 xl:py-24" aria-labelledby="shape-blog-heading">
	<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10">
		<h2 id="shape-blog-heading" class="text-[2rem] lg:text-[3rem] leading-tight font-normal mb-10 text-[#010202] dark:text-white">
			The latest<br>from our<br>design studio
		</h2>

		<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
			<?php foreach ( $blog_posts as $post ) : ?>
				<a href="<?php echo esc_url( $post['url'] ); ?>"
				   class="group block bg-gray-50 dark:bg-gray-800 rounded-2xl lg:rounded-3xl overflow-hidden hover:bg-[#d0ff71] hover:text-black transition">
					<div class="aspect-[4/3] bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-4xl" aria-hidden="true">
						📝
					</div>
					<div class="p-5 lg:p-6">
						<h3 class="text-lg lg:text-xl font-normal mb-2">
							<?php echo esc_html( $post['title'] ); ?>
						</h3>
						<span class="text-sm font-light text-[#999a9a]">
							<?php echo esc_html( $post['read'] ); ?>
						</span>
					</div>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>
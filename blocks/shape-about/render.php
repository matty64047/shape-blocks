<?php
/**
 * Shape About — agency intro, team cards, reviews, map.
 */
$about_cards = [
	[ 'title' => 'About Us',       'url' => '/about/',       'emoji' => '🏢' ],
	[ 'title' => 'Meet the Team',  'url' => '/meet-the-team/', 'emoji' => '👥' ],
	[ 'title' => 'Culture',        'url' => '/culture/',     'emoji' => '🌈' ],
	[ 'title' => 'Testimonials',   'url' => '/testimonials/', 'emoji' => '💬' ],
];
?>
<section class="py-12 lg:py-20 xl:py-24" aria-labelledby="shape-about-heading">
	<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10">
		<h2 id="shape-about-heading" class="text-[2rem] lg:text-[3rem] leading-tight font-normal mb-10 max-w-[800px] text-[#010202] dark:text-white">
			A web design agency in Manchester that cares about you and your brand, no matter the size or what industry your business is in.
		</h2>

		<!-- About cards grid -->
		<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6 mb-12">
			<?php foreach ( $about_cards as $card ) : ?>
				<a href="<?php echo esc_url( $card['url'] ); ?>"
				   class="group block bg-gray-50 dark:bg-gray-800 rounded-2xl lg:rounded-3xl p-6 lg:p-8 hover:bg-[#d0ff71] hover:text-black transition">
					<div class="text-3xl mb-4" aria-hidden="true"><?php echo esc_html( $card['emoji'] ); ?></div>
					<h3 class="text-xl font-normal"><?php echo esc_html( $card['title'] ); ?></h3>
				</a>
			<?php endforeach; ?>
		</div>

		<!-- Google reviews badge -->
		<div class="flex flex-wrap items-center gap-6 p-6 lg:p-10 bg-gray-50 dark:bg-gray-800 rounded-2xl lg:rounded-3xl">
			<div class="flex-shrink-0 bg-white dark:bg-gray-900 rounded-xl p-4 shadow-sm">
				<div class="flex items-center gap-3">
					<span class="text-4xl" aria-hidden="true">⭐</span>
					<div>
						<div class="text-2xl font-normal text-[#010202] dark:text-white">5.0</div>
						<div class="text-sm font-light text-[#999a9a]">Google Reviews</div>
					</div>
				</div>
			</div>
			<div class="flex-shrink-0">
				<a href="https://www.google.com/maps/place/MadeByShape/@53.5302612,-2.5068987,17z" target="_blank" rel="noopener"
				   class="text-base font-light text-[#010202] dark:text-white underline hover:text-[#d0ff71] transition">
					📍 View us on Google Maps
				</a>
			</div>
		</div>
	</div>
</section>
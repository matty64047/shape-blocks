<?php
/**
 * Shape Services — "How we take your business to the next level" grid.
 *
 * Hardcoded services data with titles, descriptions, and URLs.
 */
$services = [
	[
		'title' => 'Brand Identity',
		'desc'  => 'Creating brands you\'re proud of',
		'url'   => '/branding/',
	],
	[
		'title' => 'Websites',
		'desc'  => 'Deliver your business to a wider audience',
		'url'   => '/web-design/',
	],
	[
		'title' => 'SEO',
		'desc'  => 'Get your brand seen online',
		'url'   => '/search-engine-optimisation-manchester/',
	],
	[
		'title' => 'Craft CMS',
		'desc'  => 'The most reliable way to build a website',
		'url'   => '/craft-cms/',
	],
	[
		'title' => 'Shopify',
		'desc'  => 'Custom Shopify store in 4 weeks',
		'url'   => '/shopify/',
	],
];
?>
<section class="py-12 lg:py-20 xl:py-24" aria-labelledby="shape-services-heading">
	<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10">

		<h2
			id="shape-services-heading"
			class="text-[3rem] leading-tight font-normal mb-10 max-w-[900px] text-[#010202] dark:text-white"
			style="font-family: 'Oldschool Grotesk', sans-serif;"
		>
			How we take your business to the next level
		</h2>

		<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 lg:gap-6 mb-10">
			<?php foreach ( $services as $service ) : ?>
				<a
					href="<?php echo esc_url( $service['url'] ); ?>"
					class="group block bg-gray-50 dark:bg-gray-800 rounded-2xl lg:rounded-3xl p-5 lg:p-6 hover:bg-[#d0ff71] hover:text-black transition"
				>
					<h3
						class="text-xl font-normal mb-2"
						style="font-family: 'Oldschool Grotesk', sans-serif;"
					>
						<?php echo esc_html( $service['title'] ); ?>
					</h3>
					<p
						class="text-sm font-light opacity-70"
						style="font-family: 'Oldschool Grotesk', sans-serif;"
					>
						<?php echo esc_html( $service['desc'] ); ?>
					</p>
				</a>
			<?php endforeach; ?>
		</div>

		<a
			href="/services/"
			class="inline-block text-lg font-normal text-[#010202] dark:text-white hover:text-[#d0ff71] transition"
			style="font-family: 'Oldschool Grotesk', sans-serif;"
		>
			View all Services →
		</a>

	</div>
</section>
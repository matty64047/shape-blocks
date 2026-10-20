<?php
/**
 * Shape Projects — project card grid.
 *
 * Each card: rounded-2xl lg:rounded-3xl, bg-gray-100,
 * image with hover zoom, tags row, title, year badge.
 *
 * @param array  $attributes Block attributes.
 * @param string $content    Inner blocks content.
 * @return string
 */
$projects = [
	[
		'title' => "Refreshing Gary Neville's digital presence",
		'tags'  => [ 'Branding', 'Website', 'SEO' ],
		'year'  => '2023',
		'url'   => '/work/gary-neville/',
		'emoji' => '📱',
	],
	[
		'title' => 'A workplace consultancy creating inspiring environments',
		'tags'  => [ 'Website', 'SEO', 'Brand Repositioning' ],
		'year'  => '2024',
		'url'   => '/work/sketch-studios/',
		'emoji' => '🖥️',
	],
];
?>
<section class="py-12 lg:py-20 xl:py-24" aria-labelledby="shape-projects-heading">
	<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10">
		<h2 id="shape-projects-heading" class="text-[2rem] lg:text-[3rem] leading-tight font-normal mb-10 text-[#010202] dark:text-white">
			Take a look at<br>our projects
		</h2>

		<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
			<?php foreach ( $projects as $proj ) : ?>
				<a href="<?php echo esc_url( $proj['url'] ); ?>"
				   class="group block relative overflow-hidden rounded-2xl lg:rounded-3xl bg-gray-100 dark:bg-gray-800 project-card">
					<div class="aspect-[4/3] bg-gray-200 dark:bg-gray-700 project-card__image overflow-hidden flex items-center justify-center text-6xl" aria-hidden="true">
						<?php echo esc_html( $proj['emoji'] ); ?>
					</div>
					<div class="p-6 lg:p-8">
						<div class="flex flex-wrap gap-2 mb-3">
							<?php foreach ( $proj['tags'] as $tag ) : ?>
								<span class="text-xs font-light bg-gray-50 dark:bg-gray-700 rounded-md py-0.5 px-2 text-[#010202] dark:text-white">
									<?php echo esc_html( $tag ); ?>
								</span>
							<?php endforeach; ?>
						</div>
						<h3 class="text-xl lg:text-[2rem] leading-tight font-normal mb-2 text-[#010202] dark:text-white">
							<?php echo esc_html( $proj['title'] ); ?>
						</h3>
						<span class="text-sm font-light text-[#999a9a]"><?php echo esc_html( $proj['year'] ); ?></span>
					</div>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<div class="overflow-hidden border rounded shadow-lg border-secondary">
	<div class="post-thumbnail">
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php the_post_thumbnail(); ?>
		</a>
	</div>
	<div class="p-5 px-[30px] pb-[26px] related-articles">
		<div class="text-[13px]  text-primary">

			<?php the_category(', ', '', ''); ?>
		</div>

		<h3 class="mt-3 mb-0 text-lg  leading-6">
			<a class="!text-font-color hover:text-primary" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h3>
		<span class="flex justify-between mt-3 text-xs font-normal text-font-color-light">
			<span><?php _e('By', 'fixolab'); ?>
				<a class="hover:text-primary" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author"><?php the_author(); ?></a>
			</span>
			<span class="flex items-center gap-2">
				<svg width="14" height="14" class="fill-font-color-light" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
					<path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192h80v56H48V192zm0 104h80v64H48V296zm128 0h96v64H176V296zm144 0h80v64H320V296zm80-48H320V192h80v56zm0 160v40c0 8.8-7.2 16-16 16H320V408h80zm-128 0v56H176V408h96zm-144 0v56H64c-8.8 0-16-7.2-16-16V408h80zM272 248H176V192h96v56z" />
				</svg>

				<?php the_time('F jS, Y'); ?>
			</span>
		</span>
	</div>
</div>
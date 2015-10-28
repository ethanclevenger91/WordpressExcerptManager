# WordpressExcerptManager
Provides `get_better_excerpt($length, $more)` so you have true control over your excerpts, on the fly.

## Usage
```
the_content();
<hr>
the_excerpt();
<hr>
echo get_better_excerpt(15, '... <a href="'.get_permalink().'">Read More</a>');
```

<p>'You might just as well say,' added the March Hare, 'that "I like what I  get" is the same thing as "I get what I like"!'</p>

<p>'You might just as well say,' added the Dormouse, who seemed to be  talking in his sleep, 'that "I breathe when I sleep" is the same thing  as "I sleep when I breathe"!'</p>

<p>'It IS the same thing with you,' said the Hatter, and here the  conversation dropped, and the party sat silent for a minute, while Alice  thought over all she could remember about ravens and writing-desks,  which wasn't much.</p>

<p>The Hatter was the first to break the silence. 'What day of the month  is it?' he said, turning to Alice: he had taken his watch out of his  pocket, and was looking at it uneasily, shaking it every now and then,  and holding it to his ear.</p>

<hr>

<p>'You might just as well say,' added the March Hare, 'that "I like what I  get" is the same thing as "I get what I like"!''You might just as well say,' added the Dormouse, who seemed to be  talking in his sleep, 'that "I breathe when I sleep" is the same thing  as "I[...]</p>

<hr>

<p>'You might just as well say,' added the March Hare, 'that "I like what I... <a href="http://www.fillerati.com/">Read More</a></p>

## Life Is Easier
### No writing your own filters (per loop, per screen size, etc, both!?)

```
<div class="visible-xs"><?php echo get_better_excerpt(10); ?></div>
<hr>
<div class="visible-sm"><?php echo get_better_excerpt(15, '... <a href="'.get_permalink().'">Read More</a>'); ?></div>
<hr>
<div class="visible-md visible-lg"><?php echo get_better_excerpt(30, '... <a href="'.get_permalink().'">Read More</a>'); ?></div>
```

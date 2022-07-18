<?php
/**
 * Requires ACF Version 5.8+
 *
 * @author      Andrea Musso
 *
 *
 */


  /*==================================================================================
   calibro-frame, Preset ACF Gutenberg Block
 ==================================================================================*/

 /* Register ACF Block
 /––––––––––––––––––––––––*/
 if( function_exists('acf_register_block') ) {

  $result = acf_register_block(array(
    'name'				     => 'am_calibro_frame',
    'title'				     => __('Calibro Interactive Block'),
    'description'		   => __('Block to display Calibro iframe or interactive block'),
    'render_callback'	 => 'am_guttenblock_calibro_frame',
    'category'		     => 'am-category', 
    'icon' => array(
           // Specifying a background color to appear with the icon e.g.: in the inserter.
           'background' => '#5032C8 ',
           // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
           'foreground' => '#ffffff',
           // Specifying a dashicon for the block
           'src' => 'media-interactive',
           'mode'           => 'edit',
           'align'           => 'full',
           ),
    'keywords'		     => ['calibro', 'iframe', 'image', 'immagine', 'frame']
  ));
}

/* Render Block
/––––––––––––––––––––––––*/

function am_guttenblock_calibro_frame() {
  
  // OPTIONS
  $imageIframe = get_field('immagine_o_iframe');

  if($imageIframe === 'Iframe') :  
    
    $iframe = get_field('iframe');  
    
    // Return HTML Iframe
    ?>

    <section class="c-iframe-calibro js-iframe-calibro" style="background-color:<?php echo get_field('background'); ?>">
      <?php if(get_field('titolo')) : ?>
      <h4><?php echo get_field('titolo')  ?></h4>
      <?php endif; ?>
      <iframe width="100%" height="<?php echo $iframe['height'] ?>px" frameborder="0" src="<?php echo $iframe['link'] ?>"></iframe>
      <?php if(get_field('didascalia')) : ?>
      <p><?php echo get_field('didascalia')  ?></p>
      <?php endif; ?>
    </section>


  <?php else : 
    
    $imageCalibro = get_field('immagine');
    

    // Return HTML Image
    ?>
    <section class="c-image-calibro js-image-calibro" style="background-color:<?php echo get_field('background'); ?>">
      <?php if(get_field('titolo')) : ?>
      <h4><?php echo get_field('titolo')  ?></h4>
      <?php endif; ?>


      <figure>
        
        <img class="lazyload  <?php echo $imageCalibro['mobile'] ? 'img-desktop' : ''  ?>"
        data-srcset="<?php bml_the_image_srcset( $imageCalibro['desktop']['ID'] ); ?>" data-sizes="auto"
        alt="<?php echo strip_tags( get_field('titolo'))  ?>">

        <?php if($imageCalibro['mobile']) :?>
        <img class="lazyload img-mobile"
        data-srcset="<?php bml_the_image_srcset( $imageCalibro['mobile']['ID'] ); ?>" data-sizes="auto"
        alt="<?php echo strip_tags( get_field('titolo'))  ?>">
        <?php endif  ?>
    
        <?php if(get_field('didascalia')) : ?>
        <figcaption><?php echo get_field('didascalia')  ?></figcaption>
        <?php endif; ?>
      </figure>
        

    </section>


  <?php endif; ?>

<?php
}
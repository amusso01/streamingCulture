<?php 
$ricerca = get_field('sezione_ricerca')
?>

<?php if($ricerca) : ?>
<section class="l-container--small u-mt-60 u-mb-90"  data-s2r="single" data-s2r-type="block-fade-in" >
  <h2 class="u-h1 u-text-center u-mb-25"><?php echo $ricerca['titolo'] ?></h2>
  <p class="u-text-center u-mb-40"><?php echo $ricerca['contenuto'] ?></p>
  <a class="o-button u-mx-auto u-block" href="<?php echo  $ricerca['link']['url'] ?>"><?php echo  $ricerca['link']['title'] ?></a>
</section>
<?php endif; ?>


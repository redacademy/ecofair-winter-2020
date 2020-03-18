<!-- This file is used to markup the public-facing widget. -->

<p>   
   <?php if (strlen(trim($title)) > 0) : ?>
   <?php echo $title; ?>
   <?php endif; ?>
</p>


<p>   
   <?php if (strlen(trim($tagline)) > 0) : ?>
   <?php echo $tagline; ?>
   <?php endif; ?>
</p>


<p>   
   <?php if (strlen(trim($description)) > 0) : ?>
   <?php echo $description; ?>
   <?php endif; ?>
</p>


<button>   
   <?php if (strlen(trim($cta)) > 0) : ?>
   <?php echo $cta; ?>
   <?php endif; ?>
</button>
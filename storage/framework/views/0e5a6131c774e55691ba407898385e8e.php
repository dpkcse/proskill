<?php if(config("templatecookie.google_analytics_status")): ?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e(config("templatecookie.google_analytics")); ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GTRVREE0F4');
</script>
<?php endif; ?>
<?php /**PATH /Volumes/OFFICIAL/DEVSFLOCK/Proskill Job/localproskill/resources/views/frontend/partials/analytics.blade.php ENDPATH**/ ?>
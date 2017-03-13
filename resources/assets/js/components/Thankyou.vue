<template>
  <div class="container thankyou-container text-center">
    <div>
      <i class="material-icons md-display-4">done</i>
    </div>
    <span class="md-display-2">Your feedback has been submitted.</span>
  </div>
</template>

<script>
export default {
  mounted: () => {
    setTimeout(function () {
      window.location.href = '/';
    }, 3000);
  }
}
</script>

<style lang="css">
</style>

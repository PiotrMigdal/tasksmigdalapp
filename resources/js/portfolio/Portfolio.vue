<template>
  <div>
    <portfolio-item></portfolio-item>
  </div>
</template>

<script>
import PortfolioItem from './PortfolioItem';
export default {
  components: {
    //If you declare it like this you can then use <PortfolioItem> or <portfolio-item>
    PortfolioItem,
  }
};
</script>